<?php
include("vues/v_sommaire.php");

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

include("vues/v_listePraticiens.php");
switch($action){
	case'selectionnerPraticien':{
		$lesPraticiens=$pdo->getLesPraticiens($idVisiteur);
		// Afin de sélectionner par défaut le praticien dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les praticiens sont triés
		$lesCles = array_keys($lesPraticiens);
		$praticienASelectionner = $lesCles[0];

		include("vues/v_listePraticiens.php");
		break;
	}
	case'voirEtatVisite':{

		$lePraticien = $_REQUEST['nom'];
		$lesPraticiens =$pdo->getLesPraticiens($idVisiteur,$niveauinteret);
		$praticienASelectionner = $lePraticien;
		include("vues/v_listePraticiens.php");

		$lesdates =$pdo->getLesDates($idVisiteur,$date);
		$lesniveauxinterets = $pdo->getLesNiveauxPraticiens($idVisiteur,$niveauinteret);

			$unPraticien = $lesPraticiens['nom'];
			$laDate = $lesdates['finDeVisite'];
			$leNiveauinteret = $lesniveauxinterets['niveauInteret'];
			
		
	}
}
include("vues/v_etatVisite.php");

?>