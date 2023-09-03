@extends('Layout.mainLayout')

@section('content')

{{-- <form method="POST" action="/post"> --}}
{!! Form::open(['method'=>'POST', 'route'=>'post.store']) !!}
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Title"> <br>
    <Textarea name="content"></Textarea><br>
    <Button type="submit">Submit</Button>
{!! Form::close() !!}
{{-- </form> --}}
    
@if (count($errors))
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif

@endsection