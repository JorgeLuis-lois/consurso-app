@extends('layouts.app')

@section('content')
<!-- Service Start -->
<div class="container px-lg-5">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        {{ __('You are logged in!') }}
    </div>
    @endif
    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="position-relative d-inline text-primary ps-4">{{ __('Dashboard') }} - Preguntas</h6>
        <h2 class="mt-2">Responde los siguientes cuestionarios que reforzarán los conocimientos adquiridos</h2>
    </div>
    <div class="row g-4">
        @foreach ($temas as $tema)
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fa fa-home fa-2x"></i>
                </div>
                <h5 class="mb-3">{{$tema->valoradicional}}</h5>
                <p>{{$tema->nombres}}</p>
                <a class="btn px-3 mt-auto mx-auto" href="{{ route('temas') }}">Resolver Cuestionario</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Service End -->
@endsection