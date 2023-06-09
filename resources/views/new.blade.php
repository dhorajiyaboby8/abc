@extends('app')
@section('content')
<head>
<link rel="stylesheet" href="{{url('public/dist/imageuploadify.min.css') }}"> 

</head>
<form class="form-horizontal" action="{{url('image/upload/store')}}" method="post">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
    </div>
    <div class="form-group">
    <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
<form>

 @endsection
 <script type="text/javascript" src="{{url('public/dist/imageuploadify.min.js') }}"></script>
 <script type="text/javascript">
     $(document).ready(function() {
            $('input[type="file"]').imageuploadify();
    });
</script>