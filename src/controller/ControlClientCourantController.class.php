<?php
use src\model\clientCourant;
use libs\system\Controller;

    // require_once '../model/ClientSimple.php';
    // require_once '../entities/ClassClientSimple.php';
   
    use src\model\compteCourant;
    // require_once '../config/autoloader.php';

    // require_once '../model/clientCourant.php';
    // require_once '../entities/ClassClientCourant.php';

    // require_once '../model/compteCourant.php';
    // require_once '../entities/ClassCompteCourant.php';

    Class ControlClientCourantController extends Controller{
        public function __construct()
        {

        }

        public function addClientCourant(){            
if(!empty($_POST)){
    $clientCourant = new ClassClientCourant();
    $modelCourant = new ClientCourant();
    //apres on va commencer a recuperer les names

    $clientCourant->setNom($_POST['nomClient']);
    $clientCourant->setPrenom($_POST['prenomClient']);
    $clientCourant->setTelephone($_POST['callClient']);
    $clientCourant->setCni($_POST['numCniClient']);
    $clientCourant->setAdresse($_POST['adresseClient']);
    $clientCourant->setSalaire($_POST['Salaire']);
    $clientCourant->setSexe($_POST['sexeCourant']);
    $clientCourant->setDateNaiss(null);
//resultat
    $resultat = $modelCourant->insertClientCourant($clientCourant);



     if($resultat != null){
          echo "client enregistrer";
      }
      else{
          echo "client non enregistrer!";
        }
    }

    $courant=TRUE;

    if($courant == true){

        $compteCourant = new ClassCompteCourant();
        $modelCourant = new compteCourant();
    
        $compteCourant->setNumero($_POST['numberCompte']);
        $compteCourant->setSolde($_POST['solde']);
        $compteCourant->setAgios($_POST['agios']);
        $compteCourant->setDateOuvert(null);
    
        $resultat = $modelCourant->insertCompteCourant($compteCourant);
    
        if($resultat != null){
            echo "compte enregistrer";
        }else{
            echo "compte non enregistrer!";
        }
}
}
// Comment Il va transmettre ces donnees vers le modele pour inserer

}
?>