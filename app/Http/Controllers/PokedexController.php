<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pokedex::orderBy('created_at', 'asc')->get();
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
            'Especie' => 'required',
            'Descripcion' => 'required',
            'Region' => 'required',
            'Tipo' => 'required',
        ]);
  
        $pokede = new Pokedex;
        $pokede->Especie = $request->input('Especie'); //retrieving user inputs
        $pokede->Description = $request->input('Description');
        $pokede->Region = $request->input('Region');
        $pokede->Tipo = $request->input('Tipo');  //retrieving user inputs
        $pokede->save(); //storing values as an object
        return $pokede;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Pokedex::findorFail($id);
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
            'Especie' => 'required',
            'Descripcion' => 'required',
            'Region' => 'required',
            'Tipo' => 'required',
        ]);
  
        $pokede = Pokedex::findorFail($id); // uses the id to search values that need to be updated.
        $pokede->Especie = $request->input('Especie'); //retrieving user inputs
        $pokede->Description = $request->input('Description');
        $pokede->Region = $request->input('Region');
        $pokede->Tipo = $request->input('Tipo');  //retrieving user inputs
        $pokede->save();//saves the values in the database. The existing data is overwritten.
        return $pokede;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokede = Pokedex::findorFail($id); //searching for object in database using ID
        if($pokede->delete()){ //deletes the object
          return 'deleted successfully'; //shows a message when the delete operation was successful.
        }
    }
}
