@extends('admin.index')

@section('page_content')


    <a href="/category/create">Cоздать категорию</a>

    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="">продукты</a></li>
                <li class="list-group-item">категории</li>
                <li class="list-group-item"><a href="/admin">посты</a></li>
            </ul>
        </div>
    </div>

    @foreach($category as $cat)
        <h1>{{ $cat->title }}</h1>
        <p>{{ $cat->content }}</p>
        <ul class="list-inline">
            <li><a href="/category/{{ $cat->id }}/edit" class="btn btn-primary">edit</a></li>
            <li>
                {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $cat->id]]) !!}
                {!! Form::submit('Delete post', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this item?");']) !!}
                {!! Form::close() !!}
            </li>
        </ul>

    @endforeach


@endsection