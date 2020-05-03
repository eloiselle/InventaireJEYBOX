<?php
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
}
