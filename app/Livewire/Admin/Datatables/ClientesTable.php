<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Clientes;

class ClientesTable extends DataTableComponent
{
    protected $model = Clientes::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->searchable()
                ->sortable(),
            Column::make("Rut", "rut")
                ->sortable(),
            Column::make("Dirección", "address")
                ->sortable(),
            Column::make("Teléfono", "phone")
                ->sortable(),
            Column::make("correo", "email")
                ->sortable(),
            Column::make('Acciones')
                ->label(function($row) {
                    return view('admin.clientes.actions', ['cliente' => $row]);
                }),
        ];
    }
}
