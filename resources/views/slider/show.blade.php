@extends('layouts.app')

@section('template_title')
    {{ $slider->name ?? __('Show') . " " . __('Slider') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Slider</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sliders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $slider->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagen:</strong>
                                    {{ $slider->imagen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Boton:</strong>
                                    {{ $slider->boton }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
