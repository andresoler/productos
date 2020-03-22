@extends('layouts.app')

@section('content')
<div class="container">
EDICION DE PRODUCTOS
<br/>
<form action="{{url('productos/'.$productos->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{$productos->Nombre}}">
<br/>

<label for="Contenido">{{'Contenido'}}</label>
<input type="text" name="Contenido" id="Contenido" value="{{$productos->Contenido}}">
<br/>

<label for="Marca">{{'Marca'}}</label>
<input type="text" name="Marca" id="Marca" value="{{$productos->Marca}}">
<br/>

<label for="Precio">{{'Precio'}}</label>
<input type="number" name="Precio" id="Precio" value="{{$productos->Precio}}">
<br/>

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" value="{{$productos->Descripcion}}">
<br/>

<button type="submit" class="btn btn-success">Editar</button>
<a href="{{url('productos')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
@endsection