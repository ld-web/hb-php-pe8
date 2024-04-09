<?php

require_once 'functions/redirect.php';

startSession();

if(!isset($_SESSION['connected'])) {
    redirect('login.php');
}

$title = "Home";
require_once 'layout/header.php';
