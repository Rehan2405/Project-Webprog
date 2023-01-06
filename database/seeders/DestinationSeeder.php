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
            'desc' => 'Ngomongin soal pantai di Indonesia ini memang ga akan ada habisnya. Namun, kalau boleh dibilang pantai idaman saya
            ketika berkunjung ke daerah Lombok adalah Pantai Mawun. Sebuah hamparan pantai dengan pasir putih yang landai dan luas disertai
            jernihnya air laut memukau indera penglihatan saya ketika pertama kali menjejakkan kaki di pantai ini. Duduk di hamparan pasir
            putih tepat di bawah pohon besar ini seolah saya sedang berada di sebuah resort mahal di Maldives. Satu hal yang lebih membuat
            saya tertarik dengan pantai ini adalah MASIH SEPI. Hanya terlihat seorang wisatawan asing sedang asik membaca buku sambil tiduran
            tidak jauh dari tempat saya duduk.',
            'image' => 'Pantai-Mawun.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=BZF_UWlo6mA'
        ]);

        Destination::create([
            'review_id' => 2,
            'todolist_id' => 2,
            'title' => 'Akhirnya ke Wakatobi (lagi)!',
            // https://wiranurmansyah.com/terios-7-wonders-akhirnya-ke-wakatobi-lagi
            'desc' => 'Setelah bergeriliya selama sekitar 3000 km dari Manado hingga Kendari, akhirnya kami pun tiba di sudut Sulawesi Tenggara,
            kepulauan Wakatobi. Satu dari tujuh mobil terios diberangkatkan dengan kapal phinisi, 22 jam perjalanan dari Kendari. Sedangkan
            kami, tentu saja naik pesawat yang hanya memakan waktu setengah jam, hehe.',
            'image' => 'wakatobi.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=PL5HxA01Fz4'
        ]);

        Destination::create([
            'review_id' => 3,
            'todolist_id' => 3,
            'title' => 'Trip ke Karimunjawa, Melihat Pesona Keindahan Pulau yang Tersamar',
            // https://lostpacker.com/trip-ke-karimunjawa/
            'desc' => 'Bus yang membawa kami dari Jakarta untuk Trip ke Karimunjawa pun berangkat saat malam mulai menjelang. Perjalanan
            panjang ini akan kami tempuh kurang lebih 12 jam hingga tiba di Kota Jepara yang menjadi pintu masuk ke Kepulauan Karimun Jawa.

            Tepat pukul 06.00 pagi kami sampai di pelabuhan penumpang Kartini di samping objek wisata Taman Kartini Jepara.

            Namun, tak berapa lama lagi kami akan menghadapi sebuah perjalanan yang cukup panjang lagi menuju Karimun.',
            'image' => 'Sunset-di-Karimun-Jawa.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=HZVuxztLDwI'
        ]);

        Destination::create([
            'review_id' => 4,
            'todolist_id' => 4,
            'title' => 'Cerita Senja di Pantai Tablolong Kupang yang Luar Biasa Indah',
            // https://lostpacker.com/cerita-senja-di-pantai-tablolong-kupang/
            'desc' => 'Selama saya berjalan dan berpetualang di Nusantara tercinta ini, saya selalu punya cerita senja yang tak pernah
            bosan saya nikmati. Misalnya saja di Nusa Tenggara Timur. Dari hampir semua sudut yang pernah saya jelajahi, selalu memanjakan
            indera saya dengan senjanya yang memukau. Salah satunya adalah di Pantai Tablolong ini.

            Boleh dibilang, pantai ini memang sedang naik daun. Padahal dulunya orang tak terlalu mengenal pantai yang letaknya lumayan
            jauh dari Kota Kupang ini.',
            'image' => 'Senja-di-Pantai-Tablolong.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=lB_k7ProWhk'
        ]);

        Destination::create([
            'review_id' => 5,
            'todolist_id' => 5,
            'title' => 'Pantai Meko Adonara, Pantai Pasir Timbul Nan Indah yang Diapit 3 Gunung Api',
            // https://lostpacker.com/pantai-meko-adonara-pantai-pasir-timbul/
            'desc' => 'Pantai Meko Adonara, adalah salah satu pantai pasir timbul di Nusa Tenggara Timur yang harus kamu kunjungi suatu saat.
            Selain keindahan dengan air laut bening, seperti judulnya, pantai ini juga diapit oleh 3 gunung api, loh.

            Mari ikut saya melihat keindahannya!',
            'image' => 'Pulau-Mekko.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=05fEoXA130Q'
        ]);

        Destination::create([
            'review_id' => 6,
            'todolist_id' => 6,
            'title' => 'Pantai Lemo-Lemo, Sisi Lain Keindahan Tanjung Bira',
            // https://lostpacker.com/pantai-lemo-lemo/
            'desc' => 'Tanjung bira tidak hanya terkenal dengan pantai pasir putih dan Pulau Liukang Loe. Berjarak beberapa kilometer dari
            pantai ini kita akan menemukan sebuah keheningan yang dibalut dengan keindahan alam yang mempesona. Pantai lemo-lemo namanya.

            Pantai ini belum banyak yang mengenal. Memang jika dibandingkan dengan saudara dekatnya yakni pantai Pasir putih, pantai ini belum
            ada apa-apanya.',
            'image' => 'pantai-lemo-lemo.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=WrQN2a0rZJY'
        ]);

        Destination::create([
            'review_id' => 7,
            'todolist_id' => 7,
            'title' => 'Begini Pesona Pantai Papuma yang Tersohor itu',
            // https://lostpacker.com/pantai-papuma-jember/
            'desc' => 'Debur ombak dan heningnya suasana pagi kala itu di pantai Papuma, yang terletak di sebuah tanjung berjarak sekitar 37
            kilometer dari Kabupaten Jember serasa mengobati penat di tubuh ini karena harus duduk di bis ekonomi dari Surabaya selama hampir 7 jam.

            Tepat pukul 04.30 pagi saya tiba di sebuah penginapan kecil milik perhutani yang setelah saya telusuri ternyata penginapan
            satu-satunya di kawasan ini yang dikelola Perhutani ini.',
            'image' => 'pantai-papuma.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=vhGzp2zN8Dc'
        ]);

        Destination::create([
            'review_id' => 8,
            'todolist_id' => 8,
            'title' => 'Pulau Palambak, Surga Bagi Pemburu Pantai Sepi di Aceh Singkil',
            // https://lostpacker.com/pulau-palambak-pantai-sepi-di-aceh-singkil/
            'desc' => 'Pagi kembali hadir, dan matahari pagi sudah memecah keheningan pagi yang terjadi di sebuah pulau kecil di Aceh Singkil,
            Pulau Palambak namanya.',
            'image' => 'pulau-Palambak.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=k9WX5Pp2OlY'
        ]);

        Destination::create([
            'review_id' => 9,
            'todolist_id' => 9,
            'title' => 'Pantai Maluk, Eksotisme Sumbawa Yang Tidak Bisa Kamu Abaikan',
            // https://lostpacker.com/eksotisme-pantai-maluk/
            'desc' => 'Birunya langit dengan awan berarak dan birunya laut dengan pantai pasir putihnya yang indah seolah menyatu dalam
            bentang cakrawala yang indah. Pemandangan itulah yang saya lihat ketika saya menginjakkan kaki pertama kali di pantai ini,
            namanya Pantai Maluk.',
            'image' => 'Pantai-Maluk.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=1m19JpS5fBQ'
        ]);

        Destination::create([
            'review_id' => 10,
            'todolist_id' => 10,
            'title' => 'Pink Beach, Pantai Wajib Kunjung di Pulau Komodo',
            // https://lostpacker.com/pink-beach-pulau-komodo/
            'desc' => 'Sebagai negara kepulauan, Indonesia kaya sekali dengan objek wisata pantai. Dari Sabang di ujung barat hingga Merauke
            di posisi ujung timur bentangan pantai nya tidak terukur. Pasir putih dan hitam menghiasi sepanjang pantai yang membentang luas.
            Namun ada satu lagi yang menarik dari pantai-pantai di negeri ini, sebuah pantai dengan pasirnya yang berwarna pink (merah muda)
            dengan pesona underwater yang memukau, inilah Pink Beach di Pulau Komodo.',
            'image' => 'Pink-beach.jpg'
            // 'video' => 'https://www.youtube.com/watch?v=HRmzcNRY2o4'
        ]);

        Destination::create([
            'review_id' => 11,
            'todolist_id' => 11,
            'title' => 'Tana Toraja, Keagungan Budaya Yang Tetap Lestari',
            // https://lostpacker.com/tana-toraja-keagungan-budaya-yang-tetap-lestari/
            'desc' => 'Ujung-ujung atap tongkonan menyembul diantara kabut tebal pagi itu di Tana Toraja, seakan menyambut para
            tamu yang mengunjunginya. Sungguh pemandangan luar biasa indah. Tepukan dari teman saya membuyarkan lamunan saya
            tentang Toraja pagi itu.Setelah menyantap sarapan pagi di sebuah hotel termegah di Tana Toraja ini saya pun segera
            bergegas menuju mobil yang akan membawa saya berkeliling Toraja ini. Pak Udin dan Pak Emir sudah menunggu di loby
            hotel, mereka lah yang akan mengantarkan saya berkeliling Tana Toraja ini.',
            'image' => 'tana-toraja.jpg'
            // 'video' => ''
        ]);

        Destination::create([
            'review_id' => 12,
            'todolist_id' => 12,
            'title' => 'Ternate, Kota yang sarat sejarah masa lalu',
            // https://lostpacker.com/exploring-ternate/
            'desc' => 'Jajaran gumpalan awan putih terlihat berarak dengan indahnya di atas puncak gunung Gamalama. Gunung yang menjadi
            kebanggan masyarakat ternate ini seolah tidak henti-hentinya untuk memancarkan pesona keindahannya.

            Setelah beranjrut-anjrutan di atas speed boat dari dermaga Jailolo selama hampir satu jam lamanya, tibalah saya di sebuah dermaga
            Dhufa-Dhufa di kota Ternate. Cuaca siang itu terlihat menyengat sekali, matahari seolah dengan semangat sekali untuk membakar bumi
            dengan sinarnya. Dermaganya sendiri terlihat sederhana, tidak ada kesan mewah ataupun modern sama sekali.',
            'image' => 'ternate.jpg'
            // 'video' => ''
        ]);

        Destination::create([
            'review_id' => 13,
            'todolist_id' => 13,
            'title' => 'Wakatobi, Jangan hanya singgah di Wangi-Wangi',
            // https://lostpacker.com/wakatobi-wangi-wangi/
            'desc' => 'Petang itu terasa begitu sempurna. Beberapa anak kecil sedang asik bermain loncat-loncatan di ujung dermaga.
            Beberapa kapal kayu diam tertambat dipinggir pantai.  Sementara itu semburat merah senja terpantul dengan begitu indah
            di perairan pulau wangi-wangi. RUmah-rumah panggung juga seolah melengkapi keindahan lukisan alam yang terjadi petang
            itu di Wakatobi.',
            'image' => 'wangi-wangi.jpg'
            // 'video' => ''
        ]);

        Destination::create([
            'review_id' => 14,
            'todolist_id' => 14,
            'title' => 'Tanjung Bira, Keindahan di ujung Sulawesi',
            // https://lostpacker.com/tanjung-bira-sulawesi/
            'desc' => 'Pantai Tanjung Bira terletak di kecamatan Bira, kabupaten Bulukumba dan masih masuk dalah wilayah propinsi Sulawesi
            Selatan. Pantai pasir putih dengan air lautnya yang jernih hingga kita bis amelihat ke dasar pasir pantai adalah menu andalan
            yang wajib di datangi bagia siapa saja yang merindukan keindahan pantai.',
            'image' => 'tanjung-bira.jpg'
            // 'video' => ''
        ]);

        Destination::create([
            'review_id' => 15,
            'todolist_id' => 15,
            'title' => 'Belajar Sejarah dari benteng Fort Rotterdam Makassar',
            // https://lostpacker.com/fort-rotterdam/
            'desc' => 'Banteng ini pernah hancur pada masa penjajahan Belanda. Kesultanan Gowa kala itu di pimpin oleh Sultan
            Hasanuddin. Penyerangan kala itu Belanda mencoba merebut jalur perdagangan rempah-rempah dan memperluas sayap kekuasaan
            mereka untuk mempermudah mereka membuka jalur ke Banda dan Maluku yang memang menjadi sentra Rempah. Penyerangan yang
            berlangsung lama itu mengakibatkan sebagian Benteng hancur, dan akibat kekalahan itu juga Raja Gowa dipaksa menandatangani Perjanjian Bongaya pada tangga 18 November 1667.',
            'image' => 'fort-rotterdam-makassar.jpg'
            // 'video' => ''
        ]);
    }
}
