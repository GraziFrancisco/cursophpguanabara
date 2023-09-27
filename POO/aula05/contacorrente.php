<?php 

class ContaBanco {

    //Atributos
    public $numConta;
    protected $tipo;     //cc = conta corrente // cp = conta poupanca
    private $dono;
    private $saldo;
    private $status = false;



    //Métodos
    public function abrirConta ($t) {
       
        // deve se informar o tipo de conta = (CC) conta corrente ou (CP) conta poupanca
        //  deve se alterar status pra true
        // CC = 50R$ /// CP = 150R$

        $this->setTipo($t);
        $this->setStatus(true);
        
        if ($t == "CC") {
            $this->setSaldo(50);
        } else if ($t = "CP") {
            $this->setSaldo(150);
        }
        
    }

    public function fecharConta () {

        // so pode fechar conta se nao tiver saldo negativo nem positivo. saldo = 0
        if ($this->saldo > 0) {
            echo "<p>Conta de <strong>" . $this->getDono() . "</strong> ainda tem dinheiro, não posso fechá-la!</p>";
        } else if ($this->saldo < 0) {
            echo "<p>Conta de <strong>" . $this->getDono() . "</strong> em Débito, impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de <strong>" . $this->getDono() . "</strong> fechada com sucesso!</p>";
        }
        
    }

    public function depositar ($v) {

        //deve estar aberta
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p> Deposito realizado de R$$v com sucesso na conta de <strong>" . $this->getDono() . "</strong> Seu saldo é de: R$" . $this->getSaldo() . "<br></p>";
        } else {
            echo "<p>Impossivel Depositar, conta não está aberta.</p>";
        }
        
    }


    public function sacar ($v) {

        // deve estar aberta
        //deve ter saldo
        if ($this->getStatus()) {
            
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p> Saque realizado de R$$v com sucesso na conta de <strong>" . $this->getDono() . "</strong> Seu saldo é de: R$" . $this->getSaldo() . "<br></p>";
            } else {
                echo "<p>Saque <strong>NÃO</strong> realizado! Saldo Insulficiente na conta de <strong>" . $this->getDono() . "</strong>!</p>";
            }

        } else if ($this->getStatus(false)) {

            echo "<p>Saque <strong>NÃO</strong> realizado na conta de <strong>" . $this->getDono() . "</strong> Conta não está aberta!</p>";

        }
       
    }

    public function pagarMensal () {

        //deve descontar direto do saldo o valor de 
        //CC = 12R$
        //CP = 20R$
        $valor = 0;

        if ($this->getTipo() == "CC") {
            $valor = 12;
        } else if ($this->getTipo() == "CP") {
            $valor = 20;
        } 
        
        if ($this->getStatus()) {
            $this->setSaldo($this->getStatus() - $valor);
            echo "<p> Mensalidade de R$$valor debitado com sucesso na conta de <strong>" . $this->getDono() . "</strong> Seu saldo é de: R$" . $this->getSaldo() . "<br></p>";
            
        } else {
            echo "<p>Problemas com a conta, de <strong>" . $this->getDono() . "</strong> Não posso cobrar! </p>";

        }
        
    }

    public function saldo() {
        
        if ($this->getStatus()) {
            echo "<p> Saldo na conta de <strong>" . $this->getDono() . "</strong> é de: R$" . $this->getSaldo() . "<br></p>";
        }

    }
 
/////////////////// METODOS ESPECIAIS ////////////////////////////////

public function __construct () { 
        
    // status deve ser def como falso
    //saldo definido como 0 
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p> Conta criada com sucesso!</p>";

}


    public function setnumConta ($numConta) {

        $this->numConta = $numConta;

    }    
    
    
    public function getnumConta () {

        return $this->numConta;

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setTipo ($tipo) {

        $this->tipo = $tipo;

    }
    

    public function getTipo () {

        return $this->tipo;

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setDono ($dono) {

        $this->dono = $dono;

    }

    public function getDono () {

        return $this->dono;

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setSaldo ($saldo) {

        $this->saldo = $saldo;

    }
   

    public function getSaldo () {

        return $this->saldo;

    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setStatus ($status) {

        $this->status = $status;

    }

    public function getStatus () {

        return $this->saldo;

    }  
}


?>