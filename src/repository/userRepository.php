<?php
    namespace App\repository;
    use App\Database;
    use App\model\User;

class UserRepository extends database{

        public function create(array $userdata= []){
            //$db = new Database();
            //$connection = $db->getConnection();
            
            var_dump('db connecter');
            //$sql ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`) Values(:nom, : prenom, :)'; 
            
            $request ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`) VALUES(:nom, :prenom, :email, :mdp)';
            $this->createQuery($request,[
                    'nom'=> $userdata['nom'],
                    'prenom'=> $userdata['prenom'],
                    'email'=> $userdata['email'],
                    'mdp'=> $userdata['mdp']
                ]
            );
            var_dump('objet créer dans la base');

        }

        public function read($userEmail){

            $result = $this->createQuery('SELECT * INTO user WHERE email= :userEmail', ['userEmail'=>$userEmail]);

            return $this->buildUser($result->fetch());

        }

        public function delete($emailUser){
            $sql ='DELETE FROM user WHERE email=:emailUser'; 
        }

        private function buildUser($tab){
    
            $user = new User($tab['userId'], $tab['nom'], $tab['prenom'], $tab['email'], $tab['mdp']);
            return $user;
        }

        function connexionUser($mail, $mdp, &$profil){
           
            //$sql="SELECT * FROM `user` WHERE Mail=:mail AND Mdp=:mdp";
            
            $request ='SELECT * FROM `user` WHERE email=:mail AND mdp=:mdp';
            $resultat = $this->createQuery($request, ['mail'=>$mail, 'mdp'=>$mdp]);

            if ($resultat->rowCount() > 0) { 
                $profil = $resultat->fetch(); 
                return true;
            }
            else {return false;} 
        


        }

    }



?>