<?php
session_start();
require 'fonctions.php';
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/my-com.css">
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>Mes commentaires</title>
    </head>
    <body>
        <?php require 'header.php'?>
    <main>
        <div class="Container">
            <div class="container_change">
                <div class="change">
                    <?php show_com(); ?>
                </div>
                <div class="change">
                    <p class="text_change">Supprimez un de vos commentaires</p>
                    <form class ="supcom" action="" method="post">
                        <input class="input" type="number" name="id" placeholder="Id du commentaire"/>
                        <button class="sup">Supprimer</button>
                    </form>
                    <?php delete_com(); ?>
                </div>
            </div>
        </div>
    </main>
        <?php require 'footer.php'?>
    </body>
</html>