<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle(3000);
    // $("#div1").fadeTo("slow", 0.15);
    // $("#div2").fadeTo("slow", 0.4);
    // $("#div3").fadeTo("slow", 0.7);
  });
});
</script>
</head>
<body>

<p>Demonstrate fadeToggle() with different speed parameters.</p>

<button>Click to fade in/out boxes</button><br><br>

<div id="div1" style="width:120px;height:120px;background-color:#e6b3cc;">Hi</div>
<br>
<div id="div2" style="width:120px;height:120px;background-color:#d279a6;">Hello </div>
<br>
<div id="div3" style="width:120px;height:120px;background-color:#bf4080;">How are You</div>

</body>
</html>
