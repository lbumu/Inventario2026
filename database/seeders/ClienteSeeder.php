<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $clientes = [
            [
                'name' => 'Juan Pérez',
                'rut' => '12345678-9',
                'address' => 'Calle Falsa 123',
                'phone' => '555-1234',
                'email' => 'juan.perez@example.com',
            ],
            [
                'name' => 'María García',
                'rut' => '98765432-1',
                'address' => 'Avenida Siempre Viva 456',
                'phone' => '555-5678',
                'email' => 'maria.garcia@example.com',
            ]
            
        ];

        foreach ($clientes as $cliente) {
            Clientes::create($cliente);
        }
    }
}
