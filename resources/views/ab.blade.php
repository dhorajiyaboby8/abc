<!DOCTYPE html>
  <html>

  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle View - Jquery</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS.css">
  </head>
  <style>
 #container{
    position: relative;
    /* border: 1px solid black; */
    height: 40vh;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
    /* transition: 0.3s; */
}
.button-container-1{
    position: relative;
    border: 2px solid black;
    height:40px;
    width:100px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
}
.button-1{
    position: relative;
    border: 1px solid black;
    background-color: black;
    height:36px;
    width: 36px;
    border-radius: 50%;
    top: 1px;
    left: 2px;
    transition: 0.3s;
}
.text{
    color:white;
    transition: 0.3s;
}
.button{
    background-color: white;
    left: 60px;
    transition:0.3s
}
.button-container{
    border: 2px solid white;
    transition: 0.3s;
}
body{
    transition: 0.5s;
}
.body-color{
    background-color: black;
    transition: 0.5s;
}
  </style>
  <body>
  <div id="container">
        <div class="button-container-1">
            <div class="button-1"></div>
        </div>    
        <h1>Toggle Using Change Colour</h1>
</div>  
    <script type="text/javascript" src="Javascript.js"></script>
          <script>
    $(function(){
    $(".button-container-1").on("click",function(){
        $('body').toggleClass("body-color");
        $(".button-container-1").toggleClass("button-container");
        $("h1").toggleClass("text");
        $(".button-1").toggleClass("button");
    })
}); 
          </script>

      </body>

  </html>