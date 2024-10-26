<!DOCTYPE html>
<html lang="fr">
<!-- ************************ HEAD ******************************* -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de produits</title>
    <link rel="stylesheet" href="../CSS/CssPanier.css" />
    <script src="../js/product.js"></script>
</head>
<!-- ************************ BODY ******************************* -->
<body>

  <div style="text-align: center;">
    <img src='../images/BeautyLife Logo.png' alt="logo" width="150px" height="150px"/>
  </div>

    <div id="summaryBox">
        <h1>Récapitulatif des Produits</h1>
        <div>
            <!-- Contenu du point 6 "Passage de commande" -->
            <main>
                <!-- Contenu du panier -->
                <div>
                    <!-- Affichage des articles sélectionnés -->
                    <div class="article">
                        <?php
                        session_start();
                        $totalPrice = 0;
                        // Check if the cart is not empty
                        if (!empty($_SESSION['cart'])) {
                            // Loop through the cart items
                            foreach ($_SESSION['cart'] as $key => $item) {
                                $productName = htmlspecialchars($item['name']);
                                $productPrice = htmlspecialchars($item['price']);
                                $productQuantity = htmlspecialchars($item['quantity']);
                        
                                // Display the item details
                                echo '<div class="article">';
                                echo '<h3>Nom du produit: ' . $productName . '</h3>';
                                echo '<p>Prix: ' . $productPrice . '</p>';
                                echo '<p>Quantité: <span id="quantity_' . $productName . '">' . $productQuantity . '</span></p>';
                                echo "<button class='button' onclick=\"addQuantity('$productName')\">Ajouter produit</button>";
                                echo "<button class='button' onclick=\"removeProduct('$productName')\">Enlever Produit</button>";
                                echo '</div>';
                                
                                // Calculate total price
                                $totalPrice += $productPrice * $productQuantity;                                
                            }
                            // Display total price
                            echo '<p>Prix Total: ' . $totalPrice . ' $</p>';
                        } else {
                            // Display a message if the cart is empty
                            echo '<p>Votre panier est vide.</p>';
                        }
                        ?>
                    </div>
                </div>
            </main>
        </div>

        <button class="button" >
          <a href="../vues/pagePaiement.php">Procéder au paiement</a>
        </button>
    </div>
</body>
</html>