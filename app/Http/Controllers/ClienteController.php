<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos["cliente"]=cliente::paginate(4);
        return view("cliente/index",$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("cliente/crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|string'
        ];
        $mensaje=[ 
            'required'=> ":attribute Obligatorio"
        ];

        $validateData=$request->validate($campos, $mensaje);

        $uid=uniqid();
        $datos= request()->except("_token");
        //dd($datos);
        $datos["uid"]=$uid;
        cliente::insert($datos);     
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $datos['cliente']=cliente::find($id);
        return view("cliente.editar",$datos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $campos=[
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|string'
        ];
        $mensaje=[ 
            'required'=> ":attribute Obligatorio"
        ];

        $validateData=$request->validate($campos, $mensaje);

        $datos= request()->except("_token","_method");
        cliente::where("id",$id)->update($datos);
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cliente)
    {
        //
        cliente::where('id',$cliente)->delete();
        return redirect('cliente');
    }
}
