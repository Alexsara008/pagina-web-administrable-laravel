
@extends('layouts.template')

@section('content')

@foreach($proyectos as $proyecto)


<div class="col-lg-4 col-md-6">
    <div class="service-item bg-white d-flex flex-column align-items-center text-center">
    
        <img class="img-fluid" src="{{ $proyecto->imagen}}" alt="">
        <div class="service-icon bg-white">
            <i class="fa fa-3x fa-building text-primary"></i>
        </div>
        <div class="px-4 pb-4">
            <h4 class="text-uppercase mb-3">{{ $proyecto->nombre}}</h4>
            <p>{{ $proyecto->descripcion}}</p>
            <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>



@endforeach 

@endsection






@section('dos')
    @foreach($sliders as $slider)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="w-100" src="{{ $slider->imagen }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                    <h1 class="display-2 text-uppercase text-white mb-md-4">{{ $slider->titulo }}</h1>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">{{ $slider->boton }}</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
