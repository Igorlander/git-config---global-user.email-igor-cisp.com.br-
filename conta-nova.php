<?php
//  Classe Conta
//Atributos
//numConta - Numero da Conta
//saldo
//titular
//Metodos
//tipo
//status
//sacar
//depositar
//verSaldo
//verNumConta - usar func rand()
//Contrutor = Nome do Titular,Saldo,Caso não passe o saldo,
//saldo = 0; Gerar numero da conta;
// Exibir na tela ;
// o titular
// numero da conta
// o saldo atual

class Conta{

	private  $numConta;
	private  $titular;
	private  $saldo = 0;

	public function __construct( $titular, $saldoInicial = 0){
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
		$this->gerarNumConta();

	}

	 public function depositar($valor){
        $this->saldo += $valor;
     	echo "<p>Depositando o valor de R$ {$valor} reais</p>";

      }

      public function sacar($valor){
        $this->saldo -= $valor;
        echo "<p>Sacando o valor de R$ {$valor} reais</p>";
      
      }
      
      public function verSaldo(){
      	echo "<p>Saldo atual de R$ {$this->saldo}</p>";
      }
      public function verTitular(){
      	echo "<p>Titular da conta: {$this->titular}</p>";
      }
      public function verNumConta(){
       echo "<p>Numero da conta: {$this->gerarNumConta}</p>";
      	return $this->numConta;
      }
      private function gerarNumConta(){
      	$this->gerarNumConta = rand();
      }
}


      $conta = new Conta('4Linux', 500);
      $conta->verTitular();
      $conta->verNumConta();
      $conta->depositar(100);
      $conta->sacar(150);
      $conta->verSaldo();

      var_dump($conta);

      echo "<hr>";
	  $conta1 = new Conta('Igor', 1000);
      $conta1->verTitular();
      $conta1->verNumConta();
      $conta1->depositar(100);
      $conta1->sacar(150);
      $conta1->verSaldo();

      var_dump($conta);

?>