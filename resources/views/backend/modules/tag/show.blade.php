@extends('backend.layouts.master')

@section('content')
    <div class="row">

        <!-- Area Chart -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tag</h1>
            </div>
            
                <div class="row justify-content-center">
                    <div class="card">
                        
                            <div class="card-header">
                                <h4 class="h3 mb-0 text-gray-800">Tag Details</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$tag->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$tag->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td>{{$tag->slug}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$tag->status == 1? 'Active': 'Inactive'}}</td>
                                        </tr>
                                        <tr>
                                            <th>Order By</th>
                                            <td>{{$tag->order_by}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{$tag->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated At</th>
                                            <td>{{$tag->updated_at != $tag->updated_at? $tag->updated_at->toDayDateTimeString(): 'Not Updated'}}</td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                                <a href="{{route('tag.index')}}" class=""><button class="btn btn-success mt-2">Back</button></a>
                            </div>
                            
                    </div>
            
                </div>
        </div>

@endsection