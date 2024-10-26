//choisir un type de paiement
document.getElementById('paymentForm').addEventListener('submit', function(event) {
    var selectedValue = document.getElementById('connection').value;
    if (selectedValue === "") {
        alert("Sélectionnez un mode de paiement");
        event.preventDefault();
    }
});