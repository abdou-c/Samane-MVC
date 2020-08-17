<?php
    //il joue l'intermediaire entre view et model!!
use src\model\ClientSimpleModel;
use libs\system\Controller;

    // require_once '../model/ClientSimple.php';
    // require_once '../entities/ClassClientSimple.php';
   
    use src\model\compteEpargne;
    // require_once '../config/autoloader.php';

    Class ControlClientSimpleController extends Controller{
        public function __construct()
        {

        }

        public function addClientSimple(){
            $var = FALSE;
            // Comment Il va transmettre ces donnees vers le modele pour inserer
                if(!empty($_POST)){
                    $clientSimple = new ClassClientSimple();
                    $modelClient = new ClientSimpleModel();
        // pour la recuperation des names
                $clientSimple->setNom($_POST['nom']);
                $clientSimple->setPrenom($_POST['prenom']);
                $clientSimple->setTelephone($_POST['telephone']);
                $clientSimple->setCni($_POST['numCni']);
                $clientSimple->setAdresse($_POST['adresse']);
                $clientSimple->setSexe($_POST['sexe']);
                $clientSimple->setDateNaiss(null);
        
                //faire la recuperation des donnees
                $ok = $modelClient->insertClientSimple($clientSimple);
        
                // var_dump($ok);
                // die();
                if($ok != null){
                    echo "client enregistrer";
                    $var= TRUE;
                    $this->addCompteEpargne(TRUE);
                }else{
                    echo "client non enregistrer!";
                }
        }
    }

        public function addCompteEpargne($var){
            if($var==TRUE){
                $compteEpargne = new ClassCompteEpargne();
                $modelEpargne = new compteEpargne();
        
                $compteEpargne->setNumero($_POST['numCompte']);
                $compteEpargne->setSolde($_POST['solde']);
                $compteEpargne->setFraisOuvert($_POST['fraisOuv']);
                $compteEpargne->setRemuneration($_POST['remuneration']);
                $compteEpargne->setDateOuverture(null);
                $resultat = $modelEpargne->insertCompteEpargne($compteEpargne);
        
                  if($resultat != null){
                    echo "compte enregistrer";
                }else{
                    echo "compte non enregistrer!";
                }   
        }
    }
    }


    // require_once '../model/compteEpargne.php';
    // require_once '../entities/ClassCompteEpargne.php';

    //recupere tous les name en POST
    //var_dump($_POST);
    // if(isset($_POST['submitSimple'])){
        //extract($_POST); 
//         $var = FALSE;
//     // Comment Il va transmettre ces donnees vers le modele pour inserer
//         if(!empty($_POST)){
//             $clientSimple = new ClassClientSimple();
//             $modelClient = new ClientSimpleModel();
// // pour la recuperation des names
//         $clientSimple->setNom($_POST['nom']);
//         $clientSimple->setPrenom($_POST['prenom']);
//         $clientSimple->setTelephone($_POST['telephone']);
//         $clientSimple->setCni($_POST['numCni']);
//         $clientSimple->setAdresse($_POST['adresse']);
//         $clientSimple->setSexe($_POST['sexe']);
//         $clientSimple->setDateNaiss(null);

//         //faire la recuperation des donnees
//         $ok = $modelClient->insertClientSimple($clientSimple);

//         // var_dump($ok);
//         // die();
//         if($ok != null){
//             echo "client enregistrer";
//             $var= TRUE;
//         }else{
//             echo "client non enregistrer!";
//         }
 
//}
    //pour afficher les donnees
    //require '../view/projet.php';

//     if($var==TRUE){
//         $compteEpargne = new ClassCompteEpargne();
//         $modelEpargne = new compteEpargne();

//         $compteEpargne->setNumero($_POST['numCompte']);
//         $compteEpargne->setSolde($_POST['solde']);
//         $compteEpargne->setFraisOuvert($_POST['fraisOuv']);
//         $compteEpargne->setRemuneration($_POST['remuneration']);
//         $compteEpargne->setDateOuverture(null);
//         $resultat = $modelEpargne->insertCompteEpargne($compteEpargne);

//           if($resultat != null){
//             echo "compte enregistrer";
//         }else{
//             echo "compte non enregistrer!";
//         }
            

//     }
// }
    

?>

