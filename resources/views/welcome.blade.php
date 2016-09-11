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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .carousel-item {
                height: 500px;
                width: 1000px;
                margin: 0 auto;
            }
            
        </style>
    </head>
    <body>
    <script type="text/javascript" src="js/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script>
    $(document).ready(function(){
    $('.carousel.carousel-slider').carousel({
        full_width: true
    });

    $(".dropdown-button").dropdown();
        
        });
    </script>

     @include('includes.nav')

            <div class="content">

            <div class="carousel carousel-slider center" data-indicators="true">
                <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
            <div class="carousel-item red white-text" href="#one!">
               <p class="white-text">Here!</p>
            </div>
            <div class="carousel-item amber white-text" href="#one!">
                <p class="white-text"><img width=1200px src="img/2.jpeg" ></p>
            </div>
            <div class="carousel-item green white-text" href="#one!">    
                <p class="white-text"><img width=1200px src="img/3.jpg"></p>
            </div>
                
              </div>

                <div class="title m-b-md">
                    Laravel

                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

    </body>
</html>
