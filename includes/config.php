<?php
// set display type to allow for special characters 
header('Content-Type: text/html; charset=ISO-8859-1');
ob_start();

// display errors, warnings
ini_set("display_errors", true);
error_reporting(E_ALL);

// requirements
require("functions.php");

session_start();
?>