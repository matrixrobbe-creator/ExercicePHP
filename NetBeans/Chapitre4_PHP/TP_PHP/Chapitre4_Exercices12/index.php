<?php
// Ce code a était crée par ROBBE Maxime le 26/09/2025v1.0
//Exercices 12 Chapitre 4

        /* 
         * Ce programme permet de calculer le poids de cookies en 
         * fonction du type de chocolat utilisé 
         */


//Nombre de cookie dans la founée
    define ("NB_COOKIE", 15);
    
// Poids en gramme d'un cookie au chocolat blanc 
    define ("PDS_COOKIE_B", 12);
    
// Poids en gramme d'un cookie au chocolat noir
    define ("PDS_COOKIE_N", 20);
    
    
// Variable pour le type de chocolat utilisé
// On affecte 0 pour le chocolat blanc et 1 pour le chocolat noir 
    $type_choco = rand(0,1);
    
// Calcul du poids total d'une fournée de cookie au chocolat blanc 
    if ($type_choco == 0) {
        $poids = PDS_COOKIE_B * NB_COOKIE;
    }
    else { 
        $poids = PDS_COOKIE_N * NB_COOKIE;
    }
    
    echo " Vous avez acheté " . NB_COOKIE ." cookies pour un poids total de $poids grammes.";
?>