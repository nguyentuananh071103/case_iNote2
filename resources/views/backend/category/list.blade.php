@extends('backend.layouts.master')
@section('content')
<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 10px;
        border-radius: 5px;
        background-color: #28a745;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">CATEGORY LIST</h6>
    </div>
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route("categories.create")}}"><button type="button" class="btn btn-outline-success">Add Category</button></a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$category["name"]}}</td>
{{--                        <td><a class="btn btn-warning" href="{{route('categories.detail',$category->id)}}">Detail</a></td>--}}
                        <td><a href="{{route('categories.update',$category->id)}}"><button type="button" class="btn btn-outline-warning">Update</button></a></td>
{{--                        <td><a class="btn btn-success" href="{{route('categories.update',$category->id)}}"><i class="fas fa-edit"></i></a></td>--}}
{{--                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('categories.delete',$category->id)}}"><i class="fas fa-trash-alt"></i></a></td>--}}
                        <td><a onclick="return confirm('Are you sure ??')" href="{{route('categories.delete',$category->id)}}"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
