@extends('components.content')

@section('title_panel')
    <h1>Registro de Nuevo Usuario</h1>
@endsection
@section('content_form')
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
            <label for="role">Rol <span class="required">*</span></label>
            <select id="role" required>
                <option value="" disabled selected>Por favor seleccione</option>
                <option value="doctor">Doctor</option>
                <option value="enfermera">Enfermera</option>
                <option value="recepcionista">Recepcionista</option>
            </select>
        </div>

        <div id="fields-doctor" class="extra-fields" style="display: none;">
            <div class="form-group">
                <label>Especialidad Médica</label>
                <input type="text" placeholder="Ej: Cardiología">
            </div>
            <div class="form-group">
                <label>Número de Colegiado</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Anos de experiencia</label>
                <input type="text">
            </div>
        </div>

        <div id="fields-enfermera" class="extra-fields" style="display: none;">
            <div class="form-group">
                <label>Turno Asignado</label>
                <select>
                    <option>Mañana</option>
                    <option>Tarde</option>
                    <option>Noche</option>
                </select>
            </div>
            <div class="form-group">
                <label>Turno Asignado</label>
                <select>
                    <option>Emergencias</option>
                    <option>Consulta Externa</option>
                    <option>Hospitalización General</option>
                    <option>Unidad de Cuidados Intensivos</option>
                    <option>Quirófano</option>
                    <option>Laboratorio Clínico</option>
                    <option>Radiología e Imagen</option>
                </select>
            </div>
        </div>

        <div id="fields-recepcionista" class="extra-fields" style="display: none;">
            <div class="form-group">
                <label>Numero de recepcionista</label>
                <input type="text" placeholder="Ej: 123, 3331">
            </div>
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

        <div class="form-group">
            <label>Fecha de creación</label>
            <div class="input-row date-time">
                <div class="sub-input">
                    <input type="date" id="createDate" readonly>
                    <small>Fecha</small>
                </div>
                <div class="sub-input">
                    <input type="time" id="createTime">
                    <small>Hora Minutos</small>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" class="btn-submit">Crear usuario</button>
        </div>

    </form>
@endsection