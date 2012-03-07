<?
include('dbConnect.php');
$login = $_REQUEST['account'];
$settsSQL = "SELECT * FROM `members` WHERE `login` = '{$login}'";
$res = mysql_query($settsSQL);
$thisline = mysql_fetch_assoc($res);
echo "<table>";
echo "<tr><td>Outer Delimiter:</td><td><input id='TAG_OUTER_ST' type='text' value='".$thisline['TAG_OUTER_ST']."' /></td><td>:</td><td><input id='TAG_OUTER_END' type='text' value='".$thisline['TAG_OUTER_END']."' /></td></tr>";
echo "<tr><td>Title Delimiter:</td><td><input id='TAG_1_ST' type='text' value='".$thisline['TAG_1_ST']."' /></td><td>:</td><td><input id='TAG_1_END' type='text' value='".$thisline['TAG_1_END']."' /></td></tr>";
echo "<tr><td>Subtitle Delimiter:</td><td><input id='TAG_2_ST' type='text' value='".$thisline['TAG_2_ST']."' /></td><td>:</td><td><input id='TAG_2_END' type='text' value='".$thisline['TAG_2_END']."' /></td></tr>";
echo "<tr><td>Content Delimiter:</td><td><input id='TAG_3_ST' type='text' value='".$thisline['TAG_3_ST']."' /></td><td>:</td><td><input id='TAG_3_END' type='text' value='".$thisline['TAG_3_END']."' /></td></tr>";
echo "<tr><td colspan='4'><button onclick='updateSettings(\"".$login."\")' id='set_upd_but'>Update Settings</button></td></tr>";
echo "</table>";
?>