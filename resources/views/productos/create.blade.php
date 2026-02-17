<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Productos Moderno</title>
    <style>
        /* Estilos Base */
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

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4a90e2;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #4a90e2;
        }

        /* --- CONTENIDO PRINCIPAL --- */
        main {
            flex: 1; /* Esto empuja el footer hacia abajo */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 450px;
        }

        .form-group { margin-bottom: 1.2rem; }
        label { display: block; margin-bottom: 5px; font-weight: 500; color: #444; }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .img-preview {
            width: 100%;
            height: 120px;
            border: 2px dashed #ccc;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            overflow: hidden;
            background: #fafafa;
        }

        .img-preview img { max-width: 100%; max-height: 100%; object-fit: contain; }

        button {
            width: 100%;
            padding: 12px;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #2c3e50;
            color: #bdc3c7;
            text-align: center;
            padding: 20px 0;
            font-size: 0.9rem;
        }

        footer span { color: #4a90e2; font-weight: bold; }
    </style>
</head>
<body>

    <nav>
        <div class="logo">MiTienda<span>App</span></div>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <div class="form-container">
            <h2 style="text-align: center; margin-bottom: 20px;">Nuevo Producto</h2>
            <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" placeholder="Ej. Cámara Reflex">
                </div>
                <div class="form-group">
                    <label>Precio ($)</label>
                    <input type="number" placeholder="99.99">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea placeholder="Detalles del producto..."></textarea>
                </div>
                <div class="form-group">
                    <label>URL de Imagen de Internet</label>
                    <input type="url" id="imgInput" placeholder="https://..." oninput="updatePreview(this.value)">
                    <div class="img-preview" id="preview">Vista previa</div>
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <select>
                        <option>Nuevo</option>
                        <option>Usado</option>
                        <option>Reacondicionado</option>
                    </select>
                </div>
                <button type="submit">Publicar Ahora</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 <span>MiTiendaApp</span>. Todos los derechos reservados.</p>
        <p>Hecho con ❤️ para la clase de Programación.</p>
    </footer>

    <script>
        function updatePreview(url) {
            const preview = document.getElementById('preview');
            if(url) {
                preview.innerHTML = `<img src="${url}" onerror="this.parentElement.innerHTML='Error al cargar imagen'">`;
            } else {
                preview.innerHTML = 'Vista previa';
            }
        }
    </script>

</body>
</html>
