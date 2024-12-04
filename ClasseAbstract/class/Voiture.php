<?php

class Voiture extends Vehicule
{
    private $typeCarburant;
    private $nombreRoues;
    private $nombrePortes;

    function __construct($marque, $modele, $cylindree, $typeCarburant, $nombrePortes)
    {
        parent::__construct($marque, $modele, $cylindree);
        $this->typeCarburant = $typeCarburant;
        $this->nombrePortes = $nombrePortes;
        $this->nombreRoues = 4;
    }

    


}