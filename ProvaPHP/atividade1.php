<?php
class Despesa
{
    private string $descricaoDesp;
    private float $valorDesp;
    /**
     * Get the value of descricaoDesp
     */
    public function getDescricaoDesp(): string
    {
        return $this->descricaoDesp;
    }

    /**
     * Set the value of descricaoDesp
     */
    public function setDescricaoDesp(string $descricaoDesp): self
    {
        $this->descricaoDesp = $descricaoDesp;

        return $this;
    }

    /**
     * Get the value of valorDesp
     */
    public function getValorDesp(): float
    {
        return $this->valorDesp;
    }

    /**
     * Set the value of valorDesp
     */
    public function setValorDesp(float $valorDesp): self
    {
        $this->valorDesp = $valorDesp;

        return $this;
    }
}


class Receita
{
    private string $descricaoRec;
    private float $valorRec;



    /**
     * Get the value of descricaoRec
     */
    public function getDescricaoRec(): string
    {
        return $this->descricaoRec;
    }

    /**
     * Set the value of descricaoRec
     */
    public function setDescricaoRec(string $descricaoRec): self
    {
        $this->descricaoRec = $descricaoRec;

        return $this;
    }

    /**
     * Get the value of valorRec
     */
    public function getValorRec(): float
    {
        return $this->valorRec;
    }

    /**
     * Set the value of valorRec
     */
    public function setValorRec(float $valorRec): self
    {
        $this->valorRec = $valorRec;

        return $this;
    }
}

$receitas = array();
$despesas = array();
/* MENU */

do {
    echo ("\n\n---------------------\n-1-Adicionar-Receita-\n-2-Adicionar-Despesa-\n-3-Listar-Receita----\n-4-Listar-Despesa----\n-5-Sumarizar---------\n-0-Sair--------------\n---------------------\n");

    $escolha = readline("Escolha:");
    echo "\n";

    switch ($escolha) {
        case 1:
            $adicionarRec = new Receita();
            $adicionarRec->setDescricaoRec(readline("Descrição:"));
            $adicionarRec->setValorRec(readline("Valor:"));
            array_push($receitas, $adicionarRec);
            break;

        case 2:
            $adicionarDesp = new Despesa();
            $adicionarDesp->setDescricaoDesp(readline("Descrição:"));
            $adicionarDesp->setValorDesp(readline("Valor:"));
            array_push($despesas, $adicionarDesp);
            break;

        case 3:
            foreach ($receitas as $r)
                printf("%s | %d/n", $r->getDescricaoRec(), $r->getValorRec());
            break;


        case 4:
            foreach ($despesas as $d)
                printf("%s | %d/n", $d->getDescricaoDesp(), $d->getValorDesp());
            break;


        case 5:

            $ValorReceita = 0;
            $ValorDespesa = 0;

            foreach ($despesas as $desp) {
                $ValorDespesa = $ValorDespesa + $desp->getValorDesp();
            }
            foreach ($receitas as $rec) {
                $ValorReceita = $ValorReceita + $rec->getValorRec();
            }
            $ValorTotal = $ValorReceita - $ValorDespesa;

            print("Saldo: R$" . $ValorTotal);
            print("\nTotal de receitas: R$" . $ValorReceita);
            print("\nTotal de despesas: R$" . $ValorDespesa);

        break;
    }
} while ($escolha != 0);
