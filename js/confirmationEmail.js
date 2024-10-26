function envoyerConfirmation() {
    // Empêcher le formulaire de se soumettre pour voir l'alerte
    event.preventDefault();

    // Récupération de l'adresse e-mail saisie 
    var emailField = document.getElementById('email');

    // Vérification que le champ e-mail est bien rempli
    if (emailField && emailField.value) {
        // Affichage d'une alerte avec l'adresse e-mail saisie
        alert("Un e-mail de confirmation sera envoyé à l'adresse : " + emailField.value);
    } else {
        // Affichage d'une alerte si le champ e-mail est vide
        alert("Veuillez entrer une adresse e-mail pour recevoir la confirmation.");
    }
}

// Ajout d'un écouteur d'événements si nécessaire afin de s'assurer que le formulaire ne se soumet pas directement
document.getElementById('confirmationForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Empêcher la soumission réelle du formulaire afin que l'alerte soit visible
    envoyerConfirmation();
});