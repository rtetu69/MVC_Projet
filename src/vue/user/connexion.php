
        <!-- Content -->
        
            <form class="w3-container"  action="index.php?route=userController&action=connectUser" method="POST">

                <?= $msg ?>

                <label class="w3-text-blue" ><b>Email : </b></label>
                <input class="w3-input w3-border w3-round" type="text" name="email" id="email">
                
                <label class="w3-text-blue" ><b>Mot de passe : </b></label>
                <input class="w3-input w3-border w3-round" type="text" name="mdp" id="mdp">

                <button class="w3-btn w3-blue" type="submit">Se connecter</button>

            
            </form>
        