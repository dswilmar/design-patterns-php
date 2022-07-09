<?php

require_once 'ExportStrategy.php';

class Pdf implements ExportStrategy
{
    public function export()
    {
        echo 'Exportando em PDF';
    }
}