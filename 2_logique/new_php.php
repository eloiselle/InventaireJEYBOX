<?php
include "gestionnaire_article.php";
include "article.php";

$moteurRequetes = new moteurRequetesBD();
$monArticle = gestionnaireArticle::creerArticle($moteurRequetes, 1);
echo $monArticle->get_nom();

 ?>
