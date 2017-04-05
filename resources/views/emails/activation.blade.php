@extends('index')

@section('content')


Hi, {{ $name }}

Please active your account : {{ url('user/activation', $link)}}

@endsection