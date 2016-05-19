<?php

include(dirname(__FILE__).'/../views/index_views.php');
include(dirname(__FILE__).'/../models/index_models.php');

//utiliser la class form
require 'class_controlers/form_class.php';


//instanciation de la classe form().
$form = new form();
$form->sumbit_connexion_users();
$form->sumbit_formulaire_users();




