<?php

declare(strict_types = 1);

namespace App\Services;

use LucidFrame\Console\ConsoleTable;

class TableCreatorService
{
    private ConsoleTable $table;

    public function createTable(array $data): ConsoleTable
    {
        $this->table = new ConsoleTable();

        $headers = array_keys($data);
        $values = array_values($data);

        $this->table->setHeaders($headers);
        
        foreach(range(0, count($headers)) as $index) {
            $fields = array_column($values, $index);
            $this->table->addRow($fields);
        }
        
        return $this->table;
    }

    public function printTable(): void
    {
        $this->table->display();
    }
}

?>