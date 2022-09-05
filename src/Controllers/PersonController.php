<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\Services\DataFormatterService;
use App\Services\TableCreatorService;

class PersonController
{
    public function __construct(
        private DataFormatterService $dataFormatterService,
        private TableCreatorService $tableCreatorService,
    ) {
    }

    public function index(array $data): void
    {
        $formattedData = $this->dataFormatterService->formatData($data);
        $this->tableCreatorService->createTable($formattedData);
        $this->tableCreatorService->printTable();
    }
}

?>