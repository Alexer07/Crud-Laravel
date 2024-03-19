<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                            <input type="tex" class="form-control" id="apellido" name="apellido" value="{{$cliente->apellido}}">
                                        </div>                                   
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                                            <input type="text" class="form-control" id="correo" name="correo" value="{{$cliente->correo}}">
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