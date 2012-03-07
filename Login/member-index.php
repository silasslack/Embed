<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="../pff.css" rel="stylesheet" type="text/css" />
<img align="center" src='../header.png'>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="/stocksilas/index.php">Continue</a> | <a href="logout.php">Logout</a> | <a href="register-form.php">.</a>
<p>This is a password protected area. </p>
</body>
</html>