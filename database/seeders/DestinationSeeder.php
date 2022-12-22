<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::create([
            'review_id' => 1,
            'todolist_id' => 1,
            'title' => 'Pantai Mawun, Inilah Destinasi Favorit Saya di Lombok',
            // https://lostpacker.com/pantai-mawun/
            'desc' => 'Ngomongin soal pantai di Indonesia ini memang ga akan ada habisnya. Namun, kalau boleh dibilang pantai idaman saya ketika berkunjung ke daerah Lombok adalah Pantai Mawun.
            Sebuah hamparan pantai dengan pasir putih yang landai dan luas disertai jernihnya air laut memukau indera penglihatan saya ketika pertama kali menjejakkan kaki di pantai ini. Duduk di hamparan pasir putih tepat di bawah pohon besar ini seolah saya sedang berada di sebuah resort mahal di Maldives.
            Satu hal yang lebih membuat saya tertarik dengan pantai ini adalah MASIH SEPI. Hanya terlihat seorang wisatawan asing sedang asik membaca buku sambil tiduran tidak jauh dari tempat saya duduk.
            Karena berada pada sebuah teluk, pantai ini sangat cocok untuk berenang dan beberapa olahraga air lainnya.',
            'image' => 'Pantai-Mawun.jpg'
        ]);

        Destination::create([
            'review_id' => 2,
            'todolist_id' => 2,
            'title' => 'Akhirnya ke Wakatobi (lagi)!',
            // https://wiranurmansyah.com/terios-7-wonders-akhirnya-ke-wakatobi-lagi
            'desc' => 'Setelah bergeriliya selama sekitar 3000 km dari Manado hingga Kendari, akhirnya kami pun tiba di sudut Sulawesi Tenggara,
            kepulauan Wakatobi. Satu dari tujuh mobil terios diberangkatkan dengan kapal phinisi, 22 jam perjalanan dari Kendari. Sedangkan kami,
            tentu saja naik pesawat yang hanya memakan waktu setengah jam, hehe. Tahun 2012 saya sempat ke Wakatobi, juga mengunjungi pulau yang
            sama, Pulau Tomia. Tomia adalah salah satu gugusan kepulauan Wakatobi (Wangi-wangi, Kaledupa, Tomia, Binongko) yang punya keindahan
            bawah laut terindah negeri ini. Dua tahun lalu, tak ada geliat pariwisata disini. Tidak ada dive center (kecuali Waktobi Dive Resort
            yang punya orang asing, dan harganya selangit), tak ada warung makan, dan apapun yang menunjukan aktifitas pariwisata.',
            'image' => 'wakatobi.jpg'
        ]);

        
    }
}
