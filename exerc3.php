<?php
/*(exerc3) Para cada produto informado (nome, preço e quantidade),
escreva o nome do produto comprado e o valor total a ser pago,
considerando que são oferecidos descontos pelo número de
unidades compradas, segundo a tabela abaixo:
• Até 10 unidades: valor total
• de 11 a 20 unidades: 10% de desconto
• de 21 a 50 unidades: 20% de desconto
• acima de 50 unidades: 25% de desconto*/

class Produto{
  public $nome;
  public $preco;
  public $quantidade;
  public $pagar;
  public $desconto;

  public function setnome($nome){
    return $this -> nome = $nome;
    }

  public function getnome(){
   return $this -> nome;
    }


  public function Produto($p,$q){
    $this -> preco= $p;
    $this -> quantidade = $q;
    $this -> pagar = $this -> preco * $this -> quantidade;
      if($this -> quantidade >=11 and $this -> quantidade <=20){
        $this -> desconto= "10%";
        $desc = ($this->pagar*10)/100;
        $this -> pagar = $this -> pagar - $desc;
        
      }
      elseif($this -> quantidade >=21 and $this -> quantidade<=50){
        $this -> desconto= "20%";
        $desc = ($this->pagar*20)/100;
        $this->pagar = $this->pagar - $desc;
      }
      elseif($this->quantidade >50){
        $this -> desconto= "25%";
        $desc = ($this->pagar*25)/100;
        $this -> pagar = $this -> pagar - $desc;
      }
      else{
        $this -> desconto = 0;
      }
  }

}

	$p1 = new Produto(4.00,12);
	$p1 -> setnome("Macarrão");
	 print_r($p1);

	$p2 = new Produto(3.00,25);
	$p2 -> setnome("Molho de tomate");
	 echo "<br>";
	 print_r($p2);

	$p3 = new Produto(2.00,60);
	$p3 -> setnome("Suco");
	 echo "<br>";
	 print_r($p3);
?>