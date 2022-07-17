@extends('layouts.plantillabase')

@section('content')
<a href="{{ url('autos/create') }}" class="mt-5 btn btn-outline-success">Agregar auto</a>

<div>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Ranking en el campeonato</th>
                <th scope="col">Piloto</th>
                <th scope="col">Auto número</th>
                <th scope="col">Puntos</th>
                <th scope="col">Tareas pendientes</th>
                <th scope="col">Opciones</th>
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
                    <a href="{{ url("/autos/{$auto->id}") }}" class="btn btn-info">Ver</a>
                </td>
                <td>
                    <form action = "{{route ('autos.destroy', $auto->id)}}" method = "POST">
                    <a href="{{ url("/autos/{$auto->id}/edit") }}" a class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar este auto?')">Borrar</button>
                    </form>
                </td>
            </tr>    
            @endforeach
        </tbody>   
    </table>
</div> 
@endsection