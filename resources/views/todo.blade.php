<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var maxField = 10;
        var addButton = $('.btn-primary');
        var wrapper = $('.field_wrapper');
        var fieldHTML =
            '<div class="col-6"><input type="text"  class="form-control" name="field_name[]" value=""/><a href="javascript:void(0);" class="btn btn-danger">  -</div>';
        var x = 1;

        $(addButton).click(function() {
            if (x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });

        $(wrapper).on('click', '.btn-danger', function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
    </script>
</head>

<body>
    
    <div class="text-center mt-5">
        <div class="container">
            <form class="row g-3 justify-content-center" method="post" action="{{url('todo')}}">
                @csrf
                <div class="field_wrapper">
                    <h2>Add Todo</h2>
                    <div class="col-6">
                        <input type="text" class="form-control" name="field_name[]" value="" />
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0);" class="btn btn-primary" title="Add field">+</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</body>