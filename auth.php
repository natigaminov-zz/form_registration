<?php
require_once 'db.php';

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( !empty($username) && !empty($password) ) {
    $sql = 'SELECT username, password FROM users WHERE username = :username';
    $params = [':username' => $username];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params); 

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user) {

        if( password_verify($password, $user->password) ) {
            $_SESSION['session_username'] = $user->username;
            header('Location: index.php');
        } else {
            echo 'Incorrect  login or password';
        }
    } else {
        echo 'Incorrect  login or password';
    }
} else {
    echo 'Please  enter your login and password';
}