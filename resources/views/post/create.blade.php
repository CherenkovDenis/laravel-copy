@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Название поста</label>
                <input type="text" name="title" class="form-control" id="title"></div>
            <div class="mb-3">
                <label for="content" class="form-label">Содержание поста</label>
                <textarea type="text" name="content" class="form-control" id="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">URL картинки</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>
            <div>
                Выберите категорию
                <select class="form-select mb-4 mt-2" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                Выберите опции
                <select class="form-select mb-3 mt-2" multiple aria-label="multiple select example" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
