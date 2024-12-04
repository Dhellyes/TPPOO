<?php
// Définit l'espace de nom pour la classe
namespace Dhellye\Tppoo;

class ListCards {
   // Tableau privé pour stocker les cartes
   private array $cards = [];

   // Ajoute une carte à la liste
   public function addCard(Card $card) {
       $this->cards[] = $card;
   }

   // Affiche toutes les cartes
   public function displayAllCards() {
       // Si pas de cartes, affiche message
       if (empty($this->cards)) {
            //message que sa affichera si la list est vide 
           echo "Aucune carte dans la liste." . PHP_EOL;
           return;
       }

       echo "Listing des cartes contenues dans la liste :" . PHP_EOL;
       // Parcourt et affiche chaque carte
       foreach ($this->cards as $index => $card) {
// Incrémente l'index de 1 car les tableaux commencent à 0
// Par exemple: si $index = 0, $number = 1, pour afficher "Carte 1" au lieu de "Carte 0"
           $number = $index + 1;
           echo "Infos sur la carte $number :" . PHP_EOL; //sa affichira le numero de la carte 
           echo "Question: " . $card->getQuestion() . PHP_EOL;//affichera la question que tu tapes
           echo "Réponse: " . $card->getAnswer() . PHP_EOL . PHP_EOL; //affichera la reponse que tu tapes 
       }
   }
}