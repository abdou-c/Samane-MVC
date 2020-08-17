<?php
    namespace src\model;

use libs\system\Model;

// require_once 'dbConnect.php';
    // require_once '../entities/ClassClientSimple.php';
    Class ClientSimpleModel extends Model{
        public function __construct()
        {
           parent::__construct();
        }
        function insertClientSimple($clientSimple){

            $this->db->persist($clientSimple);
            $this->db->flush();
            // var_dump($clientSimple->getId());
            // die;
            return $clientSimple->getId();


            // $pren = $clientSimple->getPrenom();
            // $tel = $clientSimple->getTelephone();
            // $cni = $clientSimple->getCni();
            // $nom = $clientSimple->getNom();
            // $mail = $clientSimple->getAdresse();
            // $sexe = $clientSimple->getSexe();
            // $dateNaiss = $clientSimple->getDateNaiss();
            
            // $sql = "INSERT INTO client(id, nom, prenom, telephone, cni, adresse, sexe, dateNaiss) 
            //         VALUES (null,'$nom',
            //         '$pren',
            //         '$tel',
            //         '$cni',
            //         '$mail','$sexe', '$dateNaiss')";
            //         //  var_dump($sql);
            //         //  die();
                  
            //       if($this->base != null){
            //         return $this->base->exec($sql); 
            //       }else{
            //           return null;
            //       }
                    
        }
    }

?>
