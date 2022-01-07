<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/root&font.css">
<header>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="logo" width="60px"></a>
        </div>
        <div class = "menu">
            <ul>
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="livre-or.php">Blog</a> </li>
                <li> <a href="profil.php">Profil</a> </li>
            </ul>
            <?php
            if(!isset($_SESSION['user'])){
                echo '
                <ul>
                    <li> <a href="connexion.php">Connexion</a> </li>
                    <li> <a href="inscription.php">Inscription</a> </li>
                </ul>';
            }
            else{
                echo '
                <form action="" method="post">
                    <button class = "deco" type = "submit" name = "deconnexion" value ="Deconnexion">Déconnexion</buttton>
                </form>';
            }
            deconnect();
            ?>
        </div>
    </nav>
</header>