<?php
require_once("Espaco.php");

class Pontos extends Espaco
{
    private int $duracaoVisita;

    public function getDadosPontos()
    {
        $dadosPontos = printf(
            "Nome do Hotel: %s | Endereço: %s | Duração Visita: %d",
            $this->nome,
            $this->endereco,
            $this->duracaoVisita
        );
        return $dadosPontos;
    }

    /**
     * Get the value of duracaoVisita
     */
    public function getDuracaoVisita(): int
    {
        return $this->duracaoVisita;
    }

    /**
     * Set the value of duracaoVisita
     */
    public function setDuracaoVisita(int $duracaoVisita): self
    {
        $this->duracaoVisita = $duracaoVisita;

        return $this;
    }
}
