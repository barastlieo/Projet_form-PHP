<?php
session_start();

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Antadis</title>
    <link href="../views/css/login_config_style.css" rel="stylesheet" />
</head>
<header>
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='../controlers/login_controlers.php?id_user=<?php echo $_GET['id_user']; ?>'><span>Accueil</span></a></li>
            <li><a href='../controlers/deconnexion_controlers.php'><span>Deconnexion</span></a></li>
        </ul>
    </div>
</header>