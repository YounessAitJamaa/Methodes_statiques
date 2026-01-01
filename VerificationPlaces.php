<?php

    class VerificationPlaces
    {
        
        public static function verifierPlacesDisponibles(int $placesRestantes,int $nombreBillets): bool {
            if ($nombreBillets <= 0) {
                return false;
            }

            return $placesRestantes >= $nombreBillets;
        }
    }

?>