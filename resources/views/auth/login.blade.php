@extends('../layouts/plantilla_login')

@section('content')
    <div class="row justify-content-center">
        <h1>Iniciar Sesion</h1>
        <div class="col-md-8"><hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Entrar') }}
                        </button>
                        <a class ="btn btn-link" href="{{ route('register')}}">
                            {{ __('Registrarse')}}
                        </a>
                    </div>
                </div>
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <strong class="text-danger">{{$error}}</strong>
                    @endforeach
                @endif
            </form>
        </div>
    </div>
@endsection
