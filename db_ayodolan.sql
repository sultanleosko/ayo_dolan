-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 03:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ayodolan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status_booking` enum('book','pending','sukses') NOT NULL,
  `total_booking` int(255) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `id_paket` int(255) NOT NULL,
  `kuantitas` int(255) NOT NULL,
  `bukti_transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `username`, `status_booking`, `total_booking`, `tanggal_booking`, `id_paket`, `kuantitas`, `bukti_transfer`) VALUES
(30, 'salma', 'sukses', 200000, '2017-04-30', 3, 2, ''),
(33, 'salma', 'sukses', 200000, '2017-04-09', 2, 2, ''),
(34, 'salma', 'pending', 300000, '2017-04-30', 3, 3, ''),
(35, 'salma', 'pending', 200000, '2017-04-30', 3, 2, ''),
(36, 'salma', 'pending', 200000, '2017-04-30', 3, 2, ''),
(37, 'salma', 'book', 200000, '2017-04-30', 3, 2, ''),
(38, 'salma', 'book', 400000, '2017-04-13', 3, 4, ''),
(39, 'salma', 'book', 400000, '2017-04-13', 3, 4, ''),
(40, 'salma', 'book', 400000, '2017-04-13', 3, 4, ''),
(41, 'salma', 'book', 200000, '2017-04-30', 3, 2, ''),
(42, 'salma', 'pending', 200000, '2017-04-30', 3, 2, ''),
(43, 'sultanleosko', 'book', 200000, '2021-06-22', 3, 2, ''),
(44, 'user', 'sukses', 100000, '2021-06-22', 2, 1, ''),
(45, 'user', 'pending', 200000, '2021-06-24', 3, 2, 'malang/134792681060d309883ae05.png'),
(46, 'user', 'pending', 200000, '2021-06-24', 2, 2, 'malang/152678434360d30e00755a3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_destinasi`
--

CREATE TABLE `tb_destinasi` (
  `id_destinasi` int(255) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `intro_destinasi` text NOT NULL,
  `gambar_destinasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_destinasi`
--

INSERT INTO `tb_destinasi` (`id_destinasi`, `nama_destinasi`, `lokasi`, `intro_destinasi`, `gambar_destinasi`) VALUES
(2, 'Gunung Bromo', '', 'Perjalanan melalui pintu barat dari arah pasuruan yaitu masuk dari desa Tosari untuk menuju ke pusat objek wisata (lautan pasir ) terbilang berat karena medan yang harus ditempuh tak bisa dilalui oleh kendaraan roda 4 biasa ini dikarenakan jalan turunan dari penanjakan kearah lautan pasir sangatlah curam, kecuali kita menyewa jip yang disediakan oleh pengelola wisata, jadi wisatawan banyak yang berjalan kaki untuk menuju ke pusat lokasi.', 'malang/gunung_bromo_1000_750.jpg'),
(3, 'Pantai Balekambang', 'Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang', 'Pantai Balekambang terus berbenah, sejumlah fasilitas tambahan disediakan pengelola, salah satunya flying fox. Permainan ini dilaunching sejak Agustus 2012, namun flying fox ini hanya buka setiap Sabtu-Minggu. Selain flying fox, permainan untuk anak-anak juga menjadi daya tarik. Beragam varian mainan seperti ayunan, patung hewan lengkap tersedia. Bahkan tak lama lagi akan disediakan persewaan ATV.', 'malang/pantai_balekambang_1000_750.jpg'),
(4, 'Coban Sewu', '', '', 'malang/coban_sewu_1000_750.jpg'),
(6, 'Pantai Sendiki', 'Desa Tambakrejo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang', 'Pantai yang mempunyai pasir yang putih dan memiliki panorama yang sangat indah membuat parawisatawan senang dan betah. Meski belum sepopuler pantai-pantai yang lain pantai Sendiki mampu membuat pengunjung tertarik untuk menyakisikan keindahan pantai Sendiki, pasir yang bersih membuat wisatawan betah dan senang mengunjungi pantai Sendiki, berbagai aktifitas bisa anda lakukan di pantai Sendiki seperti bermain voly pantai, berenang, atau duduk saja dengan melepas lelah anda.', 'malang/pantai_sendiki_1000_750.jpg'),
(7, 'Sumber Jenon', 'Desa Gunung Ronggo, Kecamatan Tajinan, Kabupaten Malang', 'Sumber Jenon Malang juga menjadi destinasi yang patut untuk dicoba terutama untuk mereka yang suka hunting foto maupun berlibur dengan sensasi yang berbeda jauh dari perkotaan. Sumber Jenon memiliki air berwarna biru muda yang tertampung pada kolam berbentuk bulat dengan kedalaman sekitar 5 meter. Adapun batang pohon jenu di dalam kolam yang posisinya membujur dari posisi barat ke arah timur yang membuatnya terlihat alami untuk diabadikan.', 'malang/sumber_jenon_1000_750.jpg'),
(8, 'Kasembon Rafting', 'Jalan Bunga Kumis Kucing No. 46, Jatimulyo, Kota Malang', '', 'malang/kasembon_rafting_1000_750.jpg'),
(9, 'Jawa Timur Park 1', 'Jalan Kartika No. 2, Kota Batu', 'Sejarah berdirinya Jatim Park 1 bertujuan untuk wahana edukasi, khususnya memberikan pembelajaran kepada anak-anak kecil. Di Jatim Park 1 memiliki miniatur candi, tanaman agro, volcano dan galeri nusantara serta diorama hewan langka.', 'malang/jawa_timur_park_1000_750.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebudayaan`
--

CREATE TABLE `tb_kebudayaan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kebudayaan`
--

INSERT INTO `tb_kebudayaan` (`id`, `name`, `thumbnail`, `description`) VALUES
(1, 'test', 'malang/77670019960d0b804b0e8b.jpg', 'test22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(255) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `gambar_paket` text NOT NULL,
  `kuota` int(255) NOT NULL,
  `harga_tiket` int(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `lokasi`, `gambar_paket`, `kuota`, `harga_tiket`, `deskripsi`) VALUES
(1, 'Bromo Open Trip', 'Penanjakan, Bukit Teletubies, Lautan Pasir, Puncak Bromo', 'malang/paket/paket_1.jpg', 12, 200000, 'Gunung Bromo adalah lokasi terbaik di Indonesia untuk melihat matahari terbit yang sangat indah dan menawan.'),
(2, 'Pantai Malang 1', 'Pantai Goa Cina, Pantai Bajul Mati', 'malang/paket/paket_2.jpg\r\n', 20, 100000, 'Banyak wisata baru ditemukan di Malang salah satunya adalah pantai, pantai pantai baru yang masih terjaga alami nya'),
(3, 'Jatim Park 1', 'Jl. Kartika No. 2, Sisir, Batu, Kota Batu, Jawa Timur 65315', 'malang/paket/paket_3.jpg', 20, 100000, 'Banyak wahana yang terkenal di Malang. Salah satunya adalah Jatim Park 1 Malang. Terdapat banyak wahana permainan mulai dari anak-anak hingga remaja. Wahana yang disediakan juga beragam.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tipe_user` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `alamat`, `tipe_user`) VALUES
(1, 'Sultan Leosko Akbar Atjil', 'leoskosultan@gmail.com', 'sultanleosko', 'leosko1234', 'Jl. Simpang Sulfat Utara 3 No. 22A', '1'),
(3, 'Sultan Geraldo Akbar Atjil', 'sultangeraldo@yahoo.com', 'sultangeraldo', 'geraldo1234', 'Jl. Simpang Sulfat Utara 3 No. 22A', '2'),
(5, 'Salma Ayu', 'salmaayu@gmail.com', 'salma', 'salma', 'Vila Adonia A-8', '2'),
(6, 'user', 'user@gmail.com', 'user', 'satusatu', '-', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `tb_kebudayaan`
--
ALTER TABLE `tb_kebudayaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  MODIFY `id_destinasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_kebudayaan`
--
ALTER TABLE `tb_kebudayaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
