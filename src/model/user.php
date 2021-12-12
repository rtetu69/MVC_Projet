<?php
    namespace App\model;

    
    class User{

        private  $id;
        private  $nom;
        private  $prenom;
        private  $email;
        private  $mdp;
/** 
        function __construct($id, $nom, $prenom, $email, $mdp){
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->mdp = $mdp;
        }

*/
        //Getter

        public function getId(){
            return $this->id;
        }

        public function getNom() {
            return $this->nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getMdp() {
            return $this->mdp;
        }

        //Setter

        public function setId($id){
             $this->id = $id;
        }

        public function setNom($nom) {
             $this->nom = $nom;
        }

        public function setPrenom($prenom) {
             $this->prenom = $prenom;
        }

        public function setEmail($email) {
             $this->email = $email;
        }

        public function setMdp($mdp) {
             $this->mdp = $mdp;
        }

    }


?>