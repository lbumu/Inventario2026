<x-admin-layout title="Dashboard" :breadcrumbs="[
    [
     'name' => 'Dashboard',
     'href' => route('admin.dashboard')
     ],
    [
    'name' => 'Prueba',
    ]
]">

<x-wire-button>
    Prueba
</x-wire-button>

Hola desde el admin

</x-admin-layout>