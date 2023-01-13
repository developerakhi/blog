@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="mb-0 text-gray-800">Sub Category</h1>    
            </div>
            <div class="col-lg-12">
                {{-- @if(session('msg'))
                    <div class="alert alert-{{session('cls')}}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {!! session('msg') !!}
                    </div>
                @endif --}}


                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="h3 mb-0 text-gray-800">Sub Category List</h4>
                                <a href="{{route('sub-category.create')}}" class=""><button class="btn btn-success btn-sm">Add</button></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Category</th>
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
                                    @foreach($sub_categories as $sub_category)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$sub_category->name}}</td>
                                            <td>{{$sub_category->category->name}}</td>
                                            {{-- <td>{{$sub_category->cat_name}}</td> --}}
                                            <td>{{$sub_category->slug}}</td>
                                            <td>{{$sub_category->status == 1? 'Active': 'Inactive'}}</td>
                                            <td>{{$sub_category->order_by}}</td>
                                            <td>{{$sub_category->created_at->toDayDateTimeString()}}</td>
                                            <td>{{$sub_category->updated_at != $sub_category->updated_at? $sub_category->updated_at->toDayDateTimeString(): 'Not Updated'}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">

                                                    <a href="{{route('sub-category.show', $sub_category->id)}}" class=""><button class="btn btn-info mx-1"><i class="fa fa-eye">Show</i></button></a>
                                                    <a href="{{route('sub-category.edit', $sub_category->id)}}" class=""><button class="btn btn-warning mx-1"><i class="fa fa-edit">Edit</i></button></a>

                                                    {!! Form::open(['method'=>'delete', 'id'=>'form_'.$sub_category->id, 'route'=>['sub-category.destroy', $sub_category->id]]) !!}
                                                    {!! Form::button('Delete', ['type'=>'submit', 'data-id'=>$sub_category->id, 'onclick'=>'return confirm("Are you sure to delete?")', 'class'=>'delete btn btn-danger mx-1']) !!}
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

        @if(session('msg'))

            @push('js')
                <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: '{{session('cls')}}',
                    title: '{{session('msg')}}',
                    showConfirmButton: false,
                    timer: 3000
                    })
                </script>
            @endpush

        @endif

       @push('js')
            <script>
                $('.delete').on('click', function(){

                    let id = $(this).attr('data-id')
                
                    
                })
            </script>
        @endpush
       
        
@endsection