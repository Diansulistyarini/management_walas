<?php

namespace App\Exports;

use App\Rapat;
use Maatwebsite\Excel\Concerns\FromCollection;

class RapatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rapat::all();
    }
}
