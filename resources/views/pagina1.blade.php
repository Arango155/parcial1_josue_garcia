@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Esta es la pagina 1</p>
@endsection

@section('content')


    <a  href="{{route('layout')}}">Retornar a la pagina home</a>

@endsection
