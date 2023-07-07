<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Items::orderBy('created_at', 'asc')->get();
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
            'Description' => 'required',
            'Cantidad' => 'required',
            'Ataque' => 'required',
            'Defensa' => 'required',
        ]);
  
        $item = new Items;
        $item->Nombre = $request->input('Nombre'); //retrieving user inputs
        $item->Description = $request->input('Description');
        $item->Cantidad = $request->input('Cantidad');
        $item->Ataque = $request->input('Ataque');
        $item->Defensa = $request->input('Defensa');  //retrieving user inputs
        $item->save(); //storing values as an object
        return $item;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Items::findorFail($id); 
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
            'Description' => 'required',
            'Cantidad' => 'required',
            'Ataque' => 'required',
            'Defensa' => 'required',
        ]);
  
        $item = Items::findorFail($id); // uses the id to search values that need to be updated.
        $item->Nombre = $request->input('Nombre'); //retrieves user input
        $item->Description = $request->input('Description');
        $item->Cantidad = $request->input('Cantidad');
        $item->Ataque = $request->input('Ataque');
        $item->Defensa = $request->input('Defensa');////retrieves user input
        $item->save();//saves the values in the database. The existing data is overwritten.
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Items::findorFail($id); //searching for object in database using ID
        if($item->delete()){ //deletes the object
          return 'deleted successfully'; //shows a message when the delete operation was successful.
      }
    }
}
