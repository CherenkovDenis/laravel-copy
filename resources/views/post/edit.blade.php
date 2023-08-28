@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Название поста</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}"></div>
            <div class="mb-3">
                <label for="content" class="form-label">Содержание поста</label>
                <textarea type="text" name="content" class="form-control" id="content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">URL картинки</label>
                <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}">
            </div>
            <div>
                Выберите категорию
                <select class="form-select mb-4 mt-2" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option {{$category->id === $post->category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Обновить</button>
        </form>
    </div>
@endsection
