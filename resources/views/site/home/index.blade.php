@extends('layouts.app')

@section('content')
    
<section class="home">
    <!-- Hero Banner -->
    <header class="header-home">
        <h1 class="hero-title">Welcome to the site</h1>
        <h5 class="hero-subtitle">Varius, noster devatios etiam imperium de velox, fortis adiurator.</h5>
        <a class="hero-button" href="{{ route('site.home') }}">Get started</a>
    </header>

    <!-- Products -->
    <div class="products">
        {{-- <P>produtos</P> --}}
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('images/smartwatch-red.jpg') }}" alt="Red Smartwatch">
            </div>
            <div class="card-body">
                <h4 class="card-title">Titulo</h4>
                <span class="card-text">descricao do produto</span>
                <strong class="price">R$ 140,00</strong>
            </div>
            <div class="card-footer">
                <a class="card-button" href="#">Buy Now</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="{{ asset('images/shirt-yellow.jpg') }}" alt="Yellow Shirt">
            </div>
            <div class="card-body">
                <h4 class="card-title">Titulo</h4>
                <span class="card-text">descricao do produto</span>
                <strong class="price">R$ 35,00</strong>
            </div>
            <div class="card-footer">
                <a class="card-button" href="#">Buy Now</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="{{ asset('images/shoes-blue.jpg') }}" alt="Blue Shoes">
            </div>
            <div class="card-body">
                <h4 class="card-title">Titulo</h4>
                <span class="card-text">descricao do produto</span>
                <strong class="price">R$ 73,00</strong>
            </div>
            <div class="card-footer">
                <a class="card-button" href="#">Buy Now</a>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div>
        <p>blog</p>
    </div>
</section>

@endsection
