<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Lista de productos";
    }
    public function create()
    {
        return "Crear producto";

    }
    public function show($id, $categoria = null)
    {
        if ($categoria == null) {
            return "Detalle de producto: " . $id . " - Categoría: Sin categoría";
        } else {
            return "Detalle de producto: " . $id . " - Categoría: " . $categoria;
        }
    }

}
