<?php

session_start();
//connexion pas de données :

if(!empty($_GET['page']) AND is_file('controlers/'.$_GET['page'].'.php'))
{
    include ('controlers/'.$_GET['page'].'.php');
}
else
{
    include('controlers/index_controlers.php');
}
