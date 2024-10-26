<?php
// Classe contenant la fonction statique qui gère les contrôleurs spécifiques

class ManufactureControleur {
    // Méthode qui crée une instance du contrôleur associé à l'action et le retourne
    public static function creerControleur($action) {
        echo "Action: " . $action; // Debugging output to check the action parameter
        switch ($action) {
            case 'voirAdministrateur':
                return new PageAdministrateur();
            case 'voirAdresse':
                return new PageAdresse();
            case 'voirLogin':
                return new PageLogin();
            case 'voirLoginAd':
                return new PageLoginAd();
            case 'voirLogout':
                return new PageLogout();
            case 'voirSignup':
                return new PageSignup();
            default:
                return null;
        }
    }
}
?>