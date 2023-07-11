<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/',function(){
    return view('first');
})->name('game');

// Route::get('/first',function(){
//     //$name = "Samiul Islam";
//     $name = ['Samiul Islam','Rafi','Raian'];
//     return view('first',['name'=>$name]);
// });
Route::get('/member/{id}',[MemberController::class,'index']);
Route::get('/student',[StudentController::class,'showStudent']);
Route::get('/update',[StudentController::class,'updateUser']);
Route::get('/addUser',[UserController::class,'addUser']);
Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.user');
Route::get('/showdata',[UserController::class,'showUser'])->name('showdata');

// Route::view('/post','post');
// Route::get('/post/{id}',function(string $id){
//     return 'hello' . $id;
// })->whereIn('id',['movie','song']);


Route::prefix('page')->group(function(){
    Route::get('/post',function(){
        return '<h1>Post page</h1>';
    });
});
Route::redirect('/page/new','/page/post',301);

Route::fallback(function(){
    return '<h1>Page not found</h1>';
});

