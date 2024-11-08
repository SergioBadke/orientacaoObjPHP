<?php

require_once("Time.php");
class Jogador
{
    private string $Nome;
    private int $Numero;

    private $Time;


    /**
     * Get the value of Nome
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome($Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Get the value of Numero
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set the value of Numero
     */
    public function setNumero($Numero): self
    {
        $this->Numero = $Numero;

        return $this;
    }


    /**
     * Get the value of Time
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Set the value of Time
     */
    public function setTime($Time): self
    {
        $this->Time = $Time;

        return $this;
    }
}
