@extends('layout')

@section('content')   
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="row">
            <div class="col-lg-12  col-lg-offset-3">
                <form action="/todos/{{$todo->id}}/save" method="POST">
                    {{ csrf_field() }}
                    <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create a new Todo">
                </form>
                <a href="/todos" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection