<?php

namespace App\Imports;

use App\Models\Perawatan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PerawatanImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Perawatan::where('nm_perawatan', $row[1])->update([
                'total_byrdr' => $row[2],
                'total_byrpr' => $row[2],
                'total_byrdrpr' => $row[2],
            ]);
        }
    }
}
