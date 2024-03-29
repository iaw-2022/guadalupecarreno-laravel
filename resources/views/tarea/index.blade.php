@extends('layouts.plantillabase')

@section('content')
<a href="{{ url('tareas/create') }}" class="mt-5 btn btn-outline-success">Agregar tarea</a>

<div>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
            <tr>
                <td>{{$tarea->id}}</td> 
                <td>{{$tarea->descripcion}}</td> 
                <td>
                    <form action = "{{route ('tareas.destroy', $tarea->id)}}" method = "POST">
                    <a href="{{ url("/tareas/{$tarea->id}/edit") }}" a class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick=" return confirm('¿Está seguro que desea eliminar esta tarea?')">Borrar</button>
                    </form>
                </td>
            <tr>    
            @endforeach
        </tbody>   
    </table>
</div> 
@endsection
