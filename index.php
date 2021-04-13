<?php
// starte session
session_start();
require_once 'inc/Helper.php';

Helper::dump($_GET);
// $_GET - assoc. array für get-params
// initialisiere variablen
$id         = null;
// name einer controller funktion
$action     = null;
// konstruktor eines controllers
$controller = null;

// todo define controller

?>
