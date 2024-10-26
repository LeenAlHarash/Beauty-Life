//page panier pour les boutons

//ajouter des produits
function addQuantity(productName) {
    var quantitySpan = document.getElementById('quantity_' + productName);
    var currentQuantity = parseInt(quantitySpan.innerText);
    var newQuantity = currentQuantity + 1;
    quantitySpan.innerText = newQuantity;
}


//enlever des produits
function removeProduct(productName) {
    var quantitySpan = document.getElementById('quantity_' + productName);
    var currentQuantity = parseInt(quantitySpan.innerText);
    var newQuantity = Math.max(0, currentQuantity - 1);
    quantitySpan.innerText = newQuantity;
      // Enlever le produit si la qtn=0
    if (newQuantity === 0) {
    var article = document.querySelector('productName');
    article.parentNode.removeChild(article);
  }
}


//supprimer un produit
function deleteProduct(){
  
}