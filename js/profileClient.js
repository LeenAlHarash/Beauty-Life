function CGU() {
    var url = "../vues/pageCGU.php";
    var width = 550;
    var height = 400;
    var left = (window.innerWidth - width) / 3;
    var top = (window.innerHeight - height) / 3;
    //affichage
    window.open(url, "_blank", "width=" + width + ", height=" + height + ", left=" + left + ", top=" + top);
}


function supprimerCompte(){
  if (confirm("Etes vous sur de vouloir supprimer votre compte?")) {
      alert("Désolé de vous voir partir. Votre compte sera supprimé dans les 30 jours.");
      window.location.href = "../controleurs/pageLogout.php";
  } else {
      ;
  }
}


function commandeHistory(){
    var url = "../vues/pageHistoriqueC.php";
    var width = 550;
    var height = 400;
    var left = (window.innerWidth - width) / 3;
    var top = (window.innerHeight - height) / 3;
    //affichage
    window.open(url, "_blank", "width=" + width + ", height=" + height + ", left=" + left + ", top=" + top);
}


function modifyAdresse(){
    var newNumCivic = prompt("Entrer votre numero civic:");
    if (newNumCivic !== null) {
      document.getElementById("FormA").elements["newNumCivic"].value = newNumCivic;
      document.getElementById("FormA").submit();
    }

    var newRue= prompt("Entrer votre Rue:");
    if (newRue !== null) {
      document.getElementById("FormA").elements["newRue"].value = newRue;
      document.getElementById("FormA").submit();
    }

    var newVille = prompt("Entrer le nom de ville:");
    if (newVille !== null) {
      document.getElementById("FormA").elements["newVille"].value = newVille;
      document.getElementById("FormA").submit();
    }

    var newCodeP = prompt("Entrer votre code postal:");
    if (newCodeP !== null) {
      document.getElementById("FormA").elements["newCodeP"].value = newCodeP;
      document.getElementById("FormA").submit();
    }
}