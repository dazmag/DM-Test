<?php

$view = new stdClass();
$view->pageTitle = "Login";

if(isset($_POST["submit"])) {
    $test = $_POST["userEmail"];
    echo $test;
}

require ("Views/login.phtml");