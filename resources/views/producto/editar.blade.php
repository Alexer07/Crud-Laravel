@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Editar de Productos</h6>
                                <form method="post" action="{{url('producto/'.$producto->id)}}">                          
                                @csrf 
                                {{method_field('PUT')}}               
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}" placeholder="Ingrese Nombre del Producto" >
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Referencia</label>
                                            <input type="tex" class="form-control" id="referencia" name="referencia" value="{{$producto->referencia}}">
                                        </div>                                   
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Precio</label>
                                            <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->Precio}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary" onclick="">Actualizar</button> 
                                        <a href="{{url('producto/')}}" class="btn btn-info" >Volver</a>                        
                                    </div>                         
                                </form>
                            </div>
                        </div>
                    </div>
    </div> 
@endsection