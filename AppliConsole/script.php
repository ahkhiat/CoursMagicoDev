<?php

    require_once './service/ContactService.php';

    $contactService = new ContactService;

    $running = true;

    while ($running) {

        echo "*************************" . PHP_EOL;
        echo "***   APPLI CONTACT   ***" . PHP_EOL;
        echo "*************************" . PHP_EOL;
        echo "" . PHP_EOL;
        echo "-------------------------" . PHP_EOL;
        echo "1 -> Ajouter un contact" . PHP_EOL;
        echo "2 -> Afficher les contacts" . PHP_EOL;
        echo "3 -> Quitter" . PHP_EOL;

        $choix = trim(fgets(STDIN));

        switch($choix) {
            case "1":
                echo "Vous voulez ajouter un contact ";
                $contactService->ajouterContact();
                break;
            case "2":
                echo "Vous voulez afficher les contacts";
                $contactService->afficherContacts();
                break;
            case "3": 
                echo "Au revoir !";
                $running = false;
                break;
        }
            
    }



    

 

    