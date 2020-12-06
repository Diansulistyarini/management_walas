<?php

namespace App\Exports;

use App\jadwalguru;
use Maatwebsite\Excel\Concerns\FromCollection;

class JadwalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return jadwalguru::all();
    }
}
