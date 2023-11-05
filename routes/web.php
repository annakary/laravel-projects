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
    return view('welcome');
});
// ruta que requiere parametros}

// Route::get('/buscar-user/{id}', function (string $id) {
//     return 'User '.$id;
// });

// rutas opcionales
 Route::get('/saludar/{name}/{lastname?}', function (string $name, $lastname = "vega") {
    if (preg_match('/^[A-Za-z]+$/', $name) && preg_match('/^[A-Za-z]+$/', $lastname)) {
        return 'Hola ' . $name . ' ' . $lastname;
    } else {
        return 'Por favor, ingresa solo letras del alfabeto.';
    }
  });

// practicamente tomas la url y devuelves lo que quieras sea suma, resta, etc
######################  SUMA  ##########################
 Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        return "Por favor, ingresa solo números.";
    }
 });
 ######################  RESTA  ##########################
Route::get('/resta/{num1}/{num2}', function ($num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        return "Por favor, ingresa solo números.";
    }
 });
 ######################  MULTIPLICACION  ##########################
  Route::get('/multiplica/{num1}/{num2}', function ($num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        return "Por favor, ingresa solo números.";
    }
  });
  ######################  DIVISION  ##########################
  Route::get('divide/{num1}/{num2}', function ($num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    } else {
        return "Por favor, ingresa solo números.";
    }
  });
  

// Route::get('/vista/{name}', function ($name) {
//     return view('prueba', ["name" => $name]);
// });

Route::get('/prueba-controller/{name}', [UserController::class,'index']);


