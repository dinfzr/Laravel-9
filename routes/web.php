<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;    
use App\Http\Controllers\DinController;

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

// Route::get('/users/{id}/{authorid}/{bookid}', function ($id, $aid, $bid) {
//     return view('dinesh');
// });

// Route::get('/', [UserController::class, 'index']);
// Route::get('/demo/{name}/{id?}',function($name,$id=null){
    
//     $data=compact('name','id');
// //     return view('dinesh')->with($data);
// });

// Route::put('/demoput',function(){
//     echo 'hello';
// });

// Route::patch('')
Route::get('/xx', [RegistrationController::class, 'index']);
Route::post('/xx', [RegistrationController::class, 'store']);