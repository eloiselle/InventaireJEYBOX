<?php

  //Gestion des categories
  public function creerCategorie($idCategorie) {

        $uneCategorie = new categorie();
        $infoCategorie = moteurRBD.selectCategorie($idCategorie);

        if ($infoCategorie == null) {
            return null;
        }

        $uneCategorie.set_id($infoCategorie[0].toString());
        $uneCategorie.set_nom($infoCategorie[1]);
        $uneCategorie.set_description($infoCategorie[2]);

        return $uneCategorie;
    }

    public function obtenirCategorie($idCategorie) {
        $infoCategorie = new [3];
        $uneCategorie = creerCategorie($idCategorie);
        if ($uneCategorie == null) {
            return null;
        }

        $infoCategorie[0] = $uneCategorie.get_id();
        $infoCategorie[1] = $uneCategorie.get_nom();
        $infoCategorie[2] = $uneCategorie.get_description();

        return $infoCategorie;
    }

    //Gestion des sous-categories
    public function creerSC($idSousCategorie) {

          $uneSC = new sous_categorie_article();
          $infoSC = moteurRBD.selectSC($idSousCategorie);

          if ($infoSC == null) {
              return null;
          }

          $uneSC.set_id($infoSC[0].toString());
          $uneSC.set_nom($infoSC[1]);
          $uneSC.set_description($infoSC[2]);
          $uneSC.set_id_categorie($infoSC[3].toString());

          return $uneSC;
      }

      public function obtenirSC($idSousCategorie) {
          $infoSC = new [8];
          $uneSC = creerSC($idSousCategorie);
          if ($uneSC == null) {
              return null;
          }

          $infoSC[0] = $uneSC.get_id();
          $infoSC[1] = $uneSC.get_nom();
          $infoSC[2] = $uneSC.get_description();
          $infoSC[3] = $uneSC.get_id_categorie();

          return $infoSC;
      }
