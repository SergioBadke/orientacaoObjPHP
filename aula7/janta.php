<?php
class Prato
{
    private string $descricao;
    private int $quantidade;
    private float $valorUni;



    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUni
     */
    public function getValorUni(): float
    {
        return $this->valorUni;
    }

    /**
     * Set the value of valorUni
     */
    public function setValorUni(float $valorUni): self
    {
        $this->valorUni = $valorUni;

        return $this;
    }


}

$pratos = array();
$valorTotal = 0;

for ($i = 0; $i < 3; $i++) {
    $plate = new Prato();
    $plate->setDescricao(readline("Qual o seu prato?"));
    $plate->setQuantidade(readline("Quantidade do seu prato?"));
    $plate->setValorUni(readline("Qual o valor do seu prato?"));
    array_push($pratos,$plate);
    $valorTotal=($valorTotal + ($plate->getValorUni()*$plate->getQuantidade()));
}
print_r($pratos);
print $valorTotal;