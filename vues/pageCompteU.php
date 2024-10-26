<!DOCTYPE html>
<html lang="fr">

<!-- ************************ HEAD ******************************* -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compte Utilisateur</title>
        <link rel="stylesheet" href="../css/CssUtilisateur.css" />
        <script src="../js/typeConnection.js"></script>
    </head>
<!-- ************************ BODY ******************************* -->
    <body>

        <div style="text-align: center;">
            <img class="logo" src='../images/BeautyLife Logo.png' alt="logo" width="150px" height="150px"/> 
        </div>
        
        <p><h2>Bienvenue sur notre site! Pour accéder à des services personnalisés, nous vous invitons à accèder à votre compte, 
            si vous n'en avez pas, créez-en un!</h2></p>
        <div class="container">
            <!--***Si le compte existe déjà***-->
        <div class="login">
            
        <form action=" " method="post" id="loginForm">
            <p><h3>Vous avez déjà un compte?</h3>
            <h5>Ravi de vous revoir!</h5></p>
            <label for="connexion">Se connecter :</label>
            
            <select id="connexion" name="connexion" required>
                <option value="">Sélectionnez un type de connexion</option>
                <option value="client">Client</option>
                <option value="administrateur">Administrateur</option>
            </select>
            <button type="submit">Choisir</button>
        </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $connexion = $_POST['connexion'];
                    switch ($connexion) {
                        case 'client':
                            header("Location: ../controleurs/pageLogin.php");
                            exit;
                        case 'administrateur':
                            header("Location: ../controleurs/pageLoginAd.php");
                            exit;
                        default:
                            echo "Sélectionnez un type de connection";
                            break;
                    }
                }
            ?>
        </div>

        <div class="line"></div>
            <!--***Si le compte est nouveau***-->
        <div class="signup">
        <form>
           <p><h3>Nouveau à BeautyLife? <br> Remplissez ce formulaire avec vos informations puis cliquez sur créer un compte. </h3>
            <h5>Nous sommes impatients de vous compter parmi les membres de notre communauté !</h5></p>

            <br />
            <button type="submit" class="button"><a href="../controleurs/pageSignup.php">Créer un compte</a></button>
        </form>
        </div> 
    </div>

</body>
</html>