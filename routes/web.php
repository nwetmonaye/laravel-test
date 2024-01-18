<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ["name" => "<h2>Nwet</h2>" , "age" => 23]);
});

// Route::get('/about', function () {
//     $num1 = 10;
//     $num2 = 20;
//     $result = $num1 + $num2;
//     return view('about' , ["message" => "This is testing message", "result" => $result]);
// });

Route::view('about', 'about',["message" => "This is testing message","num1" => 10, "num2" => 20]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/customer/list', function () {
    return view('customer.list');
});

Route::get('vipMaleCustomer', function () {
    return view('customer.vipCustomer.male.list');
});

Route::get('vipFemaleCustomer', function () {
    return view('customer.vipCustomer.female.list');
});

Route::view('customer/help/service', 'service')->name('ser');

Route::get('result/{num1}/{num2}', function ($num1,$num2) {
    $myResult = $num1 + $num2;
    return view('result', ['result' => $myResult]);
})->name('myCalculation');

Route::get('paraPass/{name?}', function ($myName ="Name is empty") {
    return $myName;
})->name('passwithRoute');



// Route::get('/user/{name}', function ($name) {
//     return "User is " . $name;
// });

// Route::get('/user/{name?}', function ($name = "No Name") {
//     return "User is " . $name;
// });

Route::view('customer/register', 'customerRegister');

//POST Method
Route::post('postTest',function(){
    return "this is post method testing";
});