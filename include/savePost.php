<?
include('include_lib.php');
$h1 = mysql_real_escape_string($_REQUEST['h1']);
$h2 = mysql_real_escape_string($_REQUEST['h2']);
$content = mysql_real_escape_string($_REQUEST['cont']);
$sql = "INSERT INTO `CONTENT` (`HEADING_1`,`HEADING_2`,`CONTENT`,`USER`) VALUES ('{$h1}','{$h2}','{$content}','{$login}')";
if(!mysql_query($sql)){
	echo "Could not save post".MYSQL_ERROR();
}
else{
	echo "Post saved";
}
?>