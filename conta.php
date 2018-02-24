
  <?php
  

  // Criar uma Classe Conta 

  // Ela deve tar dois atributos numConta
  // saldo

  // Vc deve atribuir valores para esses atributos 

  // mostrar na tela seguinte mensagem Saldo atual da conta 'x' é 'x' ;

  //  criar dois metodos sacar(valor) e depositar (valor)

  // aterar os metodos para eles aletrarem o valor do atributo saldo
// exibir o Saldo atualizado

  	class ContaVelha{

      //Atributos

      // criar funcaqo ver saldo
  		public $numConta;

      private $saldo = 0; 

      //metodos

      public function depositar($valor){
        $this->saldo += $valor;
        
      }
      public function sacar($valor){
        $this->saldo -= $valor;
      
      }
       public function getSaldo(){
        return $this->saldo;

       }

  	}




  	$conta1 = new Conta();  	
  	$conta1 -> numConta = "12345-0";


    echo"<hr>";


    $conta1 ->depositar(100000);
    $conta1 ->sacar(20);


    echo "Saldo atual de R$ ", $conta1->getSaldo()," reais"; 







  ?>
