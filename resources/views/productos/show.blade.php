@extends('layouts.app')

@section('title', 'Detalle del Producto - MiTiendaApp')

@section('content')
<div class="product-detail-container">
    <a href="{{ url('/productos') }}" class="btn-back">← Volver al catálogo</a>

    <div class="product-grid-detail">
        <div class="product-image-box">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800" alt="Nombre del Producto">
        </div>

        <div class="product-info-box">
            <span class="badge-estado nuevo">Nuevo</span>
            <h1 class="product-title">Reloj Inteligente Pro Max</h1>
            <p class="product-price">$120.00</p>

            <div class="divider"></div>

            <h3 class="section-subtitle">Descripción</h3>
            <p class="product-description">
                Este reloj inteligente de última generación combina elegancia y tecnología.
                Perfecto para el seguimiento de tu salud diaria, notificaciones inteligentes
                y resistencia al agua hasta 50 metros. La batería dura hasta 10 días con una sola carga.
            </p>

            <div class="actions">
                <button class="btn-primary">Añadir al carrito</button>
                <button class="btn-secondary">Comprar ahora</button>
            </div>

            <div class="extra-info">
                <p>🚚 Envío gratis a todo el país</p>
                <p>🛡️ Garantía de 12 meses oficial</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .product-detail-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
    }

    .btn-back {
        display: inline-block;
        margin-bottom: 20px;
        color: #4a90e2;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
    }

    .btn-back:hover { text-decoration: underline; }

    .product-grid-detail {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 50px;
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* Imagen del producto */
    .product-image-box img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Info del producto */
    .badge-estado {
        display: inline-block;
        padding: 5px 15px;
        background: #e3f2fd;
        color: #1976d2;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .product-title {
        font-size: 2.5rem;
        color: #2c3e50;
        margin: 0 0 10px 0;
    }

    .product-price {
        font-size: 2rem;
        color: #4a90e2;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .divider {
        height: 1px;
        background: #eee;
        margin: 20px 0;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 10px;
    }

    .product-description {
        color: #666;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    /* Botones */
    .actions {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
    }

    .btn-primary, .btn-secondary {
        flex: 1;
        padding: 15px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-primary { background: #2c3e50; color: white; }
    .btn-primary:hover { background: #1a252f; }

    .btn-secondary { background: #4a90e2; color: white; }
    .btn-secondary:hover { background: #357abd; }

    .extra-info {
        border-top: 1px solid #f0f0f0;
        padding-top: 20px;
        font-size: 0.9rem;
        color: #888;
    }
</style>
@endpush
