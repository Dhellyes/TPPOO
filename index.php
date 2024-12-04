<?php
namespace Dhellye\Tppoo;



use Dhellye\Tppoo\Card;      // Importe la classe Card
use Dhellye\Tppoo\ListCards; // Importe la classe ListCards

include "vendor/autoload.php";  // Charge l'autoloader de Composer

class Index {
    public function createCard() {
        $listCard = new ListCards();        // Crée une nouvelle liste de cartes
        
        while (true) {                      // Boucle principale
            $input = readline("Combien de cartes voulez-vous ajouter sinon taper 'q' pour quitter: "); // Demande input
            
            if (strtolower($input) === 'q') {  // Si q, quitte
                echo "Merci à vous, Au revoir!".PHP_EOL;
                break;
            }
 
            $number = (int)$input;             // Convertit en nombre
            if ($number <= 0) {                // Vérifie si positif
                echo "Le nombre n'est pas valide. Entrer un nombre positif." ;
                continue;                       // Recommence la boucle
            }
 
            echo "Nombre saisi est bien : $number".PHP_EOL;  // Confirme le nombre
            echo "Appuyez sur Entrée...".PHP_EOL;
            readline();                         // Attend Entrée
 
                        // Boucle pour créer le nombre de cartes demandé
            for ($i = 1; $i <= $number; $i++) {  
                // Demande et stocke la question et réponse utilisateur
                $question = readline("Question $i : ");  
                $answer = readline("Réponse $i : ");     
            
                // Crée une nouvelle carte avec la question et réponse
                $card = new Card();                    
                $card->setQuestion($question);         
                $card->setAnswer($answer);             
                
                // Ajoute la carte à la liste des cartes
                $listCard->addCard($card);             
            }

 
            $listCard->displayAllCards();                // Affiche toutes les  cartes

            // Demande si l'utilisateur veut continuer
            $continue = readline("Voulez-vous ajouter d'autres cartes ? (o/n) : "); 
            // Si réponse différente de 'o', quitte le programme
            if (strtolower($continue) !== 'o') {         
                break;
            }
        }
    }
 }
 
 $index = new Index();                        // Crée index
 $index->createCard();                        // Lance création

