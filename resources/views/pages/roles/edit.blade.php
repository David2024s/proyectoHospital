@extends('components.content')

<link rel="stylesheet" href="{{ asset('_css/roles_estilos.css') }}">

@section('content_form')
<div class="contender_inicio">
    <div class="form-card">
        <header>
            <h1 class="title-styled">Actualizar Información del Rol</h1>
        </header>

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="input-wrapper">
                <label class="label-styled">Nombre del Rol *</label>
                <input type="text" name="nombre" class="input-styled" value="{{ $role->nombre }}" required>
            </div>

            <div class="input-wrapper">
                <label class="label-styled">Descripción de Funciones</label>
                <textarea name="descripcion" class="input-styled" rows="6" placeholder="Escriba los detalles aquí...">{{ $role->descripcion }}</textarea>
            </div>

            <div style="margin-top: 40px; display: flex; justify-content: center; gap: 20px;">
                <button type="submit" class="btn-save-styled">Guardar Cambios</button>
                <a href="{{ route('roles.index') }}" class="btn-cancel-styled">Cancelar Operación</a>
            </div>
        </form>
    </div>
</div>
@endsection