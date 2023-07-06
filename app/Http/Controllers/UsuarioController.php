<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuarios::orderBy('created_at', 'asc')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [ //inputs are not empty or null
            'Nombre' => 'required',
            'Contraseña' => 'required',
            'Correo' => 'required',
        ]);

        $usuario = new Usuarios;
        $usuario->Nombre = $request->input('Nombre'); //retrieving user inputs
        $usuario->Usuario = $request->input('Usuario');
        $usuario->Contraseña = $request->input('Contraseña');
        $usuario->Correo = $request->input('Correo');
        $usuario->save(); //storing values as an object
        return $usuario;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Usuarios::findorFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [ // the new values should not be null
            'Nombre' => 'required',
            'Usuario' => 'required',
            'Contraseña' => 'required',
            'Correo' => 'required',
        ]);

        $usuario = Usuarios::findorFail($id); // uses the id to search values that need to be updated.
        $usuario->Nombre = $request->input('Nombre'); //retrieving user inputs
        $usuario->Usuario = $request->input('Usuario');
        $usuario->Contraseña = $request->input('Contraseña');
        $usuario->Correo = $request->input('Correo');
        $usuario->save(); //saves the values in the database. The existing data is overwritten.
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuarios::findorFail($id); //searching for object in database using ID
        if ($usuario->delete()) { //deletes the object
            return 'deleted successfully'; //shows a message when the delete operation was successful.

        }
    }
}
