<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Color generator</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="root">
      <h2>Toutes les couleurs</h2>
      <?php
      // Bonus 4
      // couleur web garanties
      for ($caractere = 0; $caractere < 16; $caractere++) { 
        $listeCaracteres[] = dechex($caractere);
      }

      $nbDiv = 0;

      for ($indiceRed = 0; $indiceRed < 16; $indiceRed+=3) { 
      
        $red = $listeCaracteres[$indiceRed];
        for ($indiceGreen = 0; $indiceGreen < 16; $indiceGreen+=3) { 
          
          $green = $listeCaracteres[$indiceGreen];
          for ($indiceBlue = 0; $indiceBlue < 16; $indiceBlue+=3) { 
            $blue = $listeCaracteres[$indiceBlue];

            //$listeCouleurs[] = '#'.$red.$green.$blue;
            $couleur = '#'.$red.$green.$blue;

            //Bonus 2 : afficher la div avec la bonne couleur
            echo "<div class='box' style='background-color:$couleur;'> $couleur </div>";
            $nbDiv++;
          }
        }
      }

      echo $nbDiv;

      //var_dump($listeCouleurs);

      ?>
      <div class="clear"></div>-->
    </div>
	</body>
</html>