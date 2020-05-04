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
            $infoArticle[$keyArticle[5]],
            $infoArticle[$keyArticle[6]]
        );

        // Retourner l'objet
        return $unArticle;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllArticleFromBD($moteurRequetes) {

        // Variables
        $arrayArticle = [];

        // Récupérer les données de la BD dans un tableau
        $infoArticle = $moteurRequetes->selectAllIDs("article");
        if ($infoArticle == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoArticle); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyArticle = array_keys($infoArticle[$i]);

            // Créer un objet à partir d'un ID
            $arrayArticle[] = gestionnaireArticle::fetchArticleFromBD($moteurRequetes, $infoArticle[$i][$keyArticle[0]]);
        }

        // Retourner le tableau
        return $arrayArticle;
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

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllReferenceFromBD($moteurRequetes) {

        // Variables
        $arrayReference = [];

        // Récupérer les données de la BD dans un tableau
        $infoReference = $moteurRequetes->selectAllIDs("reference");
        if ($infoReference == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoReference); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyReference = array_keys($infoReference[$i]);

            // Créer un objet à partir d'un ID
            $arrayReference[] = gestionnaireReference::fetchReferenceFromBD($moteurRequetes, $infoReference[$i][$keyReference[0]]);
        }

        // Retourner le tableau
        return $arrayReference;
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

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllEtatFromBD($moteurRequetes) {

        // Variables
        $arrayEtat = [];

        // Récupérer les données de la BD dans un tableau
        $infoEtat = $moteurRequetes->selectAllIDs("etat");
        if ($infoEtat == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoEtat); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyEtat = array_keys($infoEtat[$i]);

            // Créer un objet à partir d'un ID
            $arrayEtat[] = gestionnaireEtat::fetchEtatFromBD($moteurRequetes, $infoEtat[$i][$keyEtat[0]]);
        }

        // Retourner le tableau
        return $arrayEtat;
    }
}
