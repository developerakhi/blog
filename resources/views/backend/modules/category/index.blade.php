@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Category</h1>
            </div>
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="h3 mb-0 text-gray-800">Create List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Order By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sl = 1 @endphp
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->status == 1? 'Active': 'Inactive'}}</td>
                                            <td>{{$category->order_by}}</td>
                                            <td>{{$category->created_at->toDayDateTimeString()}}</td>
                                            <td>{{$category->updated_at != $category->updated_at? $category->updated_at->toDayDateTimeString: 'Not Updated'}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">

                                                    <a href="{{route('category.show', $category->id)}}" class=""><button class="btn btn-info mx-1"><i class="fa-solid fa-eye">Show</i></button></a>
                                                    <a href="{{route('category.edit', $category->id)}}" class=""><button class="btn btn-warning mx-1"><i class="fa-solid fa-edit">Edit</i></button></a>

                                                    {!! Form::open(['method'=>'delete', 'route'=>['category.destroy', $category->id]]) !!}
                                                    {!! Form::submit('Delete', ['type'=>'submit', 'class'=>'btn btn-danger mx-1']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                                

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
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