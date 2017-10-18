<?php
include("vues/v_sommaire.php");
include("vues/v_ajoutVisite.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];

switch ($action) {
	case 'creerCompterendu':{
		$refVisiteur = $_REQUEST['refVisiteur'];
		$refPraticien = $_REQUEST['refPraticien'];
		$date = $_REQUEST['finDeVisite'];
		$niveauinteret = $_REQUEST['niveauInteret'];

		if (nbErreurs() != 0 ){
			include("vues/v_erreurs.php");
		}
		else{
		$pdo->creerCompterendu($refPraticien,$date,$niveauinteret,$refVisiteur);
		}
	break;}

}
?>
