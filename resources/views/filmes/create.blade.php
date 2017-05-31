@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('filmes.store')}}">
     {{csrf_field()}}
Nome: 
<input type="text" name="titulo">
Ano:
<input type="text" name="ano">
Genero:
<select name="genero" id="genero" class="form-control">
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>




<input type="submit" value="Cadastrar">
</form>
@endsection