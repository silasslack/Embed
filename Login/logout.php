<?php
	include('../include/include_lib.php');
	$sessid = session_id();
        $doSessionInSecurity = "DELETE FROM `sessions` WHERE `MEMBER_ID` = '{$_SESSION['SESS_MEMBER_ID']}'";
        if (!mysql_query($doSessionInSecurity))
        {
            
        }
	//Unset the variables stored in session
	session_destroy();
header("location: index.php");
			exit();
?>