<?php
    $dsn = 'mysql:host=localhost;dbname=gamers;charset=utf8mb4';
    $db_user = 'root';
    $db_pass = '';
    
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die('Database connection failed: ' . $e->getMessage());
    }
    