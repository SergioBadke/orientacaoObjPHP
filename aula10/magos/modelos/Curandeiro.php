<?php

require_once("Mago.php");
require_once("Poder.php");

class Curandeiro extends Mago{
    private int $forcaDeCura;

    function lancarPoder(){
        echo ("O mago ". $nome . " do tipo Curandeiro, possui força de ". $forcaDeCura. " e lançou o poder ".$descricao . " com força total de " . $forcaTotal);
    }

    

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}
