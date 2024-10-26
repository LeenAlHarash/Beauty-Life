<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <title>Page de paiement</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/CssPaiement.css'>
    <script src="../js/paiement.js"></script>
    <script src="../js/confirmationEmail.js"></script>
</head>

<body>
    
    <div style="text-align: center;">
        <img src="../images/BeautyLife Logo.png" alt="logo" width="150px" height="150px"/>
    </div>
    
    <center>
        <h3>Veuillez effectuer votre paiement selon le mode choisi et entrer vos informations de livraison</h3>
    </center>

    <form id="paymentForm" method="post">
        <label for="paymentMethod">Choisissez un mode de paiement :</label>
        <select id="paymentMethod" name="paymentMethod" required>
            <option value="">Sélectionnez un type de paiement</option>
            <option value="carte_credit">Carte de crédit</option>
            <option value="Mastercard">Mastercard</option>
            <option value="paypal">Paypal</option>
        </select>
        <button type="submit">Choisir</button>
    </form><br>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paymentMethod = $_POST['paymentMethod'];
            switch ($paymentMethod) {
                case 'carte_credit':
                    echo "<div id='carteCredit' style='text-align: center;'>";
                    echo "<label for='cardNumber'>Numéro de carte :</label><br>";
                    echo "<input type='text' id='cardNumber' name='cardNumber' placeholder='0000-0000-0000-0000' required><br><br>";
                    echo "<label for='expiryDate'>Date d'expiration :</label><br>";
                    echo "<input type='text' id='expiryDate' name='expiryDate' placeholder='MM/AA' required><br><br>";
                    echo "<label for='cvv'>CVV :</label><br>";
                    echo "<input type='text' id='cvv' name='cvv' placeholder='000' required><br><br>";
                    echo "</div>";
                    break;
                case 'Mastercard':
                    echo "<div id='MasterCard' style='text-align: center;'>";
                    echo "<label for='cardNumber'>Numéro de carte :</label><br>";
                    echo "<input type='text' id='cardNumber' name='cardNumber' placeholder='0000-0000-0000-0000' required><br><br>";
                    echo "<label for='expiryDate'>Date d'expiration :</label><br>";
                    echo "<input type='text' id='expiryDate' name='expiryDate' placeholder='MM/AA' required><br><br>";
                    echo "<label for='cvv'>CVV :</label><br>";
                    echo "<input type='text' id='cvv' name='cvv' placeholder='000' required><br><br>";
                    echo "</div>";
                    break;
                case 'paypal':
                    echo "<div id='paypal' style='text-align: center;'>";
                    echo "<label for='paypalEmail'>Adresse e-mail PayPal :</label><br>";
                    echo "<input type='email' id='paypalEmail' name='paypalEmail' placeholder='tomdel432@gmail.com' required><br><br>";
                    echo "</div>";
                    break;
                default:
                    echo "Sélectionnez un mode de paiement.";
                    break;
            }
        }
    ?>
  
  <div style='text-align: center;'>--------------------------------------------------------------------</div>
    <br><br><br>
  
    <!-- Contenu pour le point 7. Confirmation de commande par e-mail -->
    <form id="confirmationForm">
        <label for="email">Saisissez votre adresse e-mail pour recevoir une confirmation :</label><br>
        <input type="email" id="email" name="email" placeholder="tomdel432@gmail.com" required><br><br>
        <button type="submit" onclick="envoyerConfirmation()">Envoyer confirmation par e-mail</button>
    </form><br>
    
    <!-- Bouton pour soumettre le formulaire -->
    <button type="submit" id="confirmButton"> Confimer </button>
     
    <script>
        document.getElementById('paymentMethod').value = '<?php echo isset($_POST['paymentMethod']) ? $_POST['paymentMethod'] : ''; ?>';
    </script>

</body>
</html>