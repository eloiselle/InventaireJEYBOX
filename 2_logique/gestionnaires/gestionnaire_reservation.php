<?php
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
}
