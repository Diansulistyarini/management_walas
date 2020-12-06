<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    protected $primaryKey = 'id';

    protected $table = "datasiswas";

    protected $fillable = ['id','nipd','kelas','nama', 'nisn','jurusan','tempat_lahir', 'tanggal_lahir', 'phone', 'email', 'status', 'kode'];
}
