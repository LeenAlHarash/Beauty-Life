<?php  
require '../modele/DAO/functionAdmin.php';

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errors = login($_POST);
	
	if(count($errors) == 0){
		header("Location: ../controleurs/pageAdministrateur.php");
		die;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="../CSS/CssUtilisateur.css" />
</head>
<body>
	<h1>Page Login Admin</h1>
	<p><h2>Veuillez vous connecter pour commencer les modifications</h2></p>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			<input type="text" name="numDA" placeholder="Entrer votre numero DA"><br>
			<input type="password" name="mot_passe" placeholder="Mot de passe"><br>
			<br>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>