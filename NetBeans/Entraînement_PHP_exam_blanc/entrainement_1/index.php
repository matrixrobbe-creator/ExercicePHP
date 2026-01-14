<?php
/*
    
    // Ce code est crée par ROBBE Maxime le 05/12/2025 v1.0
//Question 1    
for ($i=0 ; $i<10 ; $i++) {
    $tableau1 [$i] = rand(1,100);
    echo $tableau1 [$i] . ",";
    
}

$somme = 0;
for ($i=0 ; $i <10 ; $i=$i+2) {
    $somme = $somme + $tableau1[$i];
    
}
echo " A quoi correspond ce nombre $somme : $somme ?";

echo " Veuillez saisir un chiffre entier supérieur à 5";
$nombre = trim(fgets(STDIN));
for ($k=0; $k<21; $k++) {
    $tableau2[$k]=rand(0,20);
    echo $tableau2 [$k] . ",";
}

$moyenne = 0;

for ($k=0; $k<21;$k++) {
    $moyenne = $moyenne + $k;
}

$moyenne = $moyenne/20;

echo " \n La moyenne des valeurs du tableau sont $moyenne \n";
echo "La troisième valeur du tableau est $tableau2[2] \n";
echo "La cinquième valeur du tableau est". $tableau2[4]."\n";
echo "La vingtième valeur du tableau est". $tableau2[19]. "\n";

*/


echo " Veuillez saisir un chiffre entier";
$nombre = trim(fgets(STDIN));


if (($nombre >= 6 && $nombre <= 10) || ($nombre >= 14 && $nombre <= 20)) {
    echo "Bravo votre chiffre est dans l'intervalle voulu !";
    
}  

else {
    echo " Non votre chiffre ne rentre pas dans notre intervalle";
}



?>


