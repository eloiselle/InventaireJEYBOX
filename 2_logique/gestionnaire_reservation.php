<?php

//Gestion des réservations
public function creerReservation($idReservation) {

        $uneReservation = new reservation();
        $infoReservation = moteurRBD.selectReservation($idReservation);

        if ($infoReservation == null) {
            return null;
        }

        $uneReservation.set_id($infoReservation[0].toString());
        $uneReservation.set_date_prevue((Date) $infoReservation[1]);
        $uneReservation.set_date_prise_possession((Date) $infoReservation[2]);
        $uneReservation.set_date_retour_prevue((Date) $infoReservation[3]);
        $uneReservation.set_date_retour_effectif((Date) $infoReservation[4]);
        $uneReservation.set_commentaire($infoReservation[5]);
        $uneReservation.set_id_nom_utilisateur_fk($infoReservation[6].toString());
        $uneReservation.set_id_article_fk($infoReservation[7].toString());

        return $uneReservation;
    }

    public function obtenirReservation($idReservation) {
        $infoReservation = new [8];
        $uneReservation = creerReservation($idReservation);
        if ($uneReservation == null) {
            return null;
        }

        $infoReservation[0] = $uneReservation.get_id();
        $infoReservation[1] = $uneReservation.get_date_prevue();
        $infoReservation[2] = $uneReservation.get_date_prise_possession();
        $infoReservation[3] = $uneReservation.get_date_retour_prevue();
        $infoReservation[4] = $uneReservation.get_date_retour_effectif();
        $infoReservation[5] = $uneReservation.get_commentaire();
        $infoReservation[6] = $uneReservation.get_id_nom_utilisateur_fk();
        $infoReservation[7] = $uneReservation.get_id_article_fk();

        return $infoReservation;
    }
