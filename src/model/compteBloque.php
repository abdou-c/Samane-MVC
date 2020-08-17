<?php
    namespace src\model;

use libs\system\Model;

// require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteBloque.php';
        class compteBloque extends Model{
            private $getConnexion;

            public function __construct()
            {
                parent:: __construct();
            }

            function insertCompteBloque($compteBloque){
//persist permet bd'ajouter une entite dans la base de donnes
                $this->db->persist($compteBloque);
                //flush permet de commiter-> valider
                $this->db->flush();
    
                return $compteBloque->getId();
                // $numero = $compteBloque->getNumero();
                // $solde = $compteBloque->getSolde();
                // $fraisOuv = $compteBloque->getRemuneration();
                // $remuneration = $compteBloque->getRemuneration();
                // $dateOuv = $compteBloque->getDateouv();
                // $dateFerm = $compteBloque->getDateferm();

                // $sql = "INSERT INTO bloque(numero, solde, fraisouv, remuneration, dateouv, dateferm)
                //                  VALUES('$numero', '$solde', '$fraisOuv', '$remuneration', '$dateOuv', '$dateFerm')";
                //         // var_dump($sql);
                //             if($this->base != null){
                //                 return $this->base->exec($sql); 
                //             }else{
                //                 return null;
                //             }
            }

        }
 
        // solde
        // fraisouv
        // remuneration
        // dateouv
        // dateferm
?>