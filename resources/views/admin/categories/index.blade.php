@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Список всех категорий @endslot
            @slot('parent') Главная @endslot
                @slot('active') Категории @endslot
        @endcomponent

            <hr>
            <a href="{{route('admin.category.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Создать категорию</a>
            <br><br>
        <table class="table">
            <thead>
                <th>Наиминование</th>
                <th>Публикация</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href="{{route('admin.category.edit',['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Данные отсутствуют</td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination">
                            {{$categories->links()}}
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>
@endsection







