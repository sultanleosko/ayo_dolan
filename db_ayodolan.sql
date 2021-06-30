-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 07:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_ayodolan
--

-- --------------------------------------------------------

--
-- Table structure for table tb_booking
--

CREATE TABLE tb_booking (
  id_booking SERIAL PRIMARY KEY NOT NULL, 
  username varchar(255) NOT NULL,
  status_booking enum('book','pending','sukses') NOT NULL,
  total_booking int NOT NULL,
  tanggal_booking date NOT NULL,
  id_paket int NOT NULL,
  kuantitas int NOT NULL,
  bukti_transfer text NOT NULL
);

--
-- Dumping data for table tb_booking
--

INSERT INTO tb_booking (id_booking, username, status_booking, total_booking, tanggal_booking, id_paket, kuantitas, bukti_transfer) VALUES
(47, 'jeni', 'sukses', 400000, '2021-06-26', 2, 4, 'malang/134079969460d5a6a3d6f6f.png'),
(48, 'jeni', 'sukses', 200000, '2021-06-30', 2, 2, 'malang/1946115960d6d96b0ee14.jpg'),
(50, 'jeni', 'sukses', 100000, '2021-06-30', 2, 1, ''),
(51, 'jeni', 'sukses', 200000, '2021-06-24', 1, 1, ''),
(52, 'jeni', 'sukses', 100000, '2021-06-30', 3, 1, ''),
(53, 'jeni', 'sukses', 100000, '2021-06-16', 2, 1, ''),
(54, 'jeni', 'sukses', 100000, '2021-06-22', 2, 1, 'malang/87825800960d81848513fa.jpg'),
(55, 'jeni', 'sukses', 100000, '2021-07-02', 2, 1, 'malang/1876270060d8191680f29.png'),
(56, 'jeni', 'pending', 10000, '2021-07-23', 2, 1, 'malang/207802139560da63197f0eb.png'),
(58, 'jeni', 'pending', 10000, '2021-06-25', 3, 1, 'malang/53858900760dad60845ee7.png'),
(59, 'jeni', 'book', 10000, '2021-06-25', 3, 1, ''),
(60, 'jeni', 'book', 10000, '2021-06-10', 3, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table tb_destinasi
--

CREATE TABLE tb_destinasi (
  id_destinasi SERIAL PRIMARY KEY NOT NULL,
  nama_destinasi varchar(255) NOT NULL,
  lokasi text NOT NULL,
  intro_destinasi text NOT NULL,
  gambar_destinasi text NOT NULL
);

--
-- Dumping data for table tb_destinasi
--

INSERT INTO tb_destinasi (id_destinasi, nama_destinasi, lokasi, intro_destinasi, gambar_destinasi) VALUES
(5, 'Fatumnasi', 'Di Kecamatan fatumnasi, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur', 'Fatumnasi adalah sebuah kecamatan yang ada di Kabupaten Timor Tengah Selatan. Fatumnasi menjadi sangat terkenal dikarenakan terdapat view alam yang indah, hewan ternak yang banyak, serta hamparan rumput hijau yang sangat luas. Kelestarian alam tersebut dikarenakan nilai luhur yang dijunjung tinggi oleh oleh Suku Dawan. Dan bukan hanya itu saja, Suku Dawan terkenal sebagai penjaga alam Gunung Mutis.\r\nPengunjung yang datang ke Fatumnasi, dari pertamakali memasuki kawasan tersebut akan disajikan dengan pepohonan yang tumbuh dengan baik, dan hewan ternak yang banyak, seperti kuda, dan sapi.\r\nSuku Dawan menggembala hewan ternak dengan cara sambil meniup seruling. Suara dari seruling tersebut dipercaya dapat menenangkan hewan – hewan, serta para hewan akan merasa disayang oleh sang majikan melalui suara seruling.\r\nFatumnasi adalah sebuah view kesadaran tentang cara berharmoni antara manusia dengan alam sekitar. Suku Dawan menjadi tauladan yang patut ditiru dalam urusan menjaga kelestarian, dan keseimbangan alam.\r\nLokasi Fatumnasi berada Di Kecamatan fatumnasi, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur. Harga tiket masuknya gratis, yang paling penting saat kalian mengunjungi Fatumnasi, hormati adat istiadat, budaya, keyakinan, dari masyarakat setempat.\r\n', 'malang/128132112960d640b2623e4.png'),
(6, 'Bukit Fatukopa', 
  'Kecamatan Fatukopa, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur', 
  'Bukit Fatukopa adalah bukit eksotis yang berbalut dengan nilai budaya, adat – istiadat, serta keyakinan masyarakat setempat. Bahkan Bukit Fatukopa dianggap sebagai bukit yang dikeramatkan. Nama Fatukopa diambil dari bentuk bukit tersebut, karena istilah Fatukopa bermakna Batu Kapal. View terindah adalah saat melihat pesona matahari yang perlahan mulai terbenam.\r\nBukit Fatukopa tidak bisa dijamah oleh pengunjung. Hal tersebut dikarenakan akses jalannya yang sangat sulit, serta berbahaya.Meskipun demikian, keindahan Bukit Fatukopa dapat dinikmati dari spot yang ada di seberang bukit tersebut. Bahkan spot tersebut terkadang dijadikan area camping oleh para pengunjung.\r\nLokasi Bukit Fatukopa terletak di Kecamatan Fatukopa, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur, dan tiket masuk menuju kawasan tersebut gratis.\r\n',
   'malang/76865084760d640972a605.png'),
(7, 'Pantai Kolbano',
 '', 
 'Pantai Kolbano terletak daratan pulau timor, Provinsi Nusa Tenggara Timur. Pesona keindahan yang tersaji di Pantai Kolbano merupakan pesona keindahan yang sangat langka terjadi di Indonesia, bahkan dunia. \r\n\r\npantai ini memang menyepi di pesisir selatan Pulau Timor yang tak gampang dijangkau. Sekitar 130 km dari Kupang yang ditempuh 3-5 jam perjalan. Namun, perjalanan ke Kolbano tak akan sia-sia. pengungjung akan menjumpai pantai langka nan rupawan yang dihampari oleh batuan kerikil berwarna warni. Ada merah, hijau, kuning, hitam, bahkan batu yang bercorak pun ada. Kerikil ini begitu cantik berharmoni dengan perairan Laut Timor yang gemerlap hijau toska. \r\n\r\nKeistimewaan Pantai Kolbano lainnya adalah pengunjung bisa menikmati sunset dan sunrise dengan panorama memukai yang mengesankan.', 'malang/155922621760d63f8e1a03f.png'),
(8, 'Gunung Mutis', 'Perbatasan antara kab. Timor Tengah utara dan kab. Timor Tengah selatan, Nusa Tenggara Timur', 'Gunung Mutis merupakan salah-satu gunung tertinggi yang ada di Pulau Timor. Kehadiran Gunung Mutis tidak bisa dilepaskan dengan kehadiran penjaga gunung tersebut, yaitu Suku Dawan.\r\nSebetulnya, Gunung Mutis dengan Fatumnasi adalah paket kunjungan layaknya dua sisi mata uang. Dan kunjungan ke Gunung Mutis, beserta Fatumnasi bisa menjadi wisata edukasi, selain dari wisata alam. Salah-satu yang terkenal dari Gunung Mutis adalah Cagar Alam Gunung Mutis. Selain itu, kawasan Gunung Mutis terkenal juga dengan kekayaan marmernya.\r\nGunung Mutis memiliki tiga puncak, dengan masing-masing puncak memiliki nama tersendiri, serta view yang berbeda, namun sama-sama indah. Jika pengunjung ingin mendaki ke puncak Gunung Mutis, rutenya sama seperti menuju Fatumnasi. Selain itu Gunung Mutis dan Fatumnasi terdapat sebuah kawasan yang sering disebut dengan hutan Bonsai. Sebetulnya pohon tersebut bukanlah pohon bonsai, tetapi memang mirip pohon Bonsai. Masyarakat sekitar menyebut kawasan itu dengan nama Akuna, yang berarti Hutan Tanaman Kerdil.\r\n', 'malang/206681985660d63fe1b3f5e.png'),
(9, 'Teluk Gurita', 'Desa Dualaus, Kakuluk Mesak, Kabupaten Belu, Nusa Tenggara Timur', 'Teluk Gurita dulunya merupakan sebuah Pelabuhan yang terdapat banyak saudagar Eropa yang medarat di Pelabuhan ini untuk mencari lilin dan cendana. Pelabuhan ini berubah menjadi teluk gurita konon ceritanya dulu terdapat sebua kapal pedagang yang dililit gurita hingga tenggelam,kemudian munculah nama pantai Teluk Gurita. Objek wisata ini juga pernah diberi nama Kuit Namon , yang kemudian di ganti menjadi Teluk Gurita. \r\nPesona teluk yang menawan siap menemanimu mengisi waktu liburan Bersama keluarga. Airnya yang jernih dan tenang menggoda siapa saja untuk bermain air di tempat ini. Selain itu, terdapat sebuah patung Bunda Maria yang berdiri persis di bukit Teluk Gurita yang langsung menghadap pada luasnya lautan. pengunjung juga bisa melakukan ziarah rohani ke Teluk Gurita.  Lokasi Teluk Gurita ini terletak di Desa Dualaus, Kakuluk Mesak, Kabupaten Belu, NTT\r\n', 'malang/54397112760d64017632b7.png'),
(29, 'Air Terjun Mauhalek', 'a', 'b', 'malang/44012553060daccbbbef46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table tb_kebudayaan
--

CREATE TABLE tb_kebudayaan (
  id SERIAL PRIMARY KEY NOT NULL,
  name varchar(255) NOT NULL,
  thumbnail text NOT NULL,
  description text NOT NULL
);

--
-- Dumping data for table tb_kebudayaan
--

INSERT INTO tb_kebudayaan (id, name, thumbnail, description) VALUES
(2, 'Suku Atoni (Dawan)', 'malang/196132604960da381b44101.jpg', 'Suku Atoni (juga dikenal sebagai Atoin Meto atau Dawan) adalah suku bangsa yang mendiami pulau Timor, tepatnya di Kabupaten Timor Barat, Indonesia dan enklave Oecussi-Ambeno, Timor Leste. Jumlah Populasi orang Atoni mencacpai 600.000 jiwa. Bahasa yang dipertuturkan ialah Uab Meto.Atoni Meto adalah salah satu suku yang berdiam di wilayah provinsi Nusa Tenggara Timur (NTT). Suku Atoni tersebar hampir di seluruh daratan Pulau Timor yang terletak di bagian selatan provinsi NTT. Atoni Meto terdiri dari dua kata yakni Atoni berarti orang atau manusia, Meto secara harafiah berarti tanah kering. Pada umumnya orang biasa menyebutkan Atoni Pah Meto yang berarti “orang-orang dari tanah kering.\"\r\n\r\nSalah satu nilai fundamental dalam kehidupan Atoni Meto terdapat dalam paham feto-mone. Feto-mone bisa dikatakan sebagai norma atau sikap hidup masyarakat Atoni yang menjadi panduan untuk menjaga dan melestarikan kehidupan masyarakat Atoni. Konsep ini bisa disejajarkan dengan konsep manunggaling kawulo gusti pada masyarakat Jawa atau Yin-Yang pada masyarakat Tionghoa, berikut penjelasan dari kata feto-mone.\r\n\r\nKata \"feto \"berarti perempuan. Dalam hubungan dengan baris keturunan, seorang yang dihitung melalui garis keturunan ibu dikategorikan sebagai feto.\r\n\r\n\"Mone\" berarti laki-laki. Dalam hubungan dengan baris keturunan seseorang yang dihitung melalui garis keturunan ayah dikategorikan sebagai mone. Dalam istilah ini, feto-mone di erjemahkan sebagai feminis-maskulin untuk menjelaskan konsepsi masyarakat Atoni Meto tentang perempuan dan laki-laki. Konsepsi ini dapat dibangingkan dengan konsepsi Yin-yang dalam masyarakat Tionghoa .\r\n\r\nPandangan relasi-relasi komis dan sosial juga ikut diekspresikan dalam nilai ini. Relasi-relasi itu meliputi relasi manusia dengan Tuhan, manusia dengan sesama, dan manusia dengan alam misalnya: Uis Pah-Uis Neno (Allah Bumi-Allah Langit), Ain-Uis Neno-Am-Uis (Allah Ibu-Allah Bapa), Bife-Atoni (perempuan-laki-laki), dan lain sebagainya. \r\n\r\nTerm feto-mone mengindikasikan satu kesatuan yang tidak bisa hadir tanpa yang lain, seperti hidup yang tidak bisa ada tanpa kesatuan antara laki-laki dan perempuan .Dilihat pada penerapannya, konsep feto-mone memiliki dampak kehidupan perempuan dan laki-laki seperti pembagian kerja. Masyarakat Atoni membedakan peranan perempuan dan laki-laki.\r\n\r\nLaki-laki bertugas dalam ranah publik, seperti berperang, membangun hubungan dengan masyarakat luas, dan bekerja di kebun sedangkan perempuan lebih mengurus persoalan privat seperti memasak, mencuci, menjamu tamu dan lain-lain. Alasan perempuan ditempatkan pada ranah privat dikarenakan juga dikarenakan perempuan pada masyarakat Atoni dilihat sebagai “ibu kehidupan”.'),
(3, 'Suku Tetun', 'malang/8130974760da38781c9da.jpg', 'Suku Belu, atau disebut juga Suku Tetun/Tetum, adalah salah satu penduduk asli Pulau Timor. Suku ini mendiami sebagian besar Kabupaten Belu, dan bahasa mereka disebut dengan Bahasa Tetun.Selain di Timor Barat, suku ini juga terdapat di Timor Leste.\r\n\r\nBerdasarkan cerita adat, Suku Belu dipercayai sebelumnya berasal dari Malaka, kemudian berpindah ke beberapa tempat sebelum akhirnya tiba di Pulau Timor, yaitu di Belu selatan.\r\n\r\nSalah satu tarian tradisional suku Belu adalah Tari Likurai, yang ditarikan oleh kaum wanita untuk menyambut tamu atau pejuang yang kembali dari perang.\r\n\r\nWanita suku Belu yang akan dan telah menikah, dahulu secara tradisional akan memakai tato dengan motif tertentu yang melambangkan status sosial mereka. Para pengantin pria dan wanita Suku Belu juga memiliki pakaian adat yang dilengkapi hiasan kepala, kain, kalung, giwang, serta perhiasan-perhiasan lainnya yang memiliki corak dan makna yang khas.'),
(4, 'Suku Kemak', 'malang/22046890960da38b57d9ef.jpg', ''),
(5, 'Suku Bunak (Marae)', 'malang/207067115660da38f400e0f.jpg', 'Suku Bunak (Bunaq, Buna, Bunake), atau disebut juga suku Marae, adalah suku bangsa yang tinggal di wilayah pegunungan tengah Timor, terpisah oleh perbatasan politik Timor Barat, Indonesia, tepatnya Distrik Lamaknen dan Timor-Leste.\r\n\r\nIstilah Bunak juga merujuk kepada Bahasa Bunak, yaitu salah satu bahasa Timor Leste yang tidak termasuk rumpun bahasa Austronesia, dan diklasifikasikan sebagai sebuah bahasa Trans-Nugini. Suku ini dikelilingi oleh suku-suku yang menggunakan bahasa-bahasa dari rumpun bahasa Melayu-Polinesia, seperti bahasa Atone dan bahasa Tetun.'),
(6, 'Suku Rote', 'malang/55691154460da3a0c32925.jpg', 'Suku Rote adalah salah satu penduduk asli Pulau Rote, yang sebagian di antaranya ada pula yang menetap di Pulau Timor. Selain itu, Suku Rote juga mendiami pulau-pulau di sekitar Pulau Rote, yaitu Pulau Ndao, Pulau Nuse, Pulau Pamana, Pulau Doo, Pulau Heliana, Pulau Landu, Pulau Manuk, dan pulau-pulau kecil lainnya. Ada ahli yang berpendapat bahwa orang Rote sebelumnya bermigrasi dari Pulau Seram di Maluku.\r\n\r\nBahasa Suku Rote termasuk Rumpun bahasa Austronesia, dari Melayu-Polinesia Barat-Selatan, yang terbagi ke dalam beberapa dialek.\r\n\r\nMata pencaharian orang Rote adalah berladang, beternak, menangkap ikan, menyadap nira, dan kerajinan lontar. Tanah yang memiliki pengairan dibuat menjadi sawah atau sawah tadah hujan. Hasil pertanian utama adalah padi ladang, jagung, dan ubi kayu, sedangkan hewan ternak utama adalah kerbau, sapi, kuda, dan ayam. Wanita Suku Rote mengerjakan kerajinan menenun kain tradisional, anyaman pandan, dll.\r\n\r\nSistim kekerabatan suku ini adalah kekerabatan keluarga inti atau keluarga luas, dan bersifat patrilineal dan menjaga adat pernikahan eksogami klan.Gabungan beberapa keluarga luas membentuk klan kecil (nggi leo), gabungan klan-klan kecil membentuk klan besar (leo). Pemimpin klan dinamakan manek atau mane leo.\r\n\r\nKepercayaan tradisional Suku Rote mengenal sosok Sang Pencipta, yaitu Lamatuan atau Lamatuak. Sosok tersebut dipandang sebagai Pencipta, Pengatur, dan Pemberi Berkah, yang dilambangkan tiang bercabang tiga. Pada masa kini, Suku Rote banyak yang telah menganut agama Kristen Protestan, Kristen Katolik, atau Islam.'),
(7, 'Suku Helong', 'malang/44442141160da3966dca00.jpg', 'Suku Helong adalah salah satu penduduk asli Pulau Timor.Kebanyakan dari mereka berdiam di Kabupaten Kupang, yaitu di Kupang Barat dan Kupang Tengah,serta selain itu juga di Pulau Flores dan Pulau Semau. Mata pencaharian suku ini terutama adalah berladang, berburu, menangkap ikan, dan membuat kerajinan tradisional.\r\n\r\nBahasa asli suku ini disebut Bahasa Helong, yang memiliki dua dialek, yaitu dialek Helong Semau dan dialek Helong Daratan Timur. Penutur bahasa Helong dapat ditemukan di empat desa di pesisir barat daya wilayah Timor Barat, serta di Pulau Semau di lepas pantai Timor Barat.\r\n\r\nSistem kekerabatan Suku Helong yang terkecil adalah keluarga inti, yang bergabung menjadi keluarga luas terbatas (ngalo).Beberapa ngalo bergabung membentuk klan (ingu) yang dipimpin seorang pemimpin klan (koka ana) seketurunan tersebut.Dalam hal strata sosial, masyarakat Helong zaman dahulu terbagi menjadi tiga lapisan, yaitu bangsawan (usif), orang kebanyakan (tob), dan hamba sahaya (ata).');

-- --------------------------------------------------------

--
-- Table structure for table tb_paket
--

CREATE TABLE tb_paket (
  id_paket SERIAL PRIMARY KEY NOT NULL,
  nama_paket varchar(255) NOT NULL,
  lokasi text NOT NULL,
  gambar_paket text NOT NULL,
  kuota int NOT NULL,
  harga_tiket int NOT NULL,
  deskripsi text NOT NULL
);

--
-- Dumping data for table tb_paket
--

INSERT INTO tb_paket (id_paket, nama_paket, lokasi, gambar_paket, kuota, harga_tiket, deskripsi) VALUES
(1, 'Bukit Tuamese', 'Desa Tuamese, Kecamatan Biboki Anleu, Kabupaten Timor Tengah Utara', 'malang/paket_timor/bukit_tuamese.png', 100, 5000, 'Bukit Tuamese berada di Desa Tuamese, Kecamatan Biboki Anleu, Kabupaten Timor Tengah Utara. Dari atas bukit tuamese pengunjung bisa melihat pemandangan dan lembah yang merupakan bekas tembak garang dapat memanjakan mata pengunjung. \r\nSuasana yang sejuk membuat siapa saja betah berlama-lama di tempat ini. Dari atas bukit tuamese kemu juga bisa melihat pemandangan laut yang menawan dan sangat cocok untuk dijadikan spot foto keren. \r\n'),
(2, 'Pantai Oetune', 'Desa Tuafanu, Kecamatan Kualin, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur', 'malang/paket_timor/pantai_oetune.png', 100, 10000, 'Pantai oetune merupakan pantai yang memiliki pesona gurun pasir khas timur tengah, yang berpadu dengan keindahan alam pantai. Perpaduan keindahan tersebut bukanlah fatamorgana, hal tersebut merupakan kenyataan yang ada di Kabupaten Timor Tengah Selatan, atau yang biasa disebut dengan Kabupaten TTS. Bahkan beberapa waktu yang lalu, awalnya netizen tidak menyangka bahwa gurun pasir di dekat pantai tersebut berada di Indonesia. Pada akhirnya, keindahan Pantai Oetune mulai ramai dibicarakan. Air pantai, serta gurun pasirnya sangat bersih. Serta di pinggir pantai terdapat pohon Kasuari, serta Pohon Lontar khas Pulau Timor.\r\nLokasi Pantai Oetune terletak di Desa Tuafanu, Kecamatan Kualin, Kabupaten Timor Tengah Selatan, Provinsi Nusa Tenggara Timur. dari kota Kupang rute yang dapat ditempuh berjarak 127 kilometer, dengan total waktu tempuh sekitar 3 jam perjalanan.\r\n'),
(3, ' Fulan Fehan', 'Desa Dirun,Kecamatan Lamaknen, Kabupaten belu,NTT', 'malang/paket_timor/fulan_fehan.png', 100, 10000, 'Wisata lembah Fulan Fehan merupakan tempat wisata yang berada di kabupaten belu tepatnya di desa Dirun,Kecamatan Lamaknen, Kabupaten belu,NTT. Objek wisata ini berada dikawasan yang menawan dimana kita akan disuguhkan hamparan padang sabana yang begitu luas. Kondisi tanahnya sedikit bergelombang terlihat seperti bukit-bukit kecil yang diselimuti tumbuhan hijau. Sejauh mata memandang pengunjung yang datang akan melihat hamparan padang rumput yang menawan dan terasa sangat sejuk karna berada pada ketingihan. \r\nSuasana semakin menarik dimana terdapat kuda-kuda berkeliaran bebas sambil makan rumput. Satu lagi keunikan lembah fulan fehan yaitu tumbuh kaktus yang cukup banyak membuat suasana berada seperti di padang pasir .melihat seluruh keindahan tempat ini tidak heran jika kawasana ini menjadi salah satu Kawasan popular. \r\n'),
(4, 'Pantai Tablolong ', 'kupang', 'malang/paket_timor/pantai_tablolong.png', 100, 10000, 'Pantai Tablolong yang berada sekitar 30 km dari pusat kota Kupang. Keistimewaan dari Pantai Tablolong ini ialah keindahan berupa pasir putih yang lembut dengan perairan tenang nan jernih yang bisa pengunjung nikmati sepanjang waktu. \r\nDi pantai ini, pengunjung bisa bermain air sepuasnya, menikmati terumbu karang pesisir atau sekedar mendinginkan badan dengan panorama yang menawan. Panorama di seberang pantai juga elok karena diwarnai oleh Pantai Semau dan Pantai Kambing yang mengisi ruang cakrawala. Sesekali keberadaan nelayan berlalu lalang yang membuat obyek makin sedap untuk difoto\r\n');

-- --------------------------------------------------------

--
-- Table structure for table tb_user
--

CREATE TABLE tb_user (
  id_user SERIAL PRIMARY KEY NOT NULL,
  nama_lengkap varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(20) NOT NULL,
  alamat text NOT NULL,
  tipe_user enum('1','2') NOT NULL
);

--
-- Dumping data for table tb_user
--

INSERT INTO tb_user (id_user, nama_lengkap, email, username, password, alamat, tipe_user) VALUES
(1, 'emon mollo', 'edmollo696@gmail.com', 'emon', 'qwerty', 'malang', '1'),
(7, 'jenifer asten', 'jenifer@gmail.com', 'jeni', 'qwerty', 'atambua', '2');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
