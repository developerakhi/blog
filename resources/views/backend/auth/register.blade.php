@extends('backend.auth.layouts.master')

@section('content')
<h4>Register</h4>
<hr>
{!! Form::open(['method'=>'post', 'route'=>'register']) !!}
    {!!Form::label('name', 'Name') !!}
    {!!Form::text('name', null, ['class'=>['class'=>$errors->has('name')?'is-invalid form-control':'form-control']]) !!}
    @error('name')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {!!Form::label('email', 'Email', ['class'=>'mt-4']) !!}
    {!!Form::email('email', null, ['class'=>['class'=>$errors->has('email')?'is-invalid form-control':'form-control']]) !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {!!Form::label('password', 'Password', ['class'=>'mt-4']) !!}
    {!!Form::password('password', ['class'=>['class'=>$errors->has('password')?'is-invalid form-control':'form-control']]) !!}
    @error('password')
        <p class="text-danger">{{$message}}</p>
    @enderror
    {!!Form::label('password_confirmation', 'Password Confirmation', ['class'=>'mt-4']) !!}
    {!!Form::password('password_confirmation', ['class'=>$errors->has('password')?'is-invalid form-control':'form-control']) !!}
    
    <div class="d-grid">
        {!!Form::button('Register', ['type'=>'submit', 'class'=>'btn btn-info mt-2']) !!}
    </div>
{!! Form::close() !!}

<p class="mt-2">Already Registered? <a href="{{route('login')}}" class="">Login Here</a></p>

@endsection