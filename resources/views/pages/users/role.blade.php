@extends('components.content')

@section('title_panel')
<h1>Cambiar el rol de usuario</h1>
<p>Seleccione un usuario para cambiar su rol.</p>
@endsection

@section('content_form')

<form id="userForm">
    <div class="form-group search-group">
        <label for="username">Buscar usuario: <span class="required">*</span></label>
        <input type="search" id="username" required>
    </div>
</form>
<hr>

    <div id="userDetails" style="display: ;">
        <p><strong>Nombre de usuario:</strong> <span id="detailUsername"></span></p>
        <p><strong>Rol actual:</strong> <span id="detailRole"></span></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="newRole">Nuevo rol</label>
                <select id="newRole" required>
                    <option value="" disabled selected>Por favor seleccione</option>
                    <option value="doctor">Doctor</option>
                    <option value="enfermera">Enfermera</option>
                    <option value="recepcionista">Recepcionista</option>
                </select>
            <button id="toggleRoleBtn" class="btn-submit">Cambiar rol</button>
        </form>
        
    </div>



@endsection