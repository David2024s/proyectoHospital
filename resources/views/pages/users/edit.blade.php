@extends('components.content')

@section('title_panel')
    <h1>Editar Usuario</h1>
    <p>Seleccione un usuario para editar sus datos.</p>
@endsection
@section('content_form')
<form action="" method="post">
    <div class="form-group search-group">
        <label for="username">Buscar usuario: <input type="search" id="username" required> <button type="submit">Buscar</button> <span class="required">*</span></label>
        
    </div>
</form>

<hr>

    <form id="userForm">
        <div class="form-group">
            <label for="username">Nombre de usuario <span class="required">*</span></label>
            <input type="text" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña <span class="required">*</span></label>
            <input type="password" id="password" required>
        </div>


        <div class="form-group">
            <label for="firstName">nombres <span class="required">*</span></label>
            <input type="text" id="firstName" required>
        </div>

        <div class="form-group">
            <label for="lastName">apellidos <span class="required">*</span></label>
            <input type="text" id="lastName" required>
        </div>

        <div class="form-group">
            <label>telefono <span class="required">*</span></label>
            <div class="input-row">
                <div class="sub-input">
                    <input type="text" id="areaCode" placeholder=" " required>
                    <small>Area Code</small>
                </div>
                <div class="sub-input">
                    <input type="text" id="phoneNumber" placeholder=" " required>
                    <small>Phone Number</small>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email">correo <span class="required">*</span></label>
            <input type="email" id="email" placeholder=" " required>
            <small>example@example.com</small>
        </div>

        <div class="form-footer">
            <button type="submit" class="btn-submit">Actualizar usuario</button>
        </div>

    </form>
@endsection