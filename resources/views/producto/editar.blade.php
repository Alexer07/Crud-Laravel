<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
</head>
<body>
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
                                                                        
                                    </div>  
                                    <button type="submit" onclick="">Actualizar</button>  
                                </form>
                            </div>
                        </div>
                    </div>
    </div> 
</body>
</html>