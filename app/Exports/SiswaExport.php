<?php

namespace App\Exports;

use App\Datasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Datasiswa::all();
    }
}
