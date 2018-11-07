<?php
declare(strict_types=1);

require '../src/Problema.php';

final class ProblemaTest extends PHPUnit_Extensions_Database_TestCase{

    private $p;

    public function __construct(){
        $this->p = new Problema();
    }

    public function testAnoInvalidoVerificarBissexto(){

        $ano = -1;
        $result = $this->p->verificarBissexto($ano);

        $this->assertEquals(false, $result);
    }
}
?>
