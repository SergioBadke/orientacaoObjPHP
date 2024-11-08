<?php
class Carro
{
    private $modelo;
    private $marca;
    private $ano;
    private $velocidde;


    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

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
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of velocidde
     */
    public function getVelocidde()
    {
        return $this->velocidde;
    }

    /**
     * Set the value of velocidde
     */
    public function setVelocidde($velocidde): self
    {
        $this->velocidde = $velocidde;

        return $this;
    }

}

$Carro1 = new Carro();
$Carro1->setMarca(readline("Marca: \n"));
$Carro1->setModelo(readline("Modelo: \n"));
$Carro1->setAno(readline("Ano: \n"));
$Carro1->setVelocidde(readline("Velocidade: \n"));

$Carro2 = new Carro();
$Carro2->setMarca(readline("Marca: \n"));
$Carro2->setModelo(readline("Modelo: \n"));
$Carro2->setAno(readline("Ano: \n"));
$Carro2->setVelocidde(readline("Velocidade: \n"));

$Carro3 = new Carro();
$Carro3->setMarca(readline("Marca: \n"));
$Carro3->setModelo(readline("Modelo: \n"));
$Carro3->setAno(readline("Ano: \n"));
$Carro3->setVelocidde(readline("Velocidade: \n"));

//Mais rapido
if(
    $Carro1->getVelocidde() > $Carro2->getVelocidde() and $Carro1->getVelocidde() > $Carro3->getVelocidde()
){
    print ("O carro " . $Carro1->getMarca() . " " . $Carro1->getModelo() . ", fabricado no ano de ". $Carro1->getAno() . ", é o carro mais rapido, com uma velocidade de " . $Carro1->getVelocidde() . " km/h.");
}
elseif(
    $Carro2->getVelocidde() > $Carro1->getVelocidde() and $Carro2->getVelocidde() > $Carro2->getVelocidde()
){
    print ("O carro " . $Carro2->getMarca() . " " . $Carro2->getModelo() . ", fabricado no ano de ". $Carro2->getAno() . ", é o carro mais rapido, com uma velocidade de " . $Carro2->getVelocidde() . " km/h.");
}
else{
    print ("O carro " . $Carro3->getMarca() . " " . $Carro3->getModelo() . ", fabricado no ano de ". $Carro3->getAno() . ", é o carro mais rapido, com uma velocidade de " . $Carro3->getVelocidde() . " km/h.");
}
//Menos rapido
if(
    $Carro1->getVelocidde() < $Carro2->getVelocidde() and $Carro1->getVelocidde() < $Carro3->getVelocidde()
){
    print ("O carro " . $Carro1->getMarca() . " " . $Carro1->getModelo() . ", fabricado no ano de ". $Carro1->getAno() . ", é o carro menos rapido, com uma velocidade de " . $Carro1->getVelocidde() . " km/h.");
}
elseif(
    $Carro2->getVelocidde() < $Carro1->getVelocidde() and $Carro2->getVelocidde() < $Carro2->getVelocidde()
){
    print ("O carro " . $Carro2->getMarca() . " " . $Carro2->getModelo() . ", fabricado no ano de ". $Carro2->getAno() . ", é o carro menos rapido, com uma velocidade de " . $Carro2->getVelocidde() . " km/h.");
}
else{
    print ("O carro " . $Carro3->getMarca() . " " . $Carro3->getModelo() . ", fabricado no ano de ". $Carro3->getAno() . ", é o carro menos raenoso, com uma velocidade de " . $Carro3->getVelocidde() . " km/h.");
}