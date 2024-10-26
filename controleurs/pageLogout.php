<?php 
session_start();

	if(isset($_SESSION['USER'])){
		unset($_SESSION['USER']);
		unset($_SESSION['LOGGED_IN']);
	
		echo '<script> alert("Vous etes deconnecte, esperons de vous revoir bientot!"); </script>';
		echo '<meta http-equiv= "refresh" content= "0; URL=../vues/pageAccueil.php">'; //sortir la page dés qu'on clique ok

	} else {
		header("Location: ../vues/pageAccueil.php");
		exit;
	}

?>