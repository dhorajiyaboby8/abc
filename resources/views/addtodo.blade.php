<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxFieldLimit = 10; //Input fields increment limitation
    var add_more_button = $('.add_button'); //Add button selector
    var Fieldwrapper = $('.input_field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" style="padding:0px 10px;" title="Remove field">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(add_more_button).click(function(){ //Once add button is clicked
        if(x < maxFieldLimit){ //Check maximum number of input fields
            x++; //Increment field counter
            $(Fieldwrapper).append(fieldHTML); // Add field html
        }
    });
    $(Fieldwrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
</head>
<body>
<div class="panel panel-primary">
    <div class="panel-heading">Add Remove input fields dynamically using jQuery</div>
      <div class="panel-body">   
             <div class="input_field_wrapper">
  <div>
        <input type="text" name="field_name[]" value=""/>
       
    </div>
</div>
</div>
<a href="javascript:void(0);" class="add_button" title="Add field"><button class=" btn btn-primary" style=" margin:5px;">Add More Field</button></a></div></div>
</body>
</html>
 