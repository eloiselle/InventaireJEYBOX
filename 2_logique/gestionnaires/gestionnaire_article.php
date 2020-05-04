<?php
class gestionnaireArticle
{

    // Gestion des articles
    public static function fetchArticleFromBD($moteurRequetes, $idArticle)
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
            $infoArticle[$keyArticle[4]],
            $infoArticle[$keyArticle[5]]
        );

        // Retourner l'objet
        return $unArticle;
    }

    // Gestion des references
    public static function fetchReferenceFromBD($moteurRequetes, $idRef)
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

    // Gestion des états
    public static function fetchEtatFromBD($moteurRequetes, $idEtat)
    {
        // Récupérer les données de la BD dans un tableau
        $infoEtat = $moteurRequetes->selectFromID("etat", $idEtat);
        if ($infoEtat == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyEtat = array_keys($infoEtat);

        // Ajouter chaque élément du tableau dans un objet
        $unEtat = new etat(
            $infoEtat[$keyEtat[0]],
            $infoEtat[$keyEtat[1]],
            $infoEtat[$keyEtat[2]]
        );

        // Retourner l'objet
        return $unEtat;
    }
}
