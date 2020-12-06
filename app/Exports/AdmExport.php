<?php

namespace App\Exports;

use App\Dataadm;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dataadm::all();
    }
}
