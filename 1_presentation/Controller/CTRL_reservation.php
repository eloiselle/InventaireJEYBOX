<?php

  $ui_gestionReservation = new gestion_reservation();
  $ge = new gestionnaire_reservation();

  $infoReservation = $ge.obtenirReservation($idReservation);
