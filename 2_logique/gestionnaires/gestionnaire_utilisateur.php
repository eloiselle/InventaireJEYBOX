<?php /****************************************
Fichier:        gestionnaire_utilisateur.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Usr-01 - Gestion des utilisateurs - Objet gestionnaire_utilisateur
Date:           1 mai 2020
***********************************************/
class gestionnaireUtilisateur
{

    // Gestion des permissions
    public static function fetchPermissionFromBD($moteurRequetes, $idPermission)
    {
        // Récupérer les données de la BD dans un tableau
        $infoPermission = $moteurRequetes->selectFromID("permission", $idPermission);
        if ($infoPermission == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyPermission = array_keys($infoPermission);

        // Ajouter chaque élément du tableau dans un objet
        $unePermission = new permission(
            $infoPermission[$keyPermission[0]],
            $infoPermission[$keyPermission[1]]
        );

        // Retourner l'objet
        return $unePermission;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllPermissionFromBD($moteurRequetes) {

        // Variables
        $arrayPermission = [];

        // Récupérer les données de la BD dans un tableau
        $infoPermission = $moteurRequetes->selectAllIDs("permission");
        if ($infoPermission == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoPermission); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyPermission = array_keys($infoPermission[$i]);

            // Créer un objet à partir d'un ID
            $arrayPermission[] = gestionnairePermission::fetchPermissionFromBD($moteurRequetes, $infoPermission[$i][$keyPermission[0]]);
        }

        // Retourner le tableau
        return $arrayPermission;
    }

    // Gestion des utilisateurs
    public static function fetchUtilisateurFromBD($moteurRequetes, $idUtilisateur)
    {
        // Récupérer les données de la BD dans un tableau
        $infoUtilisateur = $moteurRequetes->selectFromID("utilisateur", $idUtilisateur);
        if ($infoUtilisateur == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyUtilisateur = array_keys($infoUtilisateur);

        // Ajouter chaque élément du tableau dans un objet
        $unUtilisateur = new utilisateur(
            $infoUtilisateur[$keyUtilisateur[0]],
            $infoUtilisateur[$keyUtilisateur[1]],
            $infoUtilisateur[$keyUtilisateur[2]],
            $infoUtilisateur[$keyUtilisateur[3]],
            $infoUtilisateur[$keyUtilisateur[4]],
            $infoUtilisateur[$keyUtilisateur[5]],
            $infoUtilisateur[$keyUtilisateur[6]],
            $infoUtilisateur[$keyUtilisateur[7]]
        );

        // Retourner l'objet
        return $unUtilisateur;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllUtilisateurFromBD($moteurRequetes) {

        // Variables
        $arrayUtilisateur = [];

        // Récupérer les données de la BD dans un tableau
        $infoUtilisateur = $moteurRequetes->selectAllIDs("utilisateur");
        if ($infoUtilisateur == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoUtilisateur); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyUtilisateur = array_keys($infoUtilisateur[$i]);

            // Créer un objet à partir d'un ID
            $arrayUtilisateur[] = gestionnaireUtilisateur::fetchUtilisateurFromBD($moteurRequetes, $infoUtilisateur[$i][$keyUtilisateur[0]]);
        }

        // Retourner le tableau
        return $arrayUtilisateur;
    }

    // Gestion des contacts d'urgence
    public static function fetchContactUrgenceFromBD($moteurRequetes, $idContactUrgence)
    {
        // Récupérer les données de la BD dans un tableau
        $infoContactUrgence = $moteurRequetes->selectFromID("contact_urgence", $idContactUrgence);
        if ($infoContactUrgence == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyContactUrgence = array_keys($infoContactUrgence);

        // Ajouter chaque élément du tableau dans un objet
        $unContactUrgence = new contact_urgence(
            $infoContactUrgence[$keyContactUrgence[0]],
            $infoContactUrgence[$keyContactUrgence[1]],
            $infoContactUrgence[$keyContactUrgence[2]],
            $infoContactUrgence[$keyContactUrgence[3]],
            $infoContactUrgence[$keyContactUrgence[4]],
            $infoContactUrgence[$keyContactUrgence[5]],
        );

        // Retourner l'objet
        return $unContactUrgence;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllContactUrgenceFromBD($moteurRequetes) {

        // Variables
        $arrayContactUrgence = [];

        // Récupérer les données de la BD dans un tableau
        $infoContactUrgence = $moteurRequetes->selectAllIDs("contact_urgence");
        if ($infoContactUrgence == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoContactUrgence); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyContactUrgence = array_keys($infoContactUrgence[$i]);

            // Créer un objet à partir d'un ID
            $arrayContactUrgence[] = gestionnaireContactUrgence::fetchContactUrgenceFromBD($moteurRequetes, $infoContactUrgence[$i][$keyContactUrgence[0]]);
        }

        // Retourner le tableau
        return $arrayContactUrgence;
    }
}
