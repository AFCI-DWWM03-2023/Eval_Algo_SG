<?php

$avion = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$codeAvion = ["BO", "AB", "LJ", "DC", "CO", "AN"];
$vitesseCroisiere = [800, 950, 700, 900, 1400, 560];
$rayonAction = [10000, 12000, 4500, 8000, 16000, 2500]; 
$tempRayon = 0;
$tempVitesse = 0;
$keyRayon = 0;
$boucle = "O";

echo (" ****    AVION ****    " . "\n" . "\n");
while ($boucle == "O") { 
    $code = readline("Entrez le code de l'avion : ");//demande du code avion
    $trouve = false;
    foreach ($codeAvion as $keyCode => $verifCode) { //Verif si le code existe dans le tableau
        if ($verifCode == $code) {
            $trouve = true;
            break;
        }
    }
    if ($trouve) { //si trouver 
        echo "Avion : " . $avion[$keyCode] . " Vitesse : " . $vitesseCroisiere[$keyCode] . " Rayon d'action : " . $rayonAction[$keyCode] . "\n"; // Alors affichage des stats
    } else {
        echo "Cet avion n'existe pas." . "\n"; // sinon sortir
        break;
    }
    $boucle2 = readline("Voulez vous éditer les statistiques (O/N)"); // demande d'affichages des stats (avion le plus rapide et la moyenne des rayons d'action)
    if ($boucle2 == "O") {

        foreach ($vitesseCroisiere as $keyVitesse => $vitesse) { // on parcour le trouver la plus grande vitesse
            if ($tempVitesse < $vitesse) {
                $tempVitesse = $vitesse;
            }
        }
        foreach ($rayonAction as $keyRayon => $rayon) { // on parcour le tableau pour calculr le rayon d'action moyen
            $tempRayon = $tempRayon + $rayon;
        }
        $rayon = $tempRayon / ($keyRayon + 1);

        echo "L'avion qui vole le plus vite est le " . $avion[$keyVitesse - 1] . " à " . $tempVitesse . "\n";
        echo "La moyenne des rayons d'action est de : " . $rayon . "\n";
    }

    $boucle = readline("Voulez vous faire une autre recherche (O/N)"); // demande si besoin d'une autre recherche
    if ($boucle == "N") { // si non alors on sort
        break;
    }
}

echo ("Au revoir et à bientôt !");