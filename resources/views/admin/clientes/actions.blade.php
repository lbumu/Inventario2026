<div class="flex items-center space-x-2">
    <x-wire-button blue xs href="{{ route('admin.clientes.edit', $cliente) }}">
        Editar
    </x-wire-button>  
    
    <form action="{{ route('admin.clientes.destroy', $cliente) }}" 
         method="POST"
         class="delete-form">
        @csrf
        @method('DELETE')
        <x-wire-button red xs type="submit">
            Eliminar
        </x-wire-button>
</div>