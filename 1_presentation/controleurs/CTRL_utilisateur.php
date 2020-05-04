<?php

  $ui_gestionUtilisateur = new gestion_utilisateur();
  $ge = new gestionnaire_utilisateur();

  $infoPermission = $ge.obtenirPermission($idPermission);
  $infoUtilisateur = $ge.obtenirUtilisateur($nomUtilisateur);
  $infoContact = $ge.obtenirContactUrgence($idContactU);
