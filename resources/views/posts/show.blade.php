@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1> 
    <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by: <strong>{{$post->user->name}}</strong></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' => ['PostControler@destroy', $post->id], 'method' => 'POST', 'onsubmit' => 'return confirmDelete()', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection

<script>
function confirmDelete() {
var result = confirm('Are you sure you want to delete this post?');

if (result) {
        return true;
    } else {
        return false;
    }
}   
</script>