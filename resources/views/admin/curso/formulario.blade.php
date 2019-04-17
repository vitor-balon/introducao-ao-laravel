{{ csrf_field() }}
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ isset($curso['titulo']) }}">
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" rows="5" class="form-control">{{ isset($curso['descricao']) }}</textarea>
</div>
<div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor" value="{{ isset($curso['valor']) }}">
</div>
<div class="form-group">
    <label for="publicado">Publicado</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="publicado" id="exampleRadios1" value="1" {{ isset($curso['publicado']) && $curso['publicado'] == 1 ? 'checked' : ''  }}>
        <label class="form-check-label" for="exampleRadios1">
            Sim
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="publicado" id="exampleRadios2" value="0" {{ isset($curso['publicado']) && $curso['publicado'] == 0 ? 'checked' : ''  }}>
        <label class="form-check-label" for="exampleRadios2">
            Não
        </label>
    </div>        
</div>

<button type="submit" class="btn btn-success">@yield('textodobotao')</button>
<a href="{{ route('admin.cursos') }}" class="btn btn-light">Cancelar</a>
