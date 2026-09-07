@extends('layouts.app')

@section('title', 'Inicio - MindSpace')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <h1 class="display-5 fw-bold text-primary">Acompañamiento emocional accesible y privado</h1>
    <p class="col-md-10 fs-4 text-muted mt-3">
        La salud mental es una prioridad mundial. Más de 280 millones de personas enfrentan ansiedad y estrés. En MindSpace te ofrecemos un primer puente de apoyo libre de juicios y estigmas.
    </p>
    <a href="{{ route('recursos') }}" class="btn btn-primary btn-lg mt-3">Explorar Recursos</a>
</div>

<div class="row text-center mt-4">
    <div class="col-md-4">
        <div class="card p-3 shadow-sm border-0">
            <h3>Sin Estigma</h3>
            <p>Accede a herramientas anónimas diseñadas para acompañarte en momentos de sobrecarga emocional.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3 shadow-sm border-0">
            <h3>Accesible</h3>
            <p>Aprende técnicas sencillas de autorregulación disponibles en cualquier momento.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3 shadow-sm border-0">
            <h3>Orientación</h3>
            <p>Encuentra canales de contacto con profesionales y líneas de emergencia.</p>
        </div>
    </div>
</div>
@endsection