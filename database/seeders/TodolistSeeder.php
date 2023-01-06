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
            'list' => 'Bersantai di pantai Mawun,
                        Melakukan olah raga air seperti berenang di pantai Mawun'
        ]);

        Todolist::create([
            'image' => 'wakatobi.jpg',
            'list' => 'Naik ke puncak tertinggi bukit tomoia, Berfoto bersama'
        ]);

        Todolist::create([
            'image' => 'Sunset-di-Karimun-Jawa.jpg',
            'list' => 'Menikmati pulau-pulau kecil di sekitar pulau Karimunjawa (island hopping),
                        Melakukan snorkeling sembari island hopping,
                        Merasakan sensasi berenang bersama ikan hiu,
                        Menyaksikan keindahan sunset di sebelah barat Pulau Menjangan Besar'
        ]);

        Todolist::create([
            'image' => 'Senja-di-Pantai-Tablolong.jpg',
            'list' => 'Menikmati senja di Pantai Tablolong,
                        Memotret keindahan Pantai Tablolong'
        ]);

        Todolist::create([
            'image' => 'Pulau-Mekko.jpg',
            'list' => 'Mengunjungi pantai pasir timbul Meko,
                        Berenang di Meko,
                        Menikmati senja di dermaga kampung Meko'
        ]);

        Todolist::create([
            'image' => 'pantai-lemo-lemo.jpg',
            'list' => 'Memotret keindahan pantai Lemo-Lemo,
                        Menikmati senja di pantai Lemo-Lemo'
        ]);

        Todolist::create([
            'image' => 'pantai-papuma.jpg',
            'list' => 'Menikmati ikan bakar di pinggir pantai Papuma,
                        Melihat pemandangan dari Siti Hinggil'
        ]);

        Todolist::create([
            'image' => 'pulau-Palambak.jpg',
            'list' => 'Berkeliling pulau Palambak,
                        Memotret keindahan pulau Palambak,
                        Menikmati keindahan bawah laut pulau Palambak'
        ]);

        Todolist::create([
            'image' => 'Pantai-Maluk.jpg',
            'list' => 'Surfing atau Berenang di pantai Maluk,
                        Bermain kano yang disewakan di pantai Maluk,
                        Menikmati masakan laut di pinggir pantai Maluk'
        ]);

        Todolist::create([
            'image' => 'Pink-beach.jpg',
            'list' => 'Berenang/Snorkeling/Diving di Pink Beach,
                        Menikmati indahnya pantai dari salah satu ujung bukit di Pink Beach'
        ]);

        Todolist::create([
            'image' => 'tana-toraja.jpg',
            'list' => 'Menyaksikan prosesi adat rambu solo,
                        Membeli Oleh-oleh di pasar Rante pao'
        ]);

        Todolist::create([
            'image' => 'ternate.jpg',
            'list' => 'Menikmati panorama laut dan keindahan gunung Gamalama dari atas Benteng Toloko,
                        Menikmati kuliner ala Ternate di pasar Gamalama,
                        Menikmati pemandangan dari atas benteng Kalamata,
                        Mengunjungi Floridas Restaurant'
        ]);

        Todolist::create([
            'image' => 'wangi-wangi.jpg',
            'list' => 'Menikmati keindahan bawah laut Wakatobi,
                        Menikmati sunset di Wanci'
        ]);

        Todolist::create([
            'image' => 'tanjung-bira.jpg',
            'list' => 'Memotret keindahan Tanjung Bira,
                        Menikmati kelapa muda di salah satu warung Tanjung Bira,
                        Mencoba olahraga air yang ada di Tanjung Bira'
        ]);

        Todolist::create([
            'image' => 'fort-rotterdam-makassar.jpg',
            'list' => 'Berkeliling area benteng,
                        Menikmati langit senja makasar dari atas bastion,
                        Mempelajari dan mendokumentasikan sejarah Benteng Fort Rotterdam'
        ]);
    }
}
