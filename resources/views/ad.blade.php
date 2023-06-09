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
body {
    text-align: center;
    background: #dfdfdf;
}

h1 {
    text-transform: uppercase;
    font-size: 72px;
    font-family: 'Verdana';
    padding: 30px;
}
</style>

<body>

    <div id="container">
        <div class="button-container-1">
            <div class="button-1"></div>
        </div>
        <h1>3d text effect</h1>
    </div>
    <script type="text/javascript" src="Javascript.js"></script>



    <script>
    jQuery(document).ready(function() {
        $('h1').mousemove(function(e) {
            var rXP = (e.pageX - this.offsetLeft - $(this).width() / 2);
            var rYP = (e.pageY - this.offsetTop - $(this).height() / 2);
            $('h1').css('text-shadow', +rYP / 10 + 'px ' + rXP / 80 + 'px rgba(227,6,19,.8), ' + rYP /
                8 + 'px ' + rXP / 60 + 'px rgba(255,237,0,1), ' + rXP / 70 + 'px ' + rYP / 12 +
                'px rgba(0,159,227,.7)');
        });
    });
    </script>

</body>

</html>