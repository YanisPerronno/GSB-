<?php
//acces au Modele parent pour l heritage
namespace App\Models;
use CodeIgniter\Model;


//SELECT login AND mdp FROM visiteur where login = '".$username."' and mdp = '".$password."'
//SELECT * FROM fichefrais WHERE mois = ? AND visiteur = ?;
//SELECT login AND mdp FROM visiteur where login = ? AND mdp= ?'
//SELECT * FROM fichefrais where mois = ? AND visiteur= ?'

//=========================================================================================
//définition d'une classe Modele (meme nom que votre fichier Modele.php) 
//héritée de Modele et permettant d'utiliser les raccoucis et fonctions de CodeIgniter
//  Attention vos Fichiers et Classes Controleur et Modele doit commencer par une Majuscule 
//  et suivre par des minuscules
//=========================================================================================
class Modele extends Model {

public function getLogin($username,$password) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = "SELECT id, login, mdp FROM visiteur where login = ? and mdp = ?";
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$username,$password]);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
    }
public function login($login,$mdp) {
	
//==========================================================================================
// Connexion à la BDD en utilisant les données féninies dans le fichier app/Config/Database.php
//==========================================================================================
    $db = db_connect();	
	
//=====================================
// rédaction de la requete sql préparée
//=====================================
	$sql = 'SELECT id, login , mdp FROM visiteurs where login =? AND mdp=?';
	
//=====================================================
// execution de la requete sql en passant un parametre id
//=====================================================	
    $resultat = $db->query($sql, [$login,$mdp]);
	
//=============================
// récupération des données de la requete sql
//=============================
	$resultat = $resultat->getResult();

//=============================
// renvoi du résultat au Controleur
//=============================		
    return $resultat;
  
    }
public function Verification($id, $mois){
    $db = db_connect();
    $sql = 'SELECT COUNT(*) AS nb FROM fichefrais where idVisiteur=? AND mois=?';
    $resultat = $db->query($sql, [$id, $mois]);
    $resultat = $resultat->getResult();
    return $resultat;
    }

public function CreerFicheFrais($visiteur, $mois) {
    $db = db_connect();
    $db->connect();
    print_r(date("Y-m-d"));
    $sql = 'INSERT INTO fichefrais VALUES(?,?,0,0,?,"CR")';
    $resultat = $db->query($sql, [$visiteur, $mois , date("Y-m-d")]);
    $sql10 = 'INSERT INTO ligneFraisForfait VALUES (?,?,"ETP",0)';
    $sql20 = 'INSERT INTO ligneFraisForfait VALUES (?,?,"KM",0)';
    $sql30 = 'INSERT INTO ligneFraisForfait VALUES (?,?,"NUI",0)';
    $sql40 = 'INSERT INTO ligneFraisForfait VALUES (?,?,"REP",0)';
    $resultat = $db->query($sql10, [$visiteur,$mois]);
    $resultat = $db->query($sql20, [$visiteur,$mois]);
    $resultat = $db->query($sql30, [$visiteur,$mois]);
    $resultat = $db->query($sql40, [$visiteur,$mois]);
    $resultat = $resultat->getResult();
    return $resultat;
    }
public function envoieFicheFrais ($ETP, $KM, $NUI, $REP){
    $db = db_connect();

    $sql10 = 'UPDATE ligneFraisForfait SET quantite = ? WHERE idFraisForfait = "ETP" AND idVisiteur =$id';
    $sql20 = 'UPDATE ligneFraisForfait SET quantite = ? WHERE idFraisForfait = "KM" AND idVisiteur =$id';
    $sql30 = 'UPDATE ligneFraisForfait SET quantite = ? WHERE idFraisForfait = "NUI" AND idVisiteur =$id';
    $sql40 = 'UPDATE ligneFraisForfait SET quantite = ? WHERE idFraisForfait = "ETP" AND idVisiteur =$id';

    $resultat = $db->query($sql10, [$ETP]);
    $resultat = $db->query($sql20, [$KM]);
    $resultat = $db->query($sql30, [$NUI]);
    $resultat = $db->query($sql40, [$REP]);
    
    $resultat = $resultat->getResult();
    return $resultat;


}


















}
?>
