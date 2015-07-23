<?php

session_start();

if($_POST['submit']) {
    require_once "model/user_class.php";
}
require_once "view/login.php";

