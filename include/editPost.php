<?
include('include_lib.php');
$h1 = mysql_real_escape_string($_REQUEST['h1']);
$h2 = mysql_real_escape_string($_REQUEST['h2']);
$id = mysql_real_escape_string($_REQUEST['id']);
$content = mysql_real_escape_string($_REQUEST['cont']);
$datetime = mysql_real_escape_string($_REQUEST['datetime'])." ".date('H:i:s');

$sql = "UPDATE `CONTENT` SET `HEADING_1` = '{$h1}', `HEADING_2` = '{$h2}', `CONTENT` = '{$content}' , `DATE_TIME` = '{$datetime}' WHERE `ID` = '{$id}'";
if(!mysql_query($sql)){
	echo "Could not save post".MYSQL_ERROR();
}
else{
	echo "Post saved";
}
?>