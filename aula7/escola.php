<?php
class Escola
{
    private $nome;
    private $endereco;
    private $quantAlunos;



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
     * Get the value of endereco
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of quantAlunos
     */
    public function getQuantAlunos(): int
    {
        return $this->quantAlunos;
    }

    /**
     * Set the value of quantAlunos
     */
    public function setQuantAlunos(int $quantAlunos): self
    {
        $this->quantAlunos = $quantAlunos;

        return $this;
    }

    
}

for ($i=0; $i < 4; $i++) { 
    $escola = new Escola();
    $escola ->getNome(readline("Nome: "));
    $escola ->getEndereco(readline("Endereço: "));
    $escola ->getQuantAlunos(readline("Quantidade de alunos: "));

    array_push($escolas, $escola);
}

foreach($escolas as $esc){
    printf("%s | %s | %d\n",
            $esc->getNome(),$esc->getEndereco(),$esc->getQuantAlunos());
}
