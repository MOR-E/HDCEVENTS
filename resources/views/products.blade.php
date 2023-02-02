@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h2>tela de produtos</h2>

    @if ($busca != '')
        <p>O usuario esta procurando por {{ $busca }}</p>
    @endif

@endsection 