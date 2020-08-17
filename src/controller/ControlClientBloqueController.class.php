<?php
    use src\model\clientBloque;
    use libs\system\Controller;
       
        use src\model\compteBloque;
    // require_once '../model/ClientBloque.php';
    // require_once '../entities/ClassClientBloque.php';

    // require_once '../model/compteBloque.php';
    // require_once '../entities/ClassCompteBloque.php';
    // apres les require je mets les conditions

    class ControlClientBloqueController extends Controller{
        public function __construct()
        {

        }

        public function addClientBloque()
        {
            $ControlCompteBloque = FALSE;

            if(!empty($_POST)){
                $clientBloque = new ClassClientBloque();
                $modelBloque = new clientBloque();
                
            $clientBloque->setNom($_POST['nameClient']);
            $clientBloque->setPrenom($_POST['clientUsername']);
            $clientBloque->setTelephone($_POST['telephoneClient']);
            $clientBloque->setCni($_POST['clientId']);
            $clientBloque->setAdresse($_POST['clientMail']);
            $clientBloque->setSexe($_POST['sexeBloque']);
            $clientBloque->setDateNaiss(null);
        //je donne le resultat
            $resultat = $modelBloque->insertClientBloque($clientBloque);
        
            if($resultat != null){
                echo "client enregistrer";
                $ControlCompteBloque=TRUE;
            }else{
                echo "client non enregistrer!";
            }
        
         
        
                if($ControlCompteBloque == TRUE){
                    $compteBloque = new ClassCompteBloque();
                    $modelBloque = new compteBloque();
        
                    $compteBloque->setNumero($_POST['numberCompteBloque']);
                    $compteBloque->setSolde($_POST['soldeBloque']);
                    $compteBloque->setFraisouv($_POST['fraisOuvBloque']);
                    $compteBloque->setRemuneration($_POST['remunerationBloque']);
                    $compteBloque->setDateouv(null);
                    $compteBloque->setDateferm(null);
        
                    $resultat = $modelBloque->insertCompteBloque($compteBloque);
        
                    if($resultat != null){
                        echo "compte enregistrer";
                    }else{
                        echo "compte non enregistrer!";
                    }
                }
        
            }
        }
    }
  




?>