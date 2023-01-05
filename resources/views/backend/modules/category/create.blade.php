@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Category</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    {!! Form::open(['method'=>'post', 'route'=>'login']) !!}
                        {!!Form::label('name', 'Name') !!}
                        {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Category name']) !!}
                        {!!Form::label('slug', 'Slug', ['class'=>'mt-2']) !!}
                        {!!Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Enter Category slug']) !!}
                        {!!Form::label('order_by', 'Category Serial', ['class'=>'mt-2']) !!}
                        {!!Form::number('order_by', null, ['class'=>'form-control', 'placeholder'=>'Enter Category serial']) !!}
                        {!!Form::label('status', 'Category Status', ['class'=>'mt-2']) !!}<br>
                        {!!Form::select('status', [1=>'Active', 0=>'Inactive'], null, ['class'=>'form-control form-select', 'placeholder'=>'Select Category status']) !!}
                        {!!Form::button('Create Category', ['type'=>'submit', 'class'=>'btn btn-success mt-2']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection