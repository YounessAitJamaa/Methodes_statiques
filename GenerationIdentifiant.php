<?php

    class GenerationIdentifiant
    {
        
        public static function genererIdentifiantBillet(): string
        {
            $prefix = 'BILLET-';
            $uniquePart = uniqid();

            return $prefix . $uniquePart;
        }
    }

?>