@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('generos.store')}}">
     {{csrf_field()}}
<div class="container">
<div class="row">

<font size="3"  color="#FF0000" face="Arial">
Nome: 
</font>
<input type="text" name="nome" class="form-control">
</br>

<input type="submit"  class="btn btn-danger" value="Cadastrar">
</form>
@endsection