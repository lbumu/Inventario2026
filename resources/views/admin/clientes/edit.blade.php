<x-admin-layout title="Clientes" :breadcrumbs="[
    
    [
    'name' => 'Clientes',
    'href' => route('admin.clientes.index')
     ],
    [
    'name' => 'Editar Cliente',
    ]
]">

<x-wire-card>
      <form action="{{ route('admin.clientes.update', $cliente) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <x-wire-input  label="Nombre" name="name" required placeholder="Ingrese el nombre del cliente" value="{{ old('name', $cliente->name) }}" />
        <x-wire-input  label="RUT" name="rut" required placeholder="Ingrese el RUT del cliente" value="{{ old('rut', $cliente->rut) }}" />
        <x-wire-input  label="Dirección" name="address" required placeholder="Ingrese la dirección del cliente" value="{{ old('address', $cliente->address) }}" />
        <x-wire-input  label="Teléfono" name="phone" required placeholder="Ingrese el teléfono del cliente" value="{{ old('phone', $cliente->phone) }}" />
        <x-wire-input  label="Correo Electrónico" name="email" required placeholder="Ingrese el correo electrónico del cliente" value="{{ old('email', $cliente->email) }}" />
    
        <div class="flex justify-end">
            <x-button >
                Actualizar
            </x-button>
        </div>
    
    
        </form

        
</x-wire-card>

</x-admin-layout>