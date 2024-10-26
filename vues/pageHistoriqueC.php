<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page historique de commande</title>
  <link rel="stylesheet">
  <style> body{ background-color: whitesmoke;}; </style>
</head>

<body>
    <?php
    session_start();
    // Check if the cart is not empty
        if (!empty($_SESSION['cart'])) {
            // Loop through
            foreach ($_SESSION['cart'] as $item) {
            $productName = htmlspecialchars($item['name']);
            $productPrice = htmlspecialchars($item['price']);
            $productQuantity = htmlspecialchars($item['quantity']);
                            
            // Display the item details
            echo '<div class="article">';
            echo '<h3>Nom du produit: ' . $productName . '</h3>';
            echo '<p>Prix: ' . $productPrice . '</p>';
            echo '<p>Quantité: <span id="quantity_' . $productName . '">' . $productQuantity . '</span></p>';
            echo '</div>';                                
        }
        } else {
            // Display a message
            echo '<p>Vous n\'avez pas d\'anciens achats.</p>';
        }
    ?>
</body>
</html>