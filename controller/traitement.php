<?php
// display.php: Display session and cookie data
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['surname']) || !isset($_COOKIE['email'])) {
    header('Location: index.php');
    exit;
}

$name = htmlspecialchars($_SESSION['name']);
$surname = htmlspecialchars($_SESSION['surname']);
$email = htmlspecialchars($_COOKIE['email']);
