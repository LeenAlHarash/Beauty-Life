<?php
$connexion = connexionBD();
$chemin = '../images/produits/';
$jpg = '.jpg';

function tous($connexion, $chemin, $jpg, $filtre = 'default', $minPrice = null, $maxPrice = null) {
    $queryStr = "SELECT * FROM produit";
    $params = [];

    // Add price range conditions
    $conditions = [];
    if ($minPrice !== null && $minPrice !== '') {
        $conditions[] = "prix >= :minPrice";
        $params['minPrice'] = $minPrice;
    }
    if ($maxPrice !== null && $maxPrice !== '') {
        $conditions[] = "prix <= :maxPrice";
        $params['maxPrice'] = $maxPrice;
    }
    if (!empty($conditions)) {
        $queryStr .= " WHERE " . implode(' AND ', $conditions);
    }

    // Add sorting criteria
    if ($filtre == 'prix_asc') {
        $queryStr .= " ORDER BY prix ASC";
    } elseif ($filtre == 'prix_desc') {
        $queryStr .= " ORDER BY prix DESC";
    } elseif ($filtre == 'nouveautes') {
        $queryStr .= " ORDER BY date_creation DESC";
    }

    // Prepare and execute the query
    $query = $connexion->prepare($queryStr);
    $query->execute($params);
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    // Display products
    foreach($produits as $prod) {
        echo '<div class="produit">';
        echo '<h1 class="titre">' . ($prod['nom']) . "</h1>";
        echo '<img src="' . ($chemin . $prod['url']) . $jpg . '"/>';
        echo "<h3>" . ($prod['prix']) . "$" . "</h3>";
        echo "<p class='description'>" . ($prod['description']) . "</p>";
        echo '<form method="post">';
        echo '<input type="hidden" name="nom" value="' . ($prod['nom']) . '">';
        echo '<input type="hidden" name="prix" value="' . ($prod['prix']) . '">';
        echo '<input type="hidden" name="quantity" value="1">';
        echo '<button class="ajtpanier" type="submit" name="addItem"><i class="fas fa-plus"></i></button>';
        echo '</form>';
        echo '</div>';
    }
}



function hommes($connexion, $chemin, $jpg, $filtre = 'default', $minPrice = null, $maxPrice = null) {
    $queryStr = "SELECT * FROM produit WHERE codeC = 'HM'";
    $params = [];

    // Add price range conditions
    $conditions = [];
    if ($minPrice !== null && $minPrice !== '') {
        $conditions[] = "prix >= :minPrice";
        $params['minPrice'] = $minPrice;
    }
    if ($maxPrice !== null && $maxPrice !== '') {
        $conditions[] = "prix <= :maxPrice";
        $params['maxPrice'] = $maxPrice;
    }
    if (!empty($conditions)) {
        $queryStr .= " AND " . implode(' AND ', $conditions);
    }

    // Add sorting criteria
    if ($filtre == 'prix_asc') {
        $queryStr .= " ORDER BY prix ASC";
    } elseif ($filtre == 'prix_desc') {
        $queryStr .= " ORDER BY prix DESC";
    } elseif ($filtre == 'nouveautes') {
        $queryStr .= " ORDER BY date_creation DESC";
    }

    // Prepare and execute the query
    $query = $connexion->prepare($queryStr);
    $query->execute($params);
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    // Display products
    foreach ($produits as $prod) {
        $nom = htmlspecialchars($prod['nom'], ENT_QUOTES, 'UTF-8');
        $prix = htmlspecialchars($prod['prix'], ENT_QUOTES, 'UTF-8');
        $description = htmlspecialchars($prod['description'], ENT_QUOTES, 'UTF-8');
        $url = htmlspecialchars($chemin . $prod['url'], ENT_QUOTES, 'UTF-8') . $jpg;

        echo '<div class="produit">';
        echo '<h1 class="titre">' . $nom . '</h1>';
        echo '<img src="' . $url . '"/>';
        echo '<h3>' . $prix . '$' . '</h3>';
        echo '<p class="description">' . $description . '</p>';
        echo '<form method="post">';
        echo '<input type="hidden" name="nom" value="' . $nom . '">';
        echo '<input type="hidden" name="prix" value="' . $prix . '">';
        echo '<input type="hidden" name="quantity" value="1">';
        echo '<button class="ajtpanier" type="submit" name="addItem"><i class="fas fa-plus"></i></button>';
        echo '</form>';
        echo '</div>';
    }
}


function femmes($connexion, $chemin, $jpg, $filtre = 'default', $minPrice = null, $maxPrice = null) {
    $queryStr = "SELECT * FROM produit WHERE codeC = 'FW'";
    $params = [];

    // Add price range conditions
    $conditions = [];
    if ($minPrice !== null && $minPrice !== '') {
        $conditions[] = "prix >= :minPrice";
        $params['minPrice'] = $minPrice;
    }
    if ($maxPrice !== null && $maxPrice !== '') {
        $conditions[] = "prix <= :maxPrice";
        $params['maxPrice'] = $maxPrice;
    }
    if (!empty($conditions)) {
        $queryStr .= " AND " . implode(' AND ', $conditions);
    }

    // Add sorting criteria
    if ($filtre == 'prix_asc') {
        $queryStr .= " ORDER BY prix ASC";
    } elseif ($filtre == 'prix_desc') {
        $queryStr .= " ORDER BY prix DESC";
    } elseif ($filtre == 'nouveautes') {
        $queryStr .= " ORDER BY date_creation DESC";
    }

    // Prepare and execute the query
    $query = $connexion->prepare($queryStr);
    $query->execute($params);
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    // Display products
    foreach($produits as $prod) {
        echo '<div class="produit">';
        echo '<h1 class="titre">' . ($prod['nom']) . "</h1>";
        echo '<img src="' . ($chemin . $prod['url']) . $jpg . '"/>';
        echo "<h3>" . ($prod['prix']) . "$" . "</h3>";
        echo "<p class='description'>" . ($prod['description']) . "</p>";
        echo '<form method="post">';
        echo '<input type="hidden" name="nom" value="' . ($prod['nom']) . '">';
        echo '<input type="hidden" name="prix" value="' . ($prod['prix']) . '">';
        echo '<input type="hidden" name="quantity" value="1">';
        echo '<button class="ajtpanier" type="submit" name="addItem"><i class="fas fa-plus"></i></button>';
        echo '</form>';
        echo '</div>';
    }
}
?>