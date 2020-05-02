<?php

  //Gestion des permissions
  public function creerPermission($idPermission) {

        $unePermission = new permission();
        $infoPermission = moteurRBD.selectPermission($idPermission);

        if ($infoPermission == null) {
            return null;
        }

        $unePermission.set_id($infoPermission[0].toString());
        $unePermission.set_nom($infoPermission[1]);

        return $unePermission;
    }

    public function obtenirPermission($idPermission) {
        $infoPermission = new [2];
        $unePermission = creerPermission($idPermission);
        if ($unePermission == null) {
            return null;
        }

        $infoPermission[0] = $unePermission.get_id();
        $infoPermission[1] = $unePermission.get_nom();

        return $infoPermission;
    }

    //Gestion des utilisateurs
    public function creerUtilisateur($nomUtilisateur) {

          $unUtilisateur = new utilisateur();
          $infoUtilisateur = moteurRBD.selectUtilisateur($nomUtilisateur);

          if ($infoUtilisateur == null) {
              return null;
          }

          $unUtilisateur.set_nom_utilisateur($infoUtilisateur[0]);
          $unUtilisateur.set_mot_de_passe($infoUtilisateur[1]);
          $unUtilisateur.set_prenom($infoUtilisateur[2]);
          $unUtilisateur.set_nom($infoUtilisateur[3]);
          $unUtilisateur.set_courriel($infoUtilisateur[4]);
          $unUtilisateur.set_telephone($infoUtilisateur[5]);
          $unUtilisateur.set_naissance((Date) $infoUtilisateur[6]);
          $unUtilisateur.set_id_permission($infoUtilisateur[7].toString());

          return $unUtilisateur;
      }

      public function obtenirUtilisateur($nomUtilisateur) {
          $infoUtilisateur = new [8];
          $unUtilisateur = creerUtilisateur($nomUtilisateur);
          if ($unUtilisateur == null) {
              return null;
          }

          $infoUtilisateur[0] = $unUtilisateur.get_nom_utilisateur();
          $infoUtilisateur[1] = $unUtilisateur.get_mot_de_passe();
          $infoUtilisateur[2] = $unUtilisateur.get_prenom();
          $infoUtilisateur[3] = $unUtilisateur.get_nom();
          $infoUtilisateur[4] = $unUtilisateur.get_courriel();
          $infoUtilisateur[5] = $unUtilisateur.get_telephone();
          $infoUtilisateur[6] = $unUtilisateur.get_naissance();
          $infoUtilisateur[7] = $unUtilisateur.get_id_permission();

          return $infoUtilisateur;
      }

      //Gestion des contacts d'urgence
      public function creerContactUrgence($idContactU) {

            $unContact = new contact_urgence();
            $infoContact = moteurRBD.selectContactUrgence($idContactU);

            if ($infoContact == null) {
                return null;
            }

            $unContact.set_id($infoContact[0].toString());
            $unContact.set_prenom($infoContact[1]);
            $unContact.set_nom($infoContact[2]);
            $unContact.set_relation($infoContact[3]);
            $unContact.set_telephone($infoContact[4]);
            $unContact.set_nom_utilisateur($infoContact[5]);

            return $unContact;
          }

        public function obtenirContactUrgence($idContactU) {
            $infoContact = new [6];
            $unContact = creerContactUrgence($idContactU);
            if ($unContact == null) {
                return null;
            }

            $infoContact[0] = $unContact.get_id();
            $infoContact[1] = $unContact.get_prenom();
            $infoContact[2] = $unContact.get_nom();
            $infoContact[3] = $unContact.get_relation();
            $infoContact[4] = $unContact.get_telephone();
            $infoContact[5] = $unContact.get_nom_utilisateur();

            return $infoContact;
          }
