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

@push('js')

<script>
    forms = document.querySelectorAll('.delete-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Esta acción no se puede deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    </script>



@endpush

</x-admin-layout>