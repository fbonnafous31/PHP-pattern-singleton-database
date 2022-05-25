<?php

    namespace App;

use Exception;

    class Singleton {

        private static $instance =  [];

        /**
         * Le constructeur du Singleton doit être privé pour prévenir des appels de construction avec l'opérateur new
         */
        protected function __construct() {}

        /**
         * Le Singleton ne devrait pas être clonable
         */
        protected function __clone() {}

        /**
         * Le Singleton ne devrait pas pouvoir être restauré
         */
        protected function __wakeup() {
            throw new \Exception("cannot unserialize a singleton");
        }

        public static function getInstance(): Singleton {
            $cls = static::class;

            if (!isset(self::$instance[$cls])) {
                self::$instance[$cls] = new static();
            }
            return self::$instance[$cls];
        }

    }

?>