<?php
 
/**
 * Database Config
 */
$db = array(
    "dbname" => "greenearth",
    "username" => "root",
    "password" => "rootroot",
    "host" => "localhost"
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