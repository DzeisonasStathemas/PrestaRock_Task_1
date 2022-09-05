<?php

declare(strict_types = 1);

namespace App\Services;

use App\Models\Person;

class DataFormatterService
{
    public function formatData(array $data): array
    {
        $formattedData = [];

        foreach ($data as $personData) {
            foreach ($personData as $columnName => $value) {
                $formattedData[$columnName][] = $value;
            }
        }

        return $formattedData;
    }
}

?>