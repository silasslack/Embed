<?
require_once('../include/config.php');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
	die('Failed to connect to server: ' . mysql_error());
}
$db = mysql_select_db(DB_DATABASE);
if(!$db) {
	die("Unable to select database");
}
$uagent = $_SERVER['HTTP_USER_AGENT'];
if(strstr($uagent,'MSIE'))
{
    die("This doesn't support Microsoft Internet Explorer.");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<script type="text/javascript" src="../jquery/js/jquery-1.4.2.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link type="text/css" href="../css/main.css" rel="Stylesheet" />
		<title>Login Form</title>
	</head>
	<body>
		<div id="loginbox">
			<i>Alpha</i>
			<form id="loginForm" name="loginForm" method="post" action="login-exec.php"><input type="hidden" name="redir" value="<?=!empty($_REQUEST['redir'])?$_REQUEST['redir']:''?>" />
			<table id="loginformtable" align="left" width="300" border="0" align="left" cellpadding="2" cellspacing="0">
				<tr>
			      <td width="112"><b>User</b></td>
				  <td width="188"><input name="login" type="text" id="login" id="login" /></td>
				</tr>
				<tr>
				  <td><b>Password</b></td>
				  <td><input name="password" type="password" id="password" id="password" /></td>
				</tr>
				<tr>
				  <td></td>
				  <td><input type="submit" name="Submit" value="Login" /></td>
				</tr>
			</table>
				<a id="registerlink" class="linktext" href="register-form.php">Register</a>
			</form>
		</div>
	</body>
</html>