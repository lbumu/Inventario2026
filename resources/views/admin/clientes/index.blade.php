<x-admin-layout title="Clientes" :breadcrumbs="[
    
    [
    'name' => 'Clientes',
    ]
]">

<x-slot name="action">
    <x-wire-button href="{{ route('admin.clientes.create') }}" blue xs >
        Crear Cliente
    </x-wire-button>
</x-slot>

@livewire('admin.datatables.clientes-table')

</x-admin-layout>