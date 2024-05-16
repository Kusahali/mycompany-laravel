@extends('master.master')


@section('content')
<h1>Trang Chủ</h1>

<ul>
    @foreach ($listPosts as $post)
        <li>{{ $post->Baiviet }}</li>
        <p>{{ $post->Danhmucbaiviet }}</p>
        @section('content1')<h1>Logo đối tác</h1>
        @foreach ($listPosts as $post)
        <img src="{{ $post->Logodoitac }}" alt="{{ $post->Logodoitac }}"width=100px height=100px>
        @endforeach
        @endsection
    @endforeach
</ul>
@endsection