<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_6 Part_1</title>
</head>
<body>
  <div class="container">
        <h1 class="text-danger text-center">## Exercice 6 Partie 1</h1>
        <h2>
        Créez une variable magnitude allant de 1 à 9. Gérez l'affichage selon la magnitude.
        </h2>
        <ol>
            <li>Micro-séisme impossible à ressentir.</li>
            <li>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</li>
            <li>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</li>
            <li>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</li>
            <li>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</li>
            <li>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</li>
            <li>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</li>
            <li>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</li>
            <li>Séisme capable de tout détruire sur une très vaste zone.</li>
        </ol>
        <?php
            function result (){            
                $magnitude = rand(0,9);
                echo $magnitude;

                switch($magnitude){
                    case 1 :
                        echo "Micro-séisme impossible à ressentir";
                        break;
                    case 2 :
                        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                        break;
                    case 3 :
                        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                        break;
                    case 4 :
                        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                        break;
                    case 5 :
                        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                        break;
                    case 6 :
                        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                        break;
                    case 7 :
                        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                        break;
                    case 8 :
                        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                        break;
                    case 9 :
                        echo "Séisme capable de tout détruire sur une très vaste zone.";
                        break;
                    default : 
                        echo "Pas de séisme.";
                }
    
            }
        ?>
        <!-- <p class="text-center mt-4"><?= $magnitude ?></p> -->
        <p class="text-center mt-5"><?= result() ?></p>
    </div>
</html>