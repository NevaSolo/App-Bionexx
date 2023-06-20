<?php
    class Connection {
        private static $base;
        public function __construct() {

        }
        public static function getConnection() {
            try {
                self::$base = new PDO("mysql:host=localhost;dbname=bionexx", "root", "");
            } catch (PDOException $a) {
                echo "Tsy mandeha lesy le izy bro";
            }
            return self::$base;
        }
    }
?>