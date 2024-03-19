<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes</h1>
     
    <a href="{{url('cliente/create')}}" >Registrar</a>

    <table class="tabla">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th> 
            <th></th>
        </thead>  
      <tbody>
      @foreach($cliente as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nombre}}</td>
                <td>{{$c->apellido}}</td>
                <td>{{$c->telefono}}</td>
                <td>{{$c->correo}}</td>
                <td class="btn-opc"> <a href="{{url('cliente/'.$c->id.'/edit')}}">Editar</a>
                    <form action="{{url('cliente/'.$c->id)}}" method="post">
                    @csrf
                    {{method_field("DELETE")}}
                    <input type="submit" value="Eliminar" class="btn-el"> 
                    </form>
                </td>
            </tr>
        @endforeach  
      </tbody>  
    </table>
    {{$cliente->links()}}
</body>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }
    body{
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
        height: 100vh;
        flex-direction: column;
    }

    .tabla{
        width: 80%;
        height: 45%;
        padding: 15px;
        border-collapse: collapse;
    }

    .tabla th, td{
        padding: 1em;
        text-align: center;
        border-bottom: 1px solid #000;
    }

    .tabla thead{
        background: #ccc;
        border-radius: 25px;
        
    }
    
    .btn-opc{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        height: 100%;
        width: 100%;
    }

    .btn-opc a{
        background: #00f;
        width: 80px;
        height: 40px;
        text-decoration: none;
        color: #fff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-opc .btn-el{
        background: #f01;
        width: 80px;
        height: 40px;
        text-decoration: none;
        color: #fff;
        border-radius: 10px;
        border: none;
    }
    .btn-opc .btn-re{
        background: #f01;
        width: 80px;
        height: 40px;
        text-decoration: none;
        color: #fff;
        border-radius: 10px;
        border: none;
    }
</style>
</html>