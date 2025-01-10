<?php

abstract class Animal {


    protected float $weight;

    /**
     * Indique les informations d'un Animal
     */
    public function info(): string
    {
        return "je suis un animal";
    }
}