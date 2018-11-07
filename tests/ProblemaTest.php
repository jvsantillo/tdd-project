<?php
declare(strict_types=1);

include_once __DIR__.'/../src/Problema.php';

use PHPUnit\Framework\TestCase;

final class ProblemaTest extends TestCase{

    private $p;

    public function __construct(){
        $this->p = new Problema();
    }

    public function testAnoInvalidoVerificarBissexto(){
        $ano = -1;
        $result = $this->p->verificarBissexto($ano);
        $this->assertEquals(false, $result);
    }

    public function testAnoBissextoVerificarBissexto(){
        $this->assertEquals(true, $this->p->verificarBissexto(2016));
        $this->assertEquals(true, $this->p->verificarBissexto(1700));
    }

    public function testAnoNaoBissextoVerificarBissexto(){
        $ano = 2015;
        $result = $this->p->verificarBissexto($ano);
        $this->assertEquals(false, $result);
    }

    public function testCaracteresInvalidosRomanoParaDecimal(){
        $romano = "XVY";
        $result = $this->p->romanoParaDecimal($romano);
        $this->assertEquals(-1, $result);
    }

    public function testNumeroRomanoParaDecimal(){
        $romano = "123";
        $result = $this->p->romanoParaDecimal($romano);
        $this->assertEquals(-1, $result);
    }

    public function testMaiorQue4999RomanoParaDecimal(){
        $romano = "MMMMMD";
        $result = $this->p->romanoParaDecimal($romano);
        $this->assertEquals(-1, $result);
    }

    public function testNumeroVerdadeiroRomanoParaDecimal(){
        $romano = "CCC";
        $result = $this->p->romanoParaDecimal($romano);
        $this->assertEquals(300, $result);
    }

    public function testMinusculasRomanoParaDecimal(){
        $this->assertEquals(300, $this->p->romanoParaDecimal("ccc"));
        $this->assertEquals(98, $this->p->romanoParaDecimal("xcviii"));
    }

    public function testLetrasIntercaladasRomanoParaDecimal(){
        $romano = "lXiX";
        $result = $this->p->romanoParaDecimal($romano);
        $this->assertEquals(69, $result);
    }
}
?>
