@extends('Layout.mainLayout')

<h3>Index</h3>
@section('content')
    <ul>
        @foreach ($posts as $item)
            <li>
                <a href={{ route('post.show', $item->id) }}>{{ $item->title }} </a>
                <a href={{ route('post.edit', $item->id) }}>Edit</a>

            </li>
        @endforeach
    </ul>
@endsection
