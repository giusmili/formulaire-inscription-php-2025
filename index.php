<?php

    include_once __DIR__ .'/controller/controllerBase.php';
    
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
                Inscription à notre service
            </h2>
            <?php if (!empty($error)): ?>
                <p class="error"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" aria-required="true" autofocus>
                <label for="surname">Prénom:</label>
                <input type="text" id="surname" name="surname" aria-required="true">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" aria-required="true">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" aria-required="true">
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
   <?php
        include_once __DIR__ .'/routes/footer.inc.php';
   ?>
</body>
</html>