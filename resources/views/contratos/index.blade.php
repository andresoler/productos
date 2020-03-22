@extends('layouts.app')

@section('content')
<div class="container">
<h4>LISTA DE CONTRATOS</h4>
<a href="{{url('contratos/create')}}">Crear Contrato</a>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>N Contrato</th>
            <th>Nombre Contrato</th>
            <th>Empresa Contrato</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contratos as $resultado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$resultado->ConNumero}}</td>
            <td>{{$resultado->ConNombre}}</td>
            <td>{{$resultado->ConEmpresa}}</td>
            <td>
            <a href="{{url('contratos/'.$resultado->id.'/edit')}}">Editar</a>
            <form action="{{url('contratos/'.$resultado->id)}}" method="post" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$contratos->links()}}
</div>
@endsection
