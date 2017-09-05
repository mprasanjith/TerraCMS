<?php
 
/**
 * Database Config
 */
$db = array(
    "dbname" => "greenearth",
    "username" => "root",
    "password" => "rootroot",
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
define("RESOURCES_URL", './resources');

/**
 * Error Reporting
 */
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>