<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
     
    <a href="{{url('producto/create')}}">Registrar</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Descripcion</th>
            <th>Precio</th> 
        </thead>  
        @foreach($productos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nombre}}</td>
                <td>{{$p->referencia}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->Precio}}</td>
                <td> <a href="{{url('producto/'.$p->id.'/edit')}}">Editar</a>
                    <form action="{{url('producto/'.$p->id)}}" method="post">
                    @csrf
                    {{method_field("DELETE")}}
                    <input type="submit" value="Eliminar"> 
                    </form>
                </td>
            </tr>
        @endforeach    
    </table>
    {{'producto'}}->links()
</body>
</html>