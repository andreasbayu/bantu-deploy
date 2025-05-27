<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentScoreImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        $row_legth = count($row);

        dd($row_legth);

        return new Student([
            'nisn' => $row[1],
            'subject_name' => $row[2],
            'score' => $row[3]
        ]);
    }
}
