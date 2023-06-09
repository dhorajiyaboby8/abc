<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Horizontal form</h2>
        <form class="form-horizontal" action="" method="post">
        @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-6">
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="hobby">Hobby:</label>
                <div class="col-sm-6">
                    <select class="selectpicker" data-live-search="true" multiple data-max-options="5" name="hobby[]">
                        <option data-tokens="Dancing" name="hobby">Dancing</option>
                        <option data-tokens="Singing" name="hobby">Singing</option>
                        <option data-tokens="traveling" name="hobby">Traveling</option>
                        <option data-tokens="Cooking" name="hobby">Cooking</option>
                        <option data-tokens="Painting" name="hobby">Painting</option>
                        <option data-tokens="Drawing" name="hobby">Drawing</option>
                        <option data-tokens="Acting" name="hobby">Acting</option>
                        <option data-tokens="Computer programming" name="hobby">Computer programming</option>
                        <option data-tokens="Creative writing" name="hobby">Creative writing</option>
                        <option data-tokens="Hiking" name="hobby">Hiking</option>
                        <option data-tokens="Handicraft" name="hobby">Handicraft</option>
                        <option data-tokens="Tourism" name="hobby">Tourism</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>