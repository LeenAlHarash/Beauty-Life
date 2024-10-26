<?php
    const BD_HOTE = "localhost";
    const BD_UTILISATEUR = "root";
    const BD_MOT_PASSE = "root";
    const BD_NOM = "beautylife";    

    $conn = "mysql:host= localhost; dbname=beautylife";

    if (!$conn){
        echo "Erreur de connexion";
    }
?>

<?php
    try {	
        // Connexion et configuration
        $connexion = new PDO('mysql:host=localhost;dbname=beautylife', "root", "root");
        $connexion->exec("SET character_set_results = 'utf8'");	
    } catch (Exception $e) {
        echo "<h3 class='erreur'>Erreur de connexion avec la BD</h3>";
        $connexion=null;
    }
?>	 