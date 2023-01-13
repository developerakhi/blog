@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Sub Category</h1>
            </div>
            
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card-header">
                            <h4 class="h3 mb-0 text-gray-800">Sub Category Details</h4>
                        </div>
                        
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$sub_category->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$sub_category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>{{$sub_category->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Slug</th>
                                        <td>{{$sub_category->slug}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$sub_category->status == 1? 'Active': 'Inactive'}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order By</th>
                                        <td>{{$sub_category->order_by}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{$sub_category->created_at->toDayDateTimeString()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated At</th>
                                        <td>{{$sub_category->updated_at != $sub_category->updated_at? $category->updated_at->toDayDateTimeString(): 'Not Updated'}}</td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                            <a href="{{route('sub-category.index')}}" class=""><button class="btn btn-success mt-2">Back</button></a>
                        </div>
                </div>
            
        </div>

@endsection