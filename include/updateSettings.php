<?php
	include('dbConnect.php');	
	$TAG_OUTER_ST = $_REQUEST['TAG_OUTER_ST'];
	$TAG_OUTER_END = $_REQUEST['TAG_OUTER_END'];
	$TAG_1_ST = $_REQUEST['TAG_1_ST'];
	$TAG_1_END = $_REQUEST['TAG_1_END'];
	$TAG_2_ST = $_REQUEST['TAG_2_ST'];
	$TAG_2_END = $_REQUEST['TAG_2_END'];
	$TAG_3_ST = $_REQUEST['TAG_3_ST'];
	$TAG_3_END = $_REQUEST['TAG_3_END'];
	$login = $_REQUEST['account'];
	$sql = "UPDATE `members` SET `TAG_OUTER_ST`='{$TAG_OUTER_ST}', `TAG_OUTER_END`='{$TAG_OUTER_END}', `TAG_1_ST`='{$TAG_1_ST}', `TAG_1_END`='{$TAG_1_END}', `TAG_2_ST`='{$TAG_2_ST}', `TAG_2_END`='{$TAG_2_END}', `TAG_3_ST`='{$TAG_3_ST}', `TAG_3_END`='{$TAG_3_END}' WHERE `login` = '{$login}'";
	if(!mysql_query($sql)){
		die("Could not update: ".mysql_error());
	}
	else{
		echo "Settings Updated";
	}
?>
