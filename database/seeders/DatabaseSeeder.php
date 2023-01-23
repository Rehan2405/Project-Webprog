<?php

namespace Database\Seeders;

use App\Models\destination;
use App\Models\Todolist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DestinationSeeder::class,
            TodolistSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        // destination::create([
        //     'image' => 'image.jpg',
        //     'name' => 'Hilton Resort',
        //     'desc' => 'Bali, Indonesia'
        // ]);
        // destination::create([
        //     'image' => 'image2.jpg',
        //     'name' => 'Borobudur',
        //     'desc' => 'Central Java, Indonesia'
        // ]);
        // destination::create([
        //     'image' => 'image3.jpg',
        //     'name' => 'Gili Island',
        //     'desc' => 'Lombok, Indonesia'
        // ]);
        // destination::create([
        //     'image' => 'image4.jpg',
        //     'name' => 'Torres Del Paine National Park',
        //     'desc' => 'Magallanes and Chilean Antarctica, Cile'
        // ]);
        // destination::create([
        //     'image' => 'image5.jpg',
        //     'name' => 'Anse Source dArgent',
        //     'desc' => 'La Digue, Seychelles'
        // ]);
        // destination::create([
        //     'image' => 'image6.jpg',
        //     'name' => 'Ha Long Bay',
        //     'desc' => 'Quang Ninh, Vietnam'
        // ]);
    }

}
