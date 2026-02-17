<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MiTiendaApp')</title>
    <style>
        /* Estilos Base Reutilizables */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background-color: #2c3e50;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav .logo { font-size: 1.5rem; font-weight: bold; color: #4a90e2; }
        nav .logo span { color: white; }
        nav ul { list-style: none; display: flex; gap: 20px; margin: 0; padding: 0; }
        nav ul li a { color: white; text-decoration: none; transition: 0.3s; }
        nav ul li a:hover { color: #4a90e2; }

        main { flex: 1; padding: 40px 5%; }

        footer {
            background-color: #2c3e50;
            color: #bdc3c7;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        /* Estilos específicos que compartes entre vistas (puedes moverlos aquí) */
        @stack('styles')
    </style>
</head>
<body>

    <nav>
        <div class="logo">MiTienda<span>App</span></div>
        <ul>
            <li><a href="{{ url('/productos') }}">Inicio</a></li>
            <li><a href="{{ url('/productos') }}">Catálogo</a></li>
            <li><a href="{{ url('/productos/create') }}">Añadir Nuevo</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} <span>MiTiendaApp</span>. Todos los derechos reservados.</p>
    </footer>

    @stack('scripts')
</body>
</html>
