<?php
class Carro{
	public $modelo;
	public $velocidadeMax;
	public $velocidadeAtual;

	public function Carro($modelo, $veloM){
		$this -> modelo = $modelo;
		$this -> velocidadeMax = $veloM;
		echo "{$this -> setModelo()} <br>";	
		$this -> ligarCarro();
		$this -> acelerar();
		$this -> reduzir();
		$this -> pararCarro();
		$this -> desligarCarro();
	}	

	public function ligarCarro(){
		echo "Carro ligado <br>";

	}

	public function desligarCarro(){
		echo "Carro Desligado <br>";
	}

	public function acelerar(){
		$this -> velocidadeAtual = $this -> velocidadeMax;
		echo "Acelerando... <br>";
		echo "Velocidade = {$this -> velocidadeAtual} Km/h <br>";
	}

	public function setModelo(){
		return $this -> modelo;
	}

	public function reduzir(){
		$this -> velocidadeAtual = $this -> velocidadeAtual/2;
		echo "Reduzindo a velocidade! <br>";
		echo "Velocidade = {$this -> velocidadeAtual} Km/h <br>";
	}

	public function pararCarro(){
		$this -> velocidadeAtual = 0;
		echo "Carro parado <br>";
		echo "Velocidade = {$this -> velocidadeAtual} Km/h <br>";
	}
}

$carro1 = new Carro("BMW X", 80);
?>