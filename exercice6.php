<?php

$dureeManche = 0;
$ficierResultat = fopen("Resultat.txt","w");    // on ouvre le fichier texte 
$victoireUtilisateur = 0;
$victoirePC = 0;
$table = ["Pierre", "Feuille", "Ciseaux"]; 
$manche = 0;
$boucle = "Oui";
$pointUtilisateur = 0;
$pointPC = 0;

while ($boucle == "Oui") {
    $manche += 1;
    echo "Manche $manche\n";

    while ($dureeManche < 3) { // la manche dure 3 partie
        echo("Partie $dureeManche : Choisissez (Pierre / Feuille / Ciseaux) : \n");
        $choix = readline();
        while ($choix != "Pierre" and $choix != "Feuille" and $choix != "Ciseaux") {
            $choix = readline("Choix invalide. Choisissez entre Pierre, Feuille ou Ciseaux : \n"); 
        }
        $pc = $table[rand(0,2)];
        echo "L'ordinateur choisit : $pc" . "\n";

        if ( $choix == "Ciseaux" and $pc == "Feuille" or $choix == "Pierre" and $pc == "Ciseaux" or $choix == "Feuille" and $pc == "Pierre") { // conditions de victoire pour l'utilisateur
                $gagnant = "Utilisateur gagne!\n";
                $victoireUtilisateur ++;
            } elseif ($choix == "Ciseaux" and $pc == "Pierre" or $choix == "Pierre" and $pc == "Feuille" or $choix == "Feuille" and $pc == "Ciseaux") { // victoire de l'ordinateur
                
                $gagnant = "Ordinateur gagne!\n"; 
                $victoirePC ++;
            } else {
                
                $gagnant = "Egalité\n";

            }
        
        echo $gagnant;
        $dureeManche +=1;
    }
    if ($victoireUtilisateur > $victoirePC) { //On compare pour regarder qui a gagner la manche
        $vainqueur = "Utilisateur";
        $pointUtilisateur ++;
    } elseif ($victoireUtilisateur < $victoirePC){
        $vainqueur = "Ordinateur";
        $pointPC ++;
    }else
        $vainqueur = "Ex aequo";
    $fin = "Score après la manche $manche = Utilisateur ($pointUtilisateur) - Ordinateur ($pointPC) | Vainqueur : $vainqueur\n";
    fwrite($ficierResultat, $fin); // on écrit le résultat dans le fichier texte
    echo $fin;
    $boucle = readline("Voulez-vous continuer à jouer? (Oui/Non) : "); // on demande si on continue
}
echo "Fin du jeu. Le résultat final a été enregistré dans le fichier resultats.txt.";
fclose($ficierResultat); //on ferme le fichier texte