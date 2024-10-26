<?php
include '../modele/DAO/functions.php';

//// chercher automatiquement les informations 
$stores = database_run("SELECT nomM, adresse, numT FROM magasin");
?>

<!DOCTYPE html>
<html lang="fr">
<!-- ************************ HEAD ******************************* -->
<head>
    <meta charset="UTF-8" />
    <title> - Beauty Life - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/CSSmagasin.css" />
</head>
<!-- ************************ BODY ******************************* -->
<body>
    <div style="text-align: center;">
        <img src='../images/BeautyLife Logo.png' alt="logo" width="150px" height="150px"/>
    </div>
    
    <h2>Il existe plusieurs emplacements de Beauty Life:</h2>
    <br/>

    <ul type="square">
        <?php foreach ($stores as $store): ?>
            <li><?= $store->nomM ?>:<br/>
                <?= $store->adresse ?><br/>
                <?= $store->numT ?>
            </li><br/><br/>
        <?php endforeach; ?>
    </ul>
</body>
</html>