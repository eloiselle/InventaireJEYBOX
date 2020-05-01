<?php

  //Gestion des categories
  public categorie creerCategorie(idCategorie) {

        categorie uneCategorie = new categorie();
        Object[] infoCategorie = moteurRBD.selectCategorie(idCategorie);

        if (infoCategorie == null) {
            return null;
        }

        $this-> uneCategorie.set_id(infoCategorieinfoCategorie[0].toString());
        $this-> uneCategorie.set_nom(infoCategorie[1]);
        $this-> uneCategorie.set_description(infoCategorie[2]);

        return uneCategorie;
    }

    public Object[] obtenirCategorie(String idCategorie) {
        Object[] infoCategorie = new Object[3];
        categorie uneCategorie = creerCategorie(idCategorie);
        if (uneCategorie == null) {
            return null;
        }

        infoCategorie[0] = $this-> uneCategorie.get_id();
        infoCategorie[1] = $this-> uneCategorie.get_nom();
        infoCategorie[2] = $this-> uneCategorie.get_description();

        return infoCategorie;
    }

    //Gestion des sous-categories
    public sous_categorie_article creerSC(idSousCategorie) {

          sous_categorie_article uneSC = new sous_categorie_article();
          Object[] infoSC = moteurRBD.selectSC(idSousCategorie);

          if (infoSC == null) {
              return null;
          }

          $this-> uneSC.set_id(infoSC[0].toString());
          $this-> uneSC.set_nom(infoSC[1]);
          $this-> uneSC.set_description(infoSC[2]);
          $this-> uneSC.set_id_categorie(infoSC[3].toString());

          return uneSC;
      }

      public Object[] obtenirSC(String idSousCategorie) {
          Object[] infoSC = new Object[8];
          sous_categorie_article uneSC = creerSC(idSousCategorie);
          if (uneSC == null) {
              return null;
          }

          infoSC[0] = $this-> uneSC.get_id();
          infoSC[1] = $this-> uneSC.get_nom();
          infoSC[2] = $this-> uneSC.get_description();
          infoSC[3] = $this-> uneSC.get_id_categorie();

          return infoSC;
      }
