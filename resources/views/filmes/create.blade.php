@extends('layouts.navbar')
@section('conteudo')
<form method="POST" action="{{ route('filmes.store')}}">
     {{csrf_field()}}
<div class="container">
<div class="row">
<font size="3"  color="#FF0000" face="Arial">
Nome:
</font>
<input type="text" name="titulo" class="form-control">

<font size="3"  color="#FF0000" face="Arial">
Ano:
</font>
<input type="text" name="ano" class="form-control">

<font size="3"  color="#FF0000" face="Arial">
Genero:
</font>
<select name="genero" id="genero" class="form-control">
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>

</br>

<input type="submit" class="btn btn-danger btn-block" value="Cadastrar">
</div>
</div>

</form>
@endsection