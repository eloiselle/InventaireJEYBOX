<?php /****************************************
Fichier:        gestionnaire_reservation.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Res-02 - Gestion des réservations - Objet gestionnaire_reservation
Date:           1 mai 2020
***********************************************/
class gestionnaireReservation
{

    // Gestion des réservations
    public static function fetchReservationFromBD($moteurRequetes, $idReservation)
    {
        // Récupérer les données de la BD dans un tableau
        $infoReservation = $moteurRequetes->selectFromID("reservation", $idReservation);
        if ($infoReservation == null) {
            return null;
        }

        // Générer des clés pour accéder au tableau avec des INT
        $keyReservation = array_keys($infoReservation);

        // Ajouter chaque élément du tableau dans un objet
        $uneReservation = new reservation(
            $infoReservation[$keyReservation[0]],
            $infoReservation[$keyReservation[1]],
            $infoReservation[$keyReservation[2]],
            $infoReservation[$keyReservation[3]],
            $infoReservation[$keyReservation[4]],
            $infoReservation[$keyReservation[5]],
            $infoReservation[$keyReservation[6]],
            $infoReservation[$keyReservation[7]]
        );

        // Retourner l'objet
        return $uneReservation;
    }

    // Récupère tous les IDs existants, puis créer des objets à partir de chacun de ces IDs
    public static function fetchAllReservationFromBD($moteurRequetes) {

        // Variables
        $arrayReservation = [];

        // Récupérer les données de la BD dans un tableau
        $infoReservation = $moteurRequetes->selectAllIDs("reservation");
        if ($infoReservation == null) {
            return null;
        }

        // Pour chaque ID
        for ($i=0; $i < count($infoReservation); $i++) {

            // Générer des clés pour accéder au tableau avec des INT
            $keyReservation = array_keys($infoReservation[$i]);

            // Créer un objet à partir d'un ID
            $arrayReservation[] = gestionnaireReservation::fetchReservationFromBD($moteurRequetes, $infoReservation[$i][$keyReservation[0]]);
        }

        // Retourner le tableau
        return $arrayReservation;
    }
}
