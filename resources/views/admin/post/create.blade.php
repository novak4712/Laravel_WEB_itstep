
{!! Form::open(['url' => 'foo/bar']) !!}

{{Form::label('username', 'User name')}}
{{Form::text('username')}}</br></br>

{{Form::label('email', 'E-Mail Address')}}
{{Form::text('email', 'example@gmail.com')}}</br></br>

{{Form::label('password', 'password')}}
{{Form::password('password', ['class' => 'awesome'])}}</br></br>

{{Form::label('confirmPassword', 'Confirm password')}}
{{Form::password('confirmPassword', ['class' => 'awesome'])}}</br></br>

{{Form::submit('Зарегистрироваться')}}

{!! Form::close() !!}