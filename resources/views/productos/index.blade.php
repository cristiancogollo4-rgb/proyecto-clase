@extends('layouts.app')

@section('title', 'Catálogo de Productos')

@section('content')
    <h1 class="catalogo-titulo" style="text-align: center; color: #2c3e50; margin-bottom: 40px;">Nuestros Productos</h1>

    <div class="productos-grid">
        <div class="producto-card">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=500" alt="Reloj" class="producto-img">
            <div class="producto-info">
                <h3 class="producto-nombre">Reloj Inteligente Pro</h3>
                <p class="producto-desc">Seguimiento de actividad y notificaciones.</p>
                <div class="producto-meta">
                    <span class="producto-precio">$120.00</span>
                    <span class="badge-estado nuevo">Nuevo</span>
                </div>
            </div>
        </div>
        </div>
@endsection

@push('styles')
<style>
    /* Estilos exclusivos del catálogo */
    .productos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }
    .producto-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: 0.3s;
    }
    .producto-card:hover { transform: translateY(-5px); }
    .producto-img { width: 100%; height: 200px; object-fit: cover; }
    .producto-info { padding: 20px; }
    .producto-precio { font-size: 1.3rem; font-weight: bold; }
    .badge-estado { padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; }
    .nuevo { background: #e3f2fd; color: #1976d2; }
</style>
@endpush
