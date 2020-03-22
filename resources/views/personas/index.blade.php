@extends('layouts.app')

@section('content')
<div class="container">
<H4>LISTADO DE PERSONAS</H4>

<a href="{{url('personas/create')}}" class="btn btn-success">Crear persona</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($personas as $resultado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$resultado->Nombre}}</td>
            <td>{{$resultado->Apellido}}</td>
            <td>{{$resultado->Correo}}</td>
            <td>{{$resultado->Telefono}}</td>
            <td>
            <a href="{{url('personas/'.$resultado->id.'/edit')}}" class="btn btn-primary">Editar</a>
            <form action="{{url('personas/'.$resultado->id)}}" method="post" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger" onclick="return confirm('Desea borrar:');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
{{$personas->links()}}
</div>
@endsection
