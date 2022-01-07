<?php
session_start();
require 'fonctions.php';

if (isset($_SESSION['user'])){
    header('Location: profil.php');
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/form.css" />
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>Inscription</title>
    </head>
    <body>
        <?php require 'header.php';?>
        <main>
            <div class="login-page">
                <div class="form">
                    <h2>Rejoignez nous dés maintenant &#128513;</h2>
                    <form action="" method="post" class="login-form">
                        <input type="text" id="login" name="login" placeholder="Login"/>
                        <input type="password" id="password" name="password" placeholder="Password"/>
                        <input type="password" id="Confirmedpassword" name="Confirmedpassword" placeholder="Confirmed Password"/>
                        <button class="button" type="submit" >S'incrire</button>
                        <p class="message">Déjà un compte ? <a class = 'link' href="connexion.php"><br><strong>Connectez vous !!</strong></a></p>
                    </form>
                    <?php new_user(); ?>
                </div>
            </div>
        </main>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>

