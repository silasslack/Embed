<?php
	session_start();
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '' || !isset($_SESSION['ADMIN']) || !isset($_SESSION['LOGIN']))) {
		$redir = '';
		if(defined('REDIR')) $redir = urlencode(REDIR);
		header("location: Login/index.php?redir=$redir");
		exit();
	}
	if($_SESSION['ADMIN']<1){
		$redir = '';
		if(defined('REDIR')) $redir = urlencode(REDIR);
		header("location: Login/index.php?redir=$redir");
		exit();
	}
?>