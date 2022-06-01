<?php

    class Database {

        private static $instance = null;

        /**
         * Retourne la connexion à la base de données
         */
        public static function getPDO(): PDO {
            if (self::$instance === null) {
                self::$instance = new PDO('mysql:host=localhost;dbname=singleton', 'root', '', []);        
            }
            return self::$instance;
        }

    }

?>