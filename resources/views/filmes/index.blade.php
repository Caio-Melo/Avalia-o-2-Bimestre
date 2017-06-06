@extends('layouts.navbar')
@section('conteudo')
<a class="btn btn-danger btn-block" href="/filmes/create">Cadastrar Filmes</a>

<head>
  <title>Tabela Filmes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
            <th><font size="3"  color="#FF0000">Id</font</th>
            <th><font size="3"  color="#FF0000">Nome</font></th>
            <th><font size="3"  color="#FF0000">Ano/<font></th>
            
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($filmes as $filme)
        
        <tr>
            <td>{{$filme->id}}</td>
            <td>{{$filme->titulo}}</td>
            <td>{{$filme->ano}}</td>
            
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