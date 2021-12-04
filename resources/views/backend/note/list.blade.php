<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <h6 class="m-0 font-weight-bold text-primary">Note List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route("notes.create")}}"><button>ADD NOTE</button></a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <td>{{$note["category_id"]}}</td>
                        <td>{{$note["title"]}}</td>
                        <td>{{$note["content"]}}</td>
{{--                        <td><a href="{{route('notes.detail', $note->id)}}">{{$note["image"]}}</a></td>--}}
                        <td><img style="width: 350px; height: 150px" src="img/{{$note->image}}" alt=""></td>
                        {{--                            <td><a class="btn btn-warning" href="{{route('categories.detail',$category->id)}}">Detail</a></td>--}}
                        <td><a class="btn btn-warning" href="{{route('notes.update',$note->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('notes.delete',$note->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
