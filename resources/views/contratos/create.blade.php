@extends('layouts.app')

@section('content')
<div class="container">
<h4>CREACION DE CONTRATOS</h4>
<form action="{{url('contratos')}}" method="post">
{{csrf_field()}}

<label for="ConNumero">{{'# Contrato'}}</label>
<input type="number" name="ConNumero" id="ConNumero" value="">
<br/>
<label for="ConNombre">{{'Nombre Contrato'}}</label>
<input type="text" name="ConNombre" id="ConNombre" value="">
<br/>
<label for="ConEmpresa">{{'Nombre Empresa'}}</label>
<input type="text" name="ConEmpresa" id="ConEmpresa" value="">
<br/>
<button type="submit">Crear</button>
<a href="{{url('contratos')}}">Cancelar</a>

</form>
</div>
@endsection
