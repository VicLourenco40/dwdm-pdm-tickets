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
                'purchased_at' => '2024-09-01 16:29:36'
            ],
            [
                'id' => 'd78ca3dc-f23b-4859-9b5e-3f3bc8810848',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '3f660672-ef62-493c-9dc2-2d477f893734',
                'ticket_code' => '01jgepy60fth830j8h2pywqjp1',
                'purchased_at' => '2024-08-22 13:43:21'
            ],
            [
                'id' => 'bfaf2e6e-5d10-4caf-a2dc-063ea9b04087',
                'ticket_id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'customer_id' => '623da2c4-82dc-4f77-ab1f-f3604215dbde',
                'ticket_code' => '01jgepy60fyjga56nr8bd5w61g',
                'purchased_at' => '2024-09-04 18:55:08'
            ],
            [
                'id' => 'f5d3b246-e75b-4cfa-8d13-7e5d88e3a573',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '7a94cb92-1234-49db-8d69-c39e8549e7b6',
                'ticket_code' => '01jgepy60fxhv1kc9h2xqz56p4',
                'purchased_at' => '2024-09-07 14:12:25'
            ],
            [
                'id' => '7d88f01e-4b78-4851-9b65-7d44c663f849',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '9d20d1a1-0c67-4c22-918f-2562746a8e6b',
                'ticket_code' => '01jgepy60fkyg3c8t8tnf64hrf',
                'purchased_at' => '2024-08-28 09:21:47'
            ],
            [
                'id' => 'd34b1a8d-b3d4-4850-b087-8121f7f9e3d4',
                'ticket_id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'customer_id' => 'bd8adca2-e209-47f2-b2a5-014c0f6da8d1',
                'ticket_code' => '01jgepy60fzvbp7w7n1pjp1kzc',
                'purchased_at' => '2024-09-03 11:40:33'
            ],
            [
                'id' => 'b1cbe337-30f2-4b55-a463-c2c86dbb6721',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '13a7f189-8cfa-4c2a-b287-688abdfedb94',
                'ticket_code' => '01jgepy60fvgkm2f9v9hxxm1ht',
                'purchased_at' => '2024-08-25 17:58:09'
            ],
            [
                'id' => '4cd18e5b-49e1-44ad-8b94-780c1b8b0219',
                'ticket_id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'customer_id' => '4e7b89cf-62bc-43b5-b5a1-f57ad4cf10f1',
                'ticket_code' => '01jgepy60fziw75y8r5mb3xz1r',
                'purchased_at' => '2024-09-02 10:14:56'
            ],
            [
                'id' => '9f8a9c82-074e-40d5-b94e-8b773f51cc4f',
                'ticket_id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'customer_id' => '0f2b5b1c-bdb4-45a5-8b24-b9eb7d9e0b3e',
                'ticket_code' => '01jgepy60fy9ht48m0wwj9pqnd',
                'purchased_at' => '2024-08-30 15:39:04'
            ],
            [
                'id' => 'f9d16e3c-50cc-4d60-9987-d0c9c2b16f8f',
                'ticket_id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'customer_id' => 'f63d3ab7-cc50-42ba-939e-52abf8317b7c',
                'ticket_code' => '01jgepy60fz2h5gx9t4m1b1cpr',
                'purchased_at' => '2024-09-05 19:51:42'
            ]
        ];

        foreach ($purchases as $purchase) {
            Purchase::create($purchase);
        }
    }
}
