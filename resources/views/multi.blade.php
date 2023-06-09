@extends('app')
@section('content')
<head>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css">



</head>

<body>

    <form action="{{url('multimulti')}}" method="post" name="form-example-1" id="form-example-1"
        enctype="multipart/form-data">

        <input type="text" id ="firstname" name ="firstname" />
    <input type="text" id ="lastname" name ="lastname" />
    <div class="dropzone" id="myDropzone"></div>
    <button type="submit" id="submit-all"> upload </button>
    </form>
</body>

<script type="text/javascript">
$(document).ready(function() {
Dropzone.options.myDropzone= {
    url: 'multimulti',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 5,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("firstname", jQuery("#firstname").val());
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}
});
</script>
@endsection