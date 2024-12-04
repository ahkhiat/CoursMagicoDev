<?php

require_once './class/Contact.php';


class ContactService
{
    private $contactList = [];

    function ajouterContact(){
        echo "Ajouter un nouveau contact" . PHP_EOL;
        echo "--------------------------" . PHP_EOL;

        echo "Entrez son nom : ";
        $nom = trim(fgets(STDIN));
        echo "Entrez son prénom : ";
        $prenom = trim(fgets(STDIN));
        echo "Entrez son telephone : ";
        $telephone = trim(fgets(STDIN));

        $contact = new Contact($nom, $prenom, $telephone);

        $this->contactList[] = $contact;

    }

    public function afficherContacts()
    {
        if (empty($this->contactList)) {
            echo "Aucun contact enregistré." . PHP_EOL;
            return;
        }

        echo "Liste des contacts : " . PHP_EOL;
        echo "--------------------" . PHP_EOL;

        foreach ($this->contactList as $index => $contact) {
            echo ($index + 1) . ". " . $contact . PHP_EOL;
        }
    }
}