<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    protected $table = 'keuangankelas';

    protected $fillable = ['bulan','pemasukan','pengeluaran','saldo'];
}