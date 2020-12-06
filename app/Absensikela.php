<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensikela extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "absensikelas";

    protected $fillable = ['id', 'tanggal', 'jumlahSiswaHadir', 'jumlahKetidakhadiran', 'bukti','kode'];
}
