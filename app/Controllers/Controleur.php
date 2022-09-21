<?php
//acces au controller parent pour l heritage
namespace App\Controllers;
use CodeIgniter\Controller;

//=========================================================================================
//définition d'une classe Controleur (meme nom que votre fichier Controleur.php) 
//héritée de Controller et permettant d'utiliser les raccoucis et fonctions de CodeIgniter
//  Attention vos Fichiers et Classes Controleur et Modele doit commencer par une Majuscule 
//  et suivre par des minuscules
//=========================================================================================

class Controleur extends Controller {

//=====================================================================
//Fonction index correspondant au Controleur frontal (ou index.php) en MVC libre
//=====================================================================
public function index(){
	if(isset($_GET['action'])){
		
		if($_GET['action']=='connexion'){
			$this->connexion();
		}
		if($_GET['action']=='testconnexion'){

			$this->testconnexion();
		}

		if($_GET['action']=='cgu'){
			$this->cgu();
		}
		if($_GET['action']=='ajout'){
			$this->ajout();
		}
		if($_GET['action']=='acceuil'){
			$this->acceuil();
		}
	}


	else {$this->acceuil();
	
	}
		//=====================================================================
		//Code du controleur frontal	
		// dans cette fonction se retrouve le code de votre controleur frontal
		//=====================================================================	
			
		//code exemple controleur frontal
		
			
		//=========================
		//fin du controleur frontal
		//=========================
}


//======================================================
// Code du controleur simple (ex fichier Controleur.php)
//======================================================
public function acceuil(){
	echo view("acceuil");
}
public function connexion(){
	echo view("AP2");
}

public function cgu(){
	echo view("cgu");
}

public function ajout(){
	echo view("ajout");
}


// Action 1 : Affiche la liste de tous les billets du blog
public function testconnexion() {
	    //================
		//acces au modele
		//================
		$Modele = new \App\Models\Modele();
		
		if ((isset($_POST["user"]))&&((isset($_POST["password"])))){
			//print_r(ord"]);$_POST["passw
			$donnees = $Modele->getLogin($_POST["user"], $_POST["password"]);
		print_r($donnees);	
		if (isset($donnees[0]->mdp)){
			$donnees2 = $Modele->Verification($donnees[0]->id ,date("F"));
			if ($donnees2[0]->nb==0){
				$donnees3 = $Modele->CreerFicheFrais($donnees[0]->id, date("F"));

			}
				echo view ('ajout');
		}
		else{
			echo view('acceuil');
		}
	}
}
	    
// Action 2 : Affiche les détails sur un billet
public function billet($idBillet) {
		//================
		//acces au modele
		//================
		$Modele = new \App\Models\Modele();
		
		//===============================
		//Appel d'une fonction du Modele
		//===============================	
		$donnees = $Modele->getDetails($idBillet);
		
		//=================================================================================
		//!!! Création d'un jeu de données $data sécurisé pouvant etre passé à la vue
		//!!! on créé une variable qui récupère le résultat de la requete : $getBillets();
		//=================================================================================
		$data['resultat']=$donnees;
  		
		//==========================================
		//on charge la vue correspondante
		//et on envoie le jeu de données $data à la vue
		//la vue aura acces a une variable $resultat
		//==========================================
  		echo view('vueBillet',$data);
  
}

public function envoie(){}




// Affiche une erreur
public function erreur($msgErreur) {
  echo view('vueErreur.php', $data);
}

//==========================
//Fin du code du controleur simple
//===========================

//fin de la classe
}



?>