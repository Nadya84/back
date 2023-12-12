<?php
/*charger impérativement avec 'require_once', ne fonctionne dans certains cas avec 'require'*/
require_once "./classes/calcul.class.php";
use PHPUnit\Framework\TestCase; // charge le framwork PhpUnit

class CalculTest extends TestCase
{
    public function testDivideOk()
    {
        $oCalcul = new Calcul();

        $number = 10;
        $divide = 2;

        $result = $oCalcul->divide($number, $divide);

        //on attend le que le resultat de 10/2 soit 5:
        $this->assertEquals(5, $result);

    }

    public function testDivideByZeroReturnsFalse() {
       
        $ocalcul = new Calcul();

        $result = $ocalcul->divide(10, 0);

        $this->assertFalse($result);
    }

}

?>


