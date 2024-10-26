<?php  
include '../modele/DAO/functionUtilisateur.php';

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errors = adresse($_POST);

	if(count($errors) == 0){
		header("Location: ../controleurs/pageLogin.php");
		die;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adresse</title>
	<link rel="stylesheet" href="../CSS/CssUtilisateur.css" />
</head>
<body>
	<h1>Informations de l'adresse</h1>
	<p><h2>Maintenant que vous avez rempli les informations de votre compte, 
		veuillez remplir les informations de votre adresse.</h2></p>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			<input type="text" name="numCivic" placeholder="numero civic"><br>
			<input type="text" name="rue" placeholder="rue"><br>
			<input type="text" name="ville" placeholder="ville"><br>
			<input type="text" name="codeP" placeholder="codeP"><br>

			<br>
			<input type="submit" value="Signup">
		</form>
	</div>
</body>
</html>