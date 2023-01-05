@extends('backend.auth.layouts.master')

@section('content')
    <h4>Reset Password</h4>
    <hr>
{!! Form::open(['method'=>'post', 'route'=>'password.email']) !!}
    {!!Form::label('email', 'Email') !!}
    {!!Form::email('email', null, ['class'=>$errors->has('email')?'is-invalid form-control':'form-control']) !!}
    @error('email')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="d-grid">
        {!!Form::button('Reset Password', ['type'=>'submit', 'class'=>'btn btn-info mt-2']) !!}
    </div>
{!! Form::close() !!}
<p class="mt-2">Already Registered? <a href="{{route('login')}}" class="">Login Here</a></p>
<p>Not Registered? <a href="{{route('register')}}" class="">Register Here</a></p>

@endsection