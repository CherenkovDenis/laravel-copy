@extends('layouts.main')
@section('content')
    <div class="container">
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <a href="{{route('posts.index')}}" class="btn btn-primary">Назад</a>
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Редактировать пост</a>
        <div>
            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить пост" class="btn btn-danger mt-2">
            </form>
        </div>
    </div>
@endsection
