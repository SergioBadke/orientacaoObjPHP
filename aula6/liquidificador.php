<?php 
class Liquidificador{

    //atributos

    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    //Construtor
    public function __construct($cor)
    {
        $this->cor = $cor;
    }
    
    //metodos

    public function ligar()
    {
        print "Ligar";
    }

    public function desligar()
    {
        print "Desligar";
    }

    public function inverter()
    {
        print "Inverter";
    }

    private function girarMotor()
    {
        print "Motor girando";
    }

    private function pararMotor()
    {
        print "Motor parando";
    }

    //GETs e SETs

    
   

    

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of voltagem
     */
    public function getVoltagem()
    {
        return $this->voltagem;
    }

    /**
     * Set the value of voltagem
     */
    public function setVoltagem($voltagem): self
    {
        $this->voltagem = $voltagem;

        return $this;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}//fim da class Liquidificador

    //programa principal

    $liq = new Liquidificador("Vermelho");
    $liq->ligar();
    $liq->desligar();
    print ("O liquidificador é " . $liq->getCor() . "\n");
    $liq->setMarca("Britania");
    print_r($liq)
?>