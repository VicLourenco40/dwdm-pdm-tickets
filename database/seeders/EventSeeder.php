<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            [
                'id' => '91deb2de-1c58-46c2-85fd-60c0162e3c4c',
                'name' => 'Camecípare'
            ]
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
