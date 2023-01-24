<?php

namespace Database\Seeders;

use App\Models\destination;
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
        // \App\Models\User::factory(10)->create();
        destination::create([
            'image' => 'image.jpg',
            'name' => 'Hilton Resort',
            'desc' => 'Bali, Indonesia',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',

        ]);
        destination::create([
            'image' => 'image2.jpg',
            'name' => 'Borobudur',
            'desc' => 'Central Java, Indonesia',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',
        ]);
        destination::create([
            'image' => 'image3.jpg',
            'name' => 'Gili Island',
            'desc' => 'Lombok, Indonesia',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',
        ]);
        destination::create([
            'image' => 'image4.jpg',
            'name' => 'Torres Del Paine National Park',
            'desc' => 'Magallanes and Chilean Antarctica, Cile',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',
        ]);
        destination::create([
            'image' => 'image5.jpg',
            'name' => 'Anse Source dArgent',
            'desc' => 'La Digue, Seychelles',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',
        ]);
        destination::create([
            'image' => 'image6.jpg',
            'name' => 'Ha Long Bay',
            'desc' => 'Quang Ninh, Vietnam',
            'location' => 'Bali, Indonesia',
            'todolist' => 'Bali, Indonesia',
        ]);
    }

}
