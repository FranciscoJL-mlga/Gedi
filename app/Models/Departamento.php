<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table='departamento';
    
    public $timestamps=false;
    protected $primaryKey ="idDep";
    protected $fillable = ["nombre"];


    public function usuarios()
    {
        return $this->hasMany(Usuario::class, "idDep");
    }
    
}
