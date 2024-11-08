<?php 

require_once "Departamento.php";

class Funcionarios{

    private string $nome;
    private string $cargo;
    private float $salario;
    private  $Departamento;

    

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of Departamento
     */
    public function getDepartamento()
    {
        return $this->Departamento;
    }

    /**
     * Set the value of Departamento
     */
    public function setDepartamento($Departamento): self
    {
        $this->Departamento = $Departamento;

        return $this;
    }
}



?>