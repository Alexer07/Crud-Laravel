<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Editar de Cliente</h6>
                                <form method="post" action="{{url('cliente/'.$cliente->id)}}">                          
                                @csrf 
                                {{method_field('PUT')}}               
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}"><br>
                                            @error('nombre')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                            <input type="tex" class="form-control" id="apellido" name="apellido" value="{{$cliente->apellido}}"><br>
                                            @error('apellido')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>                                   
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}"><br>
                                            @error('telefono')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                                            <input type="text" class="form-control" id="correo" name="correo" value="{{$cliente->correo}}"><br>
                                            @error('correo')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br>
                                        <button class="btn btn-primary" onclick="">Actualizar</button>  
                                        <a href="{{url('cliente/')}}" class="btn btn-info" >Volver</a>                            
                                    </div>  
                                     
                                </form>
                            </div>
                        </div>
                    </div>
    </div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>