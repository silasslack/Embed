<?
include('include_lib.php');
?>
<table>
	<tr><td>Title: </td><td><input id="txt_head1" type="text"/></td><td rowspan="2"><textarea id="txt_content" cols="45" type="text"></textarea></td></tr>
	<tr><td>Subtitle: </td><td><input id="txt_head2" type="text"/></td></tr>
	<tr></tr>
</table>
<button onclick="savePost('<?=$login?>')">Save</button><br />		
<div id="result_sent"></div>