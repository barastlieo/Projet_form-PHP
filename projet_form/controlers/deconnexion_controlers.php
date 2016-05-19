<?php
session_start();
$_SESSION = array();

//deconnexion de la session utilisateur
session_destroy();
header("Location:../index.php");