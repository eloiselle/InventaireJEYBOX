<?php
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
}
