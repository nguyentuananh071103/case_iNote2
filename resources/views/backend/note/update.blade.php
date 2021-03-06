@extends('backend.layouts.master')
@section('content')
<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 5px;
        height: 40px;
        border-radius: 15px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">NOTE UPDATE</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Category_id</th>
                        <td>
                            <select name="category_id" class="form-control">
                                @foreach($categories as  $category)
                                    @if($category->id == $note->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select></td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input style="width: 90%" type="text" name="title" value="{{$note->title}}"></td>
                    </tr><tr>
                        <th>Content</th>
                        <td>
                            <textarea style="width: 90%;height: 230px " type="text" name="content" cols="30">{!! $note->content !!}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input type="file" name="file"></td>
                    </tr>
                    <tr>
                        <a href="{{route('notes.list')}}"><button type="button" class="btn btn-outline-danger">Back</button></a>
                        <button onclick="confirm('Are you sure ???')" type="reset" class="btn btn-outline-warning">Reset</button>
                        <button  type="submit" class="btn btn-outline-success">Save Note</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection


