<?php
    namespace App\model;

    
    class User{

        private int $id;
        private string $nom;
        private string $prenom;
        private string $email;
        private string $mdp;

        function __construct($id, $nom, $prenom, $email, $mdp){
            $this->id = $id;
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