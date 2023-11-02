<?php

$chaineCaract = strtolower(readline("Entrez une chaine de caracteres : "));
$nbCaractere = strlen($chaineCaract);
$chaine = str_split($chaineCaract);
$nbConsonnes = 0;   //
$nbVoyelles = 0;    //
$nbChiffre = 0;     // Initialisation des variables pour compter
$nbSpeciaux = 0;    //
$nbAlpha = 0;       //

for ($i = 0; $i < $nbCaractere; $i++) {
    switch ($chaine[$i]) { //switch pour compter le nombre de voyelles
        case "a":
            $nbVoyelles++;
            break;

        case "e":
            $nbVoyelles++;
            break;

        case "i":
            $nbVoyelles++;
            break;

        case "o":
            $nbVoyelles++;
            break;

        case "u":
            $nbVoyelles++;
            break;

        case "y":
            $nbVoyelles++;
            break;

        default:
            $nbConsonnes++; //si aucune voyelle alors c'est une consonne
            break;
    }
    if (ctype_digit($chaine[$i])) { // on compte le nombre de chiffre
        $nbChiffre++;
    } elseif (ctype_alpha($chaine[$i])) { // on compte le nombre de charactere alphanumérique
        $nbAlpha++;
    } else {
        $nbSpeciaux++; //On compte le nombre de caractere spéciaux 
    }
}
echo ("Nombre de caracteres : " . $nbCaractere . "\n");
echo ("Voyelles : " . $nbVoyelles . "\n");
echo ("Consonnes : " . $nbConsonnes . "\n");
echo ("Chiffres : " . $nbChiffre . "\n");
echo ("Caractere alphabétique : " . $nbAlpha . "\n");
echo ("Caractere Spéciaux : " . $nbSpeciaux . "\n");
