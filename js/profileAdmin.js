function supprimerCompte(){
    if (confirm("Etes vous sur de vouloir supprimer votre compte?")) {
        alert("Désolé de vous voir partir. Votre compte sera supprimé dans les 30 jours.");
        window.location.href = "../controleurs/pageLogout.php";
    } else {
        ;
    }
}


function ajouterProduit() {
    document.getElementById('product').innerHTML = `
        <div id='chgProduit'>
            <label for='USG'>USG de produit :</label><br>
            <input type='text' id='USG' name='USG' placeholder='AB1234' required><br><br>
            
            <label for='nom'>Nom de produit :</label><br>
            <input type='text' id='nom' name='nom' placeholder='Nom Produit' required><br><br>
            
            <label for='description'>Description de produit :</label><br>
            <input type='text' id='description' name='description' placeholder='Le produit sert a nettoyer' required><br><br>
            
            <label for='type'>Type de produit :</label><br>
            <input type='text' id='type' name='type' placeholder='Parfum' required><br><br>
            
            <label for='prix'>Prix :</label><br>
            <input type='text' id='prix' name='prix' placeholder='50' required><br><br>
            
            <label for='categorie'>Catégorie de produit :</label><br>
            <input type='text' id='categorie' name='categorie' placeholder='HM' required><br><br>
            
            <label for='UPC'>UPC :</label><br>
            <input type='text' id='UPC' name='UPC' placeholder='123456789102' required><br><br>
            
            <label for='URL'>Image URL :</label><br>
            <input type='text' id='URL' name='URL' placeholder='3' required><br><br>
        </div> `;
}


function ajouterMagasin() {
    document.getElementById('store').innerHTML = `
        <div id='chgMagasin'>
            <label for='nomM'>Nom de magasin :</label><br>
            <input type='text' id='nomM' name='nomM' placeholder='Beauty Life' required><br><br>
            
            <label for='adresse'>Adresse :</label><br>
            <input type='text' id='adresse' name='adresse' placeholder='1234 LaSalle, Quebec' required><br><br>
            
            <label for='numT'>Numero de telephone :</label><br>
            <input type='text' id='numT' name='numT' placeholder='(438) 123-5652' required><br><br>
        </div> `;
}