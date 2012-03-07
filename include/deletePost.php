<?
include('include_lib.php');
$id = $_REQUEST['id'];
$sql = "DELETE FROM `CONTENT` WHERE `ID` = '{$id}' LIMIT 1";
if(!mysql_query($sql)){
	die("Could not delete: ".mysql_error());
}
else{
	echo "Post ".$id." deleted";
}
?>