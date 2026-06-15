<?php

class Funcionario
{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus()
    {
        return $this->salario * 0.10;
    }

    public function exibirDados()
    {
        echo "Nome: {$this->nome}<br>";
        echo "Salário: R$ {$this->salario}<br>";
        echo "Bônus: R$ " . $this->calcularBonus() . "<br>";
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.15;
    }
}

$gerente = new Gerente("Carlos", 8000);
$desenvolvedor = new Desenvolvedor("Ana", 8000);

echo "Gerente";
$gerente->exibirDados();

echo "Desenvolvedor";
$desenvolvedor->exibirDados();

?>