<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesion - TruchoBook</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
        <link href="{{asset('favicon.png')}}" rel="shortcut icon">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col col-6 bg-light mt-5 p-2 offset-3">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>