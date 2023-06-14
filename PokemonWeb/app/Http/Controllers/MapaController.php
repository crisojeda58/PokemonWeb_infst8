<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapas;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mapas::orderBy('created_at', 'asc')->get();
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
            'Region' => 'required',
        ]);
  
        $mapa = new Mapas;
        $mapa->Nombre = $request->input('Nombre'); //retrieving user inputs
        $mapa->Region = $request->input('Description');
        $mapa->save(); //storing values as an object
        return $mapa;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Mapas::findorFail($id); 
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
            'Region' => 'required',
        ]);
  
        $mapa = Mapas::findorFail($id); // uses the id to search values that need to be updated.
        $mapa->Nombre = $request->input('Nombre'); //retrieves user input
        $mapa->Region = $request->input('Region');
        $mapa->save();//saves the values in the database. The existing data is overwritten.
        return $mapa;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapa = Mapas::findorFail($id); //searching for object in database using ID
        if($mapa->delete()){ //deletes the object
          return 'deleted successfully'; //shows a message when the delete operation was successful.
        }
    }
}
