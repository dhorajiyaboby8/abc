<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.btn-primary'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML =
        '<div class="col-6"><input type="text"  class="form-control" name="field_name[]" value=""/><a href="javascript:void(0);" class="btn btn-danger">  -</div>'; //New input field html 
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.btn-danger"', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
</head>

<body>
    <div class="text-center mt-5">
<h2>Add Todo</h2>

        <div class="field_wrapper">
            <div>
                <input type="text"  name="field_name[]" value="" />
                <a href="javascript:void(0);" class="btn btn-primary" title="Add field">+</a>
            </div>
        </div>
    </div>

    <body>