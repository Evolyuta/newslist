@extends('layouts.app')
@section('content')
    <div class="card-title text-center">
        <h1>newslist</h1>
    </div>
    <div class="d-flex">
        <div class="pb-2 text-left" style="width: 50%">
            <div style="width: 33%">
                <form action="/filter" method="post" class="d-flex text-right">
                    @csrf
                    <span class="pr-2 mt-2">Фильтр: </span>
                    <select id="category"
                            type="text"
                            class="form-control"
                            name="category"
                            autocomplete="category" autofocus>
                        <option value="all">Все
                        </option>
                        <option value="new"
                                @if($category=='new')
                                selected
                            @endif
                        >Новый
                        </option>
                        <option value="old"
                                @if($category=='old')
                                selected
                            @endif>Старый
                        </option>
                        <option value="interesting"
                                @if($category=='interesting')
                                selected
                            @endif>Интересный
                        </option>
                        <option value="boring"
                                @if($category=='boring')
                                selected
                            @endif>Скучный
                        </option>
                    </select>
                    <button class="btn btn-primary  pl-2 red">Применить</button>
                </form>
            </div>

        </div>
        <div class="pb-2 text-right" style="width: 50%">
            <a href="/manager">К управлению
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-5 text-center border font-weight-bold">Заголовок</div>
        <div class="col-4 text-center border font-weight-bold">Категория</div>
        <div class="col-3 text-center border font-weight-bold"></div>
        @foreach($posts as $post)
            <div class="col-5 text-center border">{{$post->title}}</div>
            <div class="col-4 text-center border">{{$post->localCategory}}</div>
            <div class="col-3 text-center border">
                <a href="/p/{{$post->id}}">
                    Подробнее
                </a>
            </div>
        @endforeach
    </div>
    <style>
        .form-control {
            width: 200px;
        }
    </style>
@endsection
