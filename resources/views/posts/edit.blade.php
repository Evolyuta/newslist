@extends('layouts.app')
@section('content')
    <form action="/p/{{$post->id}}" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Изменить новость</h2>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Название</label>

                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title"
                           value="{{ old('title') ?? $post->title}}"
                           autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Описание</label>

                    <input id="description"
                           type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           name="description"
                           value="{{ old('description') ?? $post->description}}"
                           autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label">Категория</label>

                    <select id="category"
                            type="text"
                            class="form-control @error('category') is-invalid @enderror"
                            name="category"
                            autocomplete="category" autofocus>
                        <option value="new"
                                @if($post->category == 'new'))
                                selected
                            @endif>Новый
                        </option>
                        <option value="old"
                                @if($post->category == 'old'))
                                selected
                            @endif>Старый
                        </option>
                        <option value="interesting"
                                @if($post->category == 'interesting'))
                                selected
                            @endif>Интересный
                        </option>
                        <option value="boring"
                                @if($post->category == 'boring'))
                                selected
                            @endif>Скучный
                        </option>
                    </select>

                    @error('category')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <input type="hidden" name="id" value="{{$post->id}}">

                <div class="row pt-4">
                    <button class="btn btn-primary">Сохранить</button>
                </div>

            </div>
        </div>
    </form>

@endsection
