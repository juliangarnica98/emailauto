<?php

namespace App\Imports;

use App\Models\Birthday;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class BirthdayImport implements ToModel
{
    public function model(array $row)
    {
        Birthday::create([
            'name' => $row[3],
            'email' => $row[2],
            'day' => $row[0],
            'month' => $row[1],
        ]);
    }

}
