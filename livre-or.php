<?php
session_start();
require 'fonctions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/livreor.css">
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>Le Livre d'or</title>
    </head>
    <body>
        <?php require 'header.php';?>
        <main>
            <?php if(isset($_SESSION['user'])){?>
                <div class="text">
                    <h1><a href="commentaire.php" class="go_to_com">Ecrivez un commentaire ici !!</a></h1>
                </div>
                <?php
            }
            ?>
            </div>
            <div class="container_com">
                <?php display_com();?>
            </div>
        </main>
        <?php require 'footer.php';?>
    </body>
    <script>
        AOS.init();
    </script>
</html>