<?php
$nbPhotocopie = 25;
$prix; 

if ($nbPhotocopie <= 10){
     $prix = $nbPhotocopie*0.10;
}
elseif ($nbphotocopie <= 30 && $nbPhotocopie > 10){
       $prix = (10*0.10) + (($nbPhotocopie-10)*0.09);
}
else
    {
    $prix = (10*0.10) + (20*0.09) + (($nbphotocopie-30)*0.08);
}
echo ("le prix total de la facture est de {$prix} €"); 


?>