<?php
class Produtos
{
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

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
     * Get the value of valorUnitario
     */
    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get the value of valorTotal
     */
    public function getValorTotal(): float
    {
        return ($this->getQuantidade() + $this->getValorUnitario());
    }



}

print "Produto 1\n";
$produto1 = new Produtos();
$produto1->setDescricao(readline("Descrição: "));
$produto1->setUnidadeMedida(readline("Unidade de medidas: "));
$produto1->setQuantidade(readline("Quantidade: "));
$produto1->setValorUnitario(readline("Valor Unitario: "));

print "Produto 2\n";
$produto2 = new Produtos();
$produto2->setDescricao(readline("Descrição: "));
$produto2->setUnidadeMedida(readline("Unidade de medidas: "));
$produto2->setQuantidade(readline("Quantidade: "));
$produto2->setValorUnitario(readline("Valor Unitario: "));

print "Produto 3\n";
$produto3 = new Produtos();
$produto3->setDescricao(readline("Descrição: "));
$produto3->setUnidadeMedida(readline("Unidade de medidas: "));
$produto3->setQuantidade(readline("Quantidade: "));
$produto3->setValorUnitario(readline("Valor Unitario: "));

print("\nProduto:" . $produto3->getDescricao() . "(" . $produto3->getUnidadeMedida() . ") | " . $produto3->getQuantidade() . " x " . $produto3->getValorUnitario() . " = " . $produto3->getValorTotal());

print("\nProduto:" . $produto2->getDescricao() . "(" . $produto2->getUnidadeMedida() . ") | " . $produto2->getQuantidade() . " x " . $produto2->getValorUnitario() . " = " . $produto2->getValorTotal());

print("\nProduto:" . $produto1->getDescricao() . "(" . $produto1->getUnidadeMedida() . ") | " . $produto1->getQuantidade() . " x " . $produto1->getValorUnitario() . " = " . $produto1->getValorTotal());

if (
    $produto1->getValorTotal() > $produto2->getValorTotal() &&
    $produto1->getValorTotal() > $produto3->getValorTotal()
) {
    print "\nMaior venda: " . $produto1->getDescricao() . $produto1->GetUnidadeMedida();
} elseif (z
    $produto2->getValorTotal() > $produto3->getValorTotal()
    ) {
    print "\nMaior venda: " . $produto2->getDescricao() . $produto3->GetUnidadeMedida();
}
else{
    print "\nMaior venda: " . $produto3->getDescricao() . $produto3->GetUnidadeMedida();
    
}