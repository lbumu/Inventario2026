<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Clientes = [
            [
                'Name' => 'Juan Perez',
                'Phone' => '123456789',
                'Email' => 'juan.perez@example.com',
            ],
            [
                'Name' => 'Maria Garcia',
                'Phone' => '987654321',
                'Email' => 'maria.garcia@example.com',
            ]
            
        ];

        foreach ($Clientes as $cliente) {
            \App\Models\Customer::create($cliente);
        }
    }
}
