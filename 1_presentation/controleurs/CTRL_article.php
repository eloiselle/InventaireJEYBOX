<?php

$listeArticles[] = gestionnaireArticle::fetchArticleFromBD($moteurRequetes, 1);
$listeArticles[] = gestionnaireArticle::fetchArticleFromBD($moteurRequetes, 2);

$maReference = gestionnaireArticle::fetchReferenceFromBD($moteurRequetes, 1);
$monEtat = gestionnaireArticle::fetchEtatFromBD($moteurRequetes, 1);

include '../client/consulter_article.php';
