<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class LoginController extends Controller

{
    public function login(Request $request)
    {
        // Validar los datos de inicio de sesión

        // Obtener los datos del formulario de inicio de sesión
        $email = $request->input('email');
        $password = $request->input('password');

        // Comprobar la autenticación del usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Inicio de sesión exitoso
            return redirect()->route('dashboard')->with('success', 'Inicio de sesión exitoso');
        } else {
            // Error en el inicio de sesión
            return redirect()->route('login')->with('error', 'Error al iniciar sesión');
        }
    }
}
