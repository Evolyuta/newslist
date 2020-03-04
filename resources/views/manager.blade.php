@extends('layouts.app')
@section('content')
    <div class="card-title text-center">
        <h1>newslist</h1>
    </div>
    <div class="pb-2 d-flex">
        <div class="text-left" style="width:50%">
            <a href="/">На главную
            </a>
        </div>
        <div class="text-right" style="width:50%">
            <a href="/p/create">Создать новость
            </a>
        </div>


    </div>
    <div class="row">
        <div class="col-3 text-center border font-weight-bold">Заголовок</div>
        <div class="col-3 text-center border font-weight-bold">Описание</div>
        <div class="col-2 text-center border font-weight-bold">Категория</div>
        <div class="col-2 text-center border font-weight-bold"></div>
        <div class="col-2 text-center border font-weight-bold"></div>
        @foreach(\App\Post::latest()->get() as $post)
            <div class="col-3 text-center border">{{$post->title}}</div>
            <div class="col-3 text-center border">{{$post->description}}</div>
            <div class="col-2 text-center border">{{$post->localCategory}}</div>
            <div class="col-2 text-center border">
                <a href="/p/{{$post->id}}/edit">Изменить</a>
            </div>
            <div class="col-2 text-center border">

                <form action="/p/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$post->id}}">

                    <button class="btn btn-primary red">Удалить</button>
                </form>
            </div>
        @endforeach
    </div>
    <style>
        .btn-primary {
            background-color: red;
            border: red;
        }
    </style>
@endsection
