<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

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
// Route::get('/student/{cid}',[StudentController::class,'showStudent']);
Route::get('/student',[StudentController::class,'showStudent']);
Route::get('/joinuser',[StudentController::class,'showUser']);
Route::get('/update',[StudentController::class,'updateUser']);
Route::get('/data',[StudentController::class,'index']);
Route::get('/test',[StudentController::class,'InvestReturng']);
Route::controller(UserController::class)->group(function(){
    Route::post('/addUser','addUser')->name('newUser');
    Route::get('/delete/{id}','deleteUser')->name('delete.user');
    Route::get('/showdata','showUser')->name('showdata');
    Route::put('/updateuser/{id}','updateUser')->name('updateUser');
    Route::get('/updateuser/{id}','showUpdate')->name('showUpdate');
});
Route::view('/addUser','adduser')->name('addUser');
Route::view('/register','register');
Route::post('/register',[DogController::class,'index'])->name('register');

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

