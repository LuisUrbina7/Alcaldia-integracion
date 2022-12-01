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
Route::get('/noticias/categorias/{id}',[PaginasController::class,'noticias_categoria'])->name('noticias.categoria');
Route::get('/articulo/{slug}',[PaginasController::class,'noticias_articulo'])->name('noticias.articulo');
Route::get('/alcaldia',[PaginasController::class,'alcaldia'])->name('alcaldia');
Route::get('/concejo-municipal',[PaginasController::class,'concejo_municipal'])->name('concejo.municipal');
Route::get('/municipio',[PaginasController::class,'municipio'])->name('municipio');
Route::get('/entes',[PaginasController::class,'entes'])->name('entes');
Route::get('/turismo',[PaginasController::class,'turismo'])->name('turismo');
Route::get('/servicios',[PaginasController::class,'servicios'])->name('servicios');

/* -----paginas de informacion----- */

Route::get('/sala-situacional', function () {
    return view('paginas.sala-situacional');
})->name('sala.situacional');
Route::get('/misiones', function () {
    return view('paginas.misiones');
})->name('misiones');

Route::get('/somos-vzla', function () {
    return view('paginas.somos-vzla');
})->name('somosvzla');



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
Route::get('/proteccion-civil', function () {
    return view('paginas.servicios-proteccion-civil');
})->name('proteccion.civil');

Route::get('/desarrollo-social', function () {
    return view('paginas.servicios-desarrollo-social');
})->name('desarrollo.social');

/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
     Route::get('/publicacion', [PublicacionController::class, 'index'])->name('publicaciones');
     Route::get('/publicacion/formulario', [PublicacionController::class, 'insertarVista'])->name('publicaciones.formulario');
     Route::post('/publicacion/formulario/insertar', [PublicacionController::class, 'insertar'])->name('publicaciones.insertar');
     Route::get('/publicacion/actualizar/{id}', [PublicacionController::class, 'actualizarVista'])->name('publicaciones.actualizar.vista');
     Route::post('/publicacion/modificacion/{id}', [PublicacionController::class, 'actualizar'])->name('publicaciones.actualizar.insertar');
     Route::get('/publicacion/borrar/{id}', [PublicacionController::class, 'borrar'])->name('publicar.borrar')->middleware('adm');
     Route::post('/ckeditor', [PublicacionController::class, 'ckeditor_imagen'])->name('ckeditor.imagen')->middleware('adm');
   /*  -----rutas categorias---- */
     Route::get('/categoria', [CategoriasController::class, 'index'])->name('categorias');
     Route::post('/categoria/formulario', [CategoriasController::class, 'insertar'])->name('categoria.insertar');
     Route::get('/categoria/formulario/{id}', [CategoriasController::class, 'actualizarFormulario'])->name('categoria.actualizar.formulario');
     Route::post('/categoria/modificacion/{id}', [CategoriasController::class, 'actualizar'])->name('categoria.actualizar.insertar');
     Route::get('/categoria/borrar/{id}', [CategoriasController::class, 'borrar'])->name('categoria.borrar')->middleware('adm');
 /*  -----rutas perfil---- */
     Route::get('/perfil', [UsuariosController::class, 'index'])->name('perfil');
     Route::post('/perfil/actualizar/{id}', [UsuariosController::class, 'actualizarPerfil'])->name('perfil.actualizar');
     Route::get('/usuarios', [UsuariosController::class, 'usuarios'])->name('usuarios')->middleware('adm');
     Route::get('/usuarios/crear', [UsuariosController::class, 'crear_formulario'])->name('usuarios.crear.formulario')->middleware('adm');
     Route::post('/usuarios/guardar', [UsuariosController::class, 'crear'])->name('usuarios.crear');
     Route::get('/usuarios/vista/{id}', [UsuariosController::class, 'usuarios_vista'])->name('usuarios.actualizar.formulario')->middleware('adm');
     Route::post('/usuarios/actualizar/{id}', [UsuariosController::class, 'actualizar_usuario'])->name('usuarios.actualizar')->middleware('adm');
     Route::get('/usuarios/borrar/{id}', [UsuariosController::class, 'borrar_usuario'])->name('usuarios.borrar')->middleware('adm');
     /*  -----rutas publicidad---- */
     Route::get('/publicidad', [PublicidadController::class, 'index'])->name('publicidad');
     Route::get('/publicidad/formulario', [PublicidadController::class, 'insertar_vista'])->name('publicidad.formulario');
     Route::post('/publicidad/crear', [PublicidadController::class, 'insertar'])->name('publicidad.insertar');
     Route::get('/publicidad/actualizar/vista/{id}', [PublicidadController::class, 'actualizar_vista'])->name('publicidad.actualizar.formulario');
     Route::post('/publicidad/actualizar/insertar/{id}', [PublicidadController::class, 'actualizar'])->name('publicidad.actualizar.insertar');
     Route::get('/publicidad/borrar/{id}', [PublicidadController::class, 'borrar'])->name('publicidad.borrar')->middleware('adm');
   /*  -----rutas normativas---- */
   Route::get('/normativas', [NormasController::class, 'index'])->name('normativas');
   Route::get('/normativas/formulario', [NormasController::class, 'insertar_vista'])->name('normas.formulario');
   Route::post('/normativas/crear', [NormasController::class, 'insertar'])->name('normas.insertar');
   Route::get('/normativas/actualizar/vista/{id}', [NormasController::class, 'actualizar_vista'])->name('normas.actualizar.formulario');
   Route::post('/normativas/actualizar/insertar/{id}', [NormasController::class, 'actualizar'])->name('normas.actualizar.insertar');
   Route::get('/normativas/borrar/{id}', [NormasController::class, 'borrar'])->name('normas.borrar')->middleware('adm');
    });

    /* ----cargar recientes de noticias---- */
Route::get('/noticias-recientes', [PublicacionController::class, 'noticias_recientes'])->name('noticias.recientes');
/* ----cargar categorias pagina de noticias---- */
Route::get('/cargar-categorias', [CategoriasController::class, 'cargar_categorias'])->name('cargar.categorias');
/* ----cargar publicidad pagina principal---- */
Route::get('/cargar-publicidad', [PublicidadController::class, 'cargar_publicidad'])->name('cargar.publicidad');
/* ----cargar decrectos---- */
Route::get('/cargar-decretos', [NormasController::class, 'cargar_decretos'])->name('cargar.decretos');
/* ----cargar Normas---- */
Route::get('/cargar-normas', [NormasController::class, 'cargar_normas'])->name('cargar.normas');
/* ----Insertar los comentarios en la pagina pricipal---- */
Route::post('/comentario', [ComentariosController::class, 'insertar'])->name('comentario.insertar');
