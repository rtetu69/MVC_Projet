<?php
    namespace App\model;

    
    class User{

        private  $id;
        private  $nom;
        private  $prenom;
        private  $email;
        private  $mdp;

        function __construct($nom, $prenom, $email, $mdp){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->mdp = $mdp;
        }


        //Getter

        public function getId(): int {
            return $this->id;
        }

        public function getNom(): int {
            return $this->nom;
        }

        public function getPrenom(): int {
            return $this->prenom;
        }

        public function getEmail(): int {
            return $this->email;
        }

        public function getMdp(): int {
            return $this->mdp;
        }

    }


?>