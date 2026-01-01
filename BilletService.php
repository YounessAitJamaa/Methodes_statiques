<?php

    require_once 'VerificationPlaces.php';
    require_once 'GenerationIdentifiant.php';

    class BilletService
    {

        public static function acheterBillet(int $placesRestantes,int $nombreBillets): ?array {

            // check seat availability
            if (!VerificationPlaces::verifierPlacesDisponibles($placesRestantes, $nombreBillets)) {
                return null;
            }

            // Generate ticket identifier
            $identifiant = GenerationIdentifiant::genererIdentifiantBillet();

            return [
                'ticket_id' => $identifiant,
                'billets' => $nombreBillets,
                'message' => 'Ticket purchase successful'
            ];
        }
    }


?>