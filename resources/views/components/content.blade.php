<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="{{ asset('_css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('_css/usuarios.css') }}">
    <!-- Basic Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <!-- Filled Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
    <!-- Brand Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">
</head>

<body>




    <div class="contenedor_inicio">
        <x-menu></x-menu>


        <div class="panel">

            <div class="form-container">
                <header>
                    @yield('title_panel')
                    
                </header>
                <hr>

                <section class="cont_panel">
                    @yield('content_form')
                </section>




            </div>



        </div>



    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{ asset('_js/menu.js') }}"></script>
    <script src="{{ asset('_js/usuarios.js') }}"></script>



</body>

</html>