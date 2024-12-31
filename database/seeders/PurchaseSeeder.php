<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    public function run(): void
    {
        $purchases = [
            [
                'id' => 'c43b1343-30c9-4604-b1a7-6c61abef4667',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => 'b8a4ed28-d65d-4422-b05d-a78fa945d415',
                'ticket_code' => '01jgepy60fxhghnaxz3z0v11qq',
                'purchased_at' => '2024-09-01 16:29:36',
            ],
            [
                'id' => 'd78ca3dc-f23b-4859-9b5e-3f3bc8810848',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '3f660672-ef62-493c-9dc2-2d477f893734',
                'ticket_code' => '01jgepy60fth830j8h2pywqjp1',
                'purchased_at' => '2024-08-22 13:43:21',
            ],
            [
                'id' => 'bfaf2e6e-5d10-4caf-a2dc-063ea9b04087',
                'ticket_id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'customer_id' => '623da2c4-82dc-4f77-ab1f-f3604215dbde',
                'ticket_code' => '01jgepy60fyjga56nr8bd5w61g',
                'purchased_at' => '2024-09-04 18:55:08',
            ]
        ];

        foreach ($purchases as $purchase) {
            Purchase::create($purchase);
        }
    }
}
