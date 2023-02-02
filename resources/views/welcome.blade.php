@extends('layouts.main')

@section('title', 'HDC EVENTS')

@section('content')

        <h1>testando css</h1>

        <img src="/img/banner.jpg" alt="banner">
        @if(10 > 15)
            <p>A condição é verdadeira</p>
        @endif

        <p>{{$nome}}</p>

        @for($i=0; $i < count($array); $i++)
            <p>{{ $array[$i] }} - {{ $i }}</p>

        @endfor

        @foreach($nomes as $nomes)
            <p>{{ $nomes }}</p>
        @endforeach 

@endsection