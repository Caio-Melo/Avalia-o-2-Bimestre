@extends('layouts.navbar')
@section('conteudo')
<br>
<br>
<div class="container">
    <a class="btn btn-primary" href="/generos/create">Cadastrar Gênero</a>
<br>
<br>

  <table class="table table-condensed col-lg-6"  style="margin-left: 2px; width: 99%"  bordercolor="#000000">
    <thead>
        <tr>
            <th><font size="3"  color="#000000">Id</font></th>
            <th><font size="3"  color="#000000">Nome</font></th>
            
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($generos as $genero)
        <tr>
            <td><font color="#000000">{{$genero->id}}</font>
            </td>
            <td><font color="#000000">{{$genero->nome}}</font></td>
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