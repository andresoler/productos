@extends('layouts.app')

@section('content')
<div class="container">
<h4>EDICION DE CONTRATOS</h4>
<form action="{{url('contratos/'.$contratos->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="ConNumero">{{'# Contrato'}}</label>
<input type="number" name="ConNumero" id="ConNumero" value="{{$contratos->ConNumero}}">
<br/>
<label for="ConNombre">{{'Nombre Contrato'}}</label>
<input type="text" name="ConNombre" id="ConNombre" value="{{$contratos->ConNombre}}">
<br/>
<label for="ConEmpresa">{{'Nombre Empresa'}}</label>
<input type="text" name="ConEmpresa" id="ConEmpresa" value="{{$contratos->ConEmpresa}}">
<br/>
<button type="submit">Editar</button>
<a href="{{url('contratos')}}">Cancelar</a>
</div>
@endsection
