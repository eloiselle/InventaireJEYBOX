<?php /****************************************
Fichier:        gestionnaire_categorie.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Cat-01 - Gestion des catégories - Objet gestionnaire_categorie
Date:           1 mai 2020
***********************************************/
class gestionnaireCategorie
{

    // Gestion des catégories
    public static function fetchCategorieArticleFromBD($moteurRequetes, $idCategorieArticle)
    {
        // Récupérer les données de la BD dans un tableau
        $infoCategorieArticle = $moteurRequetes->selectFromID("categorie_article", $idCategorieArticle);
        if ($infoCategorieArticle == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyCategorieArticle = array_keys($infoCategorieArticle);

        // Ajouter chaque élément du tableau dans un objet
        $uneCategorieArticle = new categorie_article(
            $infoCategorieArticle[$keyCategorieArticle[0]],
            $infoCategorieArticle[$keyCategorieArticle[1]],
            $infoCategorieArticle[$keyCategorieArticle[2]]
        );

        // Retourner l'objet
        return $uneCategorieArticle;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllCategorieArticleFromBD($moteurRequetes) {

        // Variables
        $arrayCategorieArticle = [];

        // Récupérer les données de la BD dans un tableau
        $infoCategorieArticle = $moteurRequetes->selectAllIDs("categorie_article");
        if ($infoCategorieArticle == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoCategorieArticle); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyCategorieArticle = array_keys($infoCategorieArticle[$i]);

            // Créer un objet à partir d'un ID
            $arrayCategorieArticle[] = gestionnaireCategorieArticle::fetchCategorieArticleFromBD($moteurRequetes, $infoCategorieArticle[$i][$keyCategorieArticle[0]]);
        }

        // Retourner le tableau
        return $arrayCategorieArticle;
    }

    // Gestion des sous-catégories
    public static function fetchSousCategorieArticleFromBD($moteurRequetes, $idSousCategorieArticle)
    {
        // Récupérer les données de la BD dans un tableau
        $infoSousCategorieArticle = $moteurRequetes->selectFromID("sous_categorie_article", $idSousCategorieArticle);
        if ($infoSousCategorieArticle == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keySousCategorieArticle = array_keys($infoSousCategorieArticle);

        // Ajouter chaque élément du tableau dans un objet
        $uneSousCategorie = new sous_categorie_article(
            $infoSousCategorieArticle[$keySousCategorieArticle[0]],
            $infoSousCategorieArticle[$keySousCategorieArticle[1]],
            $infoSousCategorieArticle[$keySousCategorieArticle[2]],
            $infoSousCategorieArticle[$keySousCategorieArticle[3]]
        );

        // Retourner l'objet
        return $uneSousCategorie;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllSousCategorieArticleFromBD($moteurRequetes) {

        // Variables
        $arraySousCategorieArticle = [];

        // Récupérer les données de la BD dans un tableau
        $infoSousCategorieArticle = $moteurRequetes->selectAllIDs("sous_categorie_article");
        if ($infoSousCategorieArticle == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoSousCategorieArticle); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keySousCategorieArticle = array_keys($infoSousCategorieArticle[$i]);

            // Créer un objet à partir d'un ID
            $arraySousCategorieArticle[] = gestionnaireSousCategorieArticle::fetchSousCategorieArticleFromBD($moteurRequetes, $infoSousCategorieArticle[$i][$keySousCategorieArticle[0]]);
        }

        // Retourner le tableau
        return $arraySousCategorieArticle;
    }
}
