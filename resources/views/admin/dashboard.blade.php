@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>Категорий 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>Материалов 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>Посетителей 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p>Посетителей сегодня 0</p>
                </div>
            </div>


        <div class="col-sm-6">
            <a href="#" class="btn btn-block btn-info"> Создать категорию</a>
            <a href="#" class="list-group-item ">
                <h4 class="">Категория первая</h4>
                <p class=""> Количество материалов</p>
            </a>
        </div>

        <div class="col-sm-6">
            <a href="#" class="btn btn-block btn-info"> Создать материал</a>
            <a href="#" class="list-group-item">
                <h4> Материал первый</h4>
                <p> Категория</p>
            </a>
        </div>

        </div>

    </div>

@endsection











