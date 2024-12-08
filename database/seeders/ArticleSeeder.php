<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title'=>'Proklamasi Kemerdekaan Indonesia: Tonggak Sejarah Indonesia Tahun 1945',
                'short_desc'=>'Proklamasi Kemerdekaan Indonesia pada tanggal 17 Agustus 1945 merupakan momen penting...',
                'picture'=>'history1.jpg',
                'content'=>'Proklamasi Kemerdekaan Indonesia pada tanggal 17 Agustus 1945 merupakan momen penting dalam sejarah bangsa, yang menandai lahirnya Indonesia sebagai negara berdaulat. Deklarasi dramatis ini tidak hanya mengubah lanskap politik Indonesia, tetapi juga mewujudkan mimpi dan perjuangan berbagai macam penduduk yang mendambakan kebebasan dari penjajahan. Konteks sejarah yang mengarah pada proklamasi tersebut sangat penting untuk memahami maknanya. Selama lebih dari tiga abad, Indonesia berada di bawah kekuasaan kolonial Belanda, dengan penduduk setempat mengalami eksploitasi ekonomi dan marginalisasi sosial. Perubahan nasib dalam Perang Dunia II, yang menyaksikan pendudukan Jepang di Indonesia dari tahun 1942 hingga 1945, menciptakan peluang yang unik. Jepang, meskipun sama-sama kolonial dalam aspirasi mereka, sempat mengganggu pemerintahan Belanda dan mendorong tumbuhnya sentimen nasionalis di kalangan orang Indonesia.Ketika gelombang perang berbalik dan Jepang menyerah pada bulan Agustus 1945, gerakan nasionalis Indonesia menemukan momennya. Tokoh-tokoh penting seperti Sukarno dan Mohammad Hatta muncul sebagai pemimpin yang mampu menyuarakan keluhan dan aspirasi kolektif rakyat Indonesia. Pada tanggal 16 Agustus, beberapa jam setelah berita penyerahan Jepang tersebar, Sukarno dan Hatta, bersama dengan para nasionalis lainnya, berkumpul di bawah tekanan politik yang kuat. Menyadari potensi kemerdekaan berada di ujung tanduk, mereka bekerja cepat untuk mempersiapkan proklamasi. Pada dini hari tanggal 17 Agustus, Sukarno berpidato di hadapan rakyat dari rumahnya di Jakarta. Suaranya bergema penuh keyakinan saat ia menyatakan, "Kami, rakyat Indonesia, dengan ini menyatakan kemerdekaan Indonesia." Pernyataan yang kuat ini merangkum perjuangan panjang rakyat Indonesia untuk menentukan nasib sendiri dan didukung oleh keinginan yang mendalam akan martabat dan otonomi. Proklamasi tersebut bukan sekadar pernyataan politik; itu adalah seruan yang menggema untuk persatuan di antara bangsa yang terdiri dari berbagai suku, budaya, dan agama. Reaksi langsung terhadap proklamasi tersebut beragam. Meskipun banyak yang merayakan, masih ada ketidakpastian tentang masa depan. Belanda, yang ingin mendapatkan kembali kendali dan menghancurkan gerakan kemerdekaan, segera memulai aksi militer, yang menyebabkan konflik berdarah yang berlangsung selama bertahun-tahun. Proklamasi tersebut memicu gelombang nasionalisme, dan orang Indonesia—dari berbagai latar belakang—bersatu untuk mendukung perjuangan kemerdekaan, menunjukkan ketahanan dan tekad mereka. Konteks internasional seputar proklamasi tersebut juga memainkan peran penting. Setelah Perang Dunia II, sikap global terhadap kolonialisme berubah. Ketika Perserikatan Bangsa-Bangsa mulai terbentuk, cita-cita penentuan nasib sendiri mulai berkembang, menyediakan lahan yang subur bagi gerakan kemerdekaan Indonesia untuk mendapatkan simpati dan dukungan internasional. Perjuangan untuk kemerdekaan memuncak dalam negosiasi diplomatik dan serangkaian konfrontasi. Akhirnya, melalui kegigihan dan serangkaian tekanan internasional yang kuat, Indonesia secara resmi diakui sebagai negara merdeka pada tahun 1949. Oleh karena itu, proklamasi tersebut lebih dari sekadar deklarasi; itu adalah katalisator bagi gerakan yang akan mengubah Indonesia menjadi negara yang didefinisikan oleh kedaulatannya, keberagamannya, dan semangat pantang menyerah rakyatnya. Hari ini, 17 Agustus diperingati sebagai Hari Kemerdekaan Indonesia, yang menjadi pengingat perjalanan sejarah bangsa ini menuju penentuan nasib sendiri. Proklamasi 1945 tetap terukir dalam ingatan kolektif rakyat Indonesia, yang melambangkan persatuan, ketahanan, dan perjuangan terus-menerus untuk meraih kebebasan dan keadilan di negara yang beragam dan dinamis ini. Saat para sejarawan merenungkan peristiwa penting ini, penting untuk menghormati suara dan pengorbanan yang membentuk lintasan kemerdekaan Indonesia dan terus mengeksplorasi kekayaan sejarahnya.',
                'author_id'=>1,
                'category_id'=>2,
            ],
            [
                'title'=>'Subjek, Predikat, Objek',
                'short_desc'=>'Subjek, Objek, dan Predikat merupakan bagian dari percakapan sehari-hari...',
                'picture'=>'bahasa_id.jpg',
                'content'=>'Subjek, Objek, dan Predikat merupakan bagian dari percakapan sehari-hari dalam kehidupan kita. Kita akan membahas tentang subjek, objek, predikat, dan penggunaannya dalam kalimat.

                - Subjek dalam Bahasa Indonesia
                Subjek kalimat dalam Bahasa Indonesia biasanya menunjukkan siapa atau apa yang dibicarakan dalam kalimat tersebut. Subjek adalah pelaku tindakan atau fokus utama pernyataan. Subjek dalam Bahasa Indonesia sering kali berupa kata benda atau kata ganti dan bisa tunggal atau jamak.
                Misalnya: - "Anak itu bermain di taman." - Di sini, "Anak itu" adalah subjek kalimat.

                - Predikat dalam Bahasa Indonesia
                Predikat adalah bagian kalimat yang memberi tahu kita sesuatu tentang subjek. Biasanya mencakup kata kerja dan mungkin juga mengandung unsur-unsur lain seperti kata sifat, kata keterangan, atau kata benda tambahan.
                Misalnya: - "Ibu memasak nasi goreng." - Dalam kalimat ini, "memasak nasi goreng" adalah predikat, sedangkan "memasak" adalah kata kerja.

                - Objek dalam Bahasa Indonesia
                Objek dalam Bahasa Indonesia menerima tindakan dari kata kerja. Objek biasanya mengikuti kata kerja dalam sebuah kalimat dan bisa langsung atau tidak langsung. Objek langsung adalah penerima tindakan kata kerja, sedangkan objek tidak langsung sering menunjukkan kepada siapa atau untuk siapa tindakan tersebut dilakukan.
                Perhatikan contoh berikut: - "Dia menulis surat." - "Surat" adalah objek langsung yang menerima tindakan menulis.

                - Struktur Kalimat
                Struktur kalimat yang umum dalam Bahasa Indonesia adalah Subjek-Predikat-Objek (S-P-O), mirip dengan Bahasa Inggris. Urutan ini memudahkan penutur bahasa Inggris untuk memahami dasar-dasar konstruksi kalimat bahasa Indonesia.
                Contoh: - "Guru mengajar murid." - Subjek: Guru - Predikat: mengajar - Objek: murid

                - Fleksibilitas dan Variasi
                Sementara struktur S-P-O adalah standar, Bahasa Indonesia dapat bersifat fleksibel. Dalam beberapa kasus, objek dapat mendahului subjek untuk alasan penekanan atau gaya, khususnya dalam puisi atau tulisan formal.
                Contoh: - "Nasi goreng dimasak oleh ibu." - Di sini, "Nasi goreng" diletakkan di awal untuk penekanan.',
                'author_id'=>2,
                'category_id'=>1,
            ],
            [
                'title'=>'Memahami Transmisi Panas: Bagaimana Panas Bergerak di Sekitar Kita',
                'short_desc'=>'Transmisi panas adalah proses menarik yang kita temui dalam kehidupan sehari-hari...',
                'picture'=>'science.png',
                'content'=>'Transmisi panas adalah proses menarik yang kita temui dalam kehidupan sehari-hari, meskipun kita mungkin tidak selalu menyadarinya. Secara sederhana, transmisi panas mengacu pada bagaimana energi panas bergerak dari satu tempat ke tempat lain. Para ilmuwan telah mengidentifikasi tiga metode utama yang dilalui panas untuk berpindah: konduksi, konveksi, dan radiasi. Mari kita uraikan metode-metode ini untuk memahaminya dengan lebih baik!

                1. Konduksi: Perpindahan Panas Melalui Sentuhan

                Konduksi adalah perpindahan panas melalui kontak langsung. Bayangkan Anda sedang memegang sendok logam yang telah ditaruh dalam panci berisi sup mendidih. Setelah beberapa saat, sendok tersebut terasa panas saat disentuh. Hal ini terjadi karena panas berpindah dari sup panas ke logam sendok yang lebih dingin. Dalam konduksi, panas bergerak melalui material dengan menyebabkan partikel-partikel dalam material bergetar. Partikel-partikel yang bergetar ini menyalurkan energinya ke partikel-partikel di dekatnya, dan ini berlanjut hingga panas menyebar ke seluruh material.

                Logam merupakan konduktor panas yang hebat. Itulah sebabnya kita sering menggunakan panci logam untuk memasak makanan kita. Namun, bahan seperti kayu dan plastik merupakan konduktor yang buruk dan disebut sebagai isolator. Bahan-bahan tersebut tidak mudah memindahkan panas, itulah sebabnya gagang kayu pada panci logam dapat tetap dingin meskipun panci tersebut panas!

                2. Konveksi: Perpindahan Panas dalam Cairan

                Selanjutnya, kita beralih ke konveksi, yang terjadi pada cairan dan gas. Bayangkan air mendidih. Saat Anda memanaskan air, air panas di dasar panci naik ke permukaan karena kepadatannya lebih rendah. Saat air naik, air yang lebih dingin dan kepadatannya lebih tinggi akan tenggelam ke dasar. Gerakan ini menciptakan gerakan melingkar yang dikenal sebagai arus konveksi.

                Konveksi penting tidak hanya dalam memasak tetapi juga di alam. Misalnya, saat matahari memanaskan permukaan Bumi, udara hangat di dekat daratan naik dan udara yang lebih dingin mengalir masuk untuk menggantikannya, yang menghasilkan angin. Demikian pula, arus konveksi di lautan membantu mendistribusikan panas di seluruh planet, yang memengaruhi pola cuaca.

                3. Radiasi: Perpindahan Panas Tanpa Kontak

                Terakhir, kita memiliki radiasi, yaitu perpindahan panas melalui gelombang elektromagnetik. Ini berarti bahwa panas dapat merambat melalui ruang hampa! Contoh radiasi yang hebat adalah kehangatan yang Anda rasakan dari matahari pada hari yang cerah. Meskipun udara di antara Anda dan matahari tidak panas, sinar matahari membawa energi melintasi ruang tersebut dan menghangatkan kulit Anda.

                Radiasi bersifat unik karena tidak memerlukan media (seperti air atau udara) untuk memindahkan panas. Inilah sebabnya mengapa Anda dapat berdiri di depan api dan merasa hangat meskipun tidak ada apa pun di antara Anda dan api. Panas merambat melalui radiasi inframerah.',
                'author_id'=>3,
                'category_id'=>3,
            ],
        ];
        DB::table('articles')->insert($datas);
    }
}
