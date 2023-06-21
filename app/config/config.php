<?php

// URL UTAMA
define('BASEURL', 'http://localhost/_mvc_ov-log-dashboard');

// LOG DIRECTORY
define('LOG_DIR', '/var/log/client/snort/log.csv');
define('LOG_CMD', ' | sed "s/ //g" | tr "," " "');
// define('LOG_PROMPT1', 'sed "s/ //g"');
// define('LOG_PROMPT2', 'tr "," " "');

// DATABASE
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '');
