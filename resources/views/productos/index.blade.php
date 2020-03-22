@extends('layouts.app')

@section('content')
<div class="container">

<br/>
<a href="{{url('productos/create')}}" class="btn btn-success">+ Crear producto</a>
<table class="table table-ligth table-hover">
<thead>
<tr>

<th>#</th>
<th>Nombre</th>
<th>Contenido</th>
<th>Marca</th>
<th>Precio</th>
<th>Descripcion</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>
@foreach($productos as $resultado)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$resultado->Nombre}}</td>
<td>{{$resultado->Contenido}}</td>
<td>{{$resultado->Marca}}</td>
<td>{{$resultado->Precio}}</td>
<td>{{$resultado->Descripcion}}</td>
<td>
<a href="{{url('productos/'.$resultado->id.'/edit')}}" class="btn btn-warning">Editar</a>
<form action="{{url('productos/'.$resultado->id)}}" method="post" style="display:inline">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('Desea Borrar?');" class="btn btn-danger">Borrar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{$productos->links()}}
</div>
@endsection
