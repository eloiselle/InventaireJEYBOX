<?php
  include '../2_logique/etat.php';

  $myEtat = new etat(2, 'Ready', "This item is ready to lend.");

  echo "id: " . $myEtat->get_id() . " + nom: " . $myEtat->get_nom() . " + desc: " . $myEtat->get_description()
 ?>
