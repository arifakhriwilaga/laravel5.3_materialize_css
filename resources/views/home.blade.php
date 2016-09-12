<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--Import jQuery before materialize.js-->
      <title>Laravel</title>
        <!--Link Material Design Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    </head>
    <body>
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <!-- Custom JS for turn on slider -->
    <script>
      $(document).ready(function(){
      $('.slider')
      .slider({ full_width : true});
    });
    </script>
    <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="img/1.gif"> <!-- item_slider -->
        <div class="caption center-align">
          
          <h3><a href ="{{ URL::to('home') }}"><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
      <li>
        <img src="img/2.gif"> <!-- item_slider -->
        <div class="caption left-align">
          <h3><a href ="{{URL::to('home') }}"><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
      <li>
        <img src="img/3.gif"> <!-- item_slider -->
        <div class="caption right-align">
          <h3><a href ="{{ URL::to('home') }}"><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
    </ul>
    </div>
    </body>
</html>
