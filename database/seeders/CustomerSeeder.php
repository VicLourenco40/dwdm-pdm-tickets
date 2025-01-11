<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'id' => 'b8a4ed28-d65d-4422-b05d-a78fa945d415',
                'name' => 'João Carvalho',
                'email' => 'joao.carvalho@mail.com',
                'phone_number' => '+351912345678'
            ],
            [
                'id' => '3f660672-ef62-493c-9dc2-2d477f893734',
                'name' => 'Beatriz Pinheiro',
                'email' => 'beatriz.pinheiro@mail.com',
                'phone_number' => '+351987654321'
            ],
            [
                'id' => '623da2c4-82dc-4f77-ab1f-f3604215dbde',
                'name' => 'Luís Barros',
                'email' => 'luis.barros@mail.com',
                'phone_number' => '+351967584930'
            ],
            [
                'id' => '7a94cb92-1234-49db-8d69-c39e8549e7b6',
                'name' => 'Ana Silva',
                'email' => 'ana.silva@mail.com',
                'phone_number' => '+351912345679'
            ],
            [
                'id' => '9d20d1a1-0c67-4c22-918f-2562746a8e6b',
                'name' => 'Carlos Mendes',
                'email' => 'carlos.mendes@mail.com',
                'phone_number' => '+351934567890'
            ],
            [
                'id' => 'bd8adca2-e209-47f2-b2a5-014c0f6da8d1',
                'name' => 'Maria Oliveira',
                'email' => 'maria.oliveira@mail.com',
                'phone_number' => '+351961234567'
            ],
            [
                'id' => '13a7f189-8cfa-4c2a-b287-688abdfedb94',
                'name' => 'Pedro Costa',
                'email' => 'pedro.costa@mail.com',
                'phone_number' => '+351987123456'
            ],
            [
                'id' => '4e7b89cf-62bc-43b5-b5a1-f57ad4cf10f1',
                'name' => 'Sofia Pereira',
                'email' => 'sofia.pereira@mail.com',
                'phone_number' => '+351966543210'
            ],
            [
                'id' => '0f2b5b1c-bdb4-45a5-8b24-b9eb7d9e0b3e',
                'name' => 'Miguel Almeida',
                'email' => 'miguel.almeida@mail.com',
                'phone_number' => '+351924680543'
            ],
            [
                'id' => 'f63d3ab7-cc50-42ba-939e-52abf8317b7c',
                'name' => 'Carla Martins',
                'email' => 'carla.martins@mail.com',
                'phone_number' => '+351951234890'
            ]
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
