<?php

    $tableau2 = ["Eric","Antoine","Daniel","Medhi"];
    $dimtableau2 = count($tableau2);
    for ($i = 0; $i<$dimtableau2; $i ++){
        echo " La valeur numero $i du tableau est $tableau2[$i] et ".$tableau2[$i+1]."\r";
    } 
?>

<?php

$tableau1 = [];

for ($c=0; $c <= 8; $c++)
{
    $tableau1[] = rand(0,20);
}
$dimtableau1 = count($tableau1);

for ($o=0; $o<$dimtableau1; $o++) 
{
    echo "La  valeur du tableau1 numéro $o est $tableau1[$o] \n";
}


echo "La valeur 2 du tableau est :". $tableau1[1];
?>