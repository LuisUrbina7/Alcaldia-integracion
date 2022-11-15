<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\NormasController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\PublicidadController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PaginasController::class,'inicio'])->name('inicio');
Route::get('/noticias',[PaginasController::class,'noticias'])->name('noticias');
Route::get('/articulo/{id}',[PaginasController::class,'noticias_articulo'])->name('noticias.articulo');
Route::get('/alcaldia',[PaginasController::class,'alcaldia'])->name('alcaldia');
Route::get('/concejo-municipal',[PaginasController::class,'concejo_municipal'])->name('concejo.municipal');
Route::get('/municipio',[PaginasController::class,'municipio'])->name('municipio');
Route::get('/entes',[PaginasController::class,'entes'])->name('entes');
Route::get('/turismo',[PaginasController::class,'turismo'])->name('turismo');
Route::get('/servicios',[PaginasController::class,'servicios'])->name('servicios');

/* -----seccion planilla----- */
Route::get('/catastro', function () {
    return view('paginas.servicios-catastro');
})->name('catastro');
Route::get('/registro-civil', function () {
    return view('paginas.servicios-registro-civil');
})->name('registro.civil');
Route::get('/hacienda-municipal', function () {
    return view('paginas.servicios-hacienda');
})->name('hacienda.municipal');
Route::get('/sindicatura', function () {
    return view('paginas.servicios-sindicatura');
})->name('sindicatura');

Auth::routes();
/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */
Route::get('/publicacion', [PublicacionController::class, 'index'])->name('publicaciones');
Route::get('/publicacion/formulario', [PublicacionController::class, 'insertarVista'])->name('publicaciones.formulario');
Route::post('/publicacion/formulario/insertar', [PublicacionController::class, 'insertar'])->name('publicaciones.insertar');
Route::get('/publicacion/actualizar/{id}', [PublicacionController::class, 'actualizarVista'])->name('publicaciones.actualizar.vista');
Route::post('/publicacion/modificacion/{id}', [PublicacionController::class, 'actualizar'])->name('publicaciones.actualizar.insertar');
Route::get('/publicacion/borrar/{id}', [PublicacionController::class, 'borrar'])->name('publicar.borrar');
Route::get('/noticias-recientes', [PublicacionController::class, 'noticias_recientes'])->name('noticias.recientes');

Route::get('/categoria', [CategoriasController::class, 'index'])->name('categorias');
Route::post('/categoria/formulario', [CategoriasController::class, 'insertar'])->name('categoria.insertar');
Route::get('/categoria/formulario/{id}', [CategoriasController::class, 'actualizarFormulario'])->name('categoria.actualizar.formulario');
Route::post('/categoria/modificacion/{id}', [CategoriasController::class, 'actualizar'])->name('categoria.actualizar.insertar');
Route::get('/categoria/borrar/{id}', [CategoriasController::class, 'borrar'])->name('categoria.borrar');
Route::get('/cargar-categorias', [CategoriasController::class, 'cargar_categorias'])->name('cargar.categorias');

Route::get('/perfil', [UsuariosController::class, 'index'])->name('perfil');
Route::post('/perfil/actualizar/{id}', [UsuariosController::class, 'actualizarPerfil'])->name('perfil.actualizar');
Route::get('/usuarios', [UsuariosController::class, 'usuarios'])->name('usuarios');
Route::get('/usuarios/crear', [UsuariosController::class, 'crear_formulario'])->name('usuarios.crear.formulario');
Route::post('/usuarios/guardar', [UsuariosController::class, 'crear'])->name('usuarios.crear');
Route::get('/usuarios/vista/{id}', [UsuariosController::class, 'usuarios_vista'])->name('usuarios.actualizar.formulario');
Route::post('/usuarios/actualizar/{id}', [UsuariosController::class, 'actualizar_usuario'])->name('usuarios.actualizar');
Route::get('/usuarios/borrar/{id}', [UsuariosController::class, 'borrar_usuario'])->name('usuarios.borrar');

Route::get('/publicidad', [PublicidadController::class, 'index'])->name('publicidad');
Route::get('/publicidad/formulario', [PublicidadController::class, 'insertar_vista'])->name('publicidad.formulario');
Route::post('/publicidad/crear', [PublicidadController::class, 'insertar'])->name('publicidad.insertar');
Route::get('/publicidad/actualizar/vista/{id}', [PublicidadController::class, 'actualizar_vista'])->name('publicidad.actualizar.formulario');
Route::post('/publicidad/actualizar/insertar/{id}', [PublicidadController::class, 'actualizar'])->name('publicidad.actualizar.insertar');
Route::get('/publicidad/borrar/{id}', [PublicidadController::class, 'borrar'])->name('publicidad.borrar');
Route::get('/cargar-publicidad', [PublicidadController::class, 'cargar_publicidad'])->name('cargar.publicidad');


Route::get('/normativas', [NormasController::class, 'index'])->name('normativas');
Route::get('/normativas/formulario', [NormasController::class, 'insertar_vista'])->name('normas.formulario');
Route::post('/normativas/crear', [NormasController::class, 'insertar'])->name('normas.insertar');
Route::get('/normativas/actualizar/vista/{id}', [NormasController::class, 'actualizar_vista'])->name('normas.actualizar.formulario');
Route::post('/normativas/actualizar/insertar/{id}', [NormasController::class, 'actualizar'])->name('normas.actualizar.insertar');
Route::get('/normativas/borrar/{id}', [NormasController::class, 'borrar'])->name('normas.borrar');
Route::get('/cargar-decretos', [NormasController::class, 'cargar_decretos'])->name('cargar.decretos');
Route::get('/cargar-normas', [NormasController::class, 'cargar_normas'])->name('cargar.normas');

Route::post('/comentario', [ComentariosController::class, 'insertar'])->name('comentario.insertar');

/* Route::get('/categoria/formulario/{id}', [CategoriasController::class, 'actualizarFormulario'])->name('categoria.actualizar.formulario');
Route::post('/categoria/modificacion/{id}', [CategoriasController::class, 'actualizar'])->name('categoria.actualizar.insertar');
Route::get('/categoria/borrar/{id}', [CategoriasController::class, 'borrar'])->name('categoria.borrar');
 */