<?php

require_once("Espaco.php");
class Hotel extends Espaco
{
    private int $estrelas;
    private bool $cafeIncluso;

    public function getDadosHotel(){
        $dadosHotel = printf("Nome do Hotel: %s | Endereço: %s | Numero de estrela: %s | Café incluso: %b",
                        $this->nome, $this->endereco, $this->estrelas, $this->cafeIncluso);
                        return $dadosHotel;
        }


    /**
     * Get the value of estrelas
     */
    public function getEstrelas(): int
    {
        return $this->estrelas;
    }

    /**
     * Set the value of estrelas
     */
    public function setEstrelas(int $estrelas): self
    {
        $this->estrelas = $estrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}