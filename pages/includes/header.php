<?php
session_start();
if (!isset($_SESSION['user_id']))
    header("location:/");
?>

<link rel="stylesheet" href="/assets/css/style.css">

<h1>Flower Shop Management System</h1>
