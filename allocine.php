<?php

$tableau =  array(
array(
"titre" => "Spyder Man, No way home",
"realisateur"=>"John Wats",
"affiche"=> "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSwa1l3P80-ML57Ln1ZKdIE6ldjTVRBPe_cFbaSEhwVrJTmsCpG"
),
array(
"titre" => "The kings man ",
"realisateur"=>"Matthew Vaughn",
"affiche"=> "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQPAldMAhweuo8XKCnVw9MWFDgS6FO1ymTkkSBeS3TEK5jPaFi6"
),
array(
"titre" => "355",
"realisateur"=>"Simon Kinberg",
"affiche"=> "https://media.services.cinergy.ch/media/box1600/92b039ba61d113104a480703de1df94d2f42350d.jpg"
),
array(
"titre" => "Mes très chers enfants",
"realisateur"=>" Alexandra Leclère",
"affiche"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaBGlKNKABhMQhrsniDBb2lMewoUcjbDSOiA0Y22q-K2v0nKD6"
),
array(
"titre" => "Le Test",
"realisateur"=>"Emmanuel Poulain-Arnaud",
"affiche"=> "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRwieFN8rRhNMWYig3gOdKMysRDdZsSH24S4WXmIpQSkLgkgcRC"
),
array(
"titre" => "Les Tuches 4",
"realisateur"=>"Olivier Baroux",
"affiche"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqnDIbtKm7yUpJ1BSwcXOx-przUYZCkXHMvobXkETFFU6Qq2jC"
),
array(
"titre" => "Belle",
"realisateur"=>"Mamoru Hosoda",
"affiche"=> "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTylHF_hT-GHTupWBRrpB-e9g1_PrKF78T6on59NarzjszxG8fN"
),
array(
"titre" => "La Méthode Williams",
"realisateur"=>"Reinaldo Marcus Green",
"affiche"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpXlPN92JBhX-yj-hwjR8-xwMXR7f45RoZuepaC1ybFrvXf_jC"
)

);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> AlloCiné</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
	<div class="photo">
		<img src="https://assets.allocine.fr/skin/img/allocine/logo-main-ab1b33daf0.svg">
	</div>
	<div class="recherche">
		<form method="get" action="https://www.google.com/search">
                  <input type="text" name="q" size="40"  placeholder="Rechercher un film, une serie, une star...">
                </form> 
	</div>
	 <div class="menu">
	 	<nav>
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href=>News</a></li>
                <li><a href="">Serie</a></li>
                <li><a href="">Film</a></li>
                <li><a href="">Streaming</a></li>
                <li><a href="">DVD</a></li>
                <li><a href="">VOD</a></li>
            </ul>
        </nav>
	 </div>
	</header>
<body>
	<section class="container">
		<?php 

 foreach ($tableau as $film)

 {
 	echo("<div class=\"film\">\n");
    echo("<img src=\"".$film["affiche"]."\" alt=\"Affiche du film ".$film["titre"]."\" />\n");
    echo("<h3>".$film["titre"]."</h3>\n");
    echo("<h4>De ".$film["realisateur"]."</h4>\n");
    echo("</div>\n");

}

		?>
		
	</section>

</body>
</html>