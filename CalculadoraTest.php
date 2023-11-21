<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculadora.php';

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(2, 3, "+");
        $this->assertEquals(5, $resultado);
    }

    public function testSubtracao()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(10, 4, "-");
        $this->assertEquals(6, $resultado);
    }

    public function testMultiplicacao()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(6, 7, "*");
        $this->assertEquals(42, $resultado);
    }

    public function testDivisao()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(15, 3, "/");
        $this->assertEquals(5, $resultado);
    }

    public function testDivisaoPorZero()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(8, 0, "/");
        $this->assertNull($resultado); // Espera-se que retorne null para divisão por zero
    }

    public function testPotencia()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(2, 3, "**");
        $this->assertEquals(8, $resultado);
    }

    public function testOperadorNumerico()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(4, 2, 5);
        $this->assertNull($resultado); // Espera-se que retorne null para operador numérico
    }

    public function testEntradaComCaracteres()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular('abc', 'def', '+');
        $this->assertNull($resultado); // Espera-se que retorne null para entrada inválida
    }

    public function testNumeroECaractere()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(5, 'abc', '+');
        $this->assertNull($resultado); // Espera-se que retorne null para entrada inválida
    }

    public function testNumeroESimbolo()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcular(8, '+', 4);
        $this->assertNull($resultado); // Espera-se que retorne null para entrada inválida
    }


}
