@extends('admin.index')

@section('page_content')


    <a href="/admin/create">Cоздать пост</a>

    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="">продукты</a></li>
                <li class="list-group-item"><a href="">категории</a></li>
                <li class="list-group-item">посты</li>
            </ul>
        </div>
    </div>

    @foreach($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <ul class="list-inline">
            <li><a href="/admin/{{ $post->id }}/edit" class="btn btn-primary">edit</a></li>
            <li>
                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $post->id]]) !!}
                {!! Form::submit('Delete post', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this item?");']) !!}
                {!! Form::close() !!}
            </li>
        </ul>

    @endforeach

@endsection