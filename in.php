<?php
//session_start(); 

// Inclusion de la manufacture de contrôleur (qui importe déjà tous les contrôleurs)
include_once("controleurs/manufacturecontroleur.class.php");

// Obtenir l'action dans la variable $action, après avoir vérifié qu'elle existe
$action = $_GET['action'] ?? '..\vues\pageAccueil.php';  // Utilisation de l'opérateur null coalescing pour simplifier le code

// Créer le contrôleur obtenu de la manufacture du contrôleur
$controleur = ManufactureControleur::creerControleur($action);

// Exécuter l'action et obtenir le nom de la vue dans la variable $nomVue
$nomVue = $controleur->executerAction();

// Construire le chemin de la vue
$nomVue = "vues/" . $nomVue . ".php";  

// Inclure la bonne vue si elle existe
if (file_exists($nomVue)) {
    include_once($nomVue);
} else {
    echo "Vue non trouvée : $nomVue";
}
?>