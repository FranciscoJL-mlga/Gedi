<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departamento_edificio', function (Blueprint $table) 
        {
            $table->id('idDE') ;

            $table->foreignId('idDep')->constrained('departamento', 'idDep') ;
            $table->foreignId('idEdi')->constrained('edificio', 'idEdi') ;
            $table->integer('despachos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamento_edificio');
    }
};
