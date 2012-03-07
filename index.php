<?
include('include/include_lib.php');
?>
<head>
	<link type="text/css" href="css/main.css" rel="Stylesheet" />
	<script type="text/javascript" src="js/jquery-ui-1.8.6.custom/js/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.6.custom/js/jquery-ui-1.8.6.custom.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body onload="showContent('<?=$login?>');showForm('<?=$login?>');showSettings('<?=$login?>')">
	<div id="pw"></div>
	<div id="outer">
		<div id="topbar"><a id="titletext">Embed Alpha</a>
			<div id="topmenu">
				<a class="linktext" onclick="window.location='Login/logout.php'">Logout</a>
			</div>
		</div>
		<div id="mainbody">
			<div id="mainleft">
				<div id="mainleftform">
				</div>
				<div id="mainleftcontent">
				</div>
			</div>
			<div id="mainright">
				rt
			</div>
		</div>
	</div>
</body>
