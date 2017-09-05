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
 * Paths
 */
define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/**
 * Error Reporting
 */
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>