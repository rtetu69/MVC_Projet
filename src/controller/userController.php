<?php
    namespace App\controller;
    use App\vue\Vue;
    use App\repository\UserRepository;

class userController{

    private $userRepository;
    private $vue;

    function __construct(){
        $this->userRepository = new userRepository();
        $this->vue = new Vue();

    }

    function create(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->create($_POST);
        }
        $this->vue->render('/user/espaceClient', ['nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'email'=>$_POST['email'], 'mdp'=>$_POST['mdp']]);
    }

    function connectUser(){ 

        $userRepository = new userRepository();

        $mail = isset($_POST['email']) ? ($_POST['email']) : '';
        $mdp =  isset($_POST['mdp']) ? ($_POST['mdp']) : '';
        $msg = ' ';
        if (count($_POST) == 0)
        $this->vue->render('/user/connexion', ['msg'=>$msg]);
        else {
            $profil = array();
            if (!$userRepository->connexionUser($mail, $mdp, $profil)) {
                $msg = "erreur de saisie, l'email ou le mot de passe est incorrecte";
                var_dump('dans mail il y a :');
                var_dump($mail);
                $this->vue->render('/user/connexion', ['msg'=>$msg]);
            } else {
                $_SESSION['profil'] = $profil;
                $this->vue->render('/user/espaceClient', ['nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'email'=>$_POST['email'], 'mdp'=>$_POST['mdp']]);
                    
            }
        }
    }

    function update(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->userRepository->update($_POST);
        }
        $this->vue->render('/user/espaceClient', ['nom'=>$_POST['nom'], 'prenom'=>$_POST['prenom'], 'email'=>$_POST['email'], 'mdp'=>$_POST['mdp']]);
    }

    function delete(){
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            var_dump('deleting...');
            $this->userRepository->delete($_POST);
            var_dump('deleted sucess !');
        }
        $this->vue->render('/user/inscription');
        var_dump('cest ça la page ? ');
    }

}

?>