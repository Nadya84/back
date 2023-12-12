<?php

$apayer=20;
$monnaie=50;
$entier;
$tri = [50, 20 , 10, 5, 2, 1, 0.5, 0.2, 0.1];

$monnaie=$monnaie-$apayer;

for($i=0; $i < 8; $i++)
    if($monnaie/$tri[$i]>=1)
    {
        $valeur[$i]=$monnaie/$tri[$i];
        $monnaie=$monnaie-$tri[$i]*$valeur[$i]; 
    }
if($tri[$i]>=5)
{
    $refi = $i;
    echo("il faudra rentre {$valeur[$refi]} {$billets} de {$tri[$refi]}");
}

else
echo("il faudra rentre {$valeur[$refi]} pièces de tri");

}


?>