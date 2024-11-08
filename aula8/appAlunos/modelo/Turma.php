<?php

class Turma
{
    private int $ano;
    private string $curso;

    /**
     * Get the value of ano
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso(): string
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}
