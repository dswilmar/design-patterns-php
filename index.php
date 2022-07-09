<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './src/Singleton/Database.php';

require_once './src/Strategy/Export.php';
require_once './src/Strategy/Csv.php';
require_once './src/Strategy/Pdf.php';

//Singleton - Garantindo uma única instancia
var_dump(Database::getInstance());
sleep(1);
var_dump(Database::getInstance());
sleep(1);
var_dump(Database::getInstance());

//Strategy - Objetos que possuem comportamentos semelhantes porém com implementações diferentes
$csv = new Csv();
$pdf = new Pdf();

$e = new Export($csv);
$e->export();

$p = new Export($pdf);
$p->export();
