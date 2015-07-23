<?php
mb_internal_encoding("UTF-8");
require_once "model/database_class.php";

$db = new DataBase();

session_start();

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/?me') {
    require_once "controller/me.php";
}elseif($uri == "/") {
    require_once "controller/index.php";
}elseif($uri == "/?reg") {
    require_once "controller/reg.php";
}