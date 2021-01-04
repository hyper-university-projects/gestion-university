<?php
session_start();

// ajoute la class php une seul fois
require_once("modele/class.university.php");

// l'entete et le header de toutes les pages.
//include("vues/entete.php");
include("vues/header.php");

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

$university = University::getUniversity();
switch($uc) {
	case 'accueil': {
        include("controleurs/accueil.php");
        break;
    }
    case 'connection' : { 
        include("controleurs/connection.php");
        break;  
    }
}

// footer de toutes les pages.
include("vues/footer.php");
?>
