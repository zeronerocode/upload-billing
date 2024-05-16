<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $table = 'jns_perawatan';
    public $timestamps = false;
    protected $fillable = [
        'total_byrdr',
        'total_byrpr',
        'total_byrdrpr',
    ];
}
