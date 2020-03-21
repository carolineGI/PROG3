<?php
/*(exerc2) A fim de representar empregados em uma empresa, crie
uma classe chamada Empregado que inclui as três informações a
seguir como atributos:
• um primeiro nome,
• um sobrenome, e
• um salário mensal.
Sua classe deve ter um construtor (veja sobre este método
especial na apostila pág. 6, e nos vídeos [1] e [2]) que
inicializa os três atributos. Forneça um método set e get para
cada atributo. Se o salário mensal não for positivo, configure-o
como 0.0. Escreva um código de teste que demonstra as
capacidades da classe. Crie duas instâncias da classe e exiba o
salário anual de cada instância. Então dê a cada empregado um
aumento de 10% e exiba novamente o salário anual de cada
empregado.*/

class Empregado{
	public $Pnome;
	public $sobrenome;
	public $sM;
	public $salarioA;

	public function __construct(){
		$this -> Pnome = "Caroline";
		$this -> sobrenome = "Grings";
		$this -> sM = 2500.00;
	}

	public function setPnome($Pnome){
    return $this -> Pnome = $Pnome;
    }

    public function getPnome(){
    return $this -> Pnome;
    }

    public function setsobrenome($sobrenome){
    return $this -> sobrenome = $sobrenome;
    }

    public function getsobrenome(){
    return $this -> sobrenome;
    }

    public function setsM($sM){
    return $this -> sM = $sM;
    }

    public function getsM(){
    return $this -> sM;
    }

    public function setsalarioA(){
    return $this -> salarioA = $this -> sM*12;
    }

    public function getslarioA(){
    return $this -> salarioA;
    }

    public function validarsM(){
      if($this -> sM < 0){
        $this -> sM = 0.0;
      }
    }

    public function aumentosM(){
      $porcentagem = ($this -> sM*10)/100;
      $this -> sM = $this -> sM + $porcentagem;
    }
}

    //empregado 1
    $empre1 = new Empregado();
    $empre1 -> validarsM();
    $empre1 -> setsalarioA();
    echo "O salario anual de {$empre1-> getPnome()} {$empre1->getsobrenome()} é de R$ {$empre1->getslarioA()}<br>"; 
    $empre1 -> aumentosM();
    $empre1 -> setsalarioA();
    echo "O salario anual de {$empre1-> getPnome()} recebeu acrescimo de 10%, e agora é de R$ {$empre1->getslarioA()}<br>";

    //empregado 2
    $empre2 = new Empregado();
	$empre2 -> setPnome("Anni");
	$empre2 -> setsobrenome("Grings");
	$empre2 -> setsM(3000);
	$empre2 -> validarsM();
	$empre2 -> setsalarioA();
	echo "O salario anual de {$empre2-> getPnome()} {$empre2->getsobrenome()} é de R$ {$empre2->getslarioA()}<br>"; 
    $empre2 -> aumentosM();
    $empre2->setsalarioA();
    echo "O salario anual de {$empre2-> getPnome()} recebeu acrescimo de 10%, e agora é de R$ {$empre2->getslarioA()}<br>";
?>