<?php
 
/**
 * Database Config
 */
$db = array(
    "dbname" => "GreenEarth",
    "username" => "root",
    "password" => "",
    "host" => "127.0.0.1",
    "port" => "3306"
);

/**
 * Paths and URLs
 * Path is used for php imports and URLs are used in html
 */
define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
define("BACKEND_URL", './backend');
define("BACKEND_PATH", realpath(dirname(__FILE__) . '/backend'));

/**
 * Error Reporting
 */
 
?>