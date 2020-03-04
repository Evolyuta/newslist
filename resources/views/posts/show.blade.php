@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-8 offset-2">

            <div class="form-group row">
                <div class="col-md-4 col-form-div">
                    <strong>Название: </strong>
                    {{$post->title}}</div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 col-form-div">
                    <strong>Описание: </strong>
                    {{$post->description}}</div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 col-form-div">
                    <strong>Категория: </strong>
                    {{$post->category}}</div>
            </div>
            <a href="/">Назад к списку</a>
        </div>
<style>
    .col-md-4{
        min-width: 100%;
    }
    </style>
@endsection
