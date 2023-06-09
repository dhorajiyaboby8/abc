@extends('app')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
    $(document).ready(function() {
        var maxField = 10;
        var addButton = $('.btn-primary');
        var wrapper = $('.field_wrapper');
        var fieldHTML =
'<div class="col-6"><div class="input-group mb-3"><input type="text" class="form-control" name="hobby[]" placeholder="hobby"aria-label="hobby" aria-describedby="basic-addon2"><button class="btn btn-danger" type="button" href="javascript:void(0);" title="Add field">-</button></div> </div>';
            


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
    <form class="row g-3 justify-content-center" method="post" action="{{url('detail')}}">
        @csrf
        <div class="field_wrapper">
            <h2>Add Todo</h2>
            <div class="col-6">
                <input type="text" name="name" class="form-control" placeholder="Name">

            </div><br>
            <div class="col-6">
                <input type="email" name="email" class="form-control" placeholder="Email">

            </div><br>
            <div class="col-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="hobby[]" placeholder="hobby"
                        aria-label="hobby" aria-describedby="basic-addon2">
                        <button class="btn btn-primary" type="button" href="javascript:void(0);"
                            title="Add field">+</button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>


    </form>

</body>


@endsection