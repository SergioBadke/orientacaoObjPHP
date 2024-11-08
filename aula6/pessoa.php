<?php 
class Pessoa{
    //atributos
    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getApresentacao(){
        print ("Olá mundo, sou " . $this->nome . ", resido no endereço " . $this->endereco . $this->cidade . $this->uf . ", e possuo uma altura de " . $this->altura . "!\n");
    }
}

$Pessoa1 = new Pessoa();
$Pessoa1->setNome("Sarah");
$Pessoa1->setEndereco("Rua das Mangueiras 121");
$Pessoa1->setCidade("Fernandópolis");
$Pessoa1->setUf("São Paulo");
$Pessoa1->setAltura(1.68);
print($Pessoa1->getApresentacao());

$Pessoa2 = new Pessoa();
$Pessoa2->setNome("Maicon");
$Pessoa2->setEndereco("Rua dos Melões 1364");
$Pessoa2->setCidade("Acrelandia");
$Pessoa2->setUf("Roraima");
$Pessoa2->setAltura(1.88);
print($Pessoa2->getApresentacao());


?>