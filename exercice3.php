<?php

echo " Racine de l'équation du 2nd degré\n";
echo "      Y = aX² + bX + c\n\n";
$boucle = "O";

while ($boucle == "O") {
    $a = readline("Quelle est la valeur de a : ");  //
    $b = readline("Quelle est la valeur de b : ");  // entrer des valeurs
    $c = readline("Quelle est la valeur de c : ");  //
    if ($a == 0) {         // verification de si l'équation n'est pas du 2nd degré
        if ($b == 0) {    //  toujours la verification
            echo "L'équation n'en est plus une !!!\n\n";
        } else {
            echo ("L'équation est du 1er degré !\n");
            echo ("L'équation s'annule pour x = -(c/b) : " . -$c / $b . "\n\n");
        }
    } else {
        $d = $b * $b - 4 * $a * $c; // calcul de delta
        if ($d < 0) { // le delta est negatif
            echo ("L'equation ne possège pas de racine réelle : \n");
            echo ("d = $d\n\n");
        } elseif ($d == 0) { //si le delta nul
            echo " L'équation possède une racine double : \n " . " d = $d\n" . " x1 = x2 = " . - ($b / (2 * $a)) . "\n\n";
        } else { //si le delta positif
            echo ("L'equation possède 2 racines distinctes : \n");
            echo ("d = $d\n");
            echo ("L'equation s'annule pour :\n");
            echo ("x1 = " . (-$b + sqrt($d)) / (2 * $a) . "\n");
            echo ("x2 = " . (-$b - sqrt($d)) / (2 * $a) . "\n\n");
        }
    }


    $boucle = readline("Voulez-vous continuer? (O/N) : "); // demande si on continue avec d'autres calcules
}

echo "Au revoir et à bientôt ! ";