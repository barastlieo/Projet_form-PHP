<?php

//fonction qui recupere les information de l'utilisateur connecté
function donnees_users($id_user)
{
    $getid_user = intval($id_user);
    //connexion à la base de donnée
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lieob_b4vlx', 'root', 'root');
    } catch (PDOException $e) {
        die("Erreur ! :" . $e->getMessage());
    }

    $result = $bdd->prepare("SELECT * FROM user WHERE id_user='$getid_user'");
    $result->execute(array($id_user));
    $userinfos = $result->fetch();

    return $userinfos;

}

// fonction qui recupere les données des differents groupe d'utilisateur
function donnees_users_groupe()
{

    //connexion à la base de donnée
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lieob_b4vlx', 'root', 'root');
    } catch (PDOException $e) {
        die("Erreur ! :" . $e->getMessage());
    }


    $result = $bdd->prepare("SELECT username,name
                            FROM user
                            INNER JOIN user_group ON user_group.id_user = user.id_user
                            INNER JOIN groupe ON groupe.id_group = user_group.id_group");


    $result->execute(array($_GET['username'],$_GET['name']));
    $userinfos_group = $result->fetchAll();
    return $userinfos_group;

}