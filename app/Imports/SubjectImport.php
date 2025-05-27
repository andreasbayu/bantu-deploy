<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubjectImport implements ToCollection
{
    public function collection(Collection $collection) 
    {
        foreach ($collection as $row) {
            dd($collection);
        }
    } 
}
