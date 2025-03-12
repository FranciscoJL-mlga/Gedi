<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Departamento_EdificioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\ProfileController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('/', [AuthenticatedSessionController::class, 'store']);

Route::get('construccion', function () {
    return view('construccion');
})->name('construccion');

// Rutas para el dashboard principal
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/main', [DepartamentoController::class, "gestion"])
        ->name('dashboard');

    // Grupo para las rutas relacionadas con departamentos
    Route::prefix('departamentos')->name('departamentos.')->group(function () {

        Route::get('/listaEdificios', [DepartamentoController::class, 'listaEdificios'])
            ->name('listaEdificios');

        Route::post('/actualizar/{departamento}/{edificio}', [DepartamentoController::class, 'actualizar'])
            ->name('actualizar');

        Route::post('/borrar/{departamento}/{edificio}', [DepartamentoController::class, 'borrar'])
            ->name('borrar');

    });
});

Route:: group([
    'controller' => EdificioController :: class,
    'middleware'=> ['auth', 'admin'],
    'as' => 'edificios.'],function(){

        Route::get('/gestionEdificios' ,"gestion" )->name('gestionEdificios');
        
        Route::post('/borrar/{edificio}' ,"borrar")->name('borrar');

        Route::match(['GET','POST'],'/crear', "crear")->name('crear');
        Route::match(['GET','POST'],'/actualizar/{edificio}', "actualizar")->name('actualizar');


});    


Route::get('/departamentos/{departamento}/asociar-edificio', [Departamento_EdificioController::class, 'listar'])
    ->name('departamentos.asociar-edificio');

// Ruta para procesar la asociación (envío del formulario)
Route::post('/departamentos/{departamento}/asociar-edificio', [Departamento_EdificioController::class, 'asociar'])
    ->name('departamentos.asociar-edificio');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
