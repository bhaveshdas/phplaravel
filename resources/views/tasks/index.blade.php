@extends('layouts.app')

@section('content')

<h1> Task List</h1>
@foreach($tasks as $task)
<div class="card" style = 'margin-bottom :20px'>
  <div class="card-body" >
  <div>
    <p></p>@if($task->isCompleted())
    <span class="badge text-bg-success">Completed</span>
    @endif
    </p>
    <p>{{$task->description}}</p>
    
    <form action = "/tasks/{{$task->id}}" method = 'POST'>
        @method('PATCH')
        @csrf
        @if(!$task->isCompleted())
        <button class = 'btn btn-light btn-block' input = 'submit'>Complete</button>
        @endif
     
    </form>
  </div>
  </div>
</div>
@endforeach
<a href = 'tasks/create' class = 'btn btn-primary btn-lg btn-black'> New Task</a>
@endsection