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
?>