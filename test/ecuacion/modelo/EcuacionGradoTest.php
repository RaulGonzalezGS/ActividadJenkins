<?php


namespace ecuacion\modelo;


class EcuacionGradoTest extends \PHPUnit\Framework\TestCase
{
    public function testecuacion1(){
        $ecuacion = new EcuacionGrado2(5,8,2);
        $resultado = $ecuacion->ecuacionsegundogrado(3);
        $this->assertEquals(47, $resultado);
    }

    public function testecuacion2(){
        $ecuacion = new EcuacionGrado2(3,1,7);
        $resultado = $ecuacion->ecuacionsegundogrado(2);
        $this->assertEquals(33, $resultado);
    }

    public function testecuacion3(){
        $ecuacion = new EcuacionGrado2(5,4,1);
        $resultado = $ecuacion->ecuacionsegundogrado(5);
        $this->assertEquals(50, $resultado);
    }

    public function testecuacion4(){
        $ecuacion = new EcuacionGrado2(7,1,9);
        $resultado = $ecuacion->ecuacionsegundogrado(2);
        $this->assertEquals(45, $resultado);
    }

    public function testecuacion5(){
        $ecuacion = new EcuacionGrado2(4,2,6);
        $resultado = $ecuacion->ecuacionsegundogrado(1);
        $this->assertEquals(12, $resultado);
    }
}
