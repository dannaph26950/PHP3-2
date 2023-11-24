<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/list', function () {
    return 'list';
});

Route::get('/products/{a}/{b}', function ($a, $b) {
    return 'products' . $a . 'adad' . $b;
});




Route::get('index',function (){
    return view('index');
});
//
//Route::post('add',function (){
//    return 'Gửi thành công';
//});
//Route::put('add',function (){
//    return 'xu ly put';
//
//});
//
//Route::get('home',function (){
//    return view('home');
//});

Route::get('home', function () {
    return view('home');
});
Route::get('home', [UserController::class, 'home']);

//Route::get('home', function () {
//    $title = "ROLLING DOWN ";
//    $content = "TIE ME DOWN";
//    $footerr="STAR WALKIN";
//
////    CÁCH 1: KHoi tao 1 mang de dua bien vao
//    $dataView=[
//        'titleData'=>$title,
//        'contentData'=>$content,
//        'footerData'=>$footerr,
//    ];
//    return view('home',$dataView);
//});
