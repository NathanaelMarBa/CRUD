@extends('app')

@section('content')
    <div class="container w-25 border p-4">

        <form action="">
            <div class="mb-3">
                <label for="title" class="form-label">Titulo de la tarea</label>
                <input type="text" name="title" class="form-control">
            </div>
              <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>

    </div>
@endsection