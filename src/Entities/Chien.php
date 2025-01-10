<?php

final class Chien extends Mammifere
{

    private string $nom;

    /**
     * Le cri du chien
     */
    public function crie(): string
    {
        return "j'aboie";
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
}
