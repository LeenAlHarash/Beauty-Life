<?php
echo "<!DOCTYPE html>";
echo "<html lang='fr'>";

// ************************ HEAD *******************************
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<link rel='stylesheet' href='../CSS/CssServiceC.css' />";
echo "<title>Service à la clientèle</title>";
echo "</head>";

// ************************ BODY *******************************
echo "<body>";
echo "<div class='container'>"; // Added container div

// Section pour le formulaire de contact
echo <<<HTML
<div style='margin-bottom: 20px;'>
    <h1>Contacter le service client</h1>
    <h3>En cas de problème ou de question, n'hésitez pas à nous contacter via le formulaire ci-dessous :</h3>

    <!-- Formulaire Contact -->
    <form action='#' method='post'>
        <label for='email'>Email :</label><br>
        <input type='email' id='email' name='email' placeholder='Votre courriel' required><br><br>
        <label for="message">Message :</label><br>
        <textarea id='message' name='message' rows='12' cols='70' placeholder=' Dites nous comment nous pouvons vous aider.' required></textarea><br><br>

        <!-- Bouton pour soumettre le formulaire -->
        <button type='submit' class='button'>Envoyer</button>
    </form>
</div>
HTML;

// Pop-up de confirmation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo <<<HTML
    <script type="text/javascript">
        alert("Message reçu ! Prenez en considération que le message a été envoyé avec succès & vous recevrez une réponse dans un délai de 3 à 5 jours ouvrables.");
    </script>
HTML;
}

echo "</div>"; // Close container div

echo "</body>";
echo "</html>";
?>
