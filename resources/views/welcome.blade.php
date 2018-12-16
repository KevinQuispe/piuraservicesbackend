<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Piura Services</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #a5d6a7;
                color: gray;
                font-family: 'Raleway', sans-serif;
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
                color: gray;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
                color:#000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
  
        <div class="flex-center position-ref bg-primary full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <!--<a href="{{ url('/register') }}">Register</a>-->
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <p><strong>Servicios Básicos-Piura</strong></p>
                </div>

                <div class="links">
                    <a href="https://www.distriluz.com.pe/" target="_blank">SERVICIO DE LUZ-ENOSA</a>
                    <a href="https://epsgrau.pe/webpage/desktop/views/" target="_blank">SERVICIO DE AGUA-EPS GRAU</a>
                    <a href="http://www.movistar.com.pe/" target="_blank">SERVICO DE TELEFONIA</a>
                </div>
            </div>
        </div>
    </body>
</html>
