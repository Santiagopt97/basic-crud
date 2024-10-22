<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all categories
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //Este metodo muestra el formulario de creacion
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //este metodo guarda datos en la base de datos
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //este metodo busca los datos en la base de datos y los coloca en un formulario para su posterior actualizacion
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //actualiza la base de datos
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //elimina
    {
        //
    }
}
