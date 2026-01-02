<?php

    class TicketRule
    {
        private static $nbrMax = 4;

        public static function maxTicketsPerMatch($nombreBillets)
        {
            return $nombreBillets <= self::$nbrMax;
        }
    }


    $nombreBillets = 1;
    if (!TicketRule::maxTicketsPerMatch($nombreBillets)) {
        echo "Maximum 4 billets par match.";
    }


?>