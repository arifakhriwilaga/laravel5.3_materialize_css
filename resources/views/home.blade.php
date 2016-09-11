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

       <!-- Styles -->
       <style>
         .slider{
    width: 100%;
    height: auto;
          }
       </style>
     
    </head>
    <body>
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script>
      $(document).ready(function(){
      $('.slider')
      .slider({ full_width : true});
    });
    </script>
    <div class="slider fullscreen">
    
      
    <div>
    <a class="btn">Welcome</a>
    <ul class="slides">
      <li>
        <img src="img/1.jpg"> <!-- random image -->
        <div class="caption center-align">
          
          <h3><a href =""><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
      <li>
        <img src="img/2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3><a href =""><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
      <li>
        <img src="img/3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3><a href =""><font color="white">How to see our Indonesia.</font></a></h3>
          <h5 class="light grey-text text-lighten-3">Welcome to my exercise web it's example web.</h5>
        </div>
      </li>
    </ul>
    </div>
    </div>
    </body>
</html>
