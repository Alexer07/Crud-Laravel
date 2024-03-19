<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>
</head>

<body>
    <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Registro de Clientes</h6>
                                <form method="Post" action="{{url('cliente')}}" id="formCli">                          
                                @csrf                
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
                                            @error('nombre')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                            <input type="tex" class="form-control" id="apellido" name="apellido" value="{{old('apellido')}}">
                                            @error('apellido')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>                                   
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
                                            @error('telefono')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="exampleInputPassword1" class="form-label">Correo Electronico</label>
                                            <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}">
                                            @error('correo')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn-opcG" onclick="">Guardar</button>                              
                                    </div>  
                                
                                </form>
                            </div>
                        </div>
                    </div>
    </div> 
</body>
<style>
    #formCli{
        padding: 10px;
        margin:0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: space-around; 
        flex-direction: column;
    }
</style>

</html>