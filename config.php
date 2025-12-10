<?php
define('BASEURL', 'http://localhost/aabw-absensi/public');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'aabw_absensi');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}