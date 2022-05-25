@extends('layouts.plantillabase')

@section('content')
 <!--<a href="#" class="mt-5 btn btn-outline-success">Agregar tarea existente a lista</a>-->
 <form method="POST" action="{{ url('/todolist') }}">
     @csrf
    <label for="" class="form-label">Desplega para ver las tareas existentes</label>
    <input type="hidden" name="id_auto" class="form-control rounded-0" value="{{ $auto->id }}">
    <select name="id_tarea" class="form-control rounded-0">
        @foreach ($tareas as $tarea)
        <option value="{{$tarea->id}}">{{$tarea->descripcion}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-danger">Agregar tarea al auto</button>
</form>    
<div>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Tarea</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($auto -> tareas as $tarea)
            <tr>
                <td>{{$tarea->descripcion}}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection('content')