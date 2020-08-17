<?php
        use Doctrine\ORM\Annotation as ORM;
        use Doctrine\Common\Collections\ArrayCollection;
        /**
        * @Entity
        * @Table(name="clientbloque")
        */
    class ClassClientBloque{
         /** 
        * @Id
        * @Column(type="integer")
        * @GeneratedValue
        */   
        private $id;
         /** 
        * @Column(type="string")
        */
        private $nom;
         /** 
        * @Column(type="string")
        */
        private $prenom;
         /** 
        * @Column(type="integer")
        */
        private $telephone;
         /** 
        * @Column(type="integer")
        */
        private $cni;
         /** 
        * @Column(type="string")
        */
        private $adresse;
         /** 
        * @Column(type="string")
        */
        private $sexe;
         /** 
        * @Column(type="date",nullable=true)
        */
        private $dateNaiss;

          /**
        * @OneToMany(targetEntity="ClassCompteBloque", mappedBy="clientBloque")
        */

        private $clientBloque;
        public function __construct()
        {
                $this->clientBloque = new ArrayCollection();
        }
        

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of cni
         */ 
        public function getCni()
        {
                return $this->cni;
        }

        /**
         * Set the value of cni
         *
         */ 
        public function setCni($cni)
        {
                $this->cni = $cni;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of salaire
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of salaire
         *
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of dateNaiss
         */ 
        public function getDateNaiss()
        {
                return $this->dateNaiss;
        }

        /**
         * Set the value of dateNaiss
         *
         */ 
        public function setDateNaiss($dateNaiss)
        {
                $this->dateNaiss = $dateNaiss;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }




?>