<?php

  $ui_gestionCategorie = new gestion_categorie();
  $ge = new gestionnaire_categorie();

  $infoCategorie = $ge.obtenirCategorie($idCategorie);
  $infoSC = $ge.obtenirSC($idSousCategorie);
