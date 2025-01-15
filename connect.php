<?php
session_start();
     include_once __DIR__ .'/model/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions & Cookies Example</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=logout" />
    <link rel="stylesheet" href="./css/main.css">
    
</head>
<body>
    <?php
        include_once __DIR__ .'/routes/header.inc.php';
    ?>
     
    <main>
        <div class="picture-cover-primary" role="region">
            <img src="./asset/cover.svg" alt="cover">
        </div>
        <section>
            <h2><span aria-hidden="true">📝</span>
                Connexion à notre service
            </h2>

                <p class="error">
                    <a href="index.php">
                        Retour aux inscriptions
                        <span class="material-symbols-outlined">
                        logout
                        </span>          
                    </a>
                </p>
        
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
             
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" aria-required="true">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" aria-required="true">
                <button type="submit">Envoyer</button>
            </form>
            <?php
                /* la classe */
                include_once __DIR__ .'/controller/connectionUser.php';
            ?>
        </section>
    </main>
   <?php
       
        include_once __DIR__ .'/routes/footer.inc.php';
   ?>
</body>
</html>