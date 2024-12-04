<?php

class Contact{

    private $nom;
    private $prenom;
    private $telephone;

    function __construct($nom, $prenom, $telephone)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
    }

    function __toString()
    {
        return $this->nom . " " . $this->prenom . ", " . $this->telephone;
    }

}