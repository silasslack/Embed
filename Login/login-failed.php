<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Failed</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="header"><h1>Login Failed </h1></div>

<h4>Login Failed!<br />
  Please check your username and password</h4>
<br />
<h3>Your details have been logged as a potential security threat. IP address are carefully monitored.</h3>
<?php

$ip = trim($_GET['ip']);
echo "ip address: ".$ip."</br>";

?>
<h2><a href="index.php">Return to login page</a></h2>
<h3 id="title2"><i>Softrader Online</i></h3>
<img id="softrader" src="../images/softrader_new_clear.png"</img>
<div  id="cright"><small>Copyright Softrader Limited, 2009</small><div>
</body>
</html>
