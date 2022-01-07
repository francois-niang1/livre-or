<?php

function connect_database() {
    $bdd =  mysqli_connect('localhost', 'root', 'root', 'livreor');
    mysqli_set_charset($bdd, 'utf8');
    return $bdd;
}
function new_user(){
    $bdd =  connect_database();
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login= $_POST['login'];
        $password = $_POST['password'];
        $Confirmedpassword = $_POST['Confirmedpassword'];
        if ($password != $Confirmedpassword) {
            echo'<p>Mot de passe Non identique</p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
        }
        else if ($login == NULL || $password == NULL || $Confirmedpassword == NULL ) {
            echo'<p>Remplissez tous les champs</p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
        }
        else {
            $request_verif_login = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login='$login' ");
            $check_is_use_login= mysqli_num_rows($request_verif_login);
            $pw_hash = password_hash($password, PASSWORD_DEFAULT);
            if($check_is_use_login == 1) {
                echo'<p>Ce Login est déjà utilisé</p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
            }
            else  {
                $requete = mysqli_query($bdd, "INSERT INTO utilisateurs (login, password) VALUES ('$login','$pw_hash')");
                header('Location: connexion.php');
                exit();
            }
        }
    }
    else {
        echo ' ';
    }
}
function connect_user() {
    $bdd =  connect_database();
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $pw= $_POST['password'];
        if ($login != NULL && $pw != NULL) {
            $requete = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login='$login' ");
            $count= mysqli_num_rows($requete);
            $fetch= mysqli_fetch_assoc($requete);
            if (isset($fetch)) {
                $sql_password= $fetch['password'];
            }
            else {
                echo'<p>Compte inexistant</p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
            }
            if ($count == 1) {
                if (password_verify($pw, $sql_password) == FALSE) {
                    echo'<p>Mot de passe incorrect </p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
                }
                else {
                $_SESSION['user'] = $fetch;
                header('Location: profil.php');
                exit();
                }
            }
        }
        else {
            echo'<p>Remplissez tous les champs</p><style>p{color : var(--RedError-); font-size: 1.4em;}</style>';
        }
    }
    else {
        echo ' ';
    }
}
function deconnect(){
    if (isset($_POST['deconnexion'])) {
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
function ChangeLogin(){
    if (isset($_SESSION['user'])) {
        $username = $_SESSION['user']['login'];
        if (isset($_POST['changelog'])) {
            $login = $_POST['login'];
            $user_login = $_SESSION['user']['login'];
            $user_id = $_SESSION['user']['id'];
            $newlogin = $_POST['newlogin'];
            $repeatnewlogin = $_POST['repeatnewlogin'];
            if ($login && $newlogin && $repeatnewlogin) {
                if ($newlogin == $repeatnewlogin) {
                    $Bdd = mysqli_connect('localhost', 'root', 'root', 'livreor') or die('Erreur');
                    $Requete = mysqli_query($Bdd, "SELECT * FROM utilisateurs WHERE login = '$username' AND login = '$login'");
                    $rows = mysqli_num_rows($Requete);
                    if ($newlogin == $user_login){
                        echo "<p>Votre ancien Login est identique</p><style>p{color : var(--White-); font-size: 1em;}</style>";
                    }
                    else if ($rows==1) {
                        $newpre = mysqli_query($Bdd, "UPDATE utilisateurs SET login='$newlogin' WHERE login='$username'");
                        session_destroy();
                        header('Location: connexion.php');
                        exit();
                    }
                    else{
                        echo "<p>Votre ancien Login est incorrect</p><style>p{color : var(--White-); font-size: 1em;}</style>";
                    }
                }
                else{
                    echo "<p>Les deux champs doivent être identiques</p><style>p{color : var(--White-); font-size: 1em;}</style>";
                }
            }
            else{
                echo "<p>Veuillez saisir tous les champs</p><style>p{color : var(--White-); font-size: 1em;}</style>";
            }
        }
    }
    else{
        header("Location:connexion.php");
        exit();
    }
}
function ChangeMdp(){
    $Bdd = connect_database();
    if (isset($_POST['password']) && isset($_POST['newpassword']) && isset($_POST['repeatnewpassword'])){
        $id = $_SESSION['user']['id'];
        $password = $_SESSION['user']['password'];
        $oldpassword = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $repeatnewpassword = $_POST['repeatnewpassword'];
        $new_password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
        if ($password == NULL || $newpassword == NULL || $repeatnewpassword == NULL ){
            echo "<p>Veuillez saisir tous les champs</p><style>p{color : var(--White-); font-size: 1em;}</style>";
        }
        else if(password_verify($oldpassword, $password) == false){
            echo "<p>Votre ancien Password est incorrect</p><style>p{color : var(--White-); font-size: 1em;}</style>" ;
        }
        else if ($newpassword != $repeatnewpassword){
            echo "<p>Les deux champs doivent être identiques</p><style>p{color : var(--White-); font-size: 1em;}</style>";
        }
        else{
            $requete_select_pwd = mysqli_query($Bdd, "SELECT * FROM `utilisateurs` WHERE password = '$password' ");
            $requete_update_pwd = mysqli_query($Bdd, "UPDATE utilisateurs SET password = '$new_password_hash' WHERE id = '$id'");
            session_destroy();
            header('Location: connexion.php');
            exit();
        }
    }
    else{
        echo ' ';
    }
}
?>