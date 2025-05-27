<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentImport implements ToModel, WithStartRow
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
        return new Student([
            'nis' => $row[1],
            'nisn' => $row[2],
            'name' => $row[3],
            'nama_ortu' => $row[4],
            'tempat_tgl_lahir' => $row[5],
            'no_exam' => $row[6],
            'class' => $row[7],
            'status' => $row[8],
            'message' => $row[9],
        ]);
    }
}
