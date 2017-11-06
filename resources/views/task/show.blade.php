@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $task->name }}</div>

                <div class="panel-body">
                        <strong>Descripcion:</strong>
                        <p>{{ $task->description }}</p>
                </div>
                <div class="panel-footer clearfix">
                        <p class="pull-right">
                          <button><a href="{{ route('task.edit', $task->id) }}">Editar</a></button>
                        </p>
                          <form  method="POST" action="{{ route('task.destroy', $task->id) }}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit">
                                  Eliminar
                              </button>
                          </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
