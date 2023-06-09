@extends('layouts.app')

@section('content')
    {{-- props é uma forma de enviar parametros para o componente na forma de propriedades --}}
    <login-component csrf_token="{{ @csrf_token()}}"></login-component>
@endsection
