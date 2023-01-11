@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Category</h1>
            </div>
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h3 mb-0 text-gray-800">Create Category</h4>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif

                        <div class="col-lg-12">
                            {!! Form::open(['method'=>'post', 'route'=>'category.store']) !!}
                                @include('backend.modules.category.form')
                                {!!Form::button('Create Category', ['type'=>'submit', 'class'=>'btn btn-success mt-2']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('category.index')}}" class=""><button class="btn btn-success mt-2">Back</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        @push('js')

            <script>
                $('#name').on('input', function(){
                    let name= $(this).val()
                    let slug= name.replaceAll(' ', '-')
                    $('#slug').val(slug.toLowerCase());
                
                })
            </script>

        @endpush
        
@endsection