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
                    <h2>Connectez vous &#128513;</h2>
                    <form action="" method="post" class="login-form">
                        <input type="text" id="login" name="login" placeholder="Login"/>
                        <input type="password" id="password" name="password" placeholder="Password"/>
                        <button class="button" type="submit" >Connexion</button>
                        <p class="message">Pas de compte ? <br><a class = 'link' href="inscription.php"><strong>Rejoignez vous !!</strong></a></p>
                    </form>
                    <?php connect_user(); ?>
                </div>
            </div>
        </main>
        <?php
        require 'footer.php';
        ?>
    </body>
</html>