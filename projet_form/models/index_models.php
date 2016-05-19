<?php


//fonction qui enregistre l'inscription de l'utilisateur dans la base de données
function enregister_users($login,$password,$id_group)
{

    //connexion à la base de donnée
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=lieob_b4vlx', 'root', 'root');
    }catch(PDOException $e){
        die("Erreur ! :" .$e->getMessage());
    }
    $req = $bdd->prepare("INSERT INTO user (username,password,last_login) VALUES ('$login','$password',NOW())");
    $req->execute();

    $result = $bdd->prepare("SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1");
    $result->execute(array($_GET['id_user']));
    $id_user_end = $result->fetch();
    $id_user_end_req = $id_user_end['id_user'];

    $req1 = $bdd->prepare("INSERT INTO user_group (id_user,id_group) VALUES ('$id_user_end_req','$id_group')");
    $req1->execute();

    echo "inscription reussie";
}


//fonction qui verifie l'identitification de l'utilisateur lors de sa connexion
function verifier_users($login,$password)
{
    //connexion à la base de donnée
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lieob_b4vlx', 'root', 'root');
    } catch (PDOException $e) {
        die("Erreur ! :" . $e->getMessage());
    }
    $result = $bdd->prepare("SELECT * FROM user WHERE username='$login' AND password='$password'");
    $result->execute(array($login, $password));
    $row = $result->rowCount();
    if ($row == 1) {
        $userinfo = $result->fetch();
        $_SESSION['id_user'] = $userinfo['id_user'];
        header("Location:login_controlers.php?id_user=".$_SESSION['id_user']);
        exit();
    } else echo "Pseudo et Mot de passe incorrect";
}