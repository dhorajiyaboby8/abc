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
        <form class="form-horizontal" action="{{url('editselect')}}" method="post">
            @csrf
            <input type="hidden" class="form-control" name="id" value={{$data['id']}} required>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-6">
                    <input type="name" class="form-control" id="name" value="{{$data['name']}}" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" value="{{$data['email']}}" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="hobby">Hobby:</label>
                <div class="col-sm-6">
                    <select class="selectpicker" data-live-search="true" multiple data-max-options="5" name="hobby[]">
                        <option data-tokens="Dancing" name="hobby" value="Dancing"
                            {{ in_array('Dancing', $hobby) ? 'selected' : '' }}>Dancing</option>
                        <option data-tokens="Singing" name="hobby" value="Singing"
                            {{ in_array('Singing', $hobby) ? 'selected' : '' }}>Singing</option>
                        <option data-tokens="traveling" name="hobby" value="traveling"
                            {{ in_array('traveling', $hobby) ? 'selected' : '' }}>traveling</option>
                        <option data-tokens="Cooking" name="hobby" value="Cooking"
                            {{ in_array('Cooking', $hobby) ? 'selected' : '' }}>Cooking</option>
                        <option data-tokens="Painting" name="hobby" value="Painting"
                            {{ in_array('Painting', $hobby) ? 'selected' : '' }}>Painting</option>
                        <option data-tokens="Drawing" name="hobby" value="Drawing"
                            {{ in_array('Drawing', $hobby) ? 'selected' : '' }}>Drawing</option>
                        <option data-tokens="Acting" name="hobby" value="Acting"
                            {{ in_array('Acting', $hobby) ? 'selected' : '' }}>Acting</option>
                        <option data-tokens="Computer programming" name="hobby" value="Computer programming"
                            {{ in_array('Computer programming', $hobby) ? 'selected' : '' }}>Computer programming
                        </option>
                        <option data-tokens="Creative writing" name="hobby" value="Creative writing"
                            {{ in_array('Creative writing', $hobby) ? 'selected' : '' }}>Creative writing</option>
                        <option data-tokens="Hiking" name="hobby" value="Hiking"
                            {{ in_array('Hiking', $hobby) ? 'selected' : '' }}>Hiking</option>
                        <option data-tokens="Handicraft" name="hobby" value="Handicraft"
                            {{ in_array('Handicraft', $hobby) ? 'selected' : '' }}> Handicraft</option>
                        <option data-tokens="Tourism" name="hobby" value="Tourism"
                            {{ in_array('Tourism', $hobby) ? 'selected' : '' }}>Tourism</option>
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