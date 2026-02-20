<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Puedes ajustar la lógica según tu necesidad
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
}
