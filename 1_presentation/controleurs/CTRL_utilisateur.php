<?php /****************************************
Fichier:        CTRL_utilisateur.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Res-02 - Contrôleur des réservations
Date:           2 mai 2020
***********************************************/

// Incomplet

  $ui_gestionUtilisateur = new gestion_utilisateur();
  $ge = new gestionnaire_utilisateur();

  $infoPermission = $ge.obtenirPermission($idPermission);
  $infoUtilisateur = $ge.obtenirUtilisateur($nomUtilisateur);
  $infoContact = $ge.obtenirContactUrgence($idContactU);
