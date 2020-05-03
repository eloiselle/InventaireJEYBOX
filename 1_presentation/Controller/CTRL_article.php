<?php

  $ui_gestionArticle = new gestion_article();
  $ge = new gestionnaire_article();

  $infoArticle = $ge.obtenirArticle($idArticle);
  $infoReference = $ge.obtenirReference($idReference);
  $infoEtat = $ge.obtenirEtat($idEtat);
