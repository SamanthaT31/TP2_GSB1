<?php
include("vues/v_sommaire.php");
include("vues/v_listePraticiens.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case'selectionnerPraticien':{
		$lesPraticiens=$pdo->getLesPraticiens($idVisiteur);
		// Afin de sélectionner par défaut le praticien dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les praticiens sont triés
		$lesCles = array_keys($lesPraticiens);
		$praticienASelectionner = $lesCles[0];
		break;
	}
	case'voirEtatVisite':{

		$lePraticien = $_REQUEST['nom'];
		$lesPraticiens =$pdo->getLesPraticiens($idVisiteur);
		$praticienASelectionner = $lePraticien;

		

			$lesdates =$pdo->getLesDates($idVisiteur,$date);
			$lesniveauxinterets = $pdo->getLesNiveauxPraticiens($idVisiteur,$niveauinteret);

			$unPraticien = $lesPraticiens['nom'];
			$laDate = $lesdates['FinDeVisite'];
			$leNiveauinteret = $lesniveauxinterets['niveauInteret'];

		
	}
}
include("vues/v_etatVisite.php");	

?>