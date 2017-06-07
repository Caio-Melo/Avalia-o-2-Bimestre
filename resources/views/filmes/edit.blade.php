@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('filmes.update', $filmes[0]->id) }}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
<div class="container">

<div class="form-group"> 
<font size="3"  color="#FF0000">Nome:</font>
<input type="text" name="titulo" class="form-control" value="{{$filmes[0]->titulo}}">
</div>

<div class="form-group"> 
<font size="3"  color="#FF0000">Ano:</font>
<input type="text" name="ano" class="form-control" value="{{$filmes[0]->ano}}">
</div>

<div class="form-group"> 
<font size="3"  color="#FF0000">Genero:</font>
<select name="genero" id="genero" class="form-control">
</div>
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>



</div>
<input type="submit" class="btn btn-danger btn-block" value="Cadastrar">
</form>
@endsection