<?php 
session_start();
require 'fonctions.php';
if(!isset($_SESSION['user'])){
    header('Location: connexion.php');
}
deconnect();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/profil.css">
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>Mon Profil</title>
    </head>
    <body>
        <?php require ('header.php');?>
        <main>
            <div class="Container">
                <div class="parallax">
                    <h1 data-aos="flip-left" data-aos-duration="3000">Bonjour, ravi de vous voir <?php echo $_SESSION['user']['login'];?><br>
                    ❗❗ ATTENTION ❗❗<br>
                    Si vous changez vos informatons vous devrez vous reconnecter !!</h1>
                    <div class="box" data-aos="fade-up" data-aos-duration="3000">
                        <div class="form-change">
                            <form action="" method = "POST" >
                                <input class="input" type="text" name="login" placeholder = 'Votre ancien Login'>
                                <input class="input" type="text" name="newlogin" placeholder = 'Votre nouveau Login'>
                                <input class="input" type="text" name="repeatnewlogin" placeholder = 'Répétez votre nouveau Login'><br/><br/>
                                <?php ChangeLogin();?>
                                <button class="modif" type="submit" value="Valider" name = 'changelog' >Changer le Login</button>
                            </form>
                            <form action="" method = "POST" >
                                <input class="input" type="password" name="password" placeholder = 'Votre ancien Password'>
                                <input class="input" type="password" name="newpassword" placeholder = 'Votre nouveau Password'>
                                <input class="input" type="password" name="repeatnewpassword" placeholder = 'Répétez votre nouveau Password'><br/><br/>
                                <?php ChangeMdp();?>
                                <button class="modif" type="submit" value="Valider" name = 'submit' >Changer le Mot de Passe </button>
                            </form>
                        </div>
                        <form action="" method = "POST" ><button class = "deco" type = "submit" name = "deconnexion" value ='Deconnexion'>Déconnexion</buttton></form>
                    </div>
                </div>
            </div>
        </main>
        <?php require ('footer.php'); ?>
    </body>
    <script>
        AOS.init();
    </script>
</html>