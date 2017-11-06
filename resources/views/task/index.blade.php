@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              
              @foreach($tasks as $task)
                <div class="panel-heading clearfix">
                  {{ $task->name }}
                  <p class="pull-right"><a href="{{ route('task.show', $task->id) }}">ver</a></p>
                </div>

              @endforeach
              {{ $tasks->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
