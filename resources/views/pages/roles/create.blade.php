@extends('components.content')

<link rel="stylesheet" href="{{ asset('_css/roles_estilos.css') }}">

@section('content_form')
<div class="contender_inicio">
    <div class="form-card">
        <header>
            <h1 class="title-styled">Registro de Nuevo Rol</h1>
        </header>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            
            <div class="input-wrapper">
                <label class="label-styled">Nombre del Rol </label>
                <input type="text" name="nombre" class="input-styled" placeholder="Ejemplo: Jefe de Enfermería" required>
            </div>

            <div class="input-wrapper">
                <label class="label-styled">Descripción del Rol</label>
                <textarea name="descripcion" class="input-styled" rows="6" placeholder="Escriba aquí los permisos y responsabilidades..."></textarea>
            </div>

            <div style="margin-top: 40px; display: flex; justify-content: center; gap: 20px;">
                <button type="submit" class="btn-save-styled">Registrar Rol</button>
                <a href="{{ route('roles.index') }}" class="btn-cancel-styled">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection