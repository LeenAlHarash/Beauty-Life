<?php
	require '../modele/DAO/functionAdmin.php';
	check_login();
?>

<!DOCTYPE html>
<html>
<!-- ************************ HEAD ******************************* -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page administrateur</title>
        <link rel="stylesheet" href="../css/ProfileIcon.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">     
        <script src="../js/profileAdmin.js"> </script> 
        <script> /*cela ne fonctionne pas dans le dossier*/  
            function modifyEmail() {
                var newCourriel = prompt("Entrer votre nouveau courriel:");
                if (newCourriel !== null) {
                document.getElementById("FormU").elements["newCourriel"].value = newCourriel;
                document.getElementById("FormU").submit();
                }
            }

            function modifyPass() {
                var newMDP = prompt("Entrer votre nouvelle mot de passe:");
                if (newMDP !== null) {
                document.getElementById("FormU").elements["newMDP"].value = newMDP;
                document.getElementById("FormU").submit();
                }
            }
        </script> 
</head>
<!-- ************************ BODY ******************************* -->
<body>
    
    <?php if(check_login(false)):?>
        <div style="background-color: pink; padding: 10px;">
            <span style="font-weight: bold; font-size: 24px;">Bienvenue Agent #</span>
            <span style="font-weight: bold; font-size: 24px; color: blue;"><?=$_SESSION['USER']->numDA?>!</span>
        </div>
    <?php endif;?>

    <!--INFORMATION PERSONNELLES-->
    <main>
        <section class="profileInfo">
            <h2>Modification d'information personnelle</h2>
            <?php if(check_login(false)):?>
            <div>
                <span>Numéro d'agent: </span>
                <span style="color: red;"><?=$_SESSION['USER']->numDA?></span><br><br>

                <span>Courriel: </span>
                <span style="color: red;"><?=$_SESSION['USER']->courriel?></span>
                <button onclick="modifyEmail()"><i class='fas fa-pencil-alt'></i></button><br><br>

                <span>Mot de passe: </span>
                <span style="color: red;"><?=$_SESSION['USER']->mot_passe?></span>
                <button onclick="modifyPass()"><i class='fas fa-pencil-alt'></i></button><br><br>
            </div>
            <?php endif;?>

            <a class="button" onclick="Sauvegarder()">Sauvegarder</a>
        </section>



    <!--PRODUIT-->
        <section class="ajoutProduit">
            <h2>Ajouter un produit</h2>

                <div id="product"></div>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $modif_admin = $_POST['modif_admin'];
                        if ($modif_admin == 'chgProduit') {
                            $USG = $_POST['USG'];
                            $nom = $_POST['nom'];
                            $description = $_POST['description'];
                            $type = $_POST['type'];
                            $prix = $_POST['prix'];
                            $categorie = $_POST['categorie'];
                            $UPC = $_POST['UPC'];
                            $URL = $_POST['URL'];

                            echo "Produit ajouté";
                        } 
                    }
                ?>
                
            <button class="button" onclick="ajouterProduit()">Ajouter</button>
        </section>

    <!--MAGASIN-->      
        <section class="ajoutMagasin">
                <h2>Ajouter une magasin</h2>

                <div id="store"></div>
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                            $modif_admin = $_POST['modif_admin'];
                            if ($modif_admin == 'chgMagasin'){
                                $nomM = $_POST['nomM'];
                                $adresse = $_POST['adresse'];
                                $numT = $_POST['numT'];

                                alert("Magasin ajouté");
                            }
                        }
                    ?>

                <button class="button" name="Sauvegarder" onclick="ajouterMagasin()">Ajouter</button>
        </section>


    <!--SUPPRIMER-->
        <section class="supprimerCompte">
            <h2>Supprimer votre compte</h2>
            <button class="button" onclick="supprimerCompte()">Supprimer</button>
        </section>
   </main>

      
      
  <footer>
      <a href="../controleurs/pageLogout.php"><i class="fa fa-sign-out" style="font-size: 40px; color: rgb(255, 122, 144);"> Log Out </i></a>
  </footer>

</body>
</html>