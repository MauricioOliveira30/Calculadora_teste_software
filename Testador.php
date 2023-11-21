<?php
class Testador
{
    private $resultado;

    public function __construct($resultado)
    {
        $this->resultado = $resultado;
    }

    public function getResultado()
    {
        return $this->resultado;
    }
}
it('Pesssoa deve calcular uma conta',function(){

$calculadora=new Testador(5-2);
$calculouser=$calculadora->$calculadora();
$resultadoEsperado=6;
$this->assertSame($resultadoEsperado,$calculouser);
});
    ?>