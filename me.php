<?php
session_start();
require_once "model/database_class.php";
$db = new DataBase();
require_once "view/me.php";

