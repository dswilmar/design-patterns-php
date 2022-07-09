<?php

require_once 'ExportStrategy.php';

class Csv implements ExportStrategy
{
    public function export()
    {
        echo 'Exportando em CSV';
    }
}