<?php

namespace App\Exports;

use App\kasussiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class KasusExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kasussiswa::all();
    }
}
