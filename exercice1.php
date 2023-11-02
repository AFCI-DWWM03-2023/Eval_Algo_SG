<?php
echo ("          CALCUL D'UN CERCLE" . "\n" . "\n");
$estVrai = true;    //
while ($estVrai) { // possibilité de faire autrement pour la boucle avec un while ainsi qu'en comparant la saisie utilisateur 
    $estVrai = false;
    $rayon = readline("Quel est le rayon du cercle : " . "\n");
    $circonference = 2 * pi() * $rayon; //Calcule de la circonference
    $surface = pi() * ($rayon * $rayon); //Calcule de la surface
    echo ("Sa circonférence est de : $circonference" . "\n"); //Retour de la circonference
    echo ("Sa surface est de : $surface" . "\n" . "\n"); //Retour de la surface
    echo ("Voulez-vous faire un autre calcul (O/N) : "); // Verification si besoin d'un autre calcule
    $verif = readline(); // possibilité de faire autrement pour la boucle avec un while ainsi qu'en comparant la saisie utilisateur 
    $estVrai = true;    //  possibilité de faire autrement pour la boucle avec un while ainsi qu'en comparant la saisie utilisateur 
    if ($verif == "N") { // Sortie du programme si pas besoin d'autre calcule
        break;
    }
}
echo ("\n" . "Au revoir et à bientôt !!");
