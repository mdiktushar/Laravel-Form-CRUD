@extends('Layout.mainLayout')

@section('content')

<form method="POST" action="/post">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Title"> <br>
    <Textarea name="content"></Textarea><br>
    <Button type="submit">Submit</Button>
</form>
    
@endsection