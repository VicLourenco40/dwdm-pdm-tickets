<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $tickets = [
            [
                'id' => 'e09d0bfe-3751-494b-959f-44ff17b8c9d6',
                'event_id' => '91deb2de-1c58-46c2-85fd-60c0162e3c4c',
                'type' => 'Geral'
            ],
            [
                'id' => '0218ac84-3edf-4157-89b7-3252fb89a6e7',
                'event_id' => '91deb2de-1c58-46c2-85fd-60c0162e3c4c',
                'type' => 'VIP'
            ]
        ];

        foreach ($tickets as $ticket) {
            Ticket::create($ticket);
        }
    }
}
