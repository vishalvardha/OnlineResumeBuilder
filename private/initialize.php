<?php

define("PRIVATE_PATH",dirname(__FILE__));
define("RESUME_PATH",dirname(PRIVATE_PATH));
define("PUBLIC_PATH",RESUME_PATH.'/public');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('database.php');
require_once('functions.php');
require_once('query_functions.php');
require_once('validation_functions.php');
$db = db_connect();
$errors = [];

?>
