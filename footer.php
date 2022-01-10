<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/root&font.css">
<footer>
    <div class="container">
        <div class="part-up">
            <section class="about">
                <h2>About</h2>
                <p>
                    La musique peut-être vu comme un simple moyen de divertissement,
                    Sonos permettra de vous montrer bien plus, nous essayerons de vous
                    transmettre chacune des émotions que la musique est capable de transmettre.
                    La musique est pour les musiciens, le poème pour les poètes, la stupidité
                    pour les stupides, mais l'amour est donné à celle qui le mérite.Elle est partout
                    autour de nous, il suffit juste d'écouter.
                </p>
            </section>
            <section class="category">
                <h2>Catégories</h2>
                <ul>
                    <li> <a href="livre-or.php"> Blog </a></li>
                    <li> <a href="#link-foot"> Rap </a></li>
                    <li> <a href="#link-foot"> Drill </a></li>
                    <li> <a href="#link-foot"> RnB </a></li>
                </ul>
            </section>
            <section class="link">
                <h2>Liens</h2>
                <ul>
                    <li> <a href="livre-or.php"> Livre d'or </a></li>
                    <?php
                    if(!isset($_SESSION['user'])){
                    echo '
                    <li> <a href="connexion.php"> Connexion </a></li>
                    <li> <a href="inscription.php"> Inscription </a></li>';
                    }
                    else{
                    echo'<li> <a href="my-com.php"> Mes Commentaires </a></li>
                    ';
                    }?>
                    <li> <a href="profil.php"> Profil </a></li>
                </ul>
            </section>
        </div>
        <hr>
        <div class="part-down">
            <section class="copy">
                <p class="copyright-text">Copyright &copy; All Rights Reserved by <a href="#">Francois Niang</a>.
            </section>
            <section class="social">
                <li><button class="facebook"><a  href="#"><img src="https://img.icons8.com/ios/30/000000/facebook--v1.png" alt="social" width="30px"></a></button></li>
                <li><button class="twitter"><a  href="#"><img src="https://img.icons8.com/ios/30/000000/twitter--v1.png" alt="social"width="30px" ></a></button></li>
                <li><button class="instagram"><a  href="#"><img src="https://img.icons8.com/ios/30/000000/instagram-new--v1.png" alt="social"width="30px"></a></button></li>
                <li><button class="github"><a  href="#"><img src="https://img.icons8.com/ios-glyphs/30/000000/github.png" alt="social"width="30px"></a></button></li>
            </section>
        </div>
    </div>
</footer>