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
                'desc'=>'Proklamasi Kemerdekaan Indonesia pada tanggal 17 Agustus 1945 merupakan momen penting...',
                'photo'=>'history1.jpg',
                'content'=>'Proklamasi Kemerdekaan Indonesia pada tanggal 17 Agustus 1945 merupakan momen penting dalam sejarah bangsa, yang menandai lahirnya Indonesia sebagai negara berdaulat. Deklarasi dramatis ini tidak hanya mengubah lanskap politik Indonesia, tetapi juga mewujudkan mimpi dan perjuangan berbagai macam penduduk yang mendambakan kebebasan dari penjajahan. Konteks sejarah yang mengarah pada proklamasi tersebut sangat penting untuk memahami maknanya. Selama lebih dari tiga abad, Indonesia berada di bawah kekuasaan kolonial Belanda, dengan penduduk setempat mengalami eksploitasi ekonomi dan marginalisasi sosial. Perubahan nasib dalam Perang Dunia II, yang menyaksikan pendudukan Jepang di Indonesia dari tahun 1942 hingga 1945, menciptakan peluang yang unik. Jepang, meskipun sama-sama kolonial dalam aspirasi mereka, sempat mengganggu pemerintahan Belanda dan mendorong tumbuhnya sentimen nasionalis di kalangan orang Indonesia.Ketika gelombang perang berbalik dan Jepang menyerah pada bulan Agustus 1945, gerakan nasionalis Indonesia menemukan momennya. Tokoh-tokoh penting seperti Sukarno dan Mohammad Hatta muncul sebagai pemimpin yang mampu menyuarakan keluhan dan aspirasi kolektif rakyat Indonesia.
                Pada tanggal 16 Agustus, beberapa jam setelah berita penyerahan Jepang tersebar, Sukarno dan Hatta, bersama dengan para nasionalis lainnya, berkumpul di bawah tekanan politik yang kuat. Menyadari potensi kemerdekaan berada di ujung tanduk, mereka bekerja cepat untuk mempersiapkan proklamasi. Pada dini hari tanggal 17 Agustus, Sukarno berpidato di hadapan rakyat dari rumahnya di Jakarta. Suaranya bergema penuh keyakinan saat ia menyatakan, "Kami, rakyat Indonesia, dengan ini menyatakan kemerdekaan Indonesia." Pernyataan yang kuat ini merangkum perjuangan panjang rakyat Indonesia untuk menentukan nasib sendiri dan didukung oleh keinginan yang mendalam akan martabat dan otonomi. Proklamasi tersebut bukan sekadar pernyataan politik; itu adalah seruan yang menggema untuk persatuan di antara bangsa yang terdiri dari berbagai suku, budaya, dan agama. Reaksi langsung terhadap proklamasi tersebut beragam. Meskipun banyak yang merayakan, masih ada ketidakpastian tentang masa depan. Belanda, yang ingin mendapatkan kembali kendali dan menghancurkan gerakan kemerdekaan, segera memulai aksi militer, yang menyebabkan konflik berdarah yang berlangsung selama bertahun-tahun. Proklamasi tersebut memicu gelombang nasionalisme, dan orang Indonesia—dari berbagai latar belakang—bersatu untuk mendukung perjuangan kemerdekaan, menunjukkan ketahanan dan tekad mereka.
                Konteks internasional seputar proklamasi tersebut juga memainkan peran penting. Setelah Perang Dunia II, sikap global terhadap kolonialisme berubah. Ketika Perserikatan Bangsa-Bangsa mulai terbentuk, cita-cita penentuan nasib sendiri mulai berkembang, menyediakan lahan yang subur bagi gerakan kemerdekaan Indonesia untuk mendapatkan simpati dan dukungan internasional. Perjuangan untuk kemerdekaan memuncak dalam negosiasi diplomatik dan serangkaian konfrontasi. Akhirnya, melalui kegigihan dan serangkaian tekanan internasional yang kuat, Indonesia secara resmi diakui sebagai negara merdeka pada tahun 1949. Oleh karena itu, proklamasi tersebut lebih dari sekadar deklarasi; itu adalah katalisator bagi gerakan yang akan mengubah Indonesia menjadi negara yang didefinisikan oleh kedaulatannya, keberagamannya, dan semangat pantang menyerah rakyatnya. Hari ini, 17 Agustus diperingati sebagai Hari Kemerdekaan Indonesia, yang menjadi pengingat perjalanan sejarah bangsa ini menuju penentuan nasib sendiri. Proklamasi 1945 tetap terukir dalam ingatan kolektif rakyat Indonesia, yang melambangkan persatuan, ketahanan, dan perjuangan terus-menerus untuk meraih kebebasan dan keadilan di negara yang beragam dan dinamis ini. Saat para sejarawan merenungkan peristiwa penting ini, penting untuk menghormati suara dan pengorbanan yang membentuk lintasan kemerdekaan Indonesia dan terus mengeksplorasi kekayaan sejarahnya.',
                'author' => 'Budi',
                'category_id'=>2,
            ],
        ];
        DB::table('articles')->insert($datas);
    }
}
