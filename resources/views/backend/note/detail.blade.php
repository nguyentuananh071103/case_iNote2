@extends('backend.layouts.master')
@section('content')
<style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 1px;
            height: 100%;
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
                        <a href="{{route('notes.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <td><img style="width: 300px; height: 150px" src="{{asset('img/'.$note->image)}}" alt=""></td>
                        <td>{{$note["image"]}}</td>
                        <td><textarea name="" id="" cols="45" rows="10">{{$note->content}}</textarea></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
