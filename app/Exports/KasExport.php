<?php

namespace App\Exports;

use App\Keuangankela;
use Maatwebsite\Excel\Concerns\FromCollection;

class KasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keuangankela::all();
    }
}
