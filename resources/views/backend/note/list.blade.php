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
        <h6 class="m-0 font-weight-bold text-primary">NOTE LIST</h6>
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
            <a href="{{route("notes.create")}}"><button type="button" class="btn btn-outline-success">Add Note</button></a>
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category_id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $key => $note)
                    <tr>
                        <td>{{$key+1}}</td>
{{--                        <td><a href="{{route('notes.detail',$note->id)}}">{{$note["image"]}}</a></td>--}}
                        <td>
                            @if($note->category_id)
                                <p>{{$note->categories->name}}</p>
                            @else
                                <p> Chưa phân loại category</p>
                            @endif
                        </td>
                        <td>{{$note["title"]}}</td>
                        <td>{{$note["content"]}}</td>
                        <td style="width: 250px; height: 180px"><img  src="img/{{$note->image}}" alt=""></td>
{{--                        <td><a class="btn btn-warning" href="{{route('notes.detail',$note->id)}}">Detail</a></td>--}}
                        <td><a href="{{route('notes.update',$note->id)}}"><button type="button" class="btn btn-outline-warning">Update</button></a></td>
                        <td><a onclick="return confirm('Are you sure ??')" href="{{route('notes.delete',$note->id)}}"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$notes->links()}}
    </div>
</div>
@endsection

