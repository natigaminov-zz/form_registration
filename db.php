<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'user_db';
$db_user = 'admin';
$db_pass = 'admin123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new
    PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);

    if( isset($_COOKIE['page_visit']) ) {
        setcookie('page_visit', ++$_COOKIE['page_visit'], time() + 10);
    } else {
        setcookie('page_visit', 1, time() + 10);
        $_COOKIE['page_visit'] = 1;
    }

    session_start();

} catch(PDOException $e) {
    die("Error  database connection!");
}

