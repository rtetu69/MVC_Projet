<?php
    namespace App\repository;
    use App\Database;
    use App\model\User;

class UserRepository extends database{

        public function create(array $userdata= []){
            // Je crée la requete SQL            
            $request ='INSERT INTO user(`nom`, `prenom`, `email`, `mdp`) VALUES(:nom, :prenom, :email, :mdp)';
            //J'execute ma requete en donnant mes params a bind
            $this->createQuery($request,[
                    'nom'=> $userdata['nom'],
                    'prenom'=> $userdata['prenom'],
                    'email'=> $userdata['email'],
                    'mdp'=> $userdata['mdp']
                ]
            );
            //pas besoin de faire un buildObject comme c'est un create (donc pas de SELECT *)
        }

        public function read($userEmail){

            $result = $this->createQuery('SELECT * INTO user WHERE email= :userEmail', ['userEmail'=>$userEmail]);
            //Onn recupere ce qu'on a dans notre select pour en créer un objet User avec buildUser
            return $this->buildUser($result->fetch());

        }

        public function delete($emailUser){
            //je crée ma requete
            $sql ='DELETE FROM user WHERE email=:email'; 
            //J'execute ma requete en donnant mon param a bind
            $this->createQuery($sql, ['email'=>$emailUser['email']]);
        }

        public function update($userdata){
            //Je crée ma requete 
            $sql ='UPDATE user SET nom =:nom, prenom =:prenom , email =:email, mdp =:mdp  WHERE id=:id'; 
            //J'execute ma requete en donnant mes params a bind
            $result = $this->createQuery($sql, [
                'id'=>$userdata['id'],
                'nom'=> $userdata['nom'],
                'prenom'=> $userdata['prenom'],
                'email'=> $userdata['email'],
                'mdp'=> $userdata['mdp']
            ]);
            //Je créer mon nouvel objet
            return $this->buildUser($result->fetch());
        }


        private function buildUser($tab){
            //Appelle du constructeur de User en entrant les param qu'on vas recuperer depuis le $_Post donner en param de la fonction
            $user = new User($tab['userId'], $tab['nom'], $tab['prenom'], $tab['email'], $tab['mdp']);
            return $user;
        }

        function connexionUser($mail, $mdp, &$profil){
            //On créer la requete qui vas verifier si la combinaison mail&mdp existe
            $request ='SELECT * FROM `user` WHERE email=:email AND mdp=:mdp';
            //On execute la requete 
            $resultat = $this->createQuery($request, ['email'=>$mail, 'mdp'=>$mdp]);
            //Si dasn resultat il y a bien une ligne (donc une conbinaison mail&mdp valide)
            if ($resultat->rowCount() > 0) { 
                //On recupere les informations de la ligne et on crée notre objet User
                $profil = $this->buildUser($resultat->fetch());
                //et on retourne true pour indiquer que c'est bien une combinaison valide
                return true;
            }
            //sinon on retourne false
            else {return false;} 
        }

    }

?>
