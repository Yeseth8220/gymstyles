<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Entrenador extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable=[
        'name','email','password','id_clase',
        'documento','telefono','rol'
    ];
    public $timestamp = false;

    public function CON()
    {
        return $this->belongsTo(clase::class, 'id_clase');
    }

}
