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
            ]
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
