

Bonjour <?= $nom, $prenom ?> !

<h3> Modifier mes informations : </h3>

<form class="w3-container" action="index.php?route=userController&action=update" method="POST">

    <label class="w3-text-blue" ><b>Nom : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="nom" id="nom" value="<?= $nom ?> ">
                
    <label class="w3-text-blue"><b>Prenom : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="prenom" id="prenom" value="<?= $prenom ?> ">

    <label class="w3-text-blue"><b>Email : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="email" id="email" value="<?= $email ?> ">
                
    <label class="w3-text-blue"><b>Mot de passe : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="mdp" id="mdp" value="<?= $mdp ?>">

    <button class="w3-btn w3-blue" type="submit">Modifier</button>
            
 </form>

 <h3> Supprimer mon compte : </h3>
 <form class="w3-container" action="index.php?route=userController&action=delete" method="POST">

    <label class="w3-text-blue"><b>Email : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="email" id="email" value="<?= $email ?>" readonly>
            
    <button class="w3-btn w3-blue" type="submit">Supprimer</button>
            
 </form>

 <h3> Afficher mes informations : </h3>
 <form class="w3-container" action="index.php?route=userController&action=read" method="POST">

    <label class="w3-text-blue"><b>Email : </b></label>
    <input class="w3-input w3-border w3-round" type="text" name="email" id="email" value="<?= $email ?>" readonly>
            
    <button class="w3-btn w3-blue" type="submit">Afficher</button>
            
 </form>