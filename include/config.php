<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'd066er');
    define('DB_DATABASE', 'P-EMBED');

	define('MAX_LOGIN_ATTEMPTS',5);		// max failed attempts before account is locked
	define('ACCOUNT_LOCK_TIME',3600);	// account lockout timer

	define('IDLE_TIMEOUT',1200);		// idle session timeout in seconds
	define('LOGIN_TIMEOUT',60000);		// ajax login check interval in milliseconds
?>