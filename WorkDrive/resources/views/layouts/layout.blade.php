<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class=flex>
<x-home :menuItems="$menuItems" />
<h1>Página de Inicio</h1> 
    <div class="container">
        <!-- Sidebar fijo -->
        {{-- <aside class="sidebar">
            <ul>
                <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="{{ route('stats') }}"><i class="fa-solid fa-chart-bar"></i> Estadísticas</a></li>
                <li><a href="{{ route('settings') }}"><i class="fa-solid fa-gear"></i> Configuración</a></li>
            </ul>
        </aside> --}}

        <!-- Contenido dinámico -->
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>
</html>