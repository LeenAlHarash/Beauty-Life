<?php
// Inclure le fichier contenant les fonctions de base de données
include '../modele/DAO/functions.php';


// Récupérer les informations de commande de l'utilisateur connecté
$userId = $_SESSION['USER']->id;
$query = "SELECT * FROM commandes WHERE utilisateur_id = :userId";
$orders = database_run($query, ['userId' => $userId]);
?>

<!DOCTYPE html>
<html>
<!-- ************************ HEAD ******************************* -->
<head>
    <meta charset='utf-8'>
    <title>Suivi de commande</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/CssAccueil.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<!-- ************************ BODY ******************************* -->
<body>
    <div class="navbar">
        <?php
            include '../vues/inclusions/profileClient.php';
        ?>
    </div>

    <h2>Suivi de commande</h2>
    <?php if (!empty($orders)): ?>
        <ul>
            <?php foreach ($orders as $order): ?>
                <li>
                    <h3>Commande #<?php echo $order->id; ?></h3>
                    <p>Statut : <?php echo $order->statut; ?></p>
                    <p>Emplacement : <?php echo $order->emplacement; ?></p>
                    <!-- Ajout d'autres détails de la commande s'il y'a lieu -->
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Vous n'avez aucune commande en cours.</p>
    <?php endif; ?>

</body>
</html>