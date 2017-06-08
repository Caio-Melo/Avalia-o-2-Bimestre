@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('generos.store')}}">
     {{csrf_field()}}
<div class="container">
<div class="row">

<font size="3"  color="#000000" face="Arial">
Nome: 
</font>
<input type="text" name="nome" class="form-control">
</br>

<input type="submit"  class="btn btn-primary" value="Cadastrar">
</form>
@endsection