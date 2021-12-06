<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clase extends Model
{
    use HasFactory;
    protected $table="clase";
    protected $fillable=[
        'clase',
        'descripcion',
        'dias',
        'hora'
    ];
    public $timestamps= false;
}
