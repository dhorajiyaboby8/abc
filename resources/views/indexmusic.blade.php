@extends('app')
@section('content')
<body>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Add Song
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('fetch_music')}}" class="btn btn-primary">Song List</a>
                    </li>
                </ol>
            </h2>
        </div>
    </div>
    <div class="drag-area">
        <form method="post" action="{{ Route('insert.file') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="singername">Singer Name</label>
                <input type="text" class="form-control" id="singername" name="singername"
                    placeholder="Enter Singer name">
            </div><br>
            <div class="form-group">
                <label for="movie">Movie Name </label>
                <input type="text" class="form-control" id="movie" name="movie" placeholder="Enter movie name">
            </div><br>
            <div class="form-group">
                <label for="songname">Song Name </label>
                <input type="text" class="form-control" id="songname" name="songname" placeholder="Enter songname name">
            </div><br>
            <div class="form-group">
                <label for="songtype">Song Type</label>
                <input type="text" class="form-control" id="songtype" name="songtype" placeholder="Enter songtype name">
            </div><br>
            <div class="form-group">
                <label for="songtype">Song</label><br>
                <input type="file" name="audio" />
                <p>
                    @if($errors->has('audio'))
                    {{ $errors->first('audio') }}
                    @endif
                </p>
                <div>
                    <input type="submit" name="click" class="btn btn-success" />
        </form>
    </div>
</body>
</html>
@endsection