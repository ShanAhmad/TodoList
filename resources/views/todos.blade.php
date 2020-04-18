@extends('layout')

@section('content') 
    <div class="row">
        <div class="col-lg-12  col-lg-offset-3">
            <form action="/todos/create" method="POST">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new Todo">
            </form>
        </div>
    </div>
    <br>
    @foreach ($todos as $todo)
        <p>{{$todo->todo}} 
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
            @if ($todo->progress)
                <span>Completed</span>
            @else
                <a href="/todos/completed/{{$todo->id}}" class="btn btn-success">Mark as Complete</a>
            @endif
        </p>
        <hr>
    @endforeach
    {{$todos->links()}}
@endsection


