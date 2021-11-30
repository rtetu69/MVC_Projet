<?php
    namespace App\repository;
    use App\Database;
    use App\model\User;

class UserRepository extends database{

        public function create($user){
            $db = new Database();
            $connection = $db->getConnection();
            var_dump('db connecter');
            //$sql ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`) Values(:nom, : prenom, :)'; 
            
            $request = $connection->prepare('INSERT INTO user(`nom`, `prenom`, `email`, `mdp`) VALUES(:nom, :prenom, :email, :mdp)');
        
            $request->bindParam(':nom', $user['nom']);
            $request->bindParam(':prenom', $user['prenom']);
            $request->bindParam(':email', $user['email']);
            $request->bindParam(':mdp', $user['mdp']);
    
            $result = $request->execute();
            
            return $result;
        
        }

        public function read($userEmail){

            $result = $this->createQuery('SELECT * INTO user WHERE email= :userEmail', ['userEmail'=>$userEmail]);

            return $this->buildUser($result->fetch());

        }

        public function delete($user){

            $sql ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`, Values()'; 
        }

        private function buildUser($tab){
    
            $user = new User($tab['userId'], $tab['nom'], $tab['prenom'], $tab['email'], $tab['mdp']);
            return $user;
        }

        function connexionUser($mail, $mdp){
            $db = new Database();
            $connection = $db->getConnection();
            var_dump('db connecter');

            //$sql="SELECT * FROM `user` WHERE Mail=:mail AND Mdp=:mdp";
            
            $request = $connection->prepare('SELECT * FROM `user` WHERE Mail=:mail AND Mdp=:mdp');
        

            $request->bindParam(':email', $mail);
            $request->bindParam(':mdp', $mdp);
       
            $result = $request->execute();

            return $result;

        }

    }



?>