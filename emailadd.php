<?php
include('include/include_lib_noauth.php');
$user = $_REQUEST['user'];
$sql = "SELECT `IMAP_HOST`,`IMAP_USER`,`IMAP_PASSWORD` FROM `members` WHERE `login` = '{$user}'";
$res = mysql_query($sql);
$gotrow = mysql_fetch_assoc($res);

$hostname = '{'.$gotrow['IMAP_HOST'].':993/imap/ssl}INBOX';
$username = $gotrow['IMAP_USER'];
$password = $gotrow['IMAP_PASSWORD'];

$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

$emails = imap_search($inbox,'SUBJECT "news"');

if($emails) {
	
	$output = '';
	
	rsort($emails);
	
	foreach($emails as $email_number) {
		
		$overview = imap_fetch_overview($inbox,$email_number,0);
		$body = imap_fetchbody($inbox,$email_number,1);
		
		
		$subject= $overview[0]->subject;
		
	}
	
	$subject = str_replace("news","",$subject);
	
	$h1 = mysql_real_escape_string($subject);
	$h2 = mysql_real_escape_string("");
	$content = mysql_real_escape_string($body);
	$sql = "INSERT INTO `CONTENT` (`HEADING_1`,`HEADING_2`,`CONTENT`,`USER`) VALUES ('{$h1}','{$h2}','{$content}','{$user}')";
	if(!mysql_query($sql)){
		echo "Could not save post".MYSQL_ERROR();
	}
	else{
		echo "Post saved";
		imap_delete($inbox,$email_number);
	}
	
	
} 

/* close the connection */
imap_close($inbox);

?>
