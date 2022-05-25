@extends('layouts.plantillabase')

@section('content')
<h2>AGREGAR AUTO</h2>

<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div>
    <form action="/autos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Ranking campeonato</label>
        <input id="ranking_campeonato" name="ranking_campeonato" type="number" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Piloto</label>
        <input id="piloto" name="piloto" type="text" class="form-control" tabindex="2">    
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Auto número</label>
        <input id="numero_auto" name="numero_auto" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Puntos</label>
        <input id="cant_puntos" name="cant_puntos" type="number" class="form-control" tabindex="4">
    </div>
    <a href="/autos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
</div>
@endsection