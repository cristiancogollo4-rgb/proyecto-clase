@extends('layouts.app')

@section('title', 'Añadir Producto - MiTiendaApp')

@section('content')
    <div class="form-container">
        <h2 style="text-align: center; margin-bottom: 20px; color: #2c3e50;">Nuevo Producto</h2>
        <form>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" placeholder="Ej. Cámara Reflex" required>
            </div>
            <div class="form-group">
                <label>Precio ($)</label>
                <input type="number" placeholder="99.99" step="0.01" required>
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
@endsection

@push('styles')
<style>
    /* Estilos específicos para el contenedor del formulario */
    main {
        display: flex;
        justify-content: center;
        align-items: center;
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
        color: #aaa;
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
        transition: background 0.3s;
    }

    button:hover {
        background: #357abd;
    }
</style>
@endpush

@push('scripts')
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
@endpush
