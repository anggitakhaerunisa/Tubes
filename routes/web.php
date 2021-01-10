<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\voteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homes', function () {
    return view('homenews');
});

Route::get('/langkah', function () {
    return view('langkah');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/vote', [voteController::class , 'vote']);
Route::get('/votes/{id}/{ids}', [voteController::class , 'votes']);
Route::get('/quick', [voteController::class , 'quick']);
Route::post('/registercanpost', [RegisterController::class,'registercan'])->name('registercan');
Route::get('/registercan' , function (){
   return view('auth.registercan');
});
Route::get('/loginadmin',[adminController::class,'login']);
Route::post('/loginadmin',[adminController::class,'loginfunc']);
Route::get('/admin/dashboard',[adminController::class,'dashboard']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/edit/{id}' , function (){
 return view('edit');
});
Route::post('/profile/edit/{id}' , function ($id , Request $request){
    $test = User::find($id);
    $test->name = $request->name;
    $test->email = $request->email;
    $test->no_hp = $request->no_hp;
    $test->NIK = $request->NIK;
    $test->save();
    return redirect('/profile');
});

