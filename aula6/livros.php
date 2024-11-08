<?php 
$numPags = 0;
class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $paginas;
    

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of paginas
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set the value of paginas
     */
    public function setPaginas($paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }
}

$Livro1 = new Livro();
$Livro1->getTitulo(readline("Titulo: "));
$Livro1->setAutor(readline("Autor: "));
$Livro1->setGenero(readline("Genero: "));
$Livro1->setPaginas(readline("N○ de paginas: "));

$Livro2 = new Livro();
$Livro2->getTitulo(readline("Titulo: "));
$Livro2->setAutor(readline("Autor: "));
$Livro2->setGenero(readline("Genero: "));
$Livro2->setPaginas(readline("N○ de paginas: "));

$Livro3 = new Livro();
$Livro3->getTitulo(readline("Titulo: "));
$Livro3->setAutor(readline("Autor: "));
$Livro3->setGenero(readline("Genero: "));
$Livro3->setPaginas(readline("N○ de paginas: "));

if ($Livro1->getPaginas() > $Livro2->getPaginas() and $Livro1->getPaginas() > $Livro3->getPaginas()) {
    print ("Titulo: " . $Livro1->getTitulo());
    print ("Autor: " . $Livro1->getAutor());
    print ("Genero: " . $Livro1->getGenero());
    print ("Paginas: " . $Livro1->getPaginas());
}elseif($Livro2->getPaginas() > $Livro1->getPaginas() and $Livro2->getPaginas() > $Livro3->getPaginas()){

}else{

}
?>