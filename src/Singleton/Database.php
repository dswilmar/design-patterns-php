<?php

class Database {

    public static $instance;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if (!isset(self::$instance)) {
            //self::$instance = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', '');
            self::$instance = new DateTime();
        }

        return self::$instance;
    }

}