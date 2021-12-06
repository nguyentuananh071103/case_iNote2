@extends('backend.layouts.master')
@section('content')<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 5px;
        height: 40px;
        border-radius: 5px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">CATEGORY CREATE</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <td>
                            <input style="width: 90%" type="text" name="name">
                            @error('name')
                            <p class="text text-danger">{{$message}}"></p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <a href="{{route('categories.list')}}"><button  type="button" class="btn btn-outline-danger">Back</button></a>
                        <button onclick="confirm('Are you sure ???')" type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-success">Add Note</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
