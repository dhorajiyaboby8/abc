<html>

<head>
    <title>Read From Local CSV</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

</head>

<body>
    <div class="container">
    <h2>Horizontal form</h2>
    <form class="form-horizontal" action="{{url('image/upload/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>

        <div class="form-group" id="id_photo_group">
            <label>Photo*</label>
            <input type="file" class="dropify" data-height="300" id="id_member_photo" name="filename" multiple="true" />
        </div><br>
       

        <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        <form>
       
    </div>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $('.dropify').dropify();
   
});
</script>