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
</head>
<body>
<h1>le titre de l'exercice</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea enim labore laborum suscipit voluptatem! Accusamus ad dolore ex hic iure, minus molestias neque officia, quae, quis ratione sequi ut velit.</p>

<p>Resultat : <?php echo $resultat ; ?></p>

</body>
</html>



