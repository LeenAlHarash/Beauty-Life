//choisir un type de login
document.getElementById('loginForm').addEventListener('submit', function(event) {
    var selectedValue = document.getElementById('connection').value;
    if (selectedValue === "") {
        alert("Sélectionnez un type de connexion");
        event.preventDefault();
    }
});