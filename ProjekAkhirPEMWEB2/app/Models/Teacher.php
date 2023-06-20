<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'NIP',
        'jenis_kelamin',
        'alamat',
        'no_hp',
    ];  
}
