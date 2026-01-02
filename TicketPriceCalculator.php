<?php

    class TicketPriceCalculator
    {
        public static function calculateTotal(float $prixUnitaire,int $quantite,float $categorieCoefficient = 1): float {
            return $prixUnitaire * $quantite * $categorieCoefficient;
        }
    }



    $prixUnitaire = 50;   
    $quantite = 3;         
    $categorie = 1.2;       

    $total = TicketPriceCalculator::calculateTotal($prixUnitaire,$quantite,$categorie);

    echo "Prix total : " . $total . " DH "."\n";


?>