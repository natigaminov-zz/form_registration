<?php
require_once 'db.php';

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( !empty($username) && !empty($password) ) {
    $sql_check = 'SELECT EXISTS( SELECT username FROM users WHERE username = :username )';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute( [':username' => $username] );

    if( $stmt_check->fetchColumn() ) {
        die('User  with such login already exists!');
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO users(username, password) VALUE(:username, :password)';
    $params = [ 'username' => $username, ':password' => $password ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params); 

    echo 'You  have successfully registered!';

} else {
    echo 'Please  enter your login and password';
}
