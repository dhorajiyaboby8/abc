<html>
<head>
    <title>Laravel 9 Drag and Drop File Upload with Dropzone JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Drag and Drop with Dropzone JS - CamoTutorial.com</h3>
                <h4>Upload Multiple Images</h4>
                <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data"
                    id="image-upload" class="dropzone">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var dropzone = new Dropzone('#image-upload', {
        thumbnailWidth: 200,
        maxFilesize: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    });
    </script>
</body>
</html>