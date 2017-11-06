@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ol type="1">
                      <li><a href="{{ route('task.create') }}">Crear tarea</a></li><br>
                      <li><a href="{{ route('task.index') }}">Listar tareas</a></li>
                    </ol>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
