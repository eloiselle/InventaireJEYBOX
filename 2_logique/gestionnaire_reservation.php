<?php

//Gestion des réservations
public reservation creerReservation(idReservation) {

        reservation uneReservation = new reservation();
        Object[] infoReservation = moteurRBD.selectReservation(idReservation);

        if (infoReservation == null) {
            return null;
        }

        $this-> uneReservation.set_id(infoReservation[0].toString());
        $this-> uneReservation.set_date_prevue((Date) infoReservation[1]);
        $this-> uneReservation.set_date_prise_possession((Date) infoReservation[2]);
        $this-> uneReservation.set_date_retour_prevue((Date) infoReservation[3]);
        $this-> uneReservation.set_date_retour_effectif((Date) infoReservation[4]);
        $this-> uneReservation.set_commentaire(infoReservation[5]);
        $this-> uneReservation.set_id_nom_utilisateur_fk(infoReservation[6].toString());
        $this-> uneReservation.set_id_article_fk(infoReservation[7].toString());

        return uneReservation;
    }

    public Object[] obtenirReservation(String idReservation) {
        Object[] infoReservation = new Object[8];
        reservation uneReservation = creerReservation(idReservation);
        if (uneReservation == null) {
            return null;
        }

        infoReservation[0] = $this-> uneReservation.get_id();
        infoReservation[1] = $this-> uneReservation.get_date_prevue();
        infoReservation[2] = $this-> uneReservation.get_date_prise_possession();
        infoReservation[3] = $this-> uneReservation.get_date_retour_prevue();
        infoReservation[4] = $this-> uneReservation.get_date_retour_effectif();
        infoReservation[5] = $this-> uneReservation.get_commentaire();
        infoReservation[6] = $this-> uneReservation.get_id_nom_utilisateur_fk();
        infoReservation[7] = $this-> uneReservation.get_id_article_fk();

        return infoReservation;
    }
