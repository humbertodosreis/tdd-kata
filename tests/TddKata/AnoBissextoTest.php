<?php

namespace TddKata;


require_once __DIR__ . '/../../src/TddKata/AnoBissexto.php';

use PHPUnit\Framework\TestCase;

class AnoBissextoTest extends TestCase
{

    /**
     * @var AnoBissexto
     */
    protected $verificadorAnoBissexto;

    protected function setUp()
    {
        $this->verificadorAnoBissexto = new AnoBissexto();
    }


    public function testDeveRetornarTrueSeForMultiploDe400()
    {
        $this->assertTrue($this->verificadorAnoBissexto->ehBissexto(2000));
    }

    public function testDeveRetornarTrueSeMultiploDe4()
    {
        $this->assertTrue($this->verificadorAnoBissexto->ehBissexto(2004));
    }

    public function testDeveRetornaFalsoSerMultiploDe4ENaoMultiplo100()
    {
        $this->assertFalse($this->verificadorAnoBissexto->ehBissexto(1900));
    }

    public function testDeveRetornaFalseParaAnoNaoBissexto()
    {
        $this->assertFalse($this->verificadorAnoBissexto->ehBissexto(2007));
    }

}
