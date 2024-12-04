<?php

abstract class Vehicule
{
    private $marque;

    private $modele;
    private $cylindree;
    


    function __construct($marque, $modele, $cylindree)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->cylindree = $cylindree;
    }

    // // Méthodes abstraites à définir dans les classes filles
    // abstract function definirTypeCarburant();
    // abstract function definirNombrePortes();
    // abstract function definirNombreRoues();
    

}