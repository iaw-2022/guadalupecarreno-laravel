@extends('layouts.plantillabase');

@section('content')
<a href="{{ url('autos/create') }}" class="mt-5 btn btn-outline-success">Agregar auto</a>

<div>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Ranking en el campeonato</th>
                <th scope="col">Piloto</th>
                <th scope="col">Auto número</th>
                <th scope="col">Puntos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autos as $auto)
            <tr>
                <td>{{$auto->ranking_campeonato}}</td> 
                <td>{{$auto->piloto}}</td>
                <td>{{$auto->numero_auto}}</td>
                <td>{{$auto->cant_puntos}}</td>
                <td>
                    <a href="{{ url('/autos/{$auto->id}/edit') }}" a class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            <tr>    
            @endforeach
        </tbody>   
    </table>
</div> 
@endsection