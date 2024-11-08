<?php
class Trapezio
{
    private $baseG;
    private $baseP;
    private $altura;



    /**
     * Get the value of baseG
     */
    public function getBaseG()
    {
        return $this->baseG;
    }

    /**
     * Set the value of baseG
     */
    public function setBaseG($baseG): self
    {
        $this->baseG = $baseG;

        return $this;
    }

    /**
     * Get the value of baseP
     */
    public function getBaseP()
    {
        return $this->baseP;
    }

    /**
     * Set the value of baseP
     */
    public function setBaseP($baseP): self
    {
        $this->baseP = $baseP;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
$area = array();

for ($i=0; $i < 4 ; $i++) { 
    $trapezio = new Trapezio();
}