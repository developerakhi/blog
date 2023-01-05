@extends('backend.auth.layouts.master')

@section('content')
<h4>Login</h4>
<hr>
{!! Form::open(['method'=>'post', 'route'=>'login']) !!}
    {!!Form::label('email', 'Email') !!}
    {!!Form::email('email', null, ['class'=>$errors->has('email')?'is-invalid form-control':'form-control']) !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {!!Form::label('password', 'Password', ['class'=>'mt-4']) !!}
    {!!Form::password('password', ['class'=>$errors->has('password')?'is-invalid form-control':'form-control']) !!}
    <div class="d-grid">
        {!!Form::button('login', ['type'=>'submit', 'class'=>'btn btn-info mt-2']) !!}
    </div>
{!! Form::close() !!}
<p class="mt-2">Forgot Password? <a href="{{route('password.request')}}" class="">Reset Here</a></p>
<p>Not Registered? <a href="{{route('register')}}" class="">Register Here</a></p>

@endsection