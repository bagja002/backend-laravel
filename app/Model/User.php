<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "nik",
        "departement",
        "email",
        "no_telpon"
    ];
    
}
