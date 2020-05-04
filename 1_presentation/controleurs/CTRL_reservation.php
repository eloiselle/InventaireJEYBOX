<?php

// Moteur requêtes
include_once "../../3_acces_bd/moteur_requetes_bd.php";

// Gestionnaires
include_once "../../2_logique/gestionnaires/gestionnaire_reservation.php";

// Objets
include_once "../../2_logique/objets/reservation.php";

$moteurRequetes = new moteurRequetesBD();
$listeArticles = gestionnaireReservation::fetchAllReservationFromBD($moteurRequetes);

// Charge la page
include '../client/consulter_reservation.php';
