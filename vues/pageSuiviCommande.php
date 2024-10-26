<?php  
require '../modele/DAO/functionUtilisateur.php';

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errors = login($_POST);
	
	if(count($errors) == 0){
		header("Location: ../vues/pageProfile.php");
		die;
	}
}
?>

<!DOCTYPE html>
<html>
<!-- ************************ HEAD ******************************* -->
<head>
    <meta charset='utf-8'>
    <title>Suivi de commande</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' media='screen' href='../css/CssSuiviC.css'>
</head>
<!-- ************************ BODY ******************************* -->
<body>
    
    <div style="text-align: center;">
        <img src='../images/BeautyLife Logo.png' alt="logo" width="150px" height="150px"/>
        
    </div>

    <center><h1>Suivi de commande</h1></center>

    <div class="paragraph"> 
        <p>Pour suivre l'état de votre commande, veuillez vous connecter à votre compte utilisateur.</p>
        <p>Une fois connecté, vous pourrez consulter les détails de votre commande ainsi que son état actuel.</p>
        <p>Prenez compte que vous êtes informés par des notifications via votre e-mail à chaque étape clé du processus de livraison
            qui sont les suivantes ci-dessous.</p>
        <ul>
            <li>Livré</li>
            <li>Expédition</li>
            <li>En cours de livraison</li>
        </ul>
    </div>


    <div class="box-container">
    <div class="box">
        <!-- Formulaire de connexion -->
        <center><h1>Connexion à votre compte :</h1></center>
        <div class="container">
            <form action=" " method="post">
                <label for="email">Votre courriel :</label><br>
                <input type="email" id="courriel" name="courriel" required>
                <br/><br/>

                <label for="password">Password :</label><br>
                <input type="password" id="mot_passe" name="mot_passe">
                <br/><br/>

                <button type="submit"> Se connecter </button>
            </form>
        </div>
    </div>

    <div class="line"></div>

    <div class="box">
        <!-- Code pour les notifications par e-mail -->
        <center><h1>Notifications par e-mail :</h1></center>

        <form>
            <p>Choisissez les étapes pour lesquelles vous souhaitez recevoir des notifications :</p>
            <div class="checkbox">
                <input type="checkbox" id="livre" name="livre">
                <label for="livre">Livré</label>

                <input type="checkbox" id="expedition" name="expedition">
                <label for="expedition">Expédition</label><br>

                <input type="checkbox" id="enCoursLivraison" name="enCoursLivraison">
                <label for="enCoursLivraison">En cours de livraison</label><br>
            </div>
            <br><br>
            <button type="button" onclick="alert('Vous êtes désormais inscrit aux notifications par e-mail pour les étapes sélectionnées.')">
                S'abonner aux notifications</button>
        </form>
    </div>
</div>
    
</body>
</html>