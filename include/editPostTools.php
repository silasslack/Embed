<?php
include('include_lib.php');
$id = $_REQUEST['id'];
$acc = $_REQUEST['acc'];
$getSQL = "SELECT * FROM `CONTENT` WHERE `USER` = '{$acc}' AND `ID` = '{$id}' ORDER BY `DATE_TIME` DESC";
$result = mysql_query($getSQL);
$thispost = mysql_fetch_assoc($result);
$date = substr($thispost['DATE_TIME'],0,10);
?>
<div style="border:1px solid grey;">
	<table>
		<tr><td>Title: </td><td><input value="<?=$thispost['HEADING_1']?>" id="ed_txt_head1_<?=$id?>" type="text"/></td><td rowspan="3"><textarea style="height:100%;" id="ed_txt_content_<?=$id?>" cols="45" type="text"><?=$thispost['CONTENT']?></textarea></td></tr>
		<tr><td>Subtitle: </td><td><input value="<?=$thispost['HEADING_2']?>" id="ed_txt_head2_<?=$id?>" type="text"/></td></tr>
		<tr><td>Date: </td><td><input value="<?=$date?>" id="ed_txt_date_<?=$id?>" type="text"/></td></tr>
		<tr></tr>
	</table>
	<button onclick="editPostSend('<?=$acc?>','<?=$id?>')">Save</button><button onclick="showContent('<?=$acc?>')">Cancel</button><br />		
	<div id="ed_result_sent_<?=$id?>"></div>
</div>