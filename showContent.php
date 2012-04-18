<?
session_start();
include('include/dbConnect.php');
$login = $_REQUEST['account'];
if(isset($_REQUEST['edit'])){
	if($_REQUEST['edit']=='true'){
		$editing = true;
	}
	else{
		$editing = false;
	}
}
else{
	$editing = false;
}
if(!isset($_SESSION['SESS_MEMBER_ID'])){
	$editing = false;
}
$tagsSQL = "SELECT * FROM `members` WHERE `login` = '{$login}'";
$resultTag = mysql_query($tagsSQL);
while($rowTag = mysql_fetch_array($resultTag)){
	$tagouter[0] = $rowTag['TAG_OUTER_ST'];
	$tagouter[1] = $rowTag['TAG_OUTER_END'];
	$tag1[0] = $rowTag['TAG_1_ST'];
	$tag1[1] = $rowTag['TAG_1_END'];
	$tag2[0] = $rowTag['TAG_2_ST'];
	$tag2[1] = $rowTag['TAG_2_END'];
	$tag3[0] = $rowTag['TAG_3_ST'];
	$tag3[1] = $rowTag['TAG_3_END'];
}

$getSQL = "SELECT * FROM `CONTENT` WHERE `USER` = '{$login}' ORDER BY `DATE_TIME` DESC";
$result = mysql_query($getSQL);

while($row = mysql_fetch_array($result)){
	if($editing){
		echo "<hr style='color: grey;background-color: grey;height: 1px;border: 0;'>";
	}
	$sttag = str_replace(">"," id='outer".$row['ID']."'>",$tagouter[0]);
	echo $sttag;
	echo $tag1[0].$row['HEADING_1'].$tag1[1];
	if($row['HEADING_2']!=""){
		echo $tag2[0].$row['HEADING_2'].$tag2[1];
	}
	if($editing){
		$deltxt = " <a class='linktext' onclick='deletePost(\"$login\",\"".$row['ID']."\")'>[delete post]</a> <a class='linktext' onclick='editPost(\"$login\",\"".$row['ID']."\")'>[edit post]</a>";
	}
	else{
		$deltxt = "";
	}
	echo $tag3[0].$row['DATE_TIME'].$deltxt."<br />".$row['CONTENT'].$tag3[1];
	echo $tagouter[1];
}
if($editing){
	echo "<hr style='color: grey;background-color: grey;height: 1px;border: 0;'>";
}
?>