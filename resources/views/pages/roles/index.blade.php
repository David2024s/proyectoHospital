@extends('components.content')

<link rel="stylesheet" href="{{ asset('_css/roles_estilos.css') }}">

@section('content_form')
<div class="contender_inicio">
    <div class="table-main-container">
        <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1 style="color: #2c3e50; font-weight: 800; margin: 0;">Gestión Administrativa de Roles</h1>
            <a href="{{ route('roles.create') }}" class="btn-save-styled">+ Crear Nuevo Rol</a>
        </header>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 6px solid #28a745;">
                <i class='bx bx-check-circle'></i> {{ session('success') }}
            </div>
        @endif

        <table class="custom-table">
            <thead>
                <tr>
                    <th style="width: 8%;">ID</th>
                    <th style="width: 22%;">Nombre</th>
                    <th style="width: 50%;">Descripción</th>
                    <th style="width: 20%; text-align: center;">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td style="color: #95a5a6; font-weight: bold;">#{{ $role->id }}</td>
                    <td><span class="badge-role">{{ $role->nombre }}</span></td>
                    <td style="color: #54667a; font-style: italic;">{{ $role->descripcion ?? 'Sin descripción asignada' }}</td>
                    <td>
                        <div style="display: flex; gap: 20px; justify-content: center;">
                            <!-- EDITAR -->
                            <a href="{{ route('roles.edit', $role->id) }}" style="color: #f39c12; font-size: 24px;" title="Editar">
                                <i class='bx bx-edit-alt'></i>
                            </a>
                            
                            <!-- ELIMINAR -->
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este rol?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: #e74c3c; cursor: pointer; font-size: 24px;">
                                    <i class='bx bx-trash-alt'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection