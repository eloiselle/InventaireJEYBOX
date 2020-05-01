<?php

  //Gestion des articles
  public article creerArticle(idArticle) {

        article unArticle = new article();
        Object[] infoArticle = moteurRBD.selectArticle(idArticle);

        if (infoArticle == null) {
            return null;
        }

        $this-> unArticle.set_id(infoArticle[0].toString());
        $this-> unArticle.set_nom(infoArticle[1]);
        $this-> unArticle.set_fichier(infoArticle[2]);
        $this-> unArticle.set_id_sous_categorie_fk(infoArticle[3].toString());
        $this-> unArticle.set_id_etat_fk(infoArticle[4].toString());

        return unArticle;
    }

    public Object[] obtenirArticle(String idArticle) {
        Object[] infoArticle = new Object[5];
        article unArticle = creerArticle(idArticle);
        if (unArticle == null) {
            return null;
        }

        infoArticle[0] = $this-> unArticle.get_id();
        infoArticle[1] = $this-> unArticle.get_nom();
        infoArticle[2] = $this-> unArticle.get_fichier();
        infoArticle[3] = $this-> unArticle.get_id_sous_categorie_fk();
        infoArticle[4] = $this-> unArticle.get_id_etat_fk();

        return infoArticle;
    }

    //Gestion des references
    public reference creerReference(idRef) {

          reference uneRef = new reference();
          Object[] infoRef = moteurRBD.selectReference(idRef);

          if (infoRef == null) {
              return null;
          }

          $this-> uneRef.set_id(infoRef[0].toString());
          $this-> uneRef.set_nom(infoRef[1]);
          $this-> uneRef.set_url(infoRef[2]);
          $this-> uneRef.set_description(infoRef[3]);
          $this-> uneRef.set_id_article_fk(infoRef[4].toString());

          return uneRef;
      }

      public Object[] obtenirReference(String idRef) {
          Object[] infoRef = new Object[5];
          reference uneRef = creerReference(idRef);
          if (uneRef == null) {
              return null;
          }

          infoRef[0] = $this-> uneRef.get_id();
          infoRef[1] = $this-> uneRef.get_nom();
          infoRef[2] = $this-> uneRef.get_url();
          infoRef[3] = $this-> uneRef.get_description();
          infoRef[4] = $this-> uneRef.get_id_article_fk();

          return infoRef;
      }

      //Gestion des états
      public etat creerEtat(idEtat) {

            etat unEtat = new etat();
            Object[] infoEtat = moteurRBD.selectEtat(idEtat);

            if (infoEtat == null) {
                return null;
            }

            $this-> unEtat.set_id(infoEtat[0].toString());
            $this-> unEtat.set_nom(infoEtat[1]);
            $this-> unEtat.set_description(infoEtat[2]);

            return unEtat;
          }

        public Object[] obtenirEtat(String idEtat) {
            Object[] infoEtat = new Object[3];
            etat unEtat = creerEtat(idEtat);
            if (unEtat == null) {
                return null;
            }

            infoEtat[0] = $this-> unEtat.get_id();
            infoEtat[1] = $this-> unEtat.get_nom();
            infoEtat[2] = $this-> unEtat.get_description();

            return infoEtat;
          }
