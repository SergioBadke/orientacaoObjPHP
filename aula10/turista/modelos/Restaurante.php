<?php
require_once("Espaco.php");

class Restaurante extends Espaco
{
    private string $tipoComida;

    public function getDadosRestaurante(){
        $dadosRestaurante = printf("Nome do Hotel: %s | Endereço: %s | Tipo comida: %s",
                        $this->nome, $this->endereco, $this->tipoComida);
                        return $dadosRestaurante;
        }



    /**
     * Get the value of tipoComida
     */
    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}
