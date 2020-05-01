<?php

  //Gestion des permissions
  public permission creerPermission(idPermission) {

        permission unePermission = new permission();
        Object[] infoPermission = moteurRBD.selectPermission(idPermission);

        if (infoPermission == null) {
            return null;
        }

        $this-> unePermission.set_id(infoPermission[0].toString());
        $this-> unePermission.set_nom(infoPermission[1]);

        return unePermission;
    }

    public Object[] obtenirPermission(String idPermission) {
        Object[] infoPermission = new Object[2];
        permission unePermission = creerPermission(idPermission);
        if (unePermission == null) {
            return null;
        }

        infoPermission[0] = $this-> unePermission.get_id();
        infoPermission[1] = $this-> unePermission.get_nom();

        return infoPermission;
    }

    //Gestion des utilisateurs
    public utilisateur creerUtilisateur(nomUtilisateur) {

          utilisateur unUtilisateur = new utilisateur();
          Object[] infoUtilisateur = moteurRBD.selectUtilisateur(nomUtilisateur);

          if (infoUtilisateur == null) {
              return null;
          }

          $this-> unUtilisateur.set_nom_utilisateur(infoUtilisateur[0]);
          $this-> unUtilisateur.set_mot_de_passe(infoUtilisateur[1]);
          $this-> unUtilisateur.set_prenom(infoUtilisateur[2]);
          $this-> unUtilisateur.set_nom(infoUtilisateur[3]);
          $this-> unUtilisateur.set_courriel(infoUtilisateur[4]);
          $this-> unUtilisateur.set_telephone(infoUtilisateur[5]);
          $this-> unUtilisateur.set_naissance((Date) infoUtilisateur[6]);
          $this-> unUtilisateur.set_id_permission(infoUtilisateur[7].toString());

          return unUtilisateur;
      }

      public Object[] obtenirUtilisateur(String nomUtilisateur) {
          Object[] infoUtilisateur = new Object[8];
          utilisateur unUtilisateur = creerUtilisateur(nomUtilisateur);
          if (unUtilisateur == null) {
              return null;
          }

          infoUtilisateur[0] = $this-> unUtilisateur.get_nom_utilisateur();
          infoUtilisateur[1] = $this-> unUtilisateur.get_mot_de_passe();
          infoUtilisateur[2] = $this-> unUtilisateur.get_prenom();
          infoUtilisateur[3] = $this-> unUtilisateur.get_nom();
          infoUtilisateur[4] = $this-> unUtilisateur.get_courriel();
          infoUtilisateur[5] = $this-> unUtilisateur.get_telephone();
          infoUtilisateur[6] = $this-> unUtilisateur.get_naissance();
          infoUtilisateur[7] = $this-> unUtilisateur.get_id_permission();

          return infoUtilisateur;
      }

      //Gestion des contacts d'urgence
      public contact_urgence creerContactUrgence(idContactU) {

            contact_urgence unContact = new contact_urgence();
            Object[] infoContact = moteurRBD.selectContactUrgence(idContactU);

            if (infoContact == null) {
                return null;
            }

            $this-> unContact.set_id(infoContact[0].toString());
            $this-> unContact.set_prenom(infoContact[1]);
            $this-> unContact.set_nom(infoContact[2]);
            $this-> unContact.set_relation(infoContact[3]);
            $this-> unContact.set_telephone(infoContact[4]);
            $this-> unContact.set_nom_utilisateur(infoContact[5]);

            return unContact;
          }

        public Object[] obtenirContactUrgence(String idContactU) {
            Object[] infoContact = new Object[6];
            contact_urgence unContact = creerContactUrgence(idContactU);
            if (unContact == null) {
                return null;
            }

            infoContact[0] = $this-> unContact.get_id();
            infoContact[1] = $this-> unContact.get_prenom();
            infoContact[2] = $this-> unContact.get_nom();
            infoContact[3] = $this-> unContact.get_relation();
            infoContact[4] = $this-> unContact.get_telephone();
            infoContact[5] = $this-> unContact.get_nom_utilisateur();

            return infoContact;
          }
