<?php



  	class Caneta{

      //Atributos
  		private $cor;
  		private $marca;
  		private $tampada;

  		public function __construct($cor,$marca){
  			$this->cor =$cor;
  			$this->marca=$marca;
  		}

      //metodos
      public function escrever(){
        echo "Estou escrevendo";

      }
      public function destampadar(){
      	$this->tampada = false;
      }

      public function tampar(){
      	$this->tampada = true;
      }
      public function getCor(){
      	return $this->cor;
     }
     public function setCor(){
       $this->cor=$cor;
     }
  	public function getMarca(){
      	return $this->marca;
     }
     public function setMarca(){
       $this->marca=$marca;
     }
  	}
  	$azul = new Caneta("azul","BIC");
  	$vermelha = new Caneta("vermelha","faber castel");

 /*	$azul->setCor("azul");
	$azul->setCor("BIC");
  	
  	$vernelha->setCor("vermelha");
  	$vermelha->setMarca("faber castel");

	$azul->tampar();
  	$vermelha->destampadar();

*/
  	echo "<pre>";
  	var_dump($azul);
  	var_dump($vermelha);
	echo "<hr>";
//	$azul -> escrever("Ola mundo");
	echo "<hr>";
//	$vernelha -> escrever("Hello Word");
  	




?>