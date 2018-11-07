<?php
declare(strict_types=1);

require '../src/Problema.php';

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
        $ano = 2016;
        $result = $this->p->verificarBissexto($ano);
        $this->assertEquals(true, $result);
    }

    public function testAnoNaoBissextoVerificarBissexto(){
        $ano = 2015;
        $result = $this->p->verificarBissexto($ano);
        $this->assertEquals(false, $result);
    }
}
?>
