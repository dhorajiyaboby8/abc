  <!DOCTYPE html>
  <html>

  <head>
      <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
      <link rel="stylesheet" type="text/css" href="CSS.css">
  </head>

  <style>
  body {
      margin: 0px;
      padding: 0px;
      display: flex;
      flex-direction: column;
      /* justify-content: space-evenly; */
      align-items: center;
  }

  button {
      top: 5vh;
      position: relative;
      height: 50px;
      width: 150px;
      font-weight: bold;
  }

  button:hover {
      box-shadow: 0px 0px 2px 1px cyan;
  }

  #container {
      /* border:1px solid black; */
      position: relative;
      top: 20vh;
      min-height: 70px;
      width: 90vw;
      border-bottom: 3px double lightgrey;
      border-right: 3px double lightgrey;
      border-left: 3px double lightgrey;
      background-color: rgb(234, 250, 248);
      display: flex;
      flex-direction: row;
      flex-wrap: wrap-reverse;
  }

  .ball-in {
      /* border: 1px solid black; */
      height: 60px;
      width: 60px;
      border-radius: 50%;
      position: relative;
  }
  </style>

  <body>

      <body>
          <button>Add Ball to Basket</button>
          <div id="container">

          </div>
          <script type="text/javascript" src="Javascript.js"></script>



          <script>
          $(function() {
              var count = 0;
              $("button").on("click", function() {
                  $("#container").append('<span class="ball-in"></span>');
                  var arr = ['red', 'blue', 'yellow', 'lightgrey', 'darkorchid', 'black', 'orange',
                      'deeppink', 'green', 'purple', 'saddlebrown', 'lightseagreen', 'deepskyblue',
                      'firebrick', 'crimson'
                  ]
                  const colNum = Math.floor((Math.random() * arr.length) + 0);
                  const ballColor = arr[colNum];
                  console.log(ballColor);
                  var spans = $("span");
                  const sp = spans.eq(count);
                  count = count + 1;
                  sp.css({
                      "background-color": ballColor
                  });
              })
          })
          </script>

      </body>

  </html>
  dhorajiyaboby8@gmail.com
Boby@9201