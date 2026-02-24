<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'name' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:clientes',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
        ]);
        $clientes = Clientes::create($data);

        session()->flash('swal', [
            'title' => '¡Cliente creado exitosamente!',
            'text' => 'El cliente ha sido creado correctamente.',
            'icon' => 'success'
        ]);

        return redirect()->route('admin.clientes.edit', $cliente)->with('success', 'Cliente creado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $cliente)
    {
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $cliente)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:clientes,rut,' . $cliente->id,
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes,email,' . $cliente->id,
        ]);

        $cliente->update($data);

        session()->flash('swal', [
            'title' => '¡Cliente actualizado exitosamente!',
            'text' => 'El cliente ha sido actualizado correctamente.',
            'icon' => 'success'
        ]);

        return redirect()->route('admin.clientes.edit', $cliente)->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();

        session()->flash('swal', [
            'title' => '¡Cliente eliminado exitosamente!',
            'text' => 'El cliente ha sido eliminado correctamente.',
            'icon' => 'success'
        ]);

        return redirect()->route('admin.clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }
}
