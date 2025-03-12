<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model

{   
    use HasFactory;
    protected $table='edificio';
    
    public $timestamps=false;
    protected $primaryKey ="idEdi";
    protected $fillable = ["nombre","cp","calle","numero"];


    public function usuario()
    {
        return $this->belongsTo(Usuario::class,"idUsu");
    }

    public function departamentos()
    {
        return $this->belongsToMany(Departamento::class, 'departamento_edificio', 'idEdi', 'idDep');
    }
  
}
