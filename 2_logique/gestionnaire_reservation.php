<?php
public reservation creerReservation(idReservation) {

        reservation uneResevation = new reservation();
        Object[] infoReservation = moteurRBD.selectReservation(idReservation);

        if (infoReservation == null) {
            return null;
        }

        $this-> uneResevation.set_id(infoReservation[0].toString());
        $this-> uneResevation.set_date_prevue((Date) infoReservation[1]);
        $this-> uneResevation.set_date_prise_possession((Date) infoReservation[2]);
        $this-> uneResevation.set_date_retour_prevue((Date) infoReservation[3]);
        $this-> uneResevation.set_date_retour_effectif((Date) infoReservation[4]);
        $this-> uneResevation.set_commentaire(infoReservation[5]);
        $this-> uneResevation.set_id_nom_utilisateur_fk(infoReservation[6]);
        $this-> uneResevation.set_id_article_fk(infoReservation[7]);

        return uneResevation;
    }
