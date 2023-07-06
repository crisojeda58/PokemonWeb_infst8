<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class RecompensaController extends Controller
{
    public function verificarUsuario(Request $request){
        $id = $request->id;

        // Verificar si existe un usuario con el ID
        $usuario = Usuarios::find($id);

        if ($usuario) {
            return response()->json(['id' => $usuario->id]);
        } else {
            return response()->json(['message' => 'No se encontró un usuario con el ID proporcionado.'], 404);
        }
    }

    public function guardarRecompensa(Request $request, $id){
        // Obtener la recompensa aleatoria
        $listaRecompensa = array(20, 30, 50, 100);
        $recompensaAleatoria = $listaRecompensa[array_rand($listaRecompensa)];

        // Filtra el ID del usuario para agregar sus monedas
        $usuario = Usuarios::find($id);

        if ($usuario) {
            $usuario->Monedas += $recompensaAleatoria;
            $usuario->save();
        } else {
            return response()->json(['message' => 'No se encontró un usuario con el ID proporcionado.'], 404);
        }

        return response()->json(['recompensaAleatoria' => $recompensaAleatoria]);
    }

    public function obtenerRecompensaTotal($id){
        $usuario = Usuarios::find($id);

        if ($usuario) {
            return response()->json(['data' => ['Monedas' => $usuario->Monedas]]);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }
}
