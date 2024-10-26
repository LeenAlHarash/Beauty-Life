<?php
include '../modele/DAO/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addItem'])) {
    // Get the submitted item information
    $name = $_POST['nom'];
    $price = $_POST['prix'];
    $quantity = $_POST['quantity'];

    // Add the item to the cart
    addItemToCart($name, $price, $quantity);
}

$minPrice = isset($_POST['minPrice']) ? $_POST['minPrice'] : '';
$maxPrice = isset($_POST['maxPrice']) ? $_POST['maxPrice'] : '';
$filtre = isset($_POST['filtre']) ? $_POST['filtre'] : 'default';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produits et Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/CssProduits.css" />
    <script src="../js/searchProducts.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <div class="navbar-container">
    <div class="navbar">
            <?php
                include '../vues/inclusions/bannier.php';
            ?>
        </div>

    </div>

    <!-- Product Section -->
    <div class="page_produit-container">
        <div class="page_produit">
            <div class="barre">
                <!-- Formulaire de filtre -->
                <form method="post" id="filtreForm" style="display: flex; align-items: center;">
                    <div style="flex: 1;">
                        <label for="filtre">Filtrer par :</label>
                        <select name="filtre" id="filtre" onchange="document.getElementById('filtreForm').submit()">
                            <option value="default">Sélectionnez un filtre</option>
                            <option value="prix_asc" <?php if ($filtre == 'prix_asc') echo 'selected'; ?>>Prix: bas à haut</option>
                            <option value="prix_desc" <?php if ($filtre == 'prix_desc') echo 'selected'; ?>>Prix: haut à bas</option>
                        </select>
                    </div>
                    
                    <div style="flex: 1; margin-left: 20px;"> <!-- Adjust margin as needed -->
                        <label for="minPrice">Prix minimum :</label>
                        <input type="text" name="minPrice" id="minPrice" value="<?php echo htmlspecialchars($minPrice); ?>">
                    </div>
                    
                    <div style="flex: 1; margin-left: 20px;"> <!-- Adjust margin as needed -->
                        <label for="maxPrice">Prix maximum :</label>
                        <input type="text" name="maxPrice" id="maxPrice" value="<?php echo htmlspecialchars($maxPrice); ?>">
                    </div>
                    
                    <button type="submit" style="margin-left: 20px;">Appliquer</button>
                </form>
            </div>

            <div class="produits">
                <?php
                include '../modele/DAO/AffichageProduitsTous.php';
                // Call the function to display all products with the selected filter and price range
                hommes($connexion, $chemin, $jpg, $filtre, $minPrice, $maxPrice);
                ?>
            </div>
        </div>
    </div>
</body>
</html>