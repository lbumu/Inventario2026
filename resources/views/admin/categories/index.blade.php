<x-admin-layout title="Categorias" :breadcrumbs="[
    [
     'name' => 'Dashboard',
     'href' => route('admin.dashboard')
     ],
    [
    'name' => 'Categorias',
    ]
]">

@livewire('admin.datatables.category-table')

</x-admin-layout>