<?php
session_start();

include_once('../models/login_models.php');

//affiche de la page d'acceuil si l'utilisateur est bien GET[]
if(isset($_GET['id_user']) AND $_GET['id_user'] > 0)
{
    $lesinfos = donnees_users($_GET['id_user']);
    $lesinfos_group = donnees_users_groupe();

    if($lesinfos['id_user'] == $_SESSION['id_user'])
    {
        include_once "../views/login_views.php";

    }

}



