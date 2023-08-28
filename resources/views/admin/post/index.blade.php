@extends('layouts.admin')

@section('content')
    <div>
        <div class="container align-items-center">
            <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Создать пост</a>
            @foreach($posts as $post)
                <a href="{{route('posts.show', $post->id)}}"><div>{{$post->id}}. {{$post->title}}</div></a>
            @endforeach
            <div class="mt-4">
                {{$posts->withQueryString()->links()}}
            </div>
        </div>
    </div>
@endsection
