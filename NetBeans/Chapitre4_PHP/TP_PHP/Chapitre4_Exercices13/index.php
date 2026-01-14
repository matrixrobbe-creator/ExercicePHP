<?php
// Ce code a était crée par ROBBE Maxime le 26/09/2025v1.0
//Exercices 13 Chapitre 4
    

/* Ce code nous permet de faire afficher la table de multiplication d'un numéro
 * 
 */

    echo "Veuillez renseigner le numéro que vous souhaitez avoir la table de multiplication";
    $numero = trim(fgets(STDIN)); // ici on sélectionne notre numéro et on l'enregistre dans la varibale $numéro
    for ( $compteur = 1; $compteur <= 10; $compteur++ ) { // Ici on va créer une boucle avec le compteur qui va nous servir dans notre boucle pour multiplier jusqu'à 10. Quand on a atteint 10 on s'arrète et on rajoute à chaque fois +1 à notre compteur a chaque passage de boucle
        $numero_affiché = $numero * $compteur; // Ici on va créer une nouvelle variable pour séparer nos deux numéros, notre $numero va lui se faire multiplier 10 fois et on va afficher son résultat 10 fois. C'est très important car sinon on va pas avoir le bon résultat
        echo " $numero_affiché";
    }
?>