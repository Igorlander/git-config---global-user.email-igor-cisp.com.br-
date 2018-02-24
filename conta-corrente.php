<?php

require 'conta-evoluida.php';



class ContaCorrente extends Conta{

	private $chequeEspecial = false;

	


	public function getChequeEspecial()
	{
	    return $this->chequeEspecial;
	}
	
	public function setChequeEspecial($chequeEspecial)
	{
	    return $this->chequeEspecial = $chequeEspecial;
	}
	public function sacar(int $valor){
		$this->setSaldo($this->getSaldo() - ($valor + ($valor * 0.02)));
	}
	public function depositar(int $valor){
		$this->setSaldo($this->getSaldo() + ($valor + ($valor * 0.02)));
		} 

	}	



	public function gerarNumConta(){
		$this->setNumConta('CC').rand(100,999);
	}


	}
echo "<pre>";
$conta = new Conta("Igor",'CC');
echo "Titular: {$conta->verTitular()} <br>";
echo "numConta: {$conta->verNumConta()} <br>";
$conta->depositar(1000);
echo "Saldo: {$conta->verSaldo()} <br>";
$conta->sacar(400);
$conta->fecharConta();
$conta->sacar(350);
$conta->fecharConta();
var_dump($conta);	


?>