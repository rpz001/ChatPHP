<?php

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

Route::get('/signup/',function () {

    $nick = request()->input('nick');
    $email = request()->input('email');
    $clave =  request()->input('clave');

    if(($nick === NULL) or ($email === NULL) or ($clave === NULL)){

    }else{

        $nuevoUsuario = new \App\Usuario();
        $nuevoUsuario->nick = $nick;
        $nuevoUsuario->email = $email;
        $nuevoUsuario->clave = $clave;
        $nuevoUsuario->save();
        echo '<script language="javascript">';
        echo 'alert("Usuario creado exitosamente")';
        echo '</script>';

    }

    return view('signup');
});

Route::get('login/',function(){

    $nick = request()->input('nick');
    $clave =  request()->input('clave');

    if(($nick === NULL) or ($clave === NULL)){

        echo '<script language="javascript">';
        echo 'alert("Ingrese su nick y contraseña")';
        echo '</script>';

    }else{


        $usuarios = Usuario::all();
        $b1 = "false";
        $b2 = "false";

        foreach($usuarios as $usuario){


        }

    }
    return view('login');
});

Route::get('chat/',function(){

    $mensajes = App\Mensaje::all();


    $nick = "Rodrigo";
    $mensaje = request()->input('mensaje');

    if($mensaje === null){

        //Agregar código.

    }else{

        $nuevoMensaje = new \App\Mensaje();
        $nuevoMensaje->nick = $nick;
        $nuevoMensaje->mensaje = $mensaje;
        $nuevoMensaje->fecha = \Carbon\Carbon::now();
        $nuevoMensaje->save();
        echo '<script language="javascript">';
        echo 'alert("Mensaje guardado exitosamente")';
        echo '</script>';

    }
    return view('chat', ['mensajes' => $mensajes]);
});

