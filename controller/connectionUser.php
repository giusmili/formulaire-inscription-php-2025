<?php
   class Connect{
        public function verifyLogin($pdo, $email, $password) {
               # Préparer la requête SQL pour récupérer l'utilisateur par email
                $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
                $stmt->execute(['email' => $email]);
                $user = $stmt->fetch();
            
               
                if ($user && password_verify($password, $user['password'])) {
                    return true;
                } else {
                    return false;
                }
            }

        }
    # Instance 
    $_connect = new Connect();
             
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             
                $email = $_POST['email'];
                $password = $_POST['password'];
        
               
                if ($_connect->verifyLogin($pdo, $email, $password)) {
                    echo '<p class="msg-default msg-success">Authentification réussie!</p>';
                } else {
                    echo '<p class="msg-default msg-warning">Email ou mot de passe incorrect.</p>';
            }
        }