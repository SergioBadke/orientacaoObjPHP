<?php

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString()
    {
        return sprintf(
            "%s, %s, %d anos\n",
            $this->nome,
            $this->sobrenome,
            $this->idade
        );
    }



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
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

//Menu
$escolha = 0;

do {
    echo "--Menu--";
    echo "1- Inserir Pessoa\n";
    echo "2- Listar Pessoas\n";
    echo "0- SAIR\n";

    $escolha = readline("Escolha uma opção: ");

    switch ($escolha) {
        case 0:
            print "Programa encerrado!\n";
            break;
        case 1:
            print "Inserindo pessoa!\n";
            $pessoa->setNome(readline("Nome:"));
            $pessoa->setSobrenome(readline("Sobrenome:"));
            $pessoa->setIdade(readline("Idade:"));
            break;
        case 2:
            print "Listando pessoas!\n";
            break;
        default:
            print "Opção invalida\n";
    }
} while ($escolha != 0);
