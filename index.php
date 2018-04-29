<?php
require_once 'db.php';
include("includes/header.php");

if( isset($_SESSION['session_username']) ) {
    echo $_SESSION['session_username'] . ', Welcome!';
    echo '<br>';
    echo '<a href="logout.php">Log out</a>';
} else {
    header('Location: signin.php');
}