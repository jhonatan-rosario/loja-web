@extends('layouts.app')

@section('content')
    
<section class="home">
    <!-- Hero Banner -->
    <div class="hero-banner">
        <h1 class="font-semibold mt-40">Welcome to the site</h1>
        <h5 class="font-light">Varius, noster devatios etiam imperium de velox, fortis adiurator.</h5>
        <a href="{{ route('site.home') }}">Get started</a>
    </div>

    <!-- Products -->
    <div>
        <P>produtos</P>
    </div>

    <!-- Blog -->
    <div>
        <p>blog</p>
    </div>
</section>

@endsection
