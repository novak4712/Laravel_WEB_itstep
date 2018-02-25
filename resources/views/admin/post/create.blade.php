

{!! Form::open(['url' => 'foo/bar']) !!}

{{Form::label('email', 'E-Mail Address')}}
{{Form::text('email', 'example@gmail.com')}}




{{Form::submit('Click Me!')}}

{!! Form::close() !!}