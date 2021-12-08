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
            $sql ='DELETE FROM user WHERE email=:email'; 
            $this->createQuery($sql, ['email'=>$emailUser]);
        }

        public function update($userdata){
            $sql ='UPDATE user SET nom =:nom, prenom =:prenom , email =:email, mdp =:mdp  WHERE id=:id'; 
            $result = $this->createQuery($sql, [
                'id'=>$userdata['id'],
                'nom'=> $userdata['nom'],
                'prenom'=> $userdata['prenom'],
                'email'=> $userdata['email'],
                'mdp'=> $userdata['mdp']
            ]);

            return $this->buildUser($result->fetch());
        }


        private function buildUser($tab){
    
            $user = new User($tab['userId'], $tab['nom'], $tab['prenom'], $tab['email'], $tab['mdp']);
            return $user;
        }

        function connexionUser($mail, $mdp, &$profil){
                       
            $request ='SELECT * FROM `user` WHERE email=:email AND mdp=:mdp';
            $resultat = $this->createQuery($request, ['email'=>$mail, 'mdp'=>$mdp]);

            if ($resultat->rowCount() > 0) { 
                $profil = $this->buildUser($resultat->fetch());
                return true;
            }
            else {return false;} 
        }

    }

?>
