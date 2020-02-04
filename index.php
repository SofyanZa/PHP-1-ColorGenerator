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
      <h2>Nuances de gris</h2>
      <?php
      // Etape 1: lister dans une variable tous les caractères utilisables en hexadecimal
      //$listeCaracteres = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];


      //Bonus 3 : générer la même liste, mais avec une boucle
      
      for ($caractere = 0; $caractere < 16; $caractere++) { 
        $listeCaracteres[] = dechex($caractere);
      }


      // Etape 2 : afficher toutes les nuances de gris possibles.

      for ($indexCarac = 0; $indexCarac < 16; $indexCarac++) { 
        $caracCourant = $listeCaracteres[$indexCarac];

        $gris = '#'.$caracCourant.$caracCourant.$caracCourant;
        $nuancesDeGris[] = $gris;

        //$nuancesDeGris[] = '#'.$caracCourant.$caracCourant.$caracCourant;

        // Etape 3 (alt1): créer un div en lui appliquant le gris courant
        //echo "<div class='box' style='background-color:$gris;'>$gris</div>";
        
        //echo '<div class="box" style="background-color:' . $gris . ';"></div>';

      }

      //Etape 3 (alt2): pacourir les nuances de gris pour générer les div
      for($indiceGris=0; $indiceGris<16; $indiceGris++)
      {
          echo "<div class=\"box\" style=\"background-color:"."$nuancesDeGris[$indiceGris]\">"."$nuancesDeGris[$indiceGris]"."</div>";
      }


      
      ?>
      <div class="clear"></div>
      <h2>Toutes les couleurs</h2>
      <?php
      // Bonus 1
      // couleur CSS : #RGB

      for ($indiceRed = 0; $indiceRed < 16; $indiceRed++) { 
      
        $red = $listeCaracteres[$indiceRed];
        for ($indiceGreen = 0; $indiceGreen < 16; $indiceGreen++) { 
          
          $green = $listeCaracteres[$indiceGreen];
          for ($indiceBlue = 0; $indiceBlue < 16; $indiceBlue++) { 
            $blue = $listeCaracteres[$indiceBlue];

            //$listeCouleurs[] = '#'.$red.$green.$blue;
            $couleur = '#'.$red.$green.$blue;

            //Bonus 2 : afficher la div avec la bonne couleur
            echo "<div class='box' style='background-color:$couleur;'> $couleur </div>";
          }
        }
      }

      //var_dump($listeCouleurs);

      ?>
      <div class="clear"></div>-->
    </div>
	</body>
</html>
