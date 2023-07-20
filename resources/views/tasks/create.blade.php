@extends('layouts.app')


@section('content')
    <form method = 'POST' action = "/tasks" >
        <div class = 'form-group'>
            @csrf
    <label for = 'description'> Task description</label>
    <input class = 'form-control' name = 'description' />
    </div>
    <div class = 'form-group'>
    <button type = 'submit' class = 'btn btn-primary'> Create Task</button>
    </div>
    </form>
@endsection