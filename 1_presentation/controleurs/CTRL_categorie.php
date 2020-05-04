<?php /****************************************
Fichier:        CTRL_article.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Item-01 - Contrôleur d'articles
Date:           2 mai 2020
***********************************************/

// Incomplet

  $ui_gestionCategorie = new gestion_categorie();
  $ge = new gestionnaire_categorie();

  $infoCategorie = $ge.obtenirCategorie($idCategorie);
  $infoSC = $ge.obtenirSC($idSousCategorie);
