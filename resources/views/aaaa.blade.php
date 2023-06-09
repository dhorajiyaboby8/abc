<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle(3000);
  });
  $("#stop").click(function(){
    $("#panel").stop();
});
  });
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #ecc6d9;
  border: solid 1px black;
}
#stop {
  padding: 5px;
  text-align: center;
  background-color: #d98cb3;
  border: solid 4px black;
}

#panel {
  padding: 100px;
  display: none;
}
</style>
</head>
<body>

<div id="stop">Stop Me </div>

<div id="flip">Click Me </div>
<div id="panel">Hello world!</div>

</body>
</html>
