<?php

class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {
}

class Desenvolvedor extends Funcionario {
}

$gerente = new Gerente("João", 20000);
$desenvolvedor = new Desenvolvedor("Maria", 8000);

echo "Nome: " . $gerente->nome . "<br>";
echo "Cargo: Gerente<br>";
echo "Bônus: " . $gerente->calcularBonus() . "<br><br>";

echo "Nome: " . $desenvolvedor->nome . "<br>";
echo "Cargo: Desenvolvedor<br>";
echo "Bônus: " . $desenvolvedor->calcularBonus();

?>