<?php
    include_once __DIR__ .'/controller/traitement.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Display User Data</title>
</head>
<body>
    <?php
        include_once __DIR__ .'/routes/header.inc.php';
    ?>
    <main>
        <div class="picture-cover-primary picture-message-little" role="region">
            <img src="./asset/message.svg" alt="your message">
        </div>
        <section>
            <h2><span aria-hidden="true">🚀 </span>Bonjour <?= $surname ?> votre message à été bien enrégistré</h2>
            <ul>
                <li><strong>Nom: </strong><?= $name ?></li>
                <li><strong>Prénom: </strong><?= $surname ?></li>
                <li><strong>Email: </strong><?= $email ?></li>
                <li><a href="connect.php" class="btn-primary">🔒️ Connectez-vous</a></li>
            </ul>
           
        </section>
    </main>
    <?php
        include_once __DIR__ .'/routes/footer.inc.php';
   ?>
</body>
</html>