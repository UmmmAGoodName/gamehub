<?php 

require(realpath($_SERVER["DOCUMENT_ROOT"])."/vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(realpath($_SERVER["DOCUMENT_ROOT"]));
$dotenv->load();

require(realpath($_SERVER["DOCUMENT_ROOT"])."/include/php/database.php");
session_start();

?>