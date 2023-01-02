<?php

// dix fois le mot machin dans $resultat

//sur la ligne suivante, le nombre de secondes dans une année complète
//
// en secondes, 27,54% du résultat précédent

// voici un tableau :
$tableau = ["rouge", "bleu", "vert", "marron", "rose"];
/// generer une table HTML complète avec une colonne "couleur" et une ligne par élément de ce tableau

//voici un autre tableau
$tableau2 = ["rouge", "bleu", "vert", "marron", "dauphin", "rose"];

// générer la meme table HTML en dessous, mais prévoir un algorythme qui n'acceptera d'afficher
// que les couleurs contenues dans le premier tableau
$resultat = "machin";
//voici un tableau associatif :
$animaux = [
        "dauphin"=>"bleu",
        "pieuvre"=>"blanc",
        "castor"=>"marron"
];
// générer une table HTML à deux colonnes : "animal" et "couleur" avec une nouvelle ligne par animal
$animauxDangereux = ["hyene", "autruche", "cobra", "requin", "crocodile"];
$animaux2 = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron",
    "requin"=>"blanc",
    "dingo"=>"brun",
    "autruche"=>"noir",
    "crocodile"=>"vert"

];
//nouvelle table HTML identique à la précédente avec une colonne supplémentaire : "danger"
//si l'animal est considéré dangereux, afficher un cercle rouge dans le <td>, sinon, un cercle vert
//boss de fin : exemple de couleur en hexadecimal : #E06910
$caracteres = "abcedfgh0123456789";
//à partir de $caracteres, générez un carré avec une couleur au hasard (differente à chaque
// rechargement de page)  (carré : div avec hauteur, largeur et background-color)
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .cercle{
            height: 20px;
            width: 20px;
            background-color: green;
            border-radius: 50%;
        }
        .rouge{
            background-color: red;
        }
    </style>
</head>
<body>
<h1>le titre de l'exercice</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea enim labore laborum suscipit voluptatem! Accusamus ad dolore ex hic iure, minus molestias neque officia, quae, quis ratione sequi ut velit.</p>

<p>Resultat : <?php echo $resultat ; ?></p>


<h2>table 1</h2>
<table class="table">
    <thead>
    <tr>
        <th>couleur</th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach($tableau as $couleur){

                echo "<tr><td>$couleur</td></tr>";

            }
        ?>
    </tbody>
</table>


<h2>table 2 : couleurs vérifiées</h2>
<table class="table">
    <thead>
    <tr>
        <th>couleur</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($tableau2 as $couleur){
        if(in_array($couleur,$tableau)){
            echo "<tr><td>$couleur</td></tr>";

        }    }
    ?>
    </tbody>
</table>

<h2>table 3 animaux</h2>
<table class="table">
    <thead>
    <tr>
       <th>animal</th> <th>couleur</th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach($animaux as $animal=>$couleur){




            echo "<tr><td>$animal</td><td>$couleur</td></tr>";

         }
    ?>
    </tbody>
</table>
<h2>table 3 animaux dangereux</h2>
<table class="table">
    <thead>
    <tr>
        <th>animal</th> <th>couleur</th> <th>danger</th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach($animaux2 as $animal=>$couleur){

        $classeCouleur = "";
        if(in_array($animal, $animauxDangereux)){

            $classeCouleur = "rouge";
        }


        echo "<tr><td>$animal</td><td>$couleur</td><td><div class='cercle $classeCouleur'></div></td></tr>";

    }
    ?>
    </tbody>
</table>
</body>
</html>



