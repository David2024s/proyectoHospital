<link rel="stylesheet" href="{{ asset('_css/menu_css.css') }}">

<div class="menu">
    <div class="inf_usr">
        <h2>Administrador</h2>
        <span>
            <img src="{{ asset('usernone.png') }}" alt="Usuario">
            <p>Juan Pérez</p>
        </span>
    </div>
    <link rel="stylesheet" href="">
    <ul class="menu-admin">
        <!-- DASHBOARD / INICIO -->
        <li>
            <a href="{{ route('web.home') }}">
                <i class='bx bx-home'></i> Inicio
            </a>
        </li>

        <!-- GESTIÓN DE USUARIOS -->
        <li>
            <a href="#">
                <i class='bx bx-group'></i> Gestión de Usuarios
            </a>
            <ul class="submenu">
                <li><a href="{{ route('usuarios.create') }}">Crear nuevo usuario</a></li>
                <li><a href="{{ route('usuarios.edit') }}">Editar datos de usuario</a></li>
                <li><a href="{{ route('usuarios.status') }}">Activar / Desactivar usuario</a></li>
                <li><a href="{{ route('usuarios.role') }}">Cambiar rol de usuario</a></li>
                <li><a href="{{ route('usuarios.confirm-delete') }}">Eliminar usuario</a></li>
            </ul>
        </li>

        <!-- GESTIÓN DE ROLES -->
        <li>
            <a href="#">
                <i class="bx bx-user-id-card"></i> Gestión de Roles
            </a>
            <ul class="submenu">
                <li><a href="#">Crear nuevo rol</a></li>
                <li><a href="#">Editar nombre o descripción</a></li>
                <li><a href="#">Eliminar rol</a></li>
            </ul>
        </li>

        <!-- GESTIÓN DE UNIDADES -->
        <li>
            <a href="#">
                <i class='bx bx-building'></i> Gestión de Unidades
            </a>
            <ul class="submenu">
                <li><a href="#">Crear nueva unidad</a></li>
                <li><a href="#">Editar datos de unidad</a></li>
                <li><a href="#">Eliminar unidad</a></li>
            </ul>
        </li>
        <link rel="stylesheet" href="/index.php">

        <!-- GESTIÓN DE SALAS -->
        <li>
            <a href="#">
                <i class='bx bx-door-open'></i> Gestión de Salas
            </a>
            <ul class="submenu">
                <li><a href="#">Crear nueva sala</a></li>
                <li><a href="#">Editar datos de sala</a></li>
                <li><a href="#">Cambiar disponibilidad</a></li>
                <li><a href="#">Eliminar sala</a></li>
            </ul>
        </li>

        <!-- ASIGNACIÓN DE PERSONAL -->
        <li>
            <a href="#">
                <i class='bx bx-user-check'></i> Asignación de Personal
            </a>
            <ul class="submenu">
                <li><a href="#">Asignar doctor/enfermera</a></li>
                <li><a href="#">Editar asignación</a></li>
                <li><a href="#">Finalizar asignación</a></li>
                <li><a href="#">Eliminar asignación</a></li>
            </ul>
        </li>

        <!-- GESTIÓN DE MEDICAMENTOS -->
        <li>
            <a href="#">
                <i class='bx bx-capsule'></i> Gestión de Medicamentos
            </a>
            <ul class="submenu">
                <li><a href="#">Crear nuevo medicamento</a></li>
                <li><a href="#">Editar datos</a></li>
                <li><a href="#">Eliminar medicamento</a></li>
            </ul>
        </li>

        <!-- REPORTES Y AUDITORÍA -->
        <li>
            <a href="#">
                <i class="bx bx-chart-bar-columns"></i> Reportes y Auditoría
            </a>
            <ul class="submenu">
                <li><a href="#">Usuarios activos/inactivos</a></li>
                <li><a href="#"> Citas por período</a></li>
                <li><a href="#"> Pacientes por fecha</a></li>
                <li><a href="#"> Historial de accesos</a></li>
            </ul>
        </li>

        <!-- BÚSQUEDAS GENERALES -->
        <li>
            <a href="#">
                <i class='bx bx-search-alt'></i> Búsquedas Generales
            </a>
            <ul class="submenu">
                <li><a href="#">Buscar paciente</a></li>
                <li><a href="#">Buscar doctor</a></li>
                <li><a href="#">Buscar enfermera</a></li>
            </ul>
        </li>

        <!-- MI PERFIL -->
        <li>
            <a href="#">
                <i class='bx bx-user-circle'></i> Mi Perfil
            </a>
            <ul class="submenu">
                <li><a href="#">Ver mi perfil</a></li>
                <li><a href="#">Editar mis datos</a></li>
                <li><a href="#">Cambiar contraseña</a></li>
            </ul>
        </li>

        <!-- CERRAR SESIÓN -->
        <li>
            <a href="#">
                <i class='bx bx-log-out'></i> Cerrar sesión
            </a>
        </li>
    </ul>
</div>

<script src="/src/resources/js/menu.js"></script>