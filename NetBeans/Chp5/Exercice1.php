<?php
    for ($i = 0 ; $i <10 ; $i ++) { // boucle qui choisir aleatoirement un nombre puis le rentrer dans la liste jusqu'a 9
        $tab1[$i] = rand(1 ,100 );
        echo $tab1[$i] . " ";
    }
    $somme = 0 ; // instensifie une nouvelle variable somme
    for($i = 0 ; $i <10 ; $i= $i +2) { // boucle qui va ajouter la somme de 2 en 2
        $somme = $somme + $tab1[$i] ;
    }
    echo "A quoi correspond ce nombre $somme : $somme ?. ";
    // le nombre correspond a l'addition des nombres de 2 en 2 de la liste
?>