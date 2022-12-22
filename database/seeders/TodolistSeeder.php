<?php

namespace Database\Seeders;

use App\Models\Todolist;
use Illuminate\Database\Seeder;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::create([
            'image' => 'Pantai-Mawun.jpg',
            'list' => 'Berenang, Membuat istana pasir'
        ]);

        Todolist::create([
            'image' => 'wakatobi.jpg',
            'list' => 'Naik ke puncak tertinggi bukit tomoia, Berfoto bersama'
        ]);

        Todolist::create([
            'image' => 'Sunset-di-Karimun-Jawa.jpg',
            'list' => 'Snorkeling, Berenan bersama Hiu, Diving, Island Hopping'
        ]);

        Todolist::create([
            'image' => 'Senja-di-Pantai-Tablolong.jpg',
            'list' => 'Menikmati senja, Mengambil gambar'
        ]);

        Todolist::create([
            'image' => 'Pulau-Mekko.jpg',
            'list' => 'Berenang, Menikmati senja di dermaga'
        ]);

        Todolist::create([
            'image' => 'pantai-lemo-lemo.jpg',
            'list' => 'Mengambil gambar, Menikmati senja'
        ]);

        Todolist::create([
            'image' => 'pantai-papuma.jpg',
            'list' => 'Menikmati ikan bakar di pinggir pantai, Melihat pemandangan dari Siti Hinggil'
        ]);

        Todolist::create([
            'image' => 'pulau-Palambak.jpg',
            'list' => 'Berkeliling pulau, Mengambil gambar, Snorkeling'
        ]);

        Todolist::create([
            'image' => 'Pantai-Maluk.jpg',
            'list' => 'Surfing, Berenang, Bermain kano, Menikmati masakan laut di pinggir pantai'
        ]);

        Todolist::create([
            'image' => 'Pink-beach.jpg',
            'list' => 'Berenang, Snorkeling, Diving, Menikmati indahnya pantai dari salah satu ujung bukitnya'
        ]);
    }
}
