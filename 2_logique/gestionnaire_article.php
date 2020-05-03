<?php

  //Gestion des articles
  public function creerArticle($idArticle) {

        $unArticle = new article();
        $infoArticle = moteurRBD.selectArticle($idArticle);

        if ($infoArticle == null) {
            return null;
        }

        $unArticle.set_id($infoArticle[0].toString());
        $unArticle.set_nom($infoArticle[1]);
        $unArticle.set_fichier($infoArticle[2]);
        $unArticle.set_id_sous_categorie_fk($infoArticle[3].toString());
        $unArticle.set_id_etat_fk($infoArticle[4].toString());

        return $unArticle;
    }

    public function obtenirArticle($idArticle) {
        $infoArticle = new [5];
        $unArticle = creerArticle($idArticle);
        if ($unArticle == null) {
            return null;
        }

        $infoArticle[0] = $unArticle.get_id();
        $infoArticle[1] = $unArticle.get_nom();
        $infoArticle[2] = $unArticle.get_fichier();
        $infoArticle[3] = $unArticle.get_id_sous_categorie_fk();
        $infoArticle[4] = $unArticle.get_id_etat_fk();

        return $infoArticle;
    }

    //Gestion des references
    public function creerReference($idRef) {

          $uneRef = new reference();
          $infoRef = moteurRBD.selectReference($idRef);

          if ($infoRef == null) {
              return null;
          }

          $uneRef.set_id($infoRef[0].toString());
          $uneRef.set_nom($infoRef[1]);
          $uneRef.set_url($infoRef[2]);
          $uneRef.set_description($infoRef[3]);
          $uneRef.set_id_article_fk($infoRef[4].toString());

          return $uneRef;
      }

      public function obtenirReference($idRef) {
          $infoRef = new [5];
          $uneRef = creerReference($idRef);
          if ($uneRef == null) {
              return null;
          }

          $infoRef[0] = $uneRef.get_id();
          $infoRef[1] = $uneRef.get_nom();
          $infoRef[2] = $uneRef.get_url();
          $infoRef[3] = $uneRef.get_description();
          $infoRef[4] = $uneRef.get_id_article_fk();

          return $infoRef;
      }

      //Gestion des états
      public function creerEtat($idEtat) {

            $unEtat = new etat();
            $infoEtat = moteurRBD.selectEtat($idEtat);

            if ($infoEtat == null) {
                return null;
            }

            $unEtat.set_id(infoEtat[0].toString());
            $unEtat.set_nom(infoEtat[1]);
            $unEtat.set_description(infoEtat[2]);

            return $unEtat;
          }

        public function obtenirEtat($idEtat) {
            $infoEtat = new [3];
            $unEtat = creerEtat($idEtat);
            if ($unEtat == null) {
                return null;
            }

            $infoEtat[0] = $unEtat.get_id();
            $infoEtat[1] = $unEtat.get_nom();
            $infoEtat[2] = $unEtat.get_description();

            return $infoEtat;
          }
