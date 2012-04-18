<?php
	require_once('../include/config.php');
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$errmsg_arr = array();
	
	$errflag = false;

	$login = clean($_REQUEST['login']);
	$displname = $login;
	$password = clean($_REQUEST['password']);
	$cpassword = clean($_REQUEST['cpassword']);
	$email = clean($_REQUEST['email']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if($email == ''||!strstr($email,"@")) {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if(strstr($email,"@")==false) {
		$errmsg_arr[] = 'Email invalid';
		$errflag = true;
	}
	if($company == '') {
		$company = $login;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID

	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		if(count($errmsg_arr)>1){
			echo "There were ".count($errmsg_arr)." errors:<br />";
		}
		else{
			echo "There was an error:";
		}
		echo "<ul>";
		foreach($errmsg_arr as $err){
			echo "<li>".$err."</li>";
		}
		echo "</ul>";
		exit();
	}

	//Create INSERT query
    
	$qry = "INSERT INTO members(`displayname`, `login`, `passwd`, `email`, `admin`, `settingsprofile`, `maincontact`) VALUES('$displname','$login','".md5($cpassword)."','$email', '1', '1','1')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		echo " Registration successful. Login <a href='index.php'>here</a>";
		$message = "Thanks ".$displname.", you have successfully registered for Embed Alpha. Your username is: ".$login." and your password is: ".$cpassword.". Please log in here: http://demo.softrader-online.com/embed";
		//$message = wordwrap($message, 70);
		$to      = $email;
		$subject = 'Embed Alpha Registration';
		$headers = 'From: embed@silasslack.com' . "\r\n" .
			'Reply-To: embed@silasslack.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		exit();
	}else {
		die("Query failed");
	}
?>