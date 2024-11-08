<?php

class Time
{
    private string $Nome;
    private string $Cidade;



    /**
     * Get the value of Nome
     */
    public function getNome(): string
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     */
    public function setNome(string $Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Get the value of Cidade
     */
    public function getCidade(): string
    {
        return $this->Cidade;
    }

    /**
     * Set the value of Cidade
     */
    public function setCidade(string $Cidade): self
    {
        $this->Cidade = $Cidade;

        return $this;
    }
}
