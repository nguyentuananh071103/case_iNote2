@extends('backend.layouts.master')
@section('content')
<style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 1px;
            width: 100px;
            border-radius: 5px;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Note Detail</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Category_id</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <a href="{{route('notes.list')}}"><button type="button" class="btn btn-outline-danger">Back</button></a>
                        <td>{{$note->categories->name}} </td>
                        <td>{{$note["title"]}}</td>
                        <td>{{$note["content"]}}</td>
                        <td><img style="width: 320px; height: 250px" src="{{asset('img/'.$note->image)}}" alt=""></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
