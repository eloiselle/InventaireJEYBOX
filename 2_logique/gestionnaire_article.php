<?php

include '../3_acces_bd/moteur_requetes_bd.php';

class gestionnaireArticle
{

    //Gestion des articles
    public static function creerArticle($moteurRequetes, $idArticle)
    {
        // Récupérer les données de la BD dans un tableau
        $infoArticle = $moteurRequetes->selectFromID("article", $idArticle);
        if ($infoArticle == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyArticle = array_keys($infoArticle);

        // Ajouter chaque élément du tableau dans un objet
        $unArticle = new article(
            $infoArticle[$keyArticle[0]],
            $infoArticle[$keyArticle[1]],
            $infoArticle[$keyArticle[2]],
            $infoArticle[$keyArticle[3]],
            $infoArticle[$keyArticle[4]]
        );

        // Retourner l'objet
        return $unArticle;
    }

    //Gestion des references
    public function creerReference($moteurRequetes, $idRef)
    {
        // Récupérer les données de la BD dans un tableau
        $infoRef = $moteurRequetes->selectFromID("reference", $idRef);
        if ($infoRef == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyRef = array_keys($infoRef);

        // Ajouter chaque élément du tableau dans un objet
        $uneRef = new reference(
            $infoRef[$keyRef[0]],
            $infoRef[$keyRef[1]],
            $infoRef[$keyRef[2]],
            $infoRef[$keyRef[3]],
            $infoRef[$keyRef[4]]
        );

        // Retourner l'objet
        return $uneRef;
    }

    //Gestion des états
    public function creerEtat($moteurRequetes, $idEtat)
    {
        $unEtat = new etat();
        $infoEtat = moteurRBD.selectEtat($idEtat);

        if ($infoEtat == null) {
            return null;
        }

        $unEtat.set_id(infoEtat[0].toString());
        $unEtat.set_nom(infoEtat[1]);
        $unEtat.set_description(infoEtat[2]);

        return $unEtat;
    }
}
