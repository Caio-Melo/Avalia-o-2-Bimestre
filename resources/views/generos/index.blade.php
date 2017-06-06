@extends('layouts.navbar')
@section('conteudo')
<a class="btn btn-danger btn-block" href="/generos/create">Cadastrar Gênero</a>

<div class="container">
  <table class="table table-striped">
    <thead>
        <tr>
            <th><font size="3"  color="#FF0000">Id</font></th>
            <th><font size="3"  color="#FF0000">Nome</font></th>
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($generos as $genero)
        <tr>
            <td>{{$genero->id}}</td>
            <td>{{$genero->nome}}</td>
            <td>
                <a class="btn btn-primary" href="/generos/{{$genero->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('generos.destroy', $genero->id)}}" method="post">

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