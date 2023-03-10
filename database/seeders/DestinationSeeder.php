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
            tidak jauh dari tempat saya duduk. Karena berada pada sebuah teluk, pantai ini sangat cocok untuk berenang dan beberapa olahraga
            air lainnya. Dulu, saat pertama kali melihat pantai ini adalah pada saat menyaksikan iklan dari salah satu produk rokok negeri ini.
            Dari situ saya langsung kepincut akan keindahannya dan bersumpah dalam diri suatu saat nanti saya harus kesana, dan alhamdulillah
            sudah terwujud dengan beberapa kali mengunjunginya. Untuk mencapai pantai indah ini bisa dengan menyewa mobil ataupun motor dari
            kawasan Pantai Kuta, Lombok. Kalau kesulitan minta saja bantuan dari pegawai hotel untuk mencarikan mobil atau motor yang bisa disewa.
            Soal harga memang sedikit lebih mahal jika saya bandingkan dengan biaya menyewa sebuah motor di kawasan Kuta Bali (saat kunjungan
            tahun 2012). Untuk motor dengan transmisi manual seperti supraX (yang kala itu saya sewa) dibanderol dengan harga 50 ribu rupiah
            seharian. Sementara saya bisa mendapatkan motor sejenis di Bali dengan harga 30 ribu saja (waktu itu). Tapi dengan pemandangan yang
            indah, semuanya akan terbayar. Jadi kalau temen-teman jalan-jalan ke Lombok, jangan lewatkan mengunjungi pantai yang indah dan tenang
            ini ya. Jangan lupa juga mensyen saya di Instagram ya.',
            'image' => 'Pantai-Mawun.jpg',
            'video' => 'https://www.youtube.com/watch?v=BZF_UWlo6mA',
            'location' => 'https://maps.google.com/maps?q=pantai%20mawun&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 2,
            'todolist_id' => 2,
            'title' => 'Akhirnya ke Wakatobi (lagi)!',
            // https://wiranurmansyah.com/terios-7-wonders-akhirnya-ke-wakatobi-lagi
            'desc' => 'Setelah bergeriliya selama sekitar 3000 km dari Manado hingga Kendari, akhirnya kami pun tiba di sudut Sulawesi Tenggara,
            kepulauan Wakatobi. Satu dari tujuh mobil terios diberangkatkan dengan kapal phinisi, 22 jam perjalanan dari Kendari. Sedangkan
            kami, tentu saja naik pesawat yang hanya memakan waktu setengah jam, hehe. Tahun 2012 saya sempat ke Wakatobi, juga mengunjungi pulau
            yang sama, Pulau Tomia. Tomia adalah salah satu gugusan kepulauan Wakatobi (Wangi-wangi, Kaledupa, Tomia, Binongko) yang punya
            keindahan bawah laut terindah negeri ini. Dua tahun lalu, tak ada geliat pariwisata disini. Tidak ada dive center (kecuali Waktobi
            Dive Resort yang punya orang asing, dan harganya selangit), tak ada warung makan, dan apapun yang menunjukan aktifitas pariwisata.
            Namun saat ini, sudah ada dive center punya kawan kami dr. Yudi, seorang dokter yang sudah mengabdikan dirinya di Tomia selama enam
            tahun, yang mendirikan sebuah dive center bernama Tomia Scuba Dive. Saya sangat merekomendasikan tempat ini karena harganya yang
            relatif terjangkau dan servisnya yang sangat memuaskan! Say hello to him from me if you go there! Namun perubahan juga terjadi di
            bukit Tomia. Sebuah bukit bekas dasar laut yang terdapat banyak bekas karang-karang tempat salah satu scene di film ???Mirror never
            lies??? kita sudah tak akan alami lagi. Karena nampaknya, sebagian dari area ini akan dibangun sebuah resort???

            Pariwisata memang punya sisi positif dan negatif. Mari berharap agar pulau Tomia tetap lestari walaupun sudah menjadi tempat wisata
            yang ramai. Pagi itu langit cerah sekali, rasa-rasanya matahari sudah ada tiga belas buah. Saya bersama para tim terios 7 wonders
            naik ke atas puncak tertinggi bukit tomia untuk memotret satu buah mobil terios, dan tentunya foto bersama salah satu viewpoint
            terbaik di Wakatobi ini. Orang bilang, kalau Wakatobi itu ya diving. Saya hanya diving sekali di satu site yang bernama ???Mari Mabuk???.
            Karena saking bagusnya terumbu karang disini, kita akan mabuk dibuatnya. Lebay juga sih namanya haha. Tapi emang keren banget sih!
            Saya gak punya kamera underwater, tapi kakak Prue berbaik hati memberikan fotonya untuk ditampilkan disini, hehe. Selain diving, di
            pulau Tomia kita juga bisa menemukan atraksi wisata lainnya seperti Benteng Patua, sebuah benteng bekas kerajaan buton yang ternyata
            adalah kuburan-kuburan (entah kuburan siapa). Ini adalah salah satu situs sejarah di pulau Tomia ini. Bisa juga bermain ke pantai-pantai
            indah seperti pantai Uun Tete dan pantai Hondue. Tapi yang paling saya suka jika pergi ke sulawesi adalah : mampir ke desa suku bajo :)

            Di Tomia ada suku bajo yang hidup di kampung kecil. Kampung bajo lamanggao namanya, terletak di pulau Tolandono, sekitar 5 menit naik
            ojek speedboat. Lamanggao hanya punya sekitar 98 kepala keluarga, menetap di tepi dermaga pulau Tolandono. Saya senang sekali melihat
            anak-anak bajo yang bermain air lompat kemari. Melihat para lelaki yang pulang melaut, dan menikmati senja di teras-teras ruma panggung
            bersama ibu-ibu yang sedang menanak nasi. Perjalanan terios kali ini memang jauh lebih sulit, menantang, dan penuh drama. Namun, segala
            kesulitan itu terbayar ketika kita melihat semuanya dari dekat keindahan Sulawesi beserta heritage yang ada disana. Sampai ketemu di
            perjalanan terios selanjutnya!',
            'image' => 'wakatobi.jpg',
            'video' => 'https://www.youtube.com/watch?v=PL5HxA01Fz4',
            'location' => 'https://maps.google.com/maps?q=tomia&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 3,
            'todolist_id' => 3,
            'title' => 'Trip ke Karimunjawa, Melihat Pesona Keindahan Pulau yang Tersamar',
            // https://lostpacker.com/trip-ke-karimunjawa/
            'desc' => 'Bus yang membawa kami dari Jakarta untuk Trip ke Karimunjawa pun berangkat saat malam mulai menjelang. Perjalanan
            panjang ini akan kami tempuh kurang lebih 12 jam hingga tiba di Kota Jepara yang menjadi pintu masuk ke Kepulauan Karimun Jawa.
            Tepat pukul 06.00 pagi kami sampai di pelabuhan penumpang Kartini di samping objek wisata Taman Kartini Jepara.
            Namun, tak berapa lama lagi kami akan menghadapi sebuah perjalanan yang cukup panjang lagi menuju Karimun.
            Sebelum kita jauh menjelajah keindahan di gugusan pulau Karimun Jawa ini, saya ingin bercerita kembali tentang asal mula nama
            Karimunjawa. Mendengar nama Karimun Jawa, sontak pikiran saya melayang kembali ke masa kecil yang mana pada saat itu setiap malam
            menjelag tidur kakek sering bercerita tentang kisah keteladanan Wali Songo. Wali Songo adalah para penyebar agama Islam di pulau
            Jawa. Salah satunya adalah Sunan Kudus (Jafar Shodiq). Seingat saya, nama Karimun Jawa sendiri berasal dari kisah keluarga ini yang
            ceritanya sudah beredar dan diyakini oleh masyarakat hingga kini. Karena kebetulan saya menghabiskan waktu kecil tidak jauh di daerah
            Sunan Kudus menyebarkan ajaran Islamnya, jadi kakek tahu benar cerita ini. Pada masa itu hampir seluruh wilayah Jawa masih menganut
            ajaran Hindu dan Budha. Nah, Sunan Kudus ini memiliki cara yang diangapnya jitu untuk meraih hati masyarakat Jawa untuk memeluk Islam,
            yakni melalui metode dakwah dengan Gamelan (alat musik tradisional jawa) dan Gending (lagu-lagu jawa). Cara tersebut ternyata jitu,
            banyak gending-gending yang di ciptakan olah Jafar Sodiq di terima masyarakat, dan di setiap gending yang beliau ciptakan kemudian
            disisipkan ajaran Islam, hingga Islam berkembang di daerah kudus dan sekitarnya. Namun metode seperti ini ditentang sendiri oleh putra
            Sunan Kudus yaitu Amir Khasan, dan disaat sang ayah sedang menyebarkan ajaran Islam di daerah yang memakan waktu cukup lama, padepokan
            di titipkan ke anaknya. Di sinilah Amir Khasan menerapkan ajaran yang secara langsung mengenai Islam, tidak melalui metode gamelan dan
            gending Jawa seperti sang ayah, kerap terjadi benturan disana-sini dengan masyarakat dan bahkan dengan murid-muridnya sendiri di
            padepokan. Setelah sekian lama pulanglah sang Sunan Kudus dari luar daerah, setelah dia mengetahui bahwa sepeninggal dirinya sang
            Putra menggunakan metode penyebaran Islam yang tidak sesuai dengan ajarannya, sang ayah pun murka, di usirnya sang putra dan tidak
            boleh menginjakkan kaki lagi di Tanah Jawa, dengan maksud agar sang putra bisa meneyebarkan ajaran islam di daerah yang belum mengenal
            Islam. Keesokan harinya rakit yang akan membawa Amir Khasan sudah siap dengan beberapa bekal dari sang ibu, yakni pepes ikan lele
            kesukaan nya, seikat padi, mustaka (Puncak bangunan) Masjid dari bahan tanah liat, serta tongkat kesayangan ayahnya. Sang ibu dengan
            derai air mata mengantarkan sang anak yang sudah menyusuri sungai dengan rakitnya, berhari-hari sang ibu menyusuri sungai hingga pada
            suatu hari tibalah sang rakit di muara sungai dan rakitpun terbawa arus ke tengah laut, sang ibu dengan bersusah payah menaiki bukit
            untuk melihat rakit anaknya, hingga terlihatlah rakit di kejauhan dan terlihat pula dengan samar-samar daratan dengan gunung, sang
            Ibu pun memerintahkan muridnya untuk melaporkan kepada Sunan Kudus bahwa sang putra menuju daratan bergunung itu, namun sang murid
            dalam memberikan laporan salah ucap bahwa putra Kanjeng Sunan berada jauh di tengah laut menuju daratan atau gunung yang tampak
            kremun-kremun (samar-samar), dari situlah sang Sunan mendoakan putranya agar sampai ???Karimun jawa??? dengan selamat, dan beredarlah
            berita bahwa Amir khasan sedang berdakwah ke Karimun Jawa. Dan mulai saat itulah daratan itu dinamai Karimun Jawa.',
            'image' => 'Sunset-di-Karimun-Jawa.jpg',
            'video' => 'https://www.youtube.com/watch?v=HZVuxztLDwI',
            'location' => 'https://maps.google.com/maps?q=Karimunjawa&t=&z=13&ie=UTF8&iwloc=&output=embed'
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
            jauh dari Kota Kupang ini. Setidaknya, waktu itu saya butuh waktu sekitar satu jam lebih mengendarai motor untuk sampai ke lokasi ini.
            Jangan samakan satu jam Kupang dan satu jam Jakarta ya. Dengan jalanan yang relatif sepi, waktu tempuh satu jam itu terbilang cukup
            jauh. Saya dan teman-teman berangkat dari Kupang sekitar pukul 4 sore dengan sebuah motor pinjaman. Saat itu, Saya dan Kak Tika hanya
            mengandalkan Google Map saja menyusuri jalanan yang belum mulus itu. Di sepanjang perjalanan, tak sekali dua kali kami menjumpai
            pepohonan yang sudah gundul. Saat itu memang sedang musim kemarau, namun kemarau di Nusa Tenggara Timur itu rasanya panjang sekali.
            Jalanan yang saya lewati juga cenderung sepi. Beberapa sumur warga yang letaknya di pinggir jalan terlihat ramai oleh aktifitas mandi
            petang warga. Waktu yang kami butuhkan ternyata lebih lama dari perkiraan yang tertera di aplikasi Google Map saya. Tak lain karena
            motor yang kami pinjam kala itu tak bisa melaju kencang walau jalanan kosong. Walaupun sedikit terlambat, tapi akhirnya sampai juga di
            spot yang paling asik untuk menikmati senja di Kupang ini. Setibanya di lokasi, bentuk matahari bulat sekali terlihat di ufuk barat.
            Langit juga terlihat mulai merah membara. Dari kejauhan saya melihat siluet Pulau Semau yang indah namun penuh misteri. Mungkin saking
            misterinya, seorang sahabat saya (bukan berasal dari Pulau Semau) rada enggan ketika saya ingin mengajaknya ke sana. Entahlah apa
            alasannya selalu mengelak. Ombak-ombak kecil menghampiri mata kaki saya yang memang sengaja saya biarkan basah berada di bibir pantai.
            Saya merasakan suasana yang begitu damai sekali saat momen-momen seperti ini. Tak banyak pula ???sampah visual??? yang menggangu saya di
            lokasi ini. Sehingga saya leluasa mengambil potret senja. Hanya ada beberapa warga lokal yang rumahnya tak jauh dari tempat saya
            berdiri, terlihat melintas di depan saya sambil melempar senyum.',
            'image' => 'Senja-di-Pantai-Tablolong.jpg',
            'video' => 'https://www.youtube.com/watch?v=lB_k7ProWhk',
            'location' => 'https://maps.google.com/maps?q=Pantai%20Tablolong%20Kupang&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 5,
            'todolist_id' => 5,
            'title' => 'Pantai Meko Adonara, Pantai Pasir Timbul Nan Indah yang Diapit 3 Gunung Api',
            // https://lostpacker.com/pantai-meko-adonara-pantai-pasir-timbul/
            'desc' => 'Pantai Meko Adonara, adalah salah satu pantai pasir timbul di Nusa Tenggara Timur yang harus kamu kunjungi suatu saat.
            Selain keindahan dengan air laut bening, seperti judulnya, pantai ini juga diapit oleh 3 gunung api, loh.
            Mari ikut saya melihat keindahannya!
            Cuaca hari itu terasa begitu panas menyengat waktu itu. Suasana di dermaga kecil pun terlihat sepi. Di hadapan saya terbentang
            hamparan laut yang membiru, kemudian di belakang saya berdiri dengan kokoh perbukitan yang terlihat tandus. Sementara di jajaran
            rumah warga yang tak begitu banyak, hanya ada satu bangunan yang terlihat menonjol Mesjid. Itulah yang saya lihat ketika pada
            sebuah siang di sebuah kampung kecil yang letaknya ada di pesisir Pulau Adonara, di Flores Timur, Nusa Tenggara Timur. Kampung Meko
            namanya. Dari nama kampung inilah, sebuah pantai pasir timbul berukuran kecil terletak tak jauh dari situ, juga dinamai serupa,
            yaitu Pantai Meko. Mayoritas masyarakat Meko adalah Suku Bajo. Namun, mereka sudah kawin campur dengan beberapa daerah pesisir di
            Indonesia. Salah satunya, seorang bapak yang kapalnya kami sewa, nenek moyangnya  berasal dari Kepulauan Riau. Buat saya, tempat ini
            begitu menarik karena terletak di antara tiga gunung berapi, yaitu Gunung Api Ile Ape yang ada di Lembata, Gunung Api Ile Boleng yang
            terletak di Adonara, dan satu lagi adalah Gunung Api Batutara, yang hingga saat ini masih sering menyemburkan lava-nya ke laut. Berada
            di antara ketiga gunung api itu rasa-rasanya pantai pasir timbul atau bisa kita sebut sebagai pulau mungil itu mengeluarkan aura magis
            dan romantisme yang luar biasa. Perjalanan menuju Kampung Meko ini ada dua jalur. Waktu datang pertama dulu saya memakai jalur
            Waiwerang. Jadi rutenya adalah, naik kapal motor dari pelabuhan Pelni Larantuka menuju ke Dermaga Waiwerang yang ada di Adonara.
            Dari sana kita bisa melanjutkan perjalanan ke Kampung Waiwuring. Jangan salah sebut ya karena nama-nama di daerah ini hampir mirip.
            Nah, dari Kampung Waiwuring ini kita bisa menyewa perahu nelayan. Harganya sekitar 300-400 ribu rupiah, itu sudah pulang pergi ya,
            jadi bapak nelayan-nya nungguin kita hingga selesai. Tapi, pastikan bapak nelayannya gak ketiduran di perahu seperti saya waktu itu.
            Kami harus menunggu hingga jam 9 malam ketika air pasang baru bisa beranjak dari pulau mungil itu karena perahu kandas. Jarak tempuh
            dari Waiwerang ke Waiwuring sekitar 1 jam, sementara dari Waiwuring ke pantai Meko naik perahu juga sekitar 1 jam. Jalur kedua,
            sewaktu kunjungan kedua, jalur yang saya tempuh adalah dari pelabuhan Pelni Larantuka saya naik kapal motor menuju dermaga Tobilota
            di Pulau Adonara. Jaraknya tak begitu jauh, hanya butuh waktu sekitar 10 menit saja. Dari sini kemudian menyusuri jalanan Adonara
            yang sudah bagus. Hanya beberapa bagian saja yang masih rusak, seperti waktu mau masuk ke Kampung Meko. Butuh waktu sekitar 1-2 jam
            perjalanan dari Tobilota menuju ke kampung Meko. Sementara dari Kampung Meko ke pulau Meko cuma butuh waktu sekitar 15 menit saja
            naik perahunya. Oh ya, harga sewa perahunya juga murah kok. Per orang di bandrol sekitar 15 ??? 20 ribu saja. Itu kalau jumlah kita
            datang banyak, ya. Waktu itu kami datang berempat, sewa kapalnya sekitar 100ribu saja. Sangat terjangkau dibanding dengan harga dari
            kampung Waiwuring saat kunjungan pertama saya.',
            'image' => 'Pulau-Mekko.jpg',
            'video' => 'https://www.youtube.com/watch?v=05fEoXA130Q',
            'location' => 'https://maps.google.com/maps?q=pantai%20meko&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 6,
            'todolist_id' => 6,
            'title' => 'Pantai Lemo-Lemo, Sisi Lain Keindahan Tanjung Bira',
            // https://lostpacker.com/pantai-lemo-lemo/
            'desc' => 'Tanjung bira tidak hanya terkenal dengan pantai pasir putih dan Pulau Liukang Loe. Berjarak beberapa kilometer dari
            pantai ini kita akan menemukan sebuah keheningan yang dibalut dengan keindahan alam yang mempesona. Pantai lemo-lemo namanya.

            Pantai ini belum banyak yang mengenal. Memang jika dibandingkan dengan saudara dekatnya yakni pantai Pasir putih, pantai ini belum
            ada apa-apanya. Sangat minim sekali fasilitas, akses ke pantai ini juga terbilang agak susah. Jadi kita ikuti jalur ke Bulukumba dulu,
            nanti coba tanya penduduk sekitar untuk memastikan di kilometer berapa belok masuk jalur kampung untuk sampai ke pantai ini. Kalau
            saya tidak salah ingat di km 17. Memasuki pantai ini kita akan disambut oleh beberapa kapal phinisi yang belum jadi. Memang kalau di
            tilik dari besarnya, tidak sebesar phinisi-phinisi yang dibuat di Panrang Luhu dekat pelabuhan Tanjung bira kemarin. Namun uniknya di
            sini kita bisa menikmati siluet kapal-kapal kayu yang sedang dibuat ini dalam balutan cahaya sunset, hohoho??? sungguh indah sekali
            kawan. Untuk sampai di pantai ini kita akan melewati jalan desa dan rimbunnya hutan. Agak kurang asik juga jika sampai kemalaman  di
            pantai seperti yang saya alami waktu itu. Saking asiknya memotret sunset, saya lupa bahwa lampu motor yang saya sewa ternyata hidup
            tapi seperti gak hidup, nah lo bingung kan hahaha??? Jadi tetap hidup tapi redup. Alhasil ketika melewati hutan, agak-agak gimana
            gituuu hehe??? Walau begitu, ada beberapa rumah penduduk juga yang saya jumpai di pantai ini. Seandainya pantai ini di kelola seperti
            pantai-pantai lainnya di Tanjung Bira ini, tidak menutup kemungkinan semakin banyak wisata alternatif di kawasan ini. Dengan begitu,
            masyarakat setempat juga bisa menikmati keuntungan dari pariwisata. Cerita perjalanan mengunjungi Pantai Lemo lemo di Tanjung Bira,
            Sulawesi Selatan ini saya lakukan medio tahun 2013 yang lalu. Bila terdapat beberapa informasi terkait harga mungkin sudah tidak
            relevan lagi saat ini. Thanks',
            'image' => 'pantai-lemo-lemo.jpg',
            'video' => 'https://www.youtube.com/watch?v=WrQN2a0rZJY',
            'location' => 'https://maps.google.com/maps?q=pantai%20lemo%20lemo&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 7,
            'todolist_id' => 7,
            'title' => 'Begini Pesona Pantai Papuma yang Tersohor itu',
            // https://lostpacker.com/pantai-papuma-jember/
            'desc' => 'Debur ombak dan heningnya suasana pagi kala itu di pantai Papuma, yang terletak di sebuah tanjung berjarak sekitar 37
            kilometer dari Kabupaten Jember serasa mengobati penat di tubuh ini karena harus duduk di bis ekonomi dari Surabaya selama hampir
            7 jam.

            Tepat pukul 04.30 pagi saya tiba di sebuah penginapan kecil milik perhutani yang setelah saya telusuri ternyata penginapan
            satu-satunya di kawasan ini yang dikelola Perhutani ini. Belum puas mendaratkan tubuh ini di tempat tidur, semburat cahaya merah
            sudah mulai menyapa di ufuk timur, seakan menyapa setiap insan untuk menyambutnya dengan semangat baru pada hari itu. Kamera dan
            teman-temannya memang sudah saya siapkan di sebuah tas khusus sehingga tidak perlu menunggu lama, kaki ini sudah menapak di pantai
            pasir putih tersebut. Siluet perahu-perahu nelayan di Tanjung Papuma ini rasanya semakin indah dengan latar matahari terbit yang
            menakjubkan. Semburat merah keemasan pantulan cahaya matahari yang baru keluar dari peraduannya di permukaan air laut serta awan
            berarak indah yang menyatu dalam bentang cakrawala yang indah merupakan pemandangan luar biasa pagi hari itu.

            Setelah puas menyusuri pantai di Tanjung Papuma pagi itu, perhatian saya tertuju kepada rombongan nelayan yang mulai bergotong royong
            menurunkan perahu ke laut. Peristiwa semacam ini pernah saya lihat di daerah Amed Bali, hanya saja perahu yang di Tanjung papuma ini
            lebih besar dari yang saya jumpai di Amed.

            Senyuman ramah dari para nelayan tersebut membuatku merasa nyaman untuk mendekati mereka sembari bersendau gurau. Ternyata perahu
            bercadik ini di awaki oleh 2-5 orang nelayan yang hampir 90 persen adalah berasal dari Madura. Perahu kecil itu mulai membelah
            ganasnya ombak Tanjung Papuma menuju ke tempat yang sekiranya banyak terdapat habitat ikan tangkapan bagi nelayan tersebut. Semakin
            lama semakin jauh hingga akhirnya perahu itu menghilang dalam merah emasnya permukaan laut saat itu.

            Nama Papuma sendiri adalah singkatan dari Pasir Putih Malikan yang merupakan nama 2 pantai yang ada di tanjung ini yaitu pantai pasir
            putih dan pantai Malikan. Sebenarnya ada satu lagi pantai di dekat tanjung ini yakni pantai Watu Ulo, namun kawasan Papuma dan Watu
            Ulo di kelola oleh dua pihak yang berbeda, yaitu perhutani yang mengelola kawasan Tanjung Papuma sedangkan Kawasan watu Ulo di kelola
            oleh pihak pemda.

            Rasanya baru sebentar merebahkan badan di tempat tidur, salah satu teman saya sudah memberitahu bahwa ikan bakar sudah di pesan untuk
            makan siang ini di pinggir pantai pasir putih. Rasanya sudah tidak sabar menikmati kerapu dan kakap Bakar di bawah pohon yang rindang
            di pinggir pantai pasir putih yang indah, setelah pemilik warung menghidangkan semua menu makan siang. Siang itu, kami agak sedikit
            kaget dibuat karena porsi ikannya gede dan banyak sekali rasanya tidak akan habis di perut kami bertiga. Tapi, ya akhirnya habis
            juga??? ???slow but sure??? Begitulah semboyan kami saat itu.',
            'image' => 'pantai-papuma.jpg',
            'video' => 'https://www.youtube.com/watch?v=vhGzp2zN8Dc',
            'location' => 'https://maps.google.com/maps?q=pantai%20papuma&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 8,
            'todolist_id' => 8,
            'title' => 'Pulau Palambak, Surga Bagi Pemburu Pantai Sepi di Aceh Singkil',
            // https://lostpacker.com/pulau-palambak-pantai-sepi-di-aceh-singkil/
            'desc' => 'Pagi kembali hadir, dan matahari pagi sudah memecah keheningan pagi yang terjadi di sebuah pulau kecil di Aceh Singkil,
            Pulau Palambak namanya. Seorang bapak-bapak yang saya taksir usianya sudah sangat renta beringsut mendekati saya. Sejenak saya
            memperhatikan dari ujung kaki hingga kepalanya. Sedikit curiga menghantui benak saya, namun begitu saya melemparkan senyum beliau
            membalasnya dengan senyuman yang begitu menentramkan. ???Selamat pagi pak, saya Tekno dari Jakarta???, sapa saya sambil mengulurkan
            tangan untuk berjabat kepada beliau ketika kedua tubuh kami sudah berdekatan. Sambil berjabat tangan keluar sebuah kalimat yang
            hingga saat ini jika teringat saya selalu tersenyum. ???Itu kawanmu perempuan, ya???? kata seorang bapak yang masih mengenakan sarung
            sambil menunjuk Citra yang mengenakan jaket merah di kejauhan. ???Bukan pak itu kawan saya laki-laki???, jawab saya sambil memanggil
            Citra untuk mendekat. Kami bertiga terlibat dalam sebuah obrolan yang hangat. Bapak ini adalah penjaga Pulau Palambak ini. Beliau
            tinggal di sebuah pondokan yang di bangun dari bahan-bahan seadanya. Bangunan itu terletak di pinggir sebuah rawa yang berair coklat.
            Sehari-hari beliau tinggal di pulau ini berteman sepi dan dinginnya angin laut. Sungguh sebuah pengorbanan yang luar biasa. Namun,
            bagi saya beliau sungguh ???beruntung???, tidak pernah mengalami kemacetan, kebisingan kota bahkan polusi yang membuat umur kita semakin
            cepat berkurang. ???Apak ke pondok dulu, yo???, pamit beliau dengan bahasa minang yang fasih. Kami pun kembali berjabat tangan dan
            membiarkan sosok renta dengan kain sarung lusuhnya itu menghilang ke dalam sebuah pondok sederhana di pinggir telaga. Asap terlihat
            mengepul keluar dari atap pondoknya yang terbuat dari daun ilalang. Saya kembali meneruskan menikmati indahnya pagi di Pulau Palambak.
            Sementara citra berpamitan untuk berkeliling pulau. Pulau ini dulunya ramai sekali. Menurut kabar banyak sekali turis mancanegara
            singgah dan tinggal di pulau ini. Namun karena konflik Aceh dan bencana Tsunami mengakibatkan kunjungan wisatawan berkurang drastis.
            Akibatnya beberapa penginapan/cottage yang di bangun oleh BRR di ujung pulau terlihat lapuk tak terawat. Hanya Lyla Bungalow ini saja
            yang masih bertahan. Itu pun kabarnya akan segera di jual oleh sang pemilik Lyla Bungalow, Bang Erwin. Pagi sudah beranjak, matahari
            mulai meninggi. Pucuk-pucuk kelapa terlihat seperti sedang bersendau gurau tertiup angin. Langit juga terlihat sedang bercengkrama
            dengan awan. Sementara air laut tidak mau kalah, riak-riak ombak kecil dikirimkan untuk mencumbu bibir pantai yang bersih. Sebuah
            pemandangan pagi yang indah dan menyatu dalam sebuah bentang cakrawala yang indah. Saya kembali ke tenda, menyiapkan menu sarapan.
            Pagi ini adalah pagi terakhir kami di perairan pulau banyak. Sementara perbekalan camping masih melimpah. Masih ada beberapa bungkus
            mie instan dan dua kaleng kecil ikan sarden. Saatnya berpesta. Semua makanan sisa kami masak. Setelah semua matang kami agak kuwalahan
            menghabiskan semua makanan itu. Citra terlihat begitu lahap menyantap menu pagi seadanya itu. Secangkir milo panas melengkapi menu
            sarapan di pagi yang indah itu. Setelah sarapan saya kembali mengitari pulau. Awan-awan putih terlihat berarak. Laut terlihat begitu
            berkilau memantulkan cahaya matahari. Ombak-ombak kecil seolah berlari menuju bibir pantai melewati pantai dangkal yang berair jernih.
            Pohon-pohon kelapa juga menjulang tinggi diangkasa seolah sedang menikmati hangatnya matahari pagi.',
            'image' => 'pulau-Palambak.jpg',
            'video' => 'https://www.youtube.com/watch?v=k9WX5Pp2OlY',
            'location' => 'https://maps.google.com/maps?q=pulau%20palambak&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 9,
            'todolist_id' => 9,
            'title' => 'Pantai Maluk, Eksotisme Sumbawa Yang Tidak Bisa Kamu Abaikan',
            // https://lostpacker.com/eksotisme-pantai-maluk/
            'desc' => 'Birunya langit dengan awan berarak dan birunya laut dengan pantai pasir putihnya yang indah seolah menyatu dalam
            bentang cakrawala yang indah. Pemandangan itulah yang saya lihat ketika saya menginjakkan kaki pertama kali di pantai ini,
            namanya Pantai Maluk.
            Disebut demikian, karena letak pantai ini berada di kawasan kecamatan Maluk. Untuk mencapainya dari ibukota NTB mataram tidaklah
            susah, ada kendaraan umum yang malayani rute Mataram-Maluk dengan waktu tempuh sekitar 6jam perjalanan. Di antara perjalanan itu
            harus menyeberang dengan kapal Fery selama 1,5 ??? 2 jam, yaitu di pelabuhan Kayangan (Lombok) menuju pelabuhan Pototano (Sumbawa).
            Sedangkan dari pelabuhan Pototano ke Maluk sendiri memakan waktu hamper 2 jam perjalanan dengan jarak tempuh sekitar 60km.

            Jangan khawatir, walau perjalanan yang ditempuh cukup panjang dan melelahkan, namun pemandangan yang dilewati sungguh indah
            sehingga tanpa terasa kita sudah sampai di kota kecamatan Maluk. Pantai yang membentang luas ini sejatinya adalah sebuah Teluk,
            sehingga ombak juga tidak telalu besar dan kondisi seperti ini cocok sekali untuk berenang di lautnya yang jernih ataupun bermain
            kano yang banyak disewakan di pantai ini. Duduk santai di pinggir pantai sambil menikmati keindahan pantai dan menu masakan laut
            yang tersedia dipantai ini juga memberikan sensasi tersendiri bagi kita yang menikmatinya. Sembari melihat anak-anak penduduk sekitar
            sedang asik bermain di pantai yang bersih dan indah. Pantai Maluk sendiri sebenarnya sudah sangat terkenal di forum-forum selancar
            dunia karena ombaknya yang khas, yaitu Super Suck. Julukan Super Suck ini dikerenakan ombak yang menuju daratan terepecah oleh sebuah
            tanjung, yang oleh masyarakat setempat terkenal dengan nama tanjung Ahmad, terletak di ujung teluk Maluk yang indah ini. Pecahan ombak
            yang menggulung hingga mencapai ketinggian 2 meter inilah seolah menantang nyali para peselancar dunia untuk menaklukannya. Fasilitas
            di teluk Maluk ini menurut sudah tertata rapi, saya bisa menjumpai beberapa warung makan dengan menu utamanya adalah olahan hasil
            laut. Toilet pun sudah bersih namun jumlahnya masih minim sekali. Mushola, bangku-bangku buat duduk di pinggir pantai, penyewaan
            kano dan papan surfing, namun saya tidak melihat adanya pancuran bilas bila kita habis bermain di laut.

            Pembangunan fasilitas-fasilitas umum yang ada di pantai ini tidak terlepas dari campur tangan PT. Newmont Nusa Tenggara (NNT).
            Perusahaan inilah yang mulai memberdayakan masyarakat sekitar pantai untuk lebih peduli lagi terhadap pantai Maluk ini yang apabila
            di kelola dan dijaga dengan baik, bukan tidak mungkin akan mengalahkan ketenaran pantai Kuta maupun pantai Sanur di Bali, suatu saat
            nanti.',
            'image' => 'Pantai-Maluk.jpg',
            'video' => 'https://www.youtube.com/watch?v=1m19JpS5fBQ',
            'location' => 'https://maps.google.com/maps?q=pantai%20maluk&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 10,
            'todolist_id' => 10,
            'title' => 'Pink Beach, Pantai Wajib Kunjung di Pulau Komodo',
            // https://lostpacker.com/pink-beach-pulau-komodo/
            'desc' => 'Sebagai negara kepulauan, Indonesia kaya sekali dengan objek wisata pantai. Dari Sabang di ujung barat hingga Merauke
            di posisi ujung timur bentangan pantai nya tidak terukur. Pasir putih dan hitam menghiasi sepanjang pantai yang membentang luas.
            Namun ada satu lagi yang menarik dari pantai-pantai di negeri ini, sebuah pantai dengan pasirnya yang berwarna pink (merah muda)
            dengan pesona underwater yang memukau, inilah Pink Beach di Pulau Komodo. Karena Pulau Komodo masuk dalam kawasan Taman nasional,
            maka untuk memasukinya juga harus mendapatkan surat ijin terlebih dahulu. Mengurus perijinan bisa dilakukan di Loh Liang. Tidak
            susah kok mengurus perijinannya, tinggal isi formulir data pribadi terus ditanda-tangani dan ijin memasuki kawasan taman nasional
            sudah ditangan. Pantai Pink bisa di tempuh dengan jalur darat dan laut. Jika menggunakan kapal nelayan kita membutuhkan waktu sekitar
            30 menit dari Loh Liang. Namun jika ingin menguji nyali bisa juga melalui jalur darat, namun karena harus melewati tebing-tebing
            terjal selama perjalanan, tak heran jika waktu tempuh yang dibutuhkan juga lebih lama, yakni 4,5 jam perjalanan. Oh ya, pastikan kalau
            mau menuju pantai menggunakan kapal nelayan yang kecil, soalnya kalau kapal besar akan susah merapat ke pantai, karena memang sudah
            di sediakan tambatan khusus buat kapal-kapal besar yang hendak mengunjungi pantai pink.

            Hal ini di lakukan supaya karang-karang yang beraneka ragam di perairan pantai pink tidak rusak terkena jangkar kapal yang di tambatkan.
            Warna pink dari pasir pantainya sendiri berasal dari sebuah proses alami. Serpihan karang merah, cangkang kerang, kalsium karbonat
            invertebrate laut kecil, porifera atau spons laut yang bercampur dan membentuk komposisi warna unik yang kalau di lihat warna pink
            menonjol di sepanjang pantai ini. Ada banyak sekali aktifitas yang bisa di lakukan di pantai indah ini. Mulai dari duduk manis
            memandangi indahnya pantai dari salah satu ujung bukitnya, berenang dan snorkeling maupun diving. terumbu karang beraneka ragam jenis
            dan warna menghiasi perairan pantai. Semua terjaga kelestariannya. Memang pantai ini masih sepi dari pengunjung sehingga kelestarian
            koral dan habitat lautnya masih terjaga.',
            'image' => 'Pink-beach.jpg',
            'video' => 'https://www.youtube.com/watch?v=HRmzcNRY2o4',
            'location' => 'https://maps.google.com/maps?q=pink%20beach%20pulau%20komodo&t=&z=13&ie=UTF8&iwloc=&output=embed'
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
            hotel, mereka lah yang akan mengantarkan saya berkeliling Tana Toraja ini. Langit biru menyambut kami pagi itu. Sungguh
            cuaca yang sangat bersahabat sekali. Target utama perjalanan ini adalah upacara Rambu Solo, yaitu upacara pemakaman
            masyarakat Toraja. Biasanya dengan prosesi penyembelihan kerbau, tapi uniknya adalah kerbau-kerbau tyersebut tidak
            di sembelih seperti layaknya tapi di tebas lehernya. Di toraja ini masyarakatnya mempunyai adat yang unik, yang mana
            mayat tidak langsung di kuburkan tapi di simpan dulu di dalam Tongkonan (rumah adat Toraja) sampai keluarganya
            mempunyai biaya untuk menyelenggarakan prosesi Rambu Tuka tersebut, dan itu memakan biaya yang tidak sedikit, jadi
            terkadang di simpulkan bahwa Orang toraja itu bekerja keras untuk mati.

            ???Itu ada rombongan berbaju hitam-hitam didepan??? kata Pak emir yang membuyarkan kembali lamunan saya akan Tana Toraja
            yang indah ini. Menurut pak Emir apabila kita menemukan rombongan berbaju serba hitam berarti tidak jauh dari situ
            sedang di gelar prosesi Rambu Solo, dan setelah bertanya ke rombongan tersebut ternyata benar sedang di gelar prosesi
            pemakaman di sebuah halaman tongkonan, setelah melihat onggokan-onggokan daging saya menghela nafas panjang???benar
            ternyata disitu teronggok tujuh kepala kerbau..sungguh prosesi yang mahal???dan itu akan lebih mahal jika yang meninggal
            adalah kalangan bangsawan. Setelah puas dengan menikmati prosesi adat rambu solo perjalanan dilanjutkan menyusuri
            jalan-jalan kecil beraspal, rupanya mobil mengarah ke Suaya, baru saja memasuki komplek pemakaman Suaya, dari arah
            belakang saya terdengar suara teriak-teriakan ramai sekali, pak Emir langsung memberi isyarat kepada saya bahwa itu
            adalah prosesi pengusungan Mayat, sayapun bergegas berlari menghampiri kerumunan tersbut, rupanya menurut keterangan
            pak Emir jika mereka sedang mengusung mayat harus bernyanyi keras-keras dimaksudkan agar roh jahat tidak memasuki raga
            si mayat, dan lagunya menggelitik alam sadar saya, yaitu lagu ???Tak gendong??? nya Alm Mbah Surip.

            Setelah mereka menjauh untuk menuju pekuburan batu saya pun melanjutkan menikmati komplek pemakaman Suaya tersebut.
            Suaya adalah komplek kubur batu kerjaan muslim di Toraja, mereka dikenal dengan bangsawan dari Sangalla, disini bisa
            ditemukan Liang Batu yaitu kuburan yang di pahat di dinding tebing di ketinggian, namun sayang kondisinya sedikit tidak
            terawat, Perjalanan dilanjutkan mengunjungi komplek pekuburan bayi di sebuah Phon, jadi bayi-bayi uang meninggal mayatnya
            di masukkan kedalam pohon yang sudah di lubangi terlebih dahulu, dan lubang itu akan menutup sendiri seiring tumbuhnya
            pohon tersebut, dari dalam mobil terdengan sayup-sayup suara musik dari bambu, ternyata sedang ada pertujukan kecil dari
            anak-anak Toraja kepada para wisatawan asing yang berkunjung.',
            'image' => 'tana-toraja.jpg',
            'video' => 'https://www.youtube.com/watch?v=6x46n9viTts',
            'location' => 'https://maps.google.com/maps?q=tana%20toraja&t=&z=13&ie=UTF8&iwloc=&output=embed'
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
            dengan sinarnya. Dermaganya sendiri terlihat sederhana, tidak ada kesan mewah ataupun modern sama sekali. Terlihat juga jajaran
            boat yang sedang menunggu antrian untuk menyeberangkan penumpangnya ke teluk Jailolo. Uniknya justru terlihat disini, masing-masing
            daerah dengan tujuan pulau Halmahera di berangkatkan dari pelabuhan yang berbeda di kota Ternate. Jika hendak mencapai daerah
            Sofifi maka kita akan berangkat dari Pelabuhan KotaBaru, berbeda jika kita hendak menjelejah Jailolo pelabuhan yang hendak kita
            tuju untuk menyeberang adalah pelabuhan Dhufa-dhufa. Lain lagi ketika kita hendak menyeberang ke pulau Tidore dan Maitara,
            pelabuhan yang disinggahi untuk kemudian menyeberang adalah Pelabuhan Bastiong. So jangan salah pilih pelabuhan jika hendak
            melanjutkan perjalanan dari kota Rempah ini.

            Amboy indahnyaaaa. Begitulah benak saya berfikir ketika berada di sebuah benteng yang terletak di atas bukit kelurahan Toloko.
            Letaknya yang diatas ketinggian memudahkan siapapun yang berada diatas Benteng untuk memantau aktifitas musuh. Dari atas benteng
            ini sendiri mata kita dimanjakan oleh panorama laut yang indah dan keindahan gunung Gamalama yang sudah tidak terbantahkan lagi.
            Ketika memasuki lokasi benteng nya sendiri hanya terlihat seperti sebuah taman kecil, namun ketika  sudah melewati lorong-lorong
            di dalam benteng, ternyata banyak sekali lorong-lorong yang mengarah ke ruangan bawah tanah plus anak tangga yang tidak dibatasi
            oleh pembatas. Kesan angker segera saya rasakan begitu berada di dalamnya. Sejatinya benteng yang di bangun oleh  Governor Jendral
            Francisco Serrao dari Portugis pada tahun 1512 ini di peruntukkan sebagai tempat peristirahatan putri-ptri Portugis dan tempat
            penympanan logistic, namun keberadaannya kini layak untuk dijadikan sebuah destinasi wisata jika kita berkunjung ke Kota ternate.

            Puas menikmati indahnya benteng Tolukko kok perut rasanya sudah protes untuk diajak melanjutkan peralanan ini. Dari keterangan
            salah seorang sahabat yang bermukim disana saya mendapatkan keterangan untuk mengunjungi sebuah pasar Gamalama jika hendak
            merasakan kulineran ala Ternate yang sesungguhnya. Saya hanya bisa membayangkan makan ditengah pasar dengan keramaian yang luar
            biasa dan bau-bau an yang menghilangkan selera makan. Namun keadaan berubah 360 derajat ketika kaki ini melangkah memasuki sebuah
            rumah makan sederhana namun lengkap di area pasar ini. ???rumah Makan Popeda Gamalama??? begitlah  tulisan yang saya baca di atas
            pintu rumah makan ini.  Cuma ada 3 meja di ruangan sempit itu yang membentuk huruf U. sebuah keluarga besar terlihat sedang asik
            menikmati  nikmatnya menu-menu yang tersaji memenuhi meja tersebut. Mereka terlihat berpakaian rapi sekali bahkan salah satunya
            masih mengenakan Toga. Ada apakah ini? Ternyata disana mempunyai sebuah tradisi untuk merayakan anggota keluarga yang lulus dari
            bangku kuliah dengan makan dan berdoa bersama, selain itu biasanya juga di gelar acara meriah sekali pada malam harinya di
            kediaman masing-masinng warga yang lulus kuliah tersebut. Baronggeng Namanya, sebuah acara yang biasanya di manfaatkan para
            muda-mudi untuk berekspresi dengam menari.

            Menu yang tersaji dimeja juga beragam sekali. Terlihat sebaskom popeda (masyarakat Papua dan Ambon sering menyebutnya Papeda).
            Selain itu juga terlihat sayur lilin, sayur atau gulai yang tadinya membuat saya sumringah karena saya pikir itu adalah gulai
            telur ikan, karena bentuknya mirip sekali dengan telur ikan namun ternyata bukan. Terlihat juga Kuah soru yaitu kuah yang
            biasanya dipergunakan untuk makan popeda, dimasak bebarengan dengan ikan asar (ikan asap), rasanya sendiri asam pedas  dengan
            aroma ikan asar yang sangat kuat.',
            'image' => 'ternate.jpg',
            'video' => 'https://www.youtube.com/watch?v=hgbXUwHNsFc',
            'location' => 'https://maps.google.com/maps?q=Ternate&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 13,
            'todolist_id' => 13,
            'title' => 'Wakatobi, Jangan hanya singgah di Wangi-Wangi',
            // https://lostpacker.com/wakatobi-wangi-wangi/
            'desc' => 'Petang itu terasa begitu sempurna. Beberapa anak kecil sedang asik bermain loncat-loncatan di ujung dermaga.
            Beberapa kapal kayu diam tertambat dipinggir pantai.  Sementara itu semburat merah senja terpantul dengan begitu indah
            di perairan pulau wangi-wangi. Rumah-rumah panggung juga seolah melengkapi keindahan lukisan alam yang terjadi petang
            itu di Wakatobi. Saya hanya duduk di pinggir pantai sambail sesekali melemparkan pandangan ke segala arah. Yang ada
            hanya keheningan dan keindahan. Petang yang hening dengan bermandikan cahaya senja kuning keemasan. Pulau Wangi-wangi
            bersiap menyambut malam yang kembali hadir. Pulau Wangi-wangi adalah pintu masuk jika kita ingin mengeksplore keindahan Wakatobi.
            Biasanya para pejalan singgah dulu ke Pulau Wangi-wangi untuk kemudian melanjutkan perjalanan ke pulau-pulau lainnya seperti Pulau
            Kaledupa, Tomia dan Binongko. Wakatobi adalah singkatan dari keempat pulau besar itu. Dulunya sebelum menjadi kabupaten sendiri
            pulau ini bernama pulau Tukang Besi. Begitu ada pemekaran Wilayah jadilah kabupaten Wakatobi yang kini menjadi sorotan masyarakat
            dunia sebagai destinasi wisata bawah air yang menarik.

            Wanci adalah sebuah kelurahan di kecamatan Wangi-wangi, selain itu Wanci juga menjadi ibukota kabupaten Wakatobi.  DI wanci ini
            lah berbagai denyut nadi kehidupan bermasyarakat berlangsung. Wanci adalah kota ter ramai dari kabupaten Wakatobi. Beberapa bank
            juga berdiri disini. Dan Wanci adalah tempat dimana penghuni pulau-pulau lain berbelanja memenuhi kebutuhan hidup mereka. Oh ya
            jika hendak mengunjungi wakatobi pastikan dompet anda sudah terisi di Wanci, soalnya sewaktu saya ke beberapa pulau disana tidak
            menemukan mesin ATM selain di Wanci. Yang sering orang lewatkan adalah, wanci hanya dijadikan tempat persinggahan. Sementara di
            Wanci dan sekitarnya itu banyak sekali destinasi wisata menarik. Sebut saja Liya togo, Kampung Bajo Mola, Goa-goa, mercusuar bahkan
            ivesite juga tersebar di sini. Mau menginap di Wanci tidak usah khawatir, dari range 50.000 hingga 2juta ada kok disini, tinggal
            sesuaikan dengan budget kita saja, silahkan pilih ada penginapan Jelly, Wisata beach hotel atau Patuno resort yang asik harga dan
            pemandangannya.

            Belum ke Wakatobi kalau gak nyebur. Kebetulan saya dapat kesempatan menikmati keindahan bawah laut Wakatobi, meski hanya di sekitaran
            pulau Wangi-wangi saja. Padahal spot terindah menyelam konon katanya berada di pulau Hoga. Namun tak apalah, toh saya juga bukan
            penyelam professional. Pulau Kapota nama dive spotnya. Tidak terlalu jauh dari Wanci, mungkin hanya membutuhkan waktu sekitar 20 menit
            dengan speedboat. Terumbu karangnya masih alami dan sehat. Seperti kita tahu Wakatobi masuk dalam segituga coral dunia. Beragam jenis
            coral ada si wakatobi, tuh bangga kan negeri kita punya asset bawah laut sebegitu indahnya, harus terus dijaga ya kawan. So
            Wangi-wangi itu punya banyak sekali spot bagus yang asik untuk di eksplore, jadi kalau ke Wakatobi jangan hanya ampir transit
            ya di Wanci nya???',
            'image' => 'wangi-wangi.jpg',
            'video' => 'https://www.youtube.com/watch?v=KHQxCM868VA',
            'location' => 'https://maps.google.com/maps?q=wangi%20wangi%20wakatobi&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 14,
            'todolist_id' => 14,
            'title' => 'Tanjung Bira, Keindahan di ujung Sulawesi',
            // https://lostpacker.com/tanjung-bira-sulawesi/
            'desc' => 'Pantai Tanjung Bira terletak di kecamatan Bira, kabupaten Bulukumba dan masih masuk dalah wilayah propinsi Sulawesi
            Selatan. Pantai pasir putih dengan air lautnya yang jernih hingga kita bis amelihat ke dasar pasir pantai adalah menu andalan
            yang wajib di datangi bagia siapa saja yang merindukan keindahan pantai. Deretan warung-warung kecil berjajar rapi di pinggiran
            pantai pasir putih yang terlihat aduhai. beberapa pengunjung juga sedang terlihat asik bermain di jernihnya air laut yang mempesona.
            Angin laut berhembus dengan perlahan, sementara langit di atas tanjung bira terlihat begitu indah di hiasi gumpalan-gumpalan awan
            putih yang berderet.

            Kaki saya melangkah hati-hati diatas bebatuan karang di depan Bira view. Bira view adalah beberapa rumah pangung yang di peruntukkan
            buat penginapan, namun sayangnya kondisinya memprihatinkan. Saya harus tetap waspada ketika melangkahkan kaki di atas bebatuan
            karang itu, karena memang permukaanya terlihat terjal dan siang yang begitu menyengat.

            Sedang asik memotret keindahan Tanjung Bira ternyata sandal saya putus, huaaaa bisakah saya tetap melanjutkan berjalan di atas
            bebatuan karang yang panan dan terjal ini tanpa alas kaki? beberapa kali saya mencoba jalan jinjit tapi ternyata tetap saya sakit
            terkena batu karang yang ???membara??? dan tajam itu. Tapi bukan pejalan namanya kalau sampai kehabisan akal. Saya ikatkan sapu tangan
            untuk menempelken sandal saya yang putus ke telapak kaki saya, dan aman akhirnya saya bisa mengabadikan tanjung bira dalam foto dan
            video dengan tenang ha ha. Siang di tanjung bira sungguh terik, jika tidak mau berpanas-panasan, duduklah di salah satu warung
            sambil menikmati sebutir kelapa muda atau sebotol minuman dingin. Pemandangan yang tercipta di hadapan sungguh begitu sempurna.

            Langit biru diatas pantai juga semakin melengkapi keindahan yang ada. Jangan berpuas hati dulu dengan keindahan Tanjung Bira. Pantai
            Tanjung Bira terkenal dengan pasir pantainya yang selembut tepung terigu. Pemandangan garis pantai yang membujur panjang dan indah
            membentang hampir sepanjang mata memandang. Di sebagian pantainya di batasi dengan tebing-tebing karang yang terjal, namun komposisi
            ini jadi lebih menarik karena tebing-tebing terjal bertemu dengan jernih nya air laut dan putihnya pasir pantai. Sebuah komposisi
            lukisan alam yang sangat sempurna. Tidak ada ungkapan yang bisa saya ucapkan selain sempurna jika melihat keindahan Tanjung Bira.
            Selain keindahan-keindahan pantai dan daratnya, Tanjung Bira juga punya pesona menarik lainnya, kehidupan bawah lautnya. Ada spot
            menyelam yang sudah terkenal sekali di antara para penyelam baik di Indonesia maupun di luar negeri. Pulau Kambing namanya. Letaknya
            juga tidak terlalu jauh dari pantai pasir putih di Tanjung Bira. Untuk yang sudah punya ijin menyelam silahkan jajal kemampuan anda.',
            'image' => 'tanjung-bira.jpg',
            'video' => 'https://www.youtube.com/watch?v=zhPUmdGJ-w8',
            'location' => 'https://maps.google.com/maps?q=pantai%20tanjung%20bira%20sulawesi&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);

        Destination::create([
            'review_id' => 15,
            'todolist_id' => 15,
            'title' => 'Belajar Sejarah dari benteng Fort Rotterdam Makassar',
            // https://lostpacker.com/fort-rotterdam/
            'desc' => 'Sebuah becak terparkir di pintu masuk benteng. Lantai kawasan benteng juga masih terlihat basah akibat hujan yang baru
            saja mengguyur Makassar. Hiruk pikuk terlihat di jalan raya yang berada di depan benteng. Sementara langit  Makassar sore itu juga
            memperlihatkan pesona nya yang indah.

            Akses menuju Benteng ini mudah sekali. Jika kita berada di pantai Losari, tinggal jalan kaki menyusuri jalanan di pinggir pantai
            kearah barat saja pasti akan ketemu. Ketika memasuki kawasan benteng saya seolah terlempar pada masa-masa dimana benteng ini
            dibangun. Raja Gowa ke-X, Karaeng Tunipalangga Ulaweng sangat berjasa dalam pembangunan benteng ini pada tahun 1545.

            Banteng ini pernah hancur pada masa penjajahan Belanda. Kesultanan Gowa kala itu di pimpin oleh Sultan Hasanuddin. Penyerangan
            kala itu Belanda mencoba merebut jalur perdagangan rempah-rempah dan memperluas sayap kekuasaan mereka untuk mempermudah mereka
            membuka jalur ke Banda dan Maluku yang memang menjadi sentra Rempah. Penyerangan yang berlangsung lama itu mengakibatkan sebagian
            Benteng hancur, dan akibat kekalahan itu juga Raja Gowa dipaksa menandatangani Perjanjian Bongaya pada tangga 18 November 1667.

            Hmmm Begitulah fakta sejarah yang saya tangkap dari keterangan yang saya temukan di museum. Benteng ini kini ramai di datangi
            wisatawan maupun pelajar yang ingin belajar sejarah tentang negeri ini. Benteng ini juga pernah menjadi saksi kisah hidup seorang
            Pengeran Diponegoro. Perang Diponegoro yang berkobar di tanah Jawa memaksa Belanda untuk bermain culas ketika mengajak sang
            Pangeran untuk menandatangani perundingan damai. Di saat itulah sang pangeran pemberani ini di tangkap dan di jebloskan ke dalam
            penjara sempit di salah satu sudut Benteng ini.

            Berkeliling area benteng membuat kita bersyukur dan takjub dengan kemegahannya. Dinding benteng ini kokoh menjulang setinggi 5 meter
            dan setebaj 2 meter, Wowww. Sebuah bangunan menyerupai gereja terdapat di tengah area, tapi menurut informasi dari seorang ahli
            sejarah yang menemani saya berkeliling disana itu bukanlah gereja melainkan ruang pertemuan.

            Ketika mengunjungi Fort Rotterdam jangan lupa untuk naik ke atas bastion, yaitu bangunan yang lebih kokoh dan posisinya lebih
            tinggi terletak di setiap sudut benteng. Cobalah naik kesalah satunya dan nikmatilah langit senja makasar dari sana, Amazingg.
            Kembali saya diajak belajar tentang sejarah negeri ini dari perjalanan singkat saya di Makassar. Dari belajar hal-hal seperti ini,
            nasionalisme saya seolah berkobar. Saya merasa lebih mencintai negeri ini sampai kapanpun dan dimanapun. Semoga.',
            'image' => 'fort-rotterdam-makassar.jpg',
            'video' => 'https://www.youtube.com/watch?v=HymSYlKK9Mc',
            'location' => 'https://maps.google.com/maps?q=benteng%20Fort%20Rotterdam%20Makassar&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ]);
    }
}
