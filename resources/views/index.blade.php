@extends ('layouts/plantilla')

@section('title',$user->name)

@push('estiloPagina')
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
@endpush

@section('content')
<form method='post' action="">
    @csrf
    <div class="col-12" id="header">
        <img src="{{asset('images/user.png')}}">
        <h1>¿En que estas pensando?</h1>
    </div>
    <input type="hidden" value="{{$user->id}}" name="user_id">
    <input id="text" class="col-12 form-control" type="text" name="body" >
    <input type="submit" class="col-12 btn btn-success" value="Publicar">
</form>

@endsection