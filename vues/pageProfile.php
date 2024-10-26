<?php
	require '../modele/DAO/functionUtilisateur.php';
	check_login();
?>

<!DOCTYPE html>
<html>
<!-- ************************ HEAD ******************************* -->
<head>
	<meta charset="utf-8">
	<title>BeautyLife-Profile</title>
	<link rel="stylesheet" href="../css/CssAccueil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../js/pageAccueil.js"></script>
</head>
<!-- ************************ BODY ******************************* -->
<body>
	<?php if(check_login(false)):?>
		<div style="background-color: pink; padding: 10px;">
			<span style="font-weight: bold; font-size: 24px;">Content de vous revoir</span>
			<span style="font-weight: bold; font-size: 24px; color: blue;"><?=$_SESSION['USER']->nomU?>!</span>
		</div>
	<?php endif;?>

        <div class="navbar">
            <?php
                include '../vues/inclusions/profileClient.php';
            ?>
        </div>

        
            <!--*** Carousel Automatic ***--> 
            <div>
                <div class="slideshow-container">

                    <div class="mySlides-fade">
                        <img src='../images/Produits/1.jpg' alt="Avene" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/70.jpg' alt="ForeverDior" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/45.jpg' alt="DiorSavage" style="width:400px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/10.jpg' alt="Sigma" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/20.jpg' alt="Armani" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/30.jpg' alt="Lancome" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/40.jpg' alt="Balmain" style="width:500px; height:500px;">
                    </div>

                    <div class="mySlides-fade">
                        <img src='../images/Produits/50.jpg' alt="MaraiGalland" style="width:500px; height:500px;">
                    </div>

                </div>
                    
                <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <script>
                        let slideIndex = 0;
                        showSlides();

                        function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides-fade");
                        let dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}    
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 3000);
                        }
                    </script>
            </div>
            

            <!--*** Petite Banniere au milieu ***--> 
            <div>
                <marquee style="background-color: rgb(255, 186, 186); font-weight: bold;">
                    <font size="4" face="Ariel" font color="black">
                    15% de rabais sur tous les parfums de plus de 150$!😍 &nbsp;&nbsp;&nbsp;
                    Achetez 3 produits pour les lèvres, recevez le 4eme gratuit!😍 &nbsp;&nbsp;&nbsp;
                    20% de réduction sur les achats de plus de 200$!😍
                </marquee>
            </div>

            <br>
            <br>

            <!--*** 2- Navigation de produits ***--> 
            <div>
                <!-- 1 -->
                <div class="category"><a href="pageProduits.php">
                    <h2>Tous les produits</h2></a>
                </div>
                
                <!-- 2 -->
                <div class="category"><a href="pageProduitsH.php">
                    <h2>Produits pour Hommes</h2></a>
                </div>
                
                <!-- 3 -->
                <div class="category"><a href="pageProduitsF.php">
                    <h2>Produits pour Femmes</h2></a>
                </div>    

                <div class="category"><a href="pageNomMagasins.php">
                <h2>Nos magasins</h2></a>
                </div>
                
            </div>


            <!--*** Partie Bas ***--> 
            <div>
                <h1>Qui sommes nous?</h1>

                <center>
                    <p class="partieBas">Nous sommes une compagnie qui célèbre l'authenticité et l'estime de soi et encourage l'expression individuelle en 
                    utilisant nos produits qui inspire la confiance et le bien-être. <br/> Notre vision est d'être la destination beauté la plus appréciée de nos clients. 
                    Nous créons un environnement sûr et accueillant pour tout le monde. Vous allez adorer faire du shopping avec nous car nous avons toutes sortes de 
                    marques et de produits qui sont indispensables pour vous.</p>
                </center>
            </div>
            
            
        <div class="box">     
            <div class="right">
                <h1>Nos informations</h1>
                <center><p class="partieBas">Pour toute question sur nos heures d'ouverture et notre numéro de contact :</p></center>

                <div class="container">
                    <div>
                        <p><h2>Telephone :</h2> 514-123-4567</p>
                        <p><h2>Email :</h2> serviceclient@beautylife.com</p>
                    </div>
                <!-- Heures d'ouverture -->
                <div>
                    <h2>Heures d'ouverture</h2>
                    <ul>
                        <li>Lundi : 9h00 - 18h00</li>
                        <li>Mardi : 9h00 - 18h00</li>
                        <li>Mercredi : 9h00 - 18h00</li>
                        <li>Jeudi : 9h00 - 18h00</li>
                        <li>Vendredi : 9h00 - 18h00</li>
                        <li>Samedi : Ferme</li>
                        <li>Dimanche : Ferme</li>
                    </ul>
                </div>
            </div>
        </div>

    <div class="left">
        <h1>Conditions Générales d'utilisation (CGU)</h1>
        <center><p class="partieBas"> Pour votre protection ainsi que la notre, voici nos conditions generales d'utilisation. </p></center>
        <center><p class="partieBas">  Prenez bien le temps de les lire. Et surtout, bonne magasinage! </p></center>
        <center><a href="../vues/pageCGU.php" class="partieBas"> Cliquez ici pour accéder aux CGU </a></center>
    </div>

</body>
</html>