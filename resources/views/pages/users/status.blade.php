@extends('components.content')

@section('title_panel')
<h1>Cambiar estado de usuario</h1>
<p>Seleccione un usuario para cambiar su estado de activo/inactivo.</p>
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
        <p><strong>Estado actual:</strong> <span id="detailStatus"></span></p>
        <button id="toggleStatusBtn" class="btn-submit">Cambiar estado</button>
    </div>



@endsection