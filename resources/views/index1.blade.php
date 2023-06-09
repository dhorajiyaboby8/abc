@extends('app')
@section('content')
<body>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Add Video
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('fetch_video')}}" class="btn btn-primary">Show video</a>
                    </li>
                </ol>
            </h2>
        </div>
    </div>
    <div class="drag-area">
        <form method="post" action="{{ Route('insert.file') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name name">
            </div>
            <div class="form-group">
                <label for="lname">lname </label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lname name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email name">
            </div>
            <input type="file" name="video" />
            <p>
                @if($errors->has('video'))
                {{ $errors->first('video') }}
                @endif
            </p>
            <input type="submit" name="click" class="btn btn-success" />
        </form>
    </div>
</body>
</html>
@endsection