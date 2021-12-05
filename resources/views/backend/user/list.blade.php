@extends('backend.layouts.master')
@section('title','Admin')
@section('content')
    <!-- CSS only -->
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
            <h6 class="m-0 font-weight-bold text-primary">USER LIST</h6>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
            </tr>
            </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
{{--                <td><a href="{{route('users.detail',$user->id)}}">{{$user["name"]}}</a></td>--}}
                <td>{{$user["name"]}}</td>
                <td>{{$user["email"]}}</td>
                <td>{{$user["password"]}}</td>

                <td><img style="width: 300px; height: 150px" src="{{asset('img/'.$user->image)}}" alt=""></td>
                {{--                            <td><a class="btn btn-warning" href="{{route('users.detail',$user->id)}}">Detail</a></td>--}}
{{--                <td><a class="btn btn-success" href="{{route('users.update',$user->id)}}"><i class="fas fa-user-edit"></i></a></td>--}}
{{--                <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('users.delete',$user->id)}}"><i class="fas fa-trash-alt"></i></a></td>--}}
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
@endsection
<!-- JavaScript Bundle with Popper -->
