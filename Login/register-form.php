<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Register</title>
	<link href="../css/main.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery-ui-1.8.6.custom/js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.6.custom/js/jquery-ui-1.8.6.custom.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript">
	$('*').keypress(function(e){
	    if(e.keyCode == 13){
	        sendRegForm();
	    }
	});
	</script>
</head>
<body>
	<div id="registerbox">
		<div id="reginstruct">
			<i>Registration</i><br />
			Please register with the following details.
		</div>
		  <table id="registerformtab">
			<tr>
			  <th>Login Name </th>
			  <td><input id="login" type="text" class="regtextfield" /></td>
			</tr>
			<tr>
			  <th>Email</th>
			  <td><input id="email" type="text" class="regtextfield" /></td>
			</tr>
			<tr>
			  <th>Password</th>
			  <td><input id="password" type="password" class="regtextfield" /></td>
			</tr>
			<tr>
			  <th>Confirm Password </th>
			  <td><input id="cpassword" type="password" class="regtextfield" /></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" onclick="sendRegForm();" value="Register" /></td>
			</tr>
		  </table>
	</div>
		<div id="regresult"></div>
</body>
</html>
