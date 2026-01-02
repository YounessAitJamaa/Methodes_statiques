<?php

    require_once 'BilletService.php';

    $placesRestantes = 15;
    $nombreBillets = 16;

    $resultat = BilletService::acheterBillet($placesRestantes, $nombreBillets);

    if ($resultat === null) {
        echo "Purchase failed: not enough seats ";
    } else {
        echo "Purchase successful <br>";
        echo "Ticket ID: " . $resultat['ticket_id'] . "<br>";
        echo "Number of tickets: " . $resultat['billets'];
    }

?>