@extends("admin.post.index")
@section("title", "создать пост")
@section("page_content")
    {!! Form::model($post, ['route' => 'admin.store', $post->id]) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('content', 'Content')}}
        {{Form::text('content', null, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('создать пост')}}

    {!! Form::close() !!}
@endsection