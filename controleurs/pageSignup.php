<?php  
include '../modele/DAO/functionUtilisateur.php';

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errors = signup($_POST);

	if(count($errors) == 0){
		header("Location: ../controleurs/pageAdresse.php");
		die;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link rel="stylesheet" href="../CSS/CssUtilisateur.css" />
</head>
<body>
	<h1>Création du compte</h1>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			<input type="text" name="nomU" placeholder="Nom d'utilisateur"><br>
			<input type="text" name="courriel" placeholder="Courriel"><br>
			<input type="password" name="mot_passe" placeholder="Mot de passe"><br>
			<input type="password" name="mot_passe2" placeholder="Mot de passe"><br>

			<br>
			<input type="submit" value="Signup">
		</form>
	</div>
</body>
</html>