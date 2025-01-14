<?php

session_start(); 

include_once './model/config.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $surname && $email && $password) {
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        setcookie('email', $email, time() + 3600, '/', '', true, true); # one hours

        # Insert data into the database prepare method
        $stmt = $pdo->prepare('INSERT INTO users (name, surname, email, password) VALUES (:name, :surname, :email, :password)');
        $stmt->execute([
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':password' => $hashedPassword,
        ]);

       # Redirect to the display page
        header('Location: display.php');
        exit;
    } else {
        $error = 'Champs vides!!';
    }
}
?>