<?php
include '../modele/DAO/functionUtilisateur.php';

$errors = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = adresse($_POST);
}
$address = database_run("SELECT numCivic, rue, ville, codeP FROM adresse= LIMIT 1");
?>

<!DOCTYPE html>
<html lang="en">
  <!-- ************************ HEAD ******************************* -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="../css/ProfileIcon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">      
  <script src="../js/profileClient.js"> </script> 
  <script> /*cela ne fonctionne pas dans le dossier */
      function modifyUser() {
      var choice = prompt("Sélectionnez ce que vous voulez modifier:\n 1. Nom d'utilisateur\n 2. Courriel");

      if (choice !== null) {
        switch (choice) {
          case "1":
            var newNomU = prompt("Entrer votre nouveau nom d'utilisateur:");
            if (newNomU !== null) {
              document.getElementById("FormUU").elements["newNomU"].value = newNomU;
              document.getElementById("FormU").submit();
            }
            break;
          case "2":
            var newCourriel = prompt("Entrer votre nouveau courriel:");
            if (newCourriel !== null) {
              document.getElementById("FormU").elements["newCourriel"].value = newCourriel;
              document.getElementById("FormU").submit();
            }
            break;
          default:
            alert("Choix invalide!");
        }
      }
    }
  </script>
</head>

	<!-- ************************ BODY ******************************* -->
<body>
    <header>
      <?php if(check_login(false)):?>
        <div style="background-color: pink; padding: 10px;">
         <span style="font-weight: bold; font-size: 24px;">Salut </span>
          <span style="font-weight: bold; font-size: 24px; color: blue;"><?=$_SESSION['USER']->nomU?>!</span>
        </div>
      <?php endif;?>
    </header>


    <main>
<!--INFORMATION PERSONNELLES-->
      <section class="profileInfo">
          <h2>Modification d'information personnelle <button onclick="modifyUser()"><i class='fas fa-pencil-alt'></i></button> </h2>
          <?php if(check_login(false)):?>
            <div>
              <span>Nom d'utilisateur: </span>
              <span style="color: red;"><?=$_SESSION['USER']->nomU?></span><br><br>

              <span>Courriel: </span>
              <span style="color: red;"><?=$_SESSION['USER']->courriel?></span><br><br>
            </div>
            <?php endif;?>

          <form id="Form" method="POST" action="../modele/DAO/modificationInfo.php" style="display: none;">
            <input type="hidden" name=" ">
          </form>

        <a class="button" onclick="Sauvegarder()">Sauvegarder</a>
      </section>


<!--INFORMATION D'ADRESSE-->
        <section class="profileInfo">
          <h2>Modification d'adresse</h2>
          <?php if ($address): ?>
            <span>Numero Civic: </span>
            <span style="color: red;"><?= $ad->numCivic ?></span>
            <button onclick="modifyAdresse()"><i class='fas fa-pencil-alt'></i></button><br><br>

            <span>Rue: </span>
            <span style="color: red;"><?= $ad->rue ?></span>
            <button onclick="modifyAdresse()"><i class='fas fa-pencil-alt'></i></button><br><br>

            <span>Ville: </span>
            <span style="color: red;"><?= $ad->ville ?></span>
            <button onclick="modifyAdresse()"><i class='fas fa-pencil-alt'></i></button><br><br>

            <span>Code Postal: </span>
            <span style="color: red;"><?= $ad->codeP ?></span>
            <button onclick="modifyAdresse()"><i class='fas fa-pencil-alt'></i></button><br><br>

            <?php else: ?>
              <p>Error d'affichage.</p>
            <?php endif; ?>


            <form id="Form" method="POST" action="../modele/DAO/modificationInfo.php" style="display: none;">
              <input type="hidden" name=" ">
            </form>
            
            <a class="button" onclick="Sauvegarder()">Sauvegarder</a>
        </section>

        
<!--HISTORIQUE-->
      <div class="left">
        <section class="command-history">
          <h2>Historique de commande</h2>
          <button class="button" onclick="commandeHistory()">Afficher l'historique</button>
        </section>
      </div>


<!--CGU-->      
      <div class="right">
        <section class="CGU">
          <h2>Conditions Generales d'utilisation</h2>
          <button class="button" onclick="CGU()">Afficher le CGU</button>
        </section>
      </div>


<!--SUPPRIMER-->
      <div class="left">
        <section class="supprimerCompte">
          <h2>Supprimer votre compte</h2>
          <button class="button" onclick="supprimerCompte()">Supprimer</button>
        </section>
      </div>
   </main>

      
      
  <footer>
      <a href="../controleurs/pageLogout.php"><i class="fa fa-sign-out" style="font-size: 40px; color: rgb(255, 122, 144);"> Log Out </i></a>
  </footer>

</body>
</html>