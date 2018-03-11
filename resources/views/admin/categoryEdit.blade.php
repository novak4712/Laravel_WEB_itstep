@extends('admin.index')

@section('title', 'Создать категорию')

@section('page_content')

    {!! Form::model($category, array('route' => array('category.update', $category->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Content')}}
        {{Form::text('content', null, ['class' => 'form-control'])}}
    </div>


    {{Form::submit('Редактировать категорию', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection