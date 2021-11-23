<!DOCTYPE html>
<html>
<title>MiniProjet - Karim & Romain</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-content" style="max-width:100%">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <h3 class="w3-wide"><b>Mini-Projet Romain & Karim</b></h3>
        </div>
        <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="#" class="w3-bar-item w3-button">Menu</a>
            <a href="#" class="w3-bar-item w3-button">Menu</a>
            <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                Menu <i class="fa fa-caret-down"></i>
            </a>
            <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Sous-Menu</a>
                <a href="#" class="w3-bar-item w3-button">Sous-Menu</a>
                <a href="#" class="w3-bar-item w3-button">Sous-Menu</a>
                <a href="#" class="w3-bar-item w3-button">Sous-Menu</a>
            </div>
            <a href="#" class="w3-bar-item w3-button">Menu</a>
            <a href="#" class="w3-bar-item w3-button">Menu</a>
            <a href="#" class="w3-bar-item w3-button">Menu</a>
            <a href="#" class="w3-bar-item w3-button">Menu</a>
        </div>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
    </nav>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

        <!-- Top header -->
        <header class="w3-container w3-xlarge">
            <p class="w3-left">Page d'inscription</p>
            <p class="w3-right">
                <i class="fa fa-shopping-cart w3-margin-right"></i>
                <i class="fa fa-search"></i>
                <i class="fa fa-user w3-margin-left"></i>
            </p>
        </header>

        <!-- Content -->
        
            <form class="w3-container" action="route=PostController&action=createArticle" method="GET">

                <label class="w3-text-blue" ><b>Nom : </b></label>
                <input class="w3-input w3-border w3-round" type="text" id="nom">
                
                <label class="w3-text-blue"><b>Prenom : </b></label>
                <input class="w3-input w3-border w3-round" type="text" id="prenom">

                <label class="w3-text-blue"><b>Email : </b></label>
                <input class="w3-input w3-border w3-round" type="text" id="email">
                
                <label class="w3-text-blue"><b>Mot de passe : </b></label>
                <input class="w3-input w3-border w3-round" type="text" id="mdp">

                <button class="w3-btn w3-blue" type="submit">S'inscrire</button>
            
            </form>
        


        <!-- Footer -->
        <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">

            <div class="w3-black w3-center w3-padding-24"><a>Mini Projet - Karim & Romain</a></div>

        </footer>

        

        <!-- End page content -->
    </div>

    <script>
        // Accordion 
        function myAccFunc() {
            var x = document.getElementById("demoAcc");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // Click on the "Jeans" link on page load to open the accordion for demo purposes
        document.getElementById("myBtn").click();


        // Open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>

</body>

</html>