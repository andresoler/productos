@extends('layouts.app')

@section('content')
<div class="container">

<H4>CREACION DE PERSONAS</H4>
<form action="{{url('personas')}}" method="post">
{{csrf_field()}}

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" required id="Nombre" value="" >
<br/>

<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="Apellido" required id="Apellido" value="" >
<br/>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" required id="Correo" value="" >
<br/>

<label for="Telefono">{{'Telefono'}}</label>
<input type="number" name="Telefono" required id="Telefono" value="" >
<br/>
<button type="submit">Crear</button>
<a href="{{url('personas')}}">Cancelar</a>

</form>
</div>
@endsection