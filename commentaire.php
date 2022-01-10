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
        <link rel="stylesheet" href="css/com.css">
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>Ecrire un commentaire</title>
    </head>
    <body>
        <?php require 'header.php'?>
    <main>
        <div class="Container">
            <form class="write-com" method="post" class="commentaire">
                <?php new_com();?>
                <h1 >Redigez votre meilleur commentaire ;<br> 
                &#128516; Vos retours ameliorerons le site &#128516; : </h1>
                <textarea class = "send_com" name="commentaire" rows="10%" cols="90%"></textarea>
                <button class = 'write' type="submit" name="send_com"> Envoyer mon commentaire </button>
            </form>
        </div>
    </main>
        <?php require 'footer.php'?>
    </body>
</html>