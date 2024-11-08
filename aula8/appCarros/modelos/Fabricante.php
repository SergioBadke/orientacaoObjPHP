<?php 

class Fabricante{
    private $nome;
    private $sigla;
    

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
     * Get the value of sigla
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla($sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}

$vw= new Fabricante;
$vw->setNome("Volkswagen");
$vw->setSigla("VG");

$ch= new Fabricante;
$ch->setNome("Chevrolet");
$ch->setSigla("GM");

$ft= new Fabricante;
$ft->setNome("Fiat");
$ft->setSigla("F");

$rn= new Fabricante;
$rn->setNome("Renault");
$rn->setSigla("RN");

?>