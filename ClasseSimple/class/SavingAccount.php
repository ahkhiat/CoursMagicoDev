<?php

class SavingAccount extends Account
{
    private $interestRate;

    function __construct($name, $balance, $interestRate)
    {
        parent::__construct($name, $balance);
        $this->interestRate = $interestRate;
    }

    function __toString()
    {
        return parent::__toString() .
        " et son taux d'interêt est de " . $this->interestRate;
    }



}