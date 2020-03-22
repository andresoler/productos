@extends('layouts.app')

@section('content')
<div class="container">
<H4>EDICION DE PERSONAS</H4>

<form action="{{url('personas/'.$personas->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" required id="Nombre" value="{{$personas->Nombre}}" >
<br/>

<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="Apellido" required id="Apellido" value="{{$personas->Apellido}}" >
<br/>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" required id="Correo" value="{{$personas->Correo}}" >
<br/>

<label for="Telefono">{{'Telefono'}}</label>
<input type="number" name="Telefono" required id="Telefono" value="{{$personas->Telefono}}" >
<br/>
<button type="submit">Editar</button>
<a href="{{url('personas')}}">Cancelar</a>

</form>
</div>
@endsection