<h3> Mes informations : </h3>

<form class="w3-container" >
               
    <label class="w3-text-blue"><b>Nom : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="nom" id="nom" value="<?= $nom ?>" readonly>

    <label class="w3-text-blue"><b>Prenom : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="prenom" id="prenom" value="<?= $prenom ?> " readonly>
                
    <label class="w3-text-blue"><b>Email : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="email" id="email" value="<?= $email ?>" readonly>

    <label class="w3-text-blue"><b>Mot de passe : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="mdp" id="mdp" value="<?= $mdp ?>" readonly>

    <a href="vue/user/accueil.php">
        <button class="w3-btn w3-blue" > Accueil</button>
    </a>
            
 </form>