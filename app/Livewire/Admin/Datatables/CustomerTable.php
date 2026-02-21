<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Customer;

class CustomerTable extends DataTableComponent
{
    protected $model = Customer::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "Nombre")
                ->sortable(),
            Column::make("Telefono", "Telefono")
                ->sortable(),
            Column::make("Correo electronico", "Correo electronico")
                ->sortable(),
            Column::make("Direccion", "Direccion")
                ->sortable(),
            Column::make("Rut", "Rut")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Acciones")
                    ->label(function($row) {
                        return view('admin.customers.actions', ['customer' => $row]);
                    })
            
            
        ];
    }
}
