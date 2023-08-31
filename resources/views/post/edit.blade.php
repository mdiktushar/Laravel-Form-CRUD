@extends('Layout.mainLayout')

<h3>Edit</h3>
@section('content')
    <form method="POST" action="/post/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="Title" value={{ $post->title }}> <br>
        <Textarea name="content">{{ $post->content }}</Textarea><br>
        <Button type="submit">Update</Button>
    </form>

    <form method="POST" action="/post/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <Button type="submit">Delete</Button>
    </form>
@endsection
