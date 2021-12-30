@extends('layouts/plantilla_login')

@section('content')
<div class="col col-12">
    <h1>Iniciar Sesion</h1><hr>
</div>
<div class="col col-12 p-4">
    <img src="{{asset('images/user.png')}}">
</div>
<div class="col col-6">
    <a href="/login"><input type="button" class="btn btn-secondary" value="Iniciar Sesion"></a>
</div>
<div class="col col-6">
    <a href="/register"><input type="button" class="btn btn-secondary" value="Registrarse"></a>
</div>
@endsection