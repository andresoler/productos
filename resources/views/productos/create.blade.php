@extends('layouts.app')

@section('content')
<div class="container">
<h3>Creacion de productos</h3>
<br/>
<form action="{{url('productos')}}" method="post">
{{csrf_field()}}

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" required id="Nombre" value="">
<br/>

<label for="Contenido">{{'Contenido'}}</label>
<input type="text" name="Contenido" required id="Contenido" value="">
<br/>

<label for="Marca">{{'Marca'}}</label>
<input type="text" name="Marca" required id="Marca" value="">
<br/>

<label for="Precio">{{'Precio'}}</label>
<input type="number" name="Precio" required id="Precio" value="">
<br/>

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" required id="Descripcion" value="">
<br/>

<button type="submit" class="btn btn-success">Crear</button>
<a href="{{url('productos')}}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
@endsection