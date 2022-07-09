<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './src/Singleton/Database.php';

try {
    var_dump(Database::getInstance());
    sleep(1);
    var_dump(Database::getInstance());
    sleep(1);
    var_dump(Database::getInstance());

} catch (Exception $ex) {
    echo $ex->getMessage();
}