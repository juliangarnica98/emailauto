<?php

namespace App\Imports;

use App\Models\Anniversary;
use Maatwebsite\Excel\Concerns\ToModel;

class AnniversaryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Anniversary([
            'name' => $row[4],
            'email' => $row[3],
            'day' => $row[0],
            'month' => $row[1],
            'year' => $row[2]
        ]);
    }
}
