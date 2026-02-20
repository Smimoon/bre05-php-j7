<?php
    require "../connexion.php";
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = $db->prepare("INSERT INTO users (id, email, password, first_name, last_name) VALUES(NULL, :email, :password, :first_name, :last_name)");
    $parameters = [
        'email' => $email,
        'password' => $hash,
        'first_name' => $firstName,
        'last_name' => $lastName,
    ];
    
    $query->execute($parameters);

    $id = $db->lastInsertId();

    header('Location: ../index.php?route=home');
?>