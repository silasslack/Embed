<?php

//Start session
session_start();

//Include database connection details
require_once('../include/config.php');

//Array to store validation errors
$errmsg_arr = array();

$date = date('y-m-d');
$time = date('H:i:s');
//Validation error flag
$errflag = false;

//Connect to mysql server
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
	die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db(DB_DATABASE);
if (!$db) {
	die("Unable to select database");
}

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
	$str = @trim($str);
	if (get_magic_quotes_gpc ()) {
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}

//Sanitize the POST values
$login = clean($_POST['login']);
$password = md5(clean($_POST['password']));

//Input Validations

if ($login == '') {
	$errmsg_arr[] = 'Login ID missing';
	$errflag = true;
}
if ($password == '') {
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
}

//If there are input validations, redirect back to the login form
if ($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}

$sql = "SELECT * FROM `members` WHERE `login` = '{$login}' AND `passwd` = '{$password}'";
$res = mysql_query($sql);
if(mysql_num_rows($res)<1){
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
else{
	$member = mysql_fetch_assoc($res);
	$_SESSION['LAST_ACTION_TIME'] = time();		// SET INITIAL LAST_ACTION_TIME SESSION VARIABLE
	$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
	$_SESSION['LOGIN'] = $member['login'];
	$_SESSION['SESS_EMAIL'] = $member['email'];
	$_SESSION['ADMIN'] = $member['admin'];
	$_SESSION['SETTINGSPROFILE'] = $member['settingsprofile'];
	session_write_close();
	header("location: ../index.php");
	exit();
}
?>