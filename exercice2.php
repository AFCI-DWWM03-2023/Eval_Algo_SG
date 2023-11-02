<?php

echo (" ****    TABLE DE MULTIPLICATION ****    " . "\n" . "\n");

// a)
// $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication :"); //demande du nombre pour afficher sa table
// for($i=1;$i <= 10; $i ++){ 
//     $resultat = $i * $nombre ; //calcule de la table
//     echo($nombre . "             x " . $i . "           = " . $resultat  . "\n" ); //affichage de la table
// }

// b)
$boucle = "O";
while ($boucle) {
    $boucle = "N";
    $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication :"); //demande du nombre pour afficher sa table
    $compt = 0; //compteur pour la boucle while du dessous
    while ($compt < 10) { //verif du compteur
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $i * $nombre; //calcule de la table
            echo ($nombre . "             x " . $i . "           = " . $resultat  . "\n"); //affichage de la table
            $compt++; // compteur pour boucler 10 fois
        }
        echo ("Voulez-vous faire un autre calcul (O/N) : "); // Verification si besoin d'un autre calcule
        $boucle = readline();
        if ($boucle == "N" or "n") { // Sortie du programme si pas besoin d'autre calcule
            break 2; //sortie du programme 
        } else {
            break; // retour a la premiere boucle

        }
    }
}







