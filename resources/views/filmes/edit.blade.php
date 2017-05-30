
<form method="POST" action="{{ route('filmes.update', $filmes[0]->id) }}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="put">
Nome: 
<input type="text" name="titulo" value="{{$filmes[0]->titulo}}">
Ano:
<input type="text" name="ano" value="{{$filmes[0]->ano}}">

Genero:
<select name="genero" id="genero" class="form-control">
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>




<input type="submit" value="Cadastrar">
</form>
