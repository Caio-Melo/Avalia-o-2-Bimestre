@extends('layouts.navbar')
@section('conteudo')

<div class="container">
    <a class="btn btn-danger" href="/filmes/create">Cadastrar Filmes</a>
    <br>
    <br>
  <table class="table table-condensed col-lg-6" style="margin-left: 2px; width: 99%">
    <thead>
      <tr>
            <th><font size="3"  color="#FF0000">Id</font</th>
            <th><font size="3"  color="#FF0000">Nome</font></th>
            <th><font size="3"  color="#FF0000">Ano<font></th>
            <th><font size="3"  color="#FF0000">Gênero<font></th>
            
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($filmes as $filme)
        
        <tr>
            <td><font color="#ffffff">{{$filme->id}}</font></td>
            <td><font color="#ffffff">{{$filme->titulo}}</font></td>
            <td><font color="#ffffff">{{$filme->ano}}</font></td>
            <td><font color="#ffffff">{{$filme->genero->nome}}</font></td>
            
            <td>
                <a class="btn btn-primary" href="/filmes/{{$filme->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>


                

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection