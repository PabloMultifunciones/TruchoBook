<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - TruchoBook</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('favicon.png')}}" rel="shortcut icon">
        @stack('estiloPagina')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">TruchoBook</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            
            <div class="row">
                
                <div id="bodyPost" class="col col-8 mt-3 offset-2">
                    
                    <div class="row p-3 pt-0">
                        @yield('content')
                    </div>
                </div>
                @foreach($posts as $post)
                    <div id="bodyPost" class="col col-8 mt-3 offset-2">
                        <h1>{{$postModel->find($post->id)->user->name}}</h1>
                        <h2>{{$post->body}}</h2>
                        <form method="POST" action="home/{{$post->id}}">
                            @csrf
                            @method('DELETE')
                            @if($user->id == $postModel->find($post->id)->user->id)
                            <input class="btn btn-danger mb-2" type="submit" value="Eliminar">
                            @endif
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>