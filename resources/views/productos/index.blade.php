<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <style>
        /* Estilos Base (Igual que el anterior) */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- NAVBAR --- */
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

        /* --- CATÁLOGO (GRID) --- */
        main {
            flex: 1;
            padding: 40px 5%;
        }

        .catalogo-titulo {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        .productos-grid {
            display: grid;
            /* Crea columnas automáticas de mínimo 250px */
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- TARJETA DE PRODUCTO --- */
        .producto-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .producto-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .producto-img {
            width: 100%;
            height: 200px;
            object-fit: cover; /* Recorta la imagen para que encaje perfecto */
            background-color: #eee;
        }

        .producto-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .producto-nombre {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0 0 10px 0;
            color: #333;
        }

        .producto-desc {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .producto-meta {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .producto-precio {
            font-size: 1.3rem;
            font-weight: 800;
            color: #2c3e50;
        }

        .badge-estado {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .nuevo { background: #e3f2fd; color: #1976d2; }
        .usado { background: #fff3e0; color: #f57c00; }

        /* --- FOOTER --- */
        footer {
            background-color: #2c3e50;
            color: #bdc3c7;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">MiTienda<span>App</span></div>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Catálogo</a></li>
            <li><a href="#">Añadir Nuevo</a></li>
        </ul>
    </nav>

    <main>
        <h1 class="catalogo-titulo">Nuestros Productos</h1>

        <div class="productos-grid">

            <div class="producto-card">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=500" alt="Reloj" class="producto-img">
                <div class="producto-info">
                    <h3 class="producto-nombre">Reloj Inteligente Pro</h3>
                    <p class="producto-desc">Seguimiento de actividad, ritmo cardíaco y notificaciones en tiempo real.</p>
                    <div class="producto-meta">
                        <span class="producto-precio">$120.00</span>
                        <span class="badge-estado nuevo">Nuevo</span>
                    </div>
                </div>
            </div>

            <div class="producto-card">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=500" alt="Auriculares" class="producto-img">
                <div class="producto-info">
                    <h3 class="producto-nombre">Auriculares Premium</h3>
                    <p class="producto-desc">Cancelación de ruido activa y batería de 40 horas de duración.</p>
                    <div class="producto-meta">
                        <span class="producto-precio">$85.50</span>
                        <span class="badge-estado nuevo">Nuevo</span>
                    </div>
                </div>
            </div>

            <div class="producto-card">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=500" alt="Zapatillas" class="producto-img">
                <div class="producto-info">
                    <h3 class="producto-nombre">Zapatillas Sport V2</h3>
                    <p class="producto-desc">Máxima comodidad para correr largas distancias con suela amortiguada.</p>
                    <div class="producto-meta">
                        <span class="producto-precio">$65.00</span>
                        <span class="badge-estado usado">Usado</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <p>&copy; 2026 <span>MiTiendaApp</span>. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
