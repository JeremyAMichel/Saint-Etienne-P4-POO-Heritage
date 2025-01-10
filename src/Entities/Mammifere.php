<?php

abstract class Mammifere extends Animal {

    protected int $nombrePatte;

    /**
     * Indique les informations d'un Mammifere
     */
    public function infoPlus(): string
    {
        return "je suis un mammifère";
    }
}