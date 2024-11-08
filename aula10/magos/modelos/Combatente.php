<?php
require_once("Mago.php");

class Combatente extends Mago
{
    private int $forcaDeAtaque;

    function lancarPoder()
    {
        echo ("O mago " . $nome . " do tipo Curandeiro, possui força de " . $forcaDeCura . " e lançou o poder " . $descricao . " com força total de " . $forcaTotal);
    }





    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}
