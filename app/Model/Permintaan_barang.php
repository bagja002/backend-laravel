<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan_barang extends Model
{
    use HasFactory;


    protected $fillable = [
        "id_user",
        "nama_user",
        "departement",
        "id_barang",
        "nama_barang",
        "kuantiti",
        "keterangan"
    ];

}
