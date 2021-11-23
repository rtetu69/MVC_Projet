<?php
    namespace App\repository;
    use App\Database;
    use App\model\User;

class UserRepository extends database{

        public function create($user){

            $sql ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`, Values()'; 
        }



        private function buildUser($tab){
    
            $user = new User($tab['userId'], $tab['nom'], $tab['prenom'], $tab['email'], $tab['mdp']);
    
        }

    }



?>