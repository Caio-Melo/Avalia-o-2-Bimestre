@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('generos.update', $generos[0]->id) }}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">

<div class="container">
<div class="form-group"> 
<font size="3"  color="#FF0000">Nome:</font>

<input type="text" name="nome" class="form-control" value="{{ $generos[0]->nome }}">
<br>
<input type="submit" class="btn btn-danger btn-block" value="Cadastrar">
</div>

</form>
@endsection