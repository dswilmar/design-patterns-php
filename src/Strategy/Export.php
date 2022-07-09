<?php

class Export
{
    private $file;

    public function __construct(ExportStrategy $exportStrategy)
    {
        $this->file = $exportStrategy;
    }

    public function export()
    {
        $this->file->export();
    }
}