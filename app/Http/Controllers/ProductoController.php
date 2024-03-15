<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos["productos"]=producto::paginate(4);
        return view("producto/index",$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("producto/crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $uid=uniqid();
        $datos= request()->except("_token");
        //dd($datos);
        $datos["uid"]=$uid;
        producto::insert($datos);     
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $datos['producto']=producto::find($id);
        return view("producto.editar",$datos);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($producto)
    {
        //
        producto::where('id',$producto)->delete();
        return redirect('producto');
    }
}
