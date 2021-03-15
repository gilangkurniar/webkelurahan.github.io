-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2021 pada 22.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `username`, `password`, `gambar`) VALUES
(12, 'Gilang Kurnia', 'gilkr20@gmail.com', 'admin', 'admin', '1207359804.jpg'),
(21, 'Admin', 'admin@admin.com', 'admin2', 'admin', 'rawon.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `teks` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `view` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `posttype` varchar(20) NOT NULL,
  `terbit` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `kategori`, `gambar`, `teks`, `tanggal`, `view`, `author`, `posttype`, `terbit`) VALUES
(12, 'Pilkada 2020 akan Segera Dilaksanakan', 'Pemilihan Kepala Daerah (Pilkada) 2020 digelar secara serempak pada masa pandemi COVID-19. Ada 270 daerah yang memilih kepala daerahnya. Tahapan Pilkada dimulai dari akhir Agustus hingga Desember 2020. Pemilihan kepala daerah di Indonesia pada tahun 2020 digelar secara serentak untuk daerah-daerah yang masa jabatan kepala daerahnya berakhir pada tahun 2021. Sistem pemilihan kepala daerah secara serentak pada tahun 2020 merupakan yang keempat kalinya diselenggarakan di Indonesia. Pelaksanaan pemungutan suara direncanakan digelar secara serentak pada bulan Desember 2020. Total daerah yang akan melaksanakan pemilihan kepala daerah serentak tahun 2020 sebanyak 270 daerah dengan rincian 9 provinsi, 224 kabupaten, dan 37 kota.', 'Terkini', 'pilkada.jpg', 'Pilkada tahun 2020', '23 November 2020', '5', 'Gilang Kurnia', 'berita', '1'),
(13, 'Rujak Soto, Makanan Khas Banyuwangi', 'Rujak Soto adalah masakan khas dari daerah Banyuwangi, Jawa Timur. Masakan ini merupakan paduan unik antara rujak sayur dengan soto, bisa soto daging (daging sapi) atau soto babat. Bahkan ada yang memadukan dengan soto ayam atau soto ceker (kaki ayam), ini biasa dilakukan sebagai alternatif ketika ingin menikmati rujak soto tetapi harga daging sedang melambung.\r\n\r\nBiasanya rujak disajikan terlebih dahulu, kemudian disiram dengan kuah soto berikut dagingnya. Rasanya juga khas, ada unsur soto sekaligus rasa rujak dengan aroma terasinya. Rujak soto kadang disajikan dengan es temulawak.', 'Makanan', 'Rujak_soto.jpg', 'Rujak Soto', '23 November 2020', '10', 'Gilang Kurnia', 'berita', '1'),
(15, '5 Manfaat Olahraga Lari', 'Tidak hanya murah, lari juga termasuk olahraga yang bisa dilakukan kapan saja. Selain itu, banyak manfaat lari bagi tubuh Anda. Termasuk untuk menurunkan risiko dari segala macam penyakit berbahaya. Beberapa manfaat lari untuk kesehatan tubuh, yaitu dapat memperlancar aliran darah, serta meningkatkan kesehatan dan kebugaran tubuh. Di samping itu, lari juga dapat memicu pengeluaran hormon dan enzim yang merangsang jantung dan otot bekerja lebih baik. Tak hanya itu, simak manfaat lari lainnya berikut ini. \r\n\r\nDi samping memperlancar aliran darah dalam tubuh, lari juga memiliki manfaat lain yang secara langsung dapat memengaruhi beberapa bagian tubuh. Berikut ini adalah beberapa manfaat lari bagi tubuh :\r\n\r\n1. Mengurangi berat badan \r\nOlahraga lari dapat memicu pembakaran kalori dalam tubuh Anda. Banyaknya kalori yang dibakar dipengaruhi oleh seberapa cepat dan seberapa jauh jarak lari Anda, serta berat badan Anda. \r\n\r\n2. Baik bagi kesehatan lutut \r\nMelakukan olahraga lari dapat memelihara kesehatan lutut, bahkan pada penderita arthritis sekalipun. Studi menunjukkan bahwa olahraga lari dapat menurunkan risiko arthritis pada lutut dan pinggul, serta merangsang pertumbuhan tulang rawan pada lutut. Namun apabila Anda memiliki masalah pada sendi, sebaiknya konsultasikan dengan dokter terlebih dahulu, sebelum memulai olahraga lari sebagai aktivitas rutin. \r\n\r\n3.  Mencegah osteoporosis \r\nOlahraga lari dapat memicu pembentukan sel-sel tulang baru. Hal ini yang membuat tulang Anda menjadi lebih kuat dan dapat menurunkan risiko terkena osteoporosis di kemudian hari. \r\n\r\n4. Mengurangi risiko jantung koroner \r\nBerlari lebih dari 16 km per minggu, setidaknya bisa meningkatkan HDL atau kolesterol baik dalam tubuh Anda. Manfaat lari lainnya yang bisa Anda dapatkan yaitu berkurangnya kadar trigliserida dan lemak dalam tubuh. Dan jika Anda bisa meningkatkan jarak lari hingga 80 km per minggu, Anda akan mengalami peningkatan HDL yang signifikan. Penelitian menunjukkan bahwa mereka yang melakukan olahraga lari teratur dan lebih dari 50 menit dalam seminggu dapat menurunkan risiko penyakit kardiovaskular. Selain melakukan olahraga teratur, Anda perlu menunjangnya dengan makanan dan gaya hidup yang sehat. \r\n\r\n5. Memperbaiki suasana hati \r\nSeseorang yang rutin melakukan olahraga lari, akan merasa hari-harinya lebih baik dan bahagia. Hal ini mampu meningkatkan suasana hati Anda, dan berdampak baik pada kualitas hidup Anda. Selain itu, olahraga lari juga dipercaya dapat menurunkan risiko terjadinya depresi. Hal ini karena ketika lari, tubuh melepaskan hormon endorfin yang mampu berinteraksi dengan reseptor di otak Anda untuk mengurangi persepsi tentang rasa sakit. Hormon ini juga memicu perasaan positif di dalam tubuh. Olahraga dipercaya dapat meringankan penyakit depresi ringan hingga sedang.\r\n\r\n---------\r\nArtikel ini sudah Terbit di AyoBogor.com, dengan Judul 5 Manfaat Lari untuk Kehidupan Sehari-hari, pada URL https://www.ayobogor.com/read/2019/09/07/4307/5-manfaat-lari-untuk-kehidupan-sehari-hari\r\n\r\nPenulis: Andres Fatubun\r\nEditor : Andres Fatubun', 'Olahraga', 'file-20191108-10910-1yt5fav.jpg', 'Beberapa Manfaat dari Olahraga Lari yang Sayang Sekali untuk Dilewatkan', '04 December 2020', '9', 'Gilang Kurnia', 'berita', '1'),
(18, '5 Warung Rawon Terenak di Banyuwangi', 'Rawon khas Banyuwangi punya keunikan tersendiri. Rawon di Banyuwangi tak sekadar disajikan biasa, tapi bisa dinikmati dengan hidangan lain. Ada yang dicampur nasi pecel juga bakso. Nikmat abis pokoknya!\r\nYang penasaran, coba mampir ke 5 warung rawon terenak di Banyuwangi ini.\r\n\r\n1. Rawon Warung Pangklang Asri\r\nTerletak di Jalan Letjen S Parman No 3, Sobo, Banyuwangi. Buka dari jam enam pagi sampai sembilan malam. Menu andalan warung ini adalah nasi rawon pecel.\r\nTerdiri dari nasi pecel yang diberi potongan daging sapi dan disiram kuah rawon. Tak lupa topping peyek buat variasi tekstur renyah. Kalau dirasa masih kurang kalian bisa tambah lauk misal perkedel kentang, telur asin dan kerupuk udang. Makannya cukup tebus dengan harga Rp27.000 sekalian sudah dapat es jeruk. Enak nan murah.\r\nSelain rawon pecel, kalian tetap bisa menikmati nasi rawon original. Seporsi nasi ditumpangi potongan daging sapi lalu disiram kuah bumbu kluwek. Biasanya didampingi sambal, irisan seledri, bawang goreng dan kecambah mentah.\r\nKalian bisa coba menu lainnya mulai nasi campur, nasi pecel, nasi sop daging dan lain lain.\r\n\r\n2. Rawon Warung Yuah\r\nKhas warung ini adalah potongan daging yang dicampur lemak bikin kuahnya sedikit oily namun gurihnya berlipat. Cocoknya disantap saat masih panas.\r\nMakannya pakai nasi pulen dengan telur asin dan kerupuk udang. Untuk mencobanya cukup siapkan Rp15.000 di kantong.\r\nSajian berkuah lainnya yang wajib dicicipi disini adalah sop buntut sapi. Daging buntutnya lembut berpadu dengan kuah kaldu yang pekat bercitarasa gurih. Biar makin greget kuahnya bisa dicampur sama sambal. Kalau mau ada sensasi segarnya jangan lupa diberi kucuran jeruk.\r\nBeralamat di Jalan Singosari No 5, Banyuwangi. Buka jam tujuh pagi sampai delapan malam.\r\n\r\n3. Warung Rawon Mak Tini\r\nAlamatnya di Jalan Jenderal Sudirman 167, Banyuwangi. Buka dari jam lima pagi sampai empat sore. Nasi rawon disini cukup ditebus Rp12.000.\r\nIsi semangkuk rawon terdiri dari potongan daging beserta lemak berpadu dengan tahu masak merah dan mie kuning. Komposisinya pas banget buat mengimbangi rasa kuah kluweknya yang tidak terlalu pekat.\r\nUntuk memanjakan lidah kalian bebas piilh lauk aneka jeroan sapi goreng mulai babat, usus, paru, limpa dan empal. Sejak tahun 1960, warung rawon ini selalu konsisten dalam hal rasa. Pastikan segera mencoba guys.\r\n\r\n4. Rawon Bik Ati\r\nRacikan rawonnya variatif banget mulai dari rawon lidah, rawon buntut sapi, rawon daging juga aneka jeroan sapi. Ada paru, usus, babat, empal dan limpa.\r\nIstimewanya lagi makan rawon disini bisa dicampur dengan nasi pecel. Tambahan lauk gorengan hangat seperti tempe juga jadi favorit penikmat rawon warung ini.\r\nDepot rawon legendaris dari Banyuwangi ini telah ada sejak tahun 1948. Sampai sekarang rasa yang ditawarkan tetap sama enaknya. Harga menunya dibanderol kisaran Rp10.000 sampai Rp50.000. Worth it sama porsi dan rasa.\r\nMenu makanannya gak sebatas rawon tapi ada aneka lalapan dan bakso juga lho! Lokasinya gampang dicari yakni tersebar di Jalan Ahmad Yani 83, Jalan Raya Situbondo dan Jalan Jember 50, Banyuwangi.\r\n\r\n5. Rawon Bakso Warung Sumber Rejeki\r\nMenu gabungan memang hits banget di Banyuwangi. Salah satunya rawon bakso ini. Cukup siapkan Rp12.500, kalian bisa mencicipi sepiring nasi dengan potongan daging sapi, beberapa butir bakso dan kecambah mentah yang disiram kuah kluwek nan gurih.\r\nKalau suka yang lebih unik cobain nasi pecel rawon bakso. Sesuai namanya hidangan ini merupakan campuran dari tiga menu yakni nasi pecel, rawon dan bakso. Komposisi super komplit ini pastinya bikin sensasi rasa yang kaya banget. Nano-nano nikmat kalau udah kena lidah.\r\nWarung sumber rejeki alamatnya di Jalan Johar, Brak, Kalipuro, Banyuwangi. Biasanya buka mulai jam 6.00 pagi sampai 21.00 malam.', 'Makanan', 'rawon.jpg', 'Rawon Banyuwanigi', '25 November 2020', '60', 'Gilang Kurnia', 'berita', '1'),
(19, 'Efek Samping Vaksin COVID-19 Pvizer dan Perbandingannya dengan Sinovac', 'Berdasarkan hasil uji klinis, vaksin COVID-19 yang dikembangkan oleh perusahaan farmasi Pfizer dan BioNTech, BNT162b2, diklaim 90 persen efektif. Meski belum ada jaminan tidak akan tertular virus, tetapi dari hasil tersebut menunjukkan bahwa orang yang menerima vaksin ini tertular, tidak akan sakit atau bergejala.\r\nSeperti vaksin lainnya, vaksin virus Corona BNT162b2 buatan Pfizer ini masih terus diteliti terkait efektivitas dan efek sampingnya. Jika vaksin ini sudah lolos dari semua pemeriksaan keamanan, ini akan memiliki implikasi yang sangat besar dalam mengatasi virus tersebut.\r\n\r\nLalu, apakah vaksin BNT162b2 ini menimbulkan efek samping?\r\nBerdasarkan keterangan para relawan yang mendapatkan suntikan pertama vaksin ini, mereka merasakan beberapa efek samping yang muncul. Beberapa orang dari total relawan sebanyak 43.500 ini mengalami efek samping seperti sakit kepala dan nyeri otot.\r\n \r\nRelawan asal Austin, Texas, Glenn Deshields (44) mengungkapkan bahwa dirinya merasakan efek samping berupa \"pengar yang parah\" dan rasa seperti mabuk. Tetapi, ia mengatakan efek ini hanya sementara dan hilang dengan cepat.\r\n\r\nRelawan lainnya yaitu Carrie dari Missouri merasakan efek samping yang berbeda setelah mendapat suntikan vaksin pertamanya pada September lalu. Ia merasa sakit kepala, nyeri di tubuh, hingga demam.\r\n\r\n\"Efek sampingnya tampak meningkat setelah dosis kedua bulan lalu,\" jelasnya yang dikutip dari Express UK.\r\n\r\nMeski saat pemberian vaksin para relawan tidak mengetahui apakah mereka menerima vaksin atau plasebo, Carrie yakin efek samping yang ia rasakan ini karena penyuntikkan tersebut\r\n\r\nBagaimana dengan vaksin COVID-19 lainnya?\r\nVaksin virus Corona lainnya yang dikembangkan oleh perusahaan Sinovac, CoronaVac yang diklaim aman berdasarkan data awal uji klinis tahap akhir di Brasil juga menimbulkan efek samping.\r\n\r\nMeskipun data tentang seberapa efektif vaksin itu tidak akan dirilis sampai uji coba selesai pada 13.000 sukarelawan, direktur Butantan Dimas Covas mengatakan bahwa vaksin ini tidak menimbulkan efek samping yang parah.\r\n\r\nCovas menjelaskan ada sekitar 20 persen relawan yang mengalami nyeri ringan akibat suntikan. Selain itu, 15 persen relawan merasakan sakit kepala setelah diberikan dosis pertama. Tetapi jumlah ini turun menjadi 10 persen untuk dosis kedua.\r\n\r\nSementara sebanyak 5 persen relawan lainnya melaporkan efek samping berupa mual, kelelahan, hingga nyeri otot.', 'Terkini', 'vaksin_1597375524.jpg', 'Vaksin COVID', '25 November 2020', '46', 'Gilang Kurnia', 'berita', '1'),
(20, 'Jaringan 4G di Indonesia Disebut Belum Sampai 90 Persen', 'Satelit milik Indonesia Palapa diklaim sudah mampu meningkatkan konektivitas seluler hingga wilayah terpencil Indonesia. Namun berdasarkan analisis perusahaan analitik mobile Opensignal, ketersediaan 4G di Indonesia belum sampai 90 persen.\r\nMenurut Opensignal, pada kuartal ketiga 2018, hampir seluruh area Indonesia mencatat ketersediaan 4G sebesar 80 persen.\r\n\r\n\"Dua tahun berikutnya, hampir semua daerah telah mengalami peningkatan secara signifikan dengan perolehan ketersediaan 4G hampir 90 persen,\" kata Opensignal lewat keterangan tertulis, Kamis (26/11).\r\n\r\nOpsensignal membeberkan terdapat 12 daerah di Indonesia yang kini terhubung dengan infrastruktur Palapa Ring. Dalam analisanya, disebutkan bahwa 12 daerah tersebut merasakan peningkatan konektivitas luar biasa di dua tahun terakhir.\r\n\r\n\"Yakni antara kuartal ketiga 2018 dan 2020 untuk pengalaman kecepatan pengunduhan seluler, pengalaman video dan ketersediaan 4G,\" tulisnya.\r\n\r\nDengan kondisi ini, maka kesenjangan konektivitas seluler di Jawa dan pulau-pulau terpencil mulai menurun signifikan. Bahkan, disebutkan bahwa di sejumlah pulau terdapat konektivitas yang jauh lebih baik dari wilayah pulau Jawa.\r\n\r\n\"Faktanya di beberapa kasus, wilayah terpencil bahkan memiliki pengalaman yang lebih baik dari sejumlah wilayah di Jawa. Pengguna di Indonesia merasakan pertumbuhan signifikan dalam Ketersediaan 4G di seluruh daerah,\" tambahnya.\r\n\r\nMenurut klaim Opensignal, daerah terpencil di bagian Timur kini hampir menyamai Ibu Kota dalam hal pengalaman kecepatan pengunduhan. Selama dua tahun terakhir, pengguna di wilayah terpencil di Papua Barat merasakan peningkatan luar biasa dalam.\r\n\r\n\"Pengalaman Kecepatan Pengunduhan, yakni 87 persen,\" ungkapnya.\r\n\r\nSetelah Papua Barat, kecepatan signifikan diikuti oleh wilayah lain di daerah ibu kota Jakarta dan Kalimantan yang rata-rata merasakan kecepatan pengunduhan 78 persen lebih cepat. Dalam pengalaman video di Papua Barat terdapat peningkatan sebesar 36 persen.\r\n\r\n\"Angka ini diikuti pengguna yang berlokasi di Banten, Jawa Barat, Kalimantan, serta Maluku yang mengamati peningkatan masing-masing sebesar 30 persen hingga 28 persen dalam kategori ini,\" tulisnya.\r\n\r\nTerakhir, dilaporkan pula bahwa di daerah lain juga mengalami peningkatan sebesar 25 persen hingga 18 persen untuk skor pengalaman video. Dengan level kemajuan ini, penilaian pengalaman video untuk di setiap daerah telah meningkat.\r\n\r\n\"Dari yang kategori cukup (40-55) menjadi Bagus (55-65) pada skala 100 poin, kecuali untuk pengguna di Jawa Tengah yang terus berada di kategori Cukup,\" demikian Opensignal.\r\n\r\nSebelumnya, Menkominfo Johnny G. Plate menyatakan 12.548 desa atau kelurahan yang belum menerima sinyal 4G. Dia mengatakan infrastruktur yang telah dibangun saat ini belum menjangkau seluruh wilayah Indonesia.\r\n\r\nSaat ini, pasar global sudah mulai fokus pada jaringan yang sudah mendukung konektivitas 5G. Di sisi lain, China sudah meluncurkan satelit 6G yang menjadi pertama di dunia beberapa pekan lalu. \r\n\r\nsumber : https://www.cnnindonesia.com/teknologi/20201126124613-213-574809/jaringan-4g-di-indonesia-disebut-belum-sampai-90-persen', 'Teknologi', 'e50a3012-0fb6-4559-a008-3643dd2edb9e_169.jpeg', 'Jaringan 4G', '27 November 2020', '57', 'Gilang Kurnia', 'berita', '1'),
(21, 'Sayang Dilewatkan, Ini 5 Manfaat Bersepeda Bagi Kesehatan', 'Fisik yang aktif adalah kunci untuk memiliki kebugaran dan kesehatan tubuh. Pasalnya, aktivitas fisik yang teratur melindungi kita dari risiko penyakit kronis seperti obesitas, penyakit jantung, kanker, penyakit mental, diabetes, dan radang sendi. Tak perlu menyewa pelatih khusus atau menghabiskan uang untuk pergi ke gym, kita bisa rutin melakukan aktifitas fisik atau olahraga dengan cara yang mudah dan murah, salah satunya dengan bersepeda. \r\nMelansir laman betterhealth, rutin bersepeda adalah salah satu solusi terbaik untuk mengurangi dampak gaya hidup pasif. Jenis olahraga yang bisa dilakukan oleh orang dari berbagai usia ini juga bisa menjadi sarana rekreasi untuk menyegarkan pikiran. Berikut berbagai keunggulan bersepeda dibandingkan aktivitas fisik lainnya: \r\n\r\n- Efek samping rendah\r\nBersepeda menyebabkan lebih sedikit ketegangan dan cedera daripada kebanyakan bentuk aktivitas fisik lainnya. \r\n\r\n- Latihan otot yang baik \r\nBersepeda mmbuat semua kelompok otot utama bergerak saat kita mengayuh pedal.\r\n\r\n- Mudah dilakukan \r\nTidak seperti kebanyakan jenis olahraga lainnya, bersepeda tidak memerlukan keterampilan fisik tingkat tinggi. \r\n\r\n- Baik untuk kekuatan dan stamina \r\nBersepeda dapat meningkatkan stamina, kekuatan, dan kebugaran aerobik. \r\n\r\n- Hemat waktu \r\nSelain menjadi salah satu bentuk olahraga, bersepeda juga bisa menjadi moda trasnportasi saat kita beraktivitas sehari-hari.\r\nManfaat bersepeda Selain memiliki berbagai keunggulan, bersepeda juga memberi manfaat kesehatan berikut: \r\n\r\n1. Mengontrol berat badan \r\nBersepeda adalah cara yang baik untuk mengontrol atau mengurangi berat badan karena dapat meningkatkan tingkat metabolisme, membangun otot dan membakar lemak tubuh. Penelitian menunjukkan bersepeda selama satu jam membantu membakar 300 kalori. Riset dari Inggris juga membuktikan, bersepeda selama setengah jam setiap hari membantu membakar lima kilogram lemak dalam setahun. \r\n\r\n2. Menjaga kesehatan jantung \r\nBersepeda memperkuat otot jantung , menurunkan denyut nadi istirahat dan mengurangi kadar lemak darah. Penelitian juga menunjukkan orang yang rutin bersepeda ke tempat kerja terpapar polusi dua hingga tiga kali lebih sedikit daripada mereka yang menggunakan mobil sehingga fungsi paru-paru mereka meningkat. Riset dari Denmar yang meneliti 30.000 orang berusia 20 hingga 93 tahun juga membuktikan bersepeda secara teratur melindungi kita dari penyakit jantung. \r\n\r\n3. Meminimalisir risiko diabetes \r\nDiabetes tipe 2 merupakan masalah kesehatan masyarakat yang serius. Kurangnya aktivitas fisik adalah alasan utama yang membuat penderita diabetes meningkat setiap waktu. Riset dari Finlandia membuktikan, bersepeda 30 menit per hari mampu mengurangi risiko diabetes hingga 40 persen. \r\n\r\n4. Meningkatkan kesehatan mental \r\nGangguan kesehatan mental seperti depresi, stres dan kecemasan dapat dikurangi dengan mengendarai sepeda secara teratur. Hal ini disebabkan karena bersepeda memiliki efek yang sama seperti rekreasi sehingga mendorong dopamin yang memicu rasa bahagia.\r\n\r\n5. Mencegah Risiko Darah Tinggi\r\nBersepeda adalah aktivitas sehat yang sangat baik dalam mencegah risiko darah tinggi. Manfaat bersepeda juga bisa mengontrol detak jantung, melunturkan lemak dalam tubuh dan memperkuat otot tubuh terutama kaki.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Sayang Dilewatkan, Ini 5 Manfaat Bersepeda untuk Kesehatan\", Klik untuk baca: https://health.kompas.com/read/2020/06/04/120000168/sayang-dilewatkan-ini-5-manfaat-bersepeda-untuk-kesehatan?page=all.\r\nPenulis : Ariska Puspita Anggraini\r\nEditor : Ariska Puspita Anggraini', 'Olahraga', '017827700_1528882675-iStock-658600444.jpg', 'Inilah 5 Manfaat Bersepeda yang Sayang Sekali untuk Dilewatkan', '04 December 2020', '43', 'Gilang Kurnia', 'berita', '1'),
(22, 'Semarak Jazz Gunung 2020 di Banyuwangi', 'Gelaran Jazz Gunung Hybrid Concert 2020 sukses digelar di Taman Gandung Terakota-Jikwa Jawa Resort, Kabupaten Banyuwangi dengan menerapkan protokol kesehatan yang ketat, Sabtu sore, 12, Desember 2020.\r\n\r\nSejumlah artis turut menyemarakkan gelaran musik Jazz Gunung itu. Bintang Indrianto feat Sruti Respati dan Sri Hanuraga Trio feat Dira Sugandi mampu membius tak lebih dari 300 orang penonton serta juga disiarkan secara virtual.\r\n\r\nPertunjukan langsung dilaksanakan di Amfiteater Taman Gandrung Terakota, Jiwa Jawa Resort Ijen, dan menjadi pelepas dahaga di tengah pandemi COVID-19 yang membatasi adanya kerumunan massa.\r\n\r\nKendati sempat diguyur hujan, perhelatan Jazz Gunung Ijen 2020 di Banyuwangi berlangsung meriah, penampilan tarian Jejer Jaran Dawuk Banyuwangi, canda pembawa acara Alit dan Ghundi, serta sajian musik dari Bintang Indrianto featuring Sruti Respati pada sesi pertama, dilansir dari Antara.\r\n\r\nSecara khusus, Bintang menciptakan The Beauty of Ijen untuk ditampilkan pada kesempatan ini, liriknya juga ditulis oleh Sruti Respati.\r\n\r\nMemasuki sesi kedua, Sri Hanuraga Trio featuring Dira Sugandi tampil memesona membawakan deretan lagu Hyperreality, Paris Berantai, Rangkaian Melati, Ibu Pertiwi, Rek Ayo Rek, Ampar Ampar Pisang, Manuk Dadali, dan Kicir-Kicir.\r\n\r\nDira yang mengenakan busana hitam-hitam itu kemudian menyanyikan lagu Rangkaian Bunga Melati, yang didedikasikan untuk para tenaga kesehatan yang selalu semangat di tengah pandemi.\r\n\r\n\"Ini kali pertama kami tampil secara langsung lagi sejak bulan Februari karena berbeda sekali tampil secara virtual sebelumnya. Terima kasih Jazz Gunung Indonesia. Kami juga ucapkan terima kasih kepada para tenaga kesehatan yang terus berjuang merawat pasien COVID-19, ingin sekali memberikan rangkaian melati untuk anda,\" katanya.\r\n\r\nPenggagas Jazz Gunung Indonesia Sigit Pramono mengatakan, Jazz Gunung 2020 merupakan ikhtiar untuk bisa beraktivitas dan menghidupkan industri musik dan pariwisata sambil menjalankan protokol kesehatan, Jazz Gunung tahun ini mengukir sejarah baru dengan menggelar Hybrid Concert yang disiarkan secara virtual.\r\n\r\n\"Jazz Gunung mencatat sejarah baru dalam pagelaran di tahun 2020 ini. Jazz Gunung Hybrid Concert 2020 menjadi ajang yang bisa menjadi satu contoh pertunjukan yang sehat dan mampu beradaptasi di tengah pandemi,\" kata Sigit.\r\n\r\nPara penonton, media dan undangan yang hadir di Amfiteater Taman Gandrung Terakota juga wajib mengikuti tes usap (swab test) untuk memastikan dalam kondisi baik sebelum masuk arena pertunjukan. Tak hanya itu, mereka juga wajib memakai masker dan menjaga jarak saat menonton penampilan para musisi.\r\n\r\n\"Kami wajibkan 3W, yakni wajib mengikuti swab test antigen, wajib pakai masker, dan wajib jaga jarak,\" tuturnya.\r\n\r\nButet Kertaredjasa yang juga hadir mengaku sangat senang event ini bisa terselenggara. Menurutnya, ini bisa menjadi satu contoh pertunjukkan yang sehat dan mampu beradaptasi di tengah pandemi.\r\n\r\n\"Kami merasakan sesuatu yang lama telah dirindukan, main tidak ada penontonnya itu tidak enak,\" ujar pria yang juga salah satu pendiri Jazz Gunung Indonesia itu.\r\n\r\n\"Saya juga akan tertolong kalau nanti pemerintah dan satgas mempercayai para praktisi seni pertunjukkan untuk menyelenggarakan pertunjukkan secara langsung dan ada penontonnya dengan kepatuhan-kepatuhan yang dirintis oleh acara Jazz Gunung Indonesia. Itu artinya pak Sigit dan Jazz Gunung Indonesia mempunyai jasa yang besar untuk pertunjukkan seni Indonesia,\" paparnya.\r\n\r\nsumber : https://surabaya.liputan6.com/read/4432494/semarak-jazz-gunung-2020-di-banyuwangi', 'Terkini', '036349600_1607846597-IMG-20201213-WA0019.jpg', 'Jazz Gunung Hybrid Concert 2020 sukses digelar di Taman Gandrung Terakota – Jiwa Jawa Resort, Banyuwangi, Sabtu (12/12/2020).', '14 December 2020', '30', 'Gilang Kurnia', 'berita', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `kat` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `terbit` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kat`, `alias`, `terbit`) VALUES
(1, 'Makanan', 'artikel-makanan', '1'),
(2, 'Terkini', 'artikel-terkini', '1'),
(6, 'Olahraga', 'berita-olahraga', '1'),
(7, 'Teknologi', 'berita-tekno', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriproduk`
--

CREATE TABLE `kategoriproduk` (
  `id` int(11) NOT NULL,
  `katproduk` varchar(64) NOT NULL,
  `terbit` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategoriproduk`
--

INSERT INTO `kategoriproduk` (`id`, `katproduk`, `terbit`) VALUES
(1, 'Makanan', '1'),
(2, 'Pakaian', '1'),
(3, 'Kerajinan', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kategoriproduk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(64) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tampil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `gambar`, `nama`, `kategoriproduk`, `deskripsi`, `harga`, `satuan`, `tampil`) VALUES
(3, 'Batik-Banyuwangi.jpg', 'Batik Banyuwangi', 'Pakaian', 'Batik adalah salah satu ikon Indonesia, yang telah dikenal oleh dunia. Pulau Jawa memang memiliki berbagai corak batik yang cantik dan menarik, salah satu diantaranya adalah Batik Banyuwangi. Batik Banyuwangi memiliki corak yang ekstotis, dan sangat cocok ketika menjadikannya oleh-oleh untuk keluarga di rumah.\r\n\r\nTerdapat puluhan corak atau motif khas Banyuwangi, seperti motif Gajah Oling yang berupa bunga menyerupai belalai gajah. Ada pula motif Kangkung Setingkes, motif Gedhegan, hingga motif Sembruk. Kamu dapat memilih berbagai corak dan jenis batik Banyuwangi, di pusat oleh –oleh seperti Tirta Wangi atau Sri Tanjung.', '50.000', 'lembar', 1),
(4, 'taskerajinanbatok-422ab122261f3ac40a71227b39500f14.jpg', 'Tas Batok Kelapa', 'Kerajinan', 'Berbahan dasar batok kelapa, tas tersebut dibuat sedemikian rupa dengan warna-warna yang menarik dan mampu memberikan kesan epik bagi siapa saja yang memakainya.\r\nHarganya pun terjangkau, mulai dari Rp20.000 para wisatawan bisa membawa pulang tas dari batok kelapa tersebut.', '20.000', 'pcs', 1),
(5, '2014-03-06-144024-e2dc39e10a897a4c8b9f1896be04ab83.jpg', 'Asbak Kayu', 'Kerajinan', 'Aneka macam asbak kayu khas Banyuwangi dijual dengan harga sangat terjangkau. Bentuknya yang unik dan lucu sangat cocok diletakkan di meja. Berbagai macam bentuk asbak mulai dari ikan hiu hingga kura-kura bisa menjadi pilihan. Harganya mulai dari Rp10.000 sampai dengan Rp15.000 tergantung bentuk dan kesulitan pembuatannya.', '15.000', 'pcs', 1),
(6, 'katalogkuliner-Kue-Ladrang-595x428.jpg', 'Ladrang', 'Makanan', 'Ladrang atau sabrang, begitu orang biasa menyebut oleh-oleh khas Banyuwangi yang satu ini. Selain sensasi enak dan gurih yang ada di dalamnya, ladrang juga nyatanya dipercaya untuk mengobati beberapa jenis penyakit. Seperti misalnya penyakit obesitas, kanker, dan diabetes. Ketiga jenis penyakit dipercaya masyarakat dapat diobati dengan mengonsumsi ladrang secara teratur. Mungkin karena penganan ini mengandung kolin, beta karoten, dan serat yang juga cocok bagi kamu yang sedang dalam proses die. Mungkin karena ladrang memiliki kandungan serat yang lumayan banyak, maka dia juga sangat bagus untuk melancarkan pencernaan kalian.', '50.000', 'Kg', 1),
(7, 'cara-membuat-sale-pisang.jpg', 'Sale Pisang', 'Makanan', 'Oleh-oleh satu ini memang sangat mudah ditemukan di beberapa wilayah di Indonesia. Kalian yang kepengin makan pisang sale juga tidak payah jauh datang sampai ke Banyuwangi. Tapi kalau soal rasa, pisang sale yang berasal dari Banyuwangi ini mungkin masih lebih enak dibandingkan pisang sale yang dijual di tempat lain. Perpaduan rasa manis dan gurih dari pisang sale membuat siapapun akan sulit melupakan. Rasa gurih dari pisang ini berasal dari proses pengeringan yang memakan waktu tidak sebentar. Semakin lama pisang ini dijemur, maka semakin gurih dan enak rasanya. Olahan pisang sale ini hadir dalam berbagai varian yang bisa kalian pilih. Seperti pisang sale goreng, pisang sale basah, dan pisang sale digulung.', '40.000', 'Kg', 1),
(8, '5233179_20130305020048.jpg', 'Udeng Banyuwangi', 'Pakaian', 'Udeng adalah salah satu dari beragam jenis ikat kepala yang ada di Nusantara. Kita telah mengenal iket Sunda dan blangkon Jawa dengan ragam variasinya di berbagai daerah. Kini udeng yang biasa kita kenal berasal dari Bali ternyata dimiliki juga oleh tetangganya, Banyuwangi.\r\nUdeng Banyuwangi sedikit berbeda dari Bali. Jika ikat kepala milik Pulau Dewata memiliki gunungan di bagian kanan lebih tinggi daripada bagian kiri, maka ikat udeng Banyuwangi dibuat sejajar. Perbedaan lainnya tentu perihal motif yang menjadi ciri khas Banyuwangi: gajah oling. Kain yang digunakan sebagai udeng bisa berbentuk segitiga atau bujur sangkar.', '50.000', 'pcs', 1),
(9, 'bagiak.jpg', 'Bagiak', 'Makanan', 'Bagiak merupakan salah satu oleh-oleh khas Banyuwangi berupa kue kering dengan bentuk lonjong dan panjang berbahan dasar tepung sagu di campur dengan kelapa parut dan beberapa bumbu lainnya. Kue ini memiliki tekstur yang sedikit keras ketika digigit namun begitu masuk ke mulut kita, kue ini menjadi lembut. Paduan rasa yang manis dan sedikit gurih menjadikan kue bagiak sangat pas menjadi teman untuk bersantai.\r\n\r\nSelain di Banyuwangi, kue bagiak sebenarnya juga bisa kita temukan di Maluku. Namun, ada sedikit perbedaan antara keduanya yakni bagiak khas Banyuwangi ini teksturnya sedikit lebih lembut dan tidak sekeras bagiak dari Maluku.\r\n\r\nKue bagiak memiliki beberapa varian rasa yakni rasa jahe, rasa kacang, rasa susu dan juga rasa kayu manis. Semua pilihan rasa bisa dipilih sesuai selera. Kudapan ini menjadi salah satu pilihan oleh-oleh khas bagi wisatawan yang berkunjung ke Banyuwangi. Harganya yang relatif terjangkau antara Rp20.000 - Rp25.000 membuat pengunjung biasanya membeli kue ini dalam jumlah yang banyak untuk kerabat di rumah.', '25.000', 'kemasan', 1),
(10, 'untir-untir-foto-resep-utama.jpg', 'Kue Unit-Untir', 'Makanan', 'Sama seperti nama yang diberikan, kue khas Banyuwangi ini mempunyai bentuk yang berputar-putar atau seperti diuntir. Rasa yang lezat, manis, gurih dan juga renyah menjadikan kue untir-untir banyak diminati oleh wisatawan untuk dijadikan sebagai oleh-oleh saat berkunjung ke Banyuwangi.', '15.000', 'kemasan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `gambar`, `isi`, `tanggal`) VALUES
(1, 'Kelurahan_tamanbarubwi1.jpeg', 'Kelurahan Tamanbaru merupakan salah satu daerah atau satu kelurahan yang beralamat di Jl. Pajajaran 92, Kecamatan Banyuwangi. Di Kelurahan Tamanbaru banyak berdiri kantor-kantor instansi pemerintah dan gedung persekolahan. Kelurahan Tamanbaru juga menjadi kawasan elit di Banyuwangi (Jalan Mendut, Jalan Borobudur, Jalan Singosari, Jalan Penataran, Jalan Prambanan, Perumahan Mendut Regency dan lainnya). Kelurahan ini dilalui oleh dua jalan raya yakni Jalan Adi Sucipto dan Jalan Ahmad Yani. Dua jalan raya ini adalah jalan protokol paling sibuk di kota Banyuwangi. Beberapa kantor instansi yang termasuk dalam wilayah Kelurahan Tamanbaru, antara lain: Pemkab Banyuwangi, Kantor Lurah Tamanbaru, DInas Pariwisata, dan lain-lain. Sementara untuk gedung persekolahan yang termasuk ke dalam wilayah Kelurahan Tamanbaru beberapa di antaranya: SD Negeri 1 Tamanbaru, SD Negeri 2 Tamanbaru, SMP Negeri 1 Banyuwangi, STIKom PGRI Banyuwangi, dan lain-lain.', '03 February 2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategoriproduk`
--
ALTER TABLE `kategoriproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
