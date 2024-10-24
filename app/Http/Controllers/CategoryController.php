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
        //obtener todas las categorias
        $categories=Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "este metodo se encarga de mostarr el formulario de crear";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "este metodo se encarga de guardar la información en la base de datos";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "aca vamos a mostar un elemento puntual de la base de datos";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ese metodo se encarga de buscar los datos de un elemento y luego los coloca en un formulario para su posterior actalización";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "este metodo se encarga de actualizar los usuarios de la base de datos";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "este metodo se encarga de deletear";
    }
}
