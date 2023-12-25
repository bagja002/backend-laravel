<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;


    protected $fillable = [
        "nama_barang",
        "lokasi",
        "total_barang",
        "jenis_barang",
        "status"
    ];



}
