@extends('layouts.app')

@section('title', 'Contacto - MindSpace')

@section('content')
<h2 class="mb-4 text-primary">Solicitar Apoyo u Orientación</h2>
<div class="row">
    <div class="col-md-7">
        <form class="card p-4 shadow-sm">
            <div class="mb-3">
                <label class="form-label">Nombre o Seudónimo (Opcional):</label>
                <input type="text" class="form-control" placeholder="Anónimo">
            </div>
            <div class="mb-3">
                <label class="form-label">Correo Electrónico de Contacto:</label>
                <input type="email" class="form-control" placeholder="correo@ejemplo.com">
            </div>
            <div class="mb-3">
                <label class="form-label">¿Cómo te sientes o en qué podemos orientarte?:</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </div>
    <div class="col-md-5">
        <div class="bg-white p-4 rounded-3 shadow-sm">
            <h5 class="text-danger">¿Necesitas ayuda inmediata?</h5>
            <p>Si estás experimentando una crisis severa o riesgo personal, por favor contacta a las líneas de atención gratuitas de tu país:</p>
            <ul>
                <li><strong>Línea Nacional de Apoyo:</strong> 106 / 192</li>
                <li><strong>Emergencias:</strong> 123</li>
            </ul>
        </div>
    </div>
</div>
@endsection