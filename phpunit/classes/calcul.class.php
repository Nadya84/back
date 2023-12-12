<?php
class Calcul
{
    public function divide($number, $divisor)
    {
        if (empty($number) || $number <=0 || empty($divisor) || $divisor <=0)
        {
            return false;

        }
        return $number / $divisor;
    }

}
?>
