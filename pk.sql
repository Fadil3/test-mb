-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:44 PM
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
-- Database: `pk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(5) NOT NULL,
  `tittle` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `tittle`, `image`) VALUES
(1, 'konten-8a', 'azalea.jpg'),
(2, 'konten-1', 'bg0.png'),
(3, 'konten-5', 'bg1.jpg'),
(4, 'konten-3', 'bg1.png'),
(5, 'konten-5', 'bg2.jpg'),
(6, 'konten-3', 'bg2.png'),
(7, 'konten-6', 'bg3.jpg'),
(8, 'konten-6', 'bg4.jpg'),
(9, 'konten-7', 'bg5.jpg'),
(12, 'konten-5a', 'carousel1.jpg'),
(13, 'konten-5a', 'carousel2.jpg'),
(14, 'konten-5a', 'carousel3.jpg'),
(15, 'konten-4', 'cluster1.png'),
(16, 'konten-4', 'cluster2.png'),
(17, 'konten-4', 'cluster3.png'),
(25, 'konten-8b', 'rumah3.jpg'),
(33, 'siteplan', 'siteplan.jpg'),
(34, 'konten-8a', 'zinnia.jpeg'),
(35, 'navbar', 'MB_logo.png'),
(41, 'Doe', 'Lambang-Pangkat-Polisi-Perwira-.png'),
(42, 'Doe', 'Lambang-Pangkat-Polisi-Perwira-.png'),
(43, 'Doe', '5.jpg'),
(44, 'Doe', '14.jpg'),
(45, 'Doe', '16-1.jpg'),
(46, 'Doe', '5.jpg'),
(47, 'Doe', '16-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `description`, `keyword`) VALUES
(1, 'Rumah Dekat MRT | MB Properti', 'Perusahaan yang bergerak bidang pembangunan dan penjualan cluster perumahan di Dekat MRT', 'rumah dekat mrt lebak bulus,Jual Rumah Cirendeu,jual rumah ciputat,jual rumah cirendeu raya,jual rumah dekat mrt,jual rumah lebak bulus,perumahan lebak bulus,rumah dekat mrt,rumah lebak bulus,cirendeu residence,cluster cirendeu,rumah dijual di cirendeu,jual rumah tanjung barat,rumah tanjung barat,perumahan tanjung barat,dijual rumah tanjung barat,apartemen tanjung barat,apartemen mahata tanjung barat,kontrakan tanjung barat,perumahan tanjung barat indah,rancho indah tanjung barat,harga apartemen mahata tanjung barat,rumah dijual di tanjung barat,rumah dijual tanjung barat,rumah dijual di tanjung barat 450 juta,apartemen di tanjung barat,jual rumah tanjung barat indah,komplek tanjung barat indah,rumah di tanjung barat,kontrakan di tanjung barat,rumah dijual di rancho indah tanjung barat,jual rumah di tanjung barat,rumah dijual tanjung barat indah,kontrakan di tanjung barat jakarta selatan,rumah dijual di tanjung barat indah,harga apartemen southgate tanjung barat,perumahan rancho indah tanjung barat,perumahan di tanjung barat,kontrakan murah di tanjung barat,kontrakan petakan di tanjung barat,kontrakan daerah tanjung barat,jual apartemen mahata tanjung barat,harga apartemen tanjung barat,kontrakan murah tanjung barat,tanjung barat apartemen,rumah murah di tanjung barat,edenhaus tanjung barat,rumah kontrakan di tanjung barat,apartemen tod tanjung barat,perum tanjung barat indah,jual rumah jalan nangka tanjung barat,jual rumah cirendeu,jual rumah ciputat,jual rumah lebak bulus,rumah dijual lebak bulus,jual rumah di ciputat,rumah dijual cirendeu,perumahan dekat mrt lebak bulus,jual rumah di lebak bulus,jual rumah di cirendeu,jual rumah bona indah,serenia hills lebak bulus harga,rumah dijual di bona indah lebak bulus,harga rumah di ciputat,perumahan murah di ciputat,perumahan daerah ciputat,harga rumah di lebak bulus,rumah dijual di ciputat tangerang selatan,rumah lebak bulus murah,rumah kpr murah di jombang ciputat,dijual rumah lebak bulus,dijual rumah di lebak bulus,rumah di ciputat olx,jual rumah dekat mrt lebak bulus,rumah dijual di bukit cirendeu,jual rumah bali view cirendeu,dijual rumah di ciputat,apartemen ciputat murah,rumah dijual di bali view cirendeu,rumah lebak bulus dijual,rumah dijual di bukit nusa indah ciputat,jual rumah lebak bulus indah,jual rumah karang tengah lebak bulus,jual serenia hills lebak bulus,rumah dijual karang tengah lebak bulus,jual rumah murah di ciputat,rumah dijual di serenia hills lebak bulus,rumah dijual bona vista lebak bulus,rumah murah di lebak bulus,jual rumah bona indah lebak bulus,rumah dijual di villa delima lebak bulus,dijual rumah di cirendeu,jual rumah di bali view cirendeu,rumah ciputat olx,rumah dijual di bumi karang indah lebak bulus,rumah dijual villa delima,dijual rumah ciputat,rumah ciputat murah,rumah dijual bumi karang indah,rumah bona indah dijual,rumah dijual di lebak lestari indah,rumah serenia hills dijual,rumah ciputat dijual,jual rumah villa delima,rumah dijual kampung ubud cirendeu,jual rumah di serenia hills lebak bulus,jual rumah serenia hills lebak bulus,jual rumah di bona indah lebak bulus,rumah murah di cirendeu,jual rumah bumi karang indah,jual rumah di lebak bulus jakarta selatan,jual rumah lebak lestari indah,rumah dijual di river valley lebak bulus,jual rumah bukit nusa indah ciputat,rumah di cirendeu dijual,jual rumah paradise resort ciputat,rumah cirendeu dijual,jual apartemen ciputat,olx rumah ciputat,rumah dijual di ciputat dekat uin,rumah dijual di jombang ciputat,dijual rumah cirendeu,harga rumah lebak bulus,rumah dijual bali view cirendeu,harga rumah ciputat,jual rumah taman kedaung ciputat,harga rumah serenia hills lebak bulus,rumah murah cirendeu,harga rumah di paradise resort ciputat,jual rumah cirendeu permai,rumah dijual di taman kedaung ciputat,jual rumah lebak bulus,dijual rumah lebak bulus,rumah dekat mrt,jual rumah dekat mrt,perumahan lebak bulus,rumah dijual di lebak bulus,rumah dijual lebak bulus,perumahan di lebak bulus,jual rumah di lebak bulus,rumah dijual di lebak bulus jakarta selatan,harga rumah di lebak bulus,rumah murah lebak bulus,rumah lebak bulus murah,perumahan di lebak bulus jakarta selatan,dijual rumah di lebak bulus,rumah lebak bulus dijual,rumah murah di lebak bulus,rumah dijual lebak bulus jakarta selatan,jual rumah di lebak bulus jakarta selatan,harga rumah lebak bulus,perumahan lebak bulus jakarta selatan,rumah lebak bulus,rumah lebak bulus dijual,rumah cirendeu,perumahan cirendeu,dijual rumah di ciputat,perumahan daerah ciputat,perumahan ciputat,jual rumah lebak bulus,rumah dijual di lebak bulus jakarta selatan,cluster lebak bulus,rumah dijual di lebak bulus,rumah dijual di bukit cirendeu,rumah dijual di bali view cirendeu,perumahan di lebak bulus jakarta selatan,mrt lebak bulus,jual rumah bukit nusa indah ciputat,jual rumah bumi karang indah,jual serenia hills lebak bulus,rumah dekat stasiun mrt,rumah syariah cirendeu,rumah syariah lebak bulus,rumah di lebak bulus,jual rumah cirendeu,jual rumah ciputat,jual rumah di ciputat,perumahan di ciputat,rumah ciputat,perumahan di lebak bulus,jual rumah di lebak bulus,rumah dijual cirendeu,serenia hills lebak bulus harga,rumah murah cirendeu,rumah mrt,rumah murah di cirendeu,rumah serenia hills dijual,rumah murah lebak bulus,rumah dekat mrt,rumah dekat mrt lebak bulus,rumah dijual bali view cirendeu,rumah syariah dekat mrt,');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `tittle` varchar(10) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `tittle`, `text`) VALUES
(1, 'navbar', 'Tentang'),
(2, 'navbar', 'Galeri'),
(3, 'navbar', 'Daftar Harga'),
(4, 'navbar', 'Promo'),
(5, 'navbar', 'FAQs'),
(6, 'navbar', 'Kontak'),
(7, 'navbar', 'Site Plan'),
(8, 'konten-1', '<h1 style=\"text-align: center;\">HUNIAN YANG STRATEGIS</h1>\n<h1 style=\"text-align: center;\"><span style=\"font-size: 36pt;\"><strong>FREE BIAYA PAJAK, </strong></span><br><span style=\"font-size: 36pt;\"><strong>SURAT DAN KPR</strong></span></h1>\n<h2 style=\"text-align: center;\">Terintegrasi Transportasi Umum, 3KM ke MRT, 9 Menit ke<br>TRANSJAKARTA Stopstation, Dilewati Angkot</h2>'),
(12, 'konten-2', '<h1 style=\"text-align: center;\"><strong>PROMO BULAN INI</strong></h1>\r\n<h1 style=\"text-align: center;\"><strong>BEBAS MERDEKA</strong></h1>\r\n<h1 style=\"text-align: center;\"><strong>MERDEKA BIAYA</strong></h1>\r\n<p style=\"text-align: center;\"><strong>BEBAS </strong>Ubah Denah Rumah, <strong>BEBAS </strong>Pilih Hadiah, <strong>BEBAS </strong>Pilih Skema Pembayaran</p>\r\n<p style=\"text-align: center;\">KPR, ASURANSI JIWA NASABAH, NOTARIS, PAJAK PEMBELI, BALIK NAMA, PPN, BPHTB, AJB</p>'),
(17, 'konten-3', '<h1 class=\"font-weight-bold\">Mulai 1.4 M</h1>\r\n<h3 class=\"font-weight-bold\">Luas Tanah 60 - 90m<sup>2</sup></h3>\r\n<h3 class=\"font-weight-bold\">Luas Bangunan 85 - 110m<sup>2</sup></h3>\r\n<h3 class=\"font-weight-bold\">2 Lantai + Rooftop</h3>\r\n<h3 class=\"font-weight-bold\">3 Kamar Tidur</h3>\r\n<h3 class=\"font-weight-bold\">3 Kamar Mandi</h3>'),
(26, 'konten-3a', '<h1 class=\"font-weight-bold\">Fasilitas Umum</h1>\r\n<h3 class=\"font-weight-bold\">Security 24 Jam</h3>\r\n<h3 class=\"font-weight-bold\">Musholla</h3>\r\n<h3 class=\"font-weight-bold\">Mini Gym</h3>\r\n<h3 class=\"font-weight-bold\">Kolam Renang</h3>'),
(28, 'konten-4', '<h1><span style=\"font-size: 36pt;\">3 Cluster Kami Dekat Dengan</span></h1>\r\n<h1><span style=\"font-size: 36pt;\">MRT Lebak Bulus</span></h1>\r\n<p><span style=\"font-size: 24pt;\">Pesona Azalea</span></p>\r\n<p><span style=\"font-size: 24pt;\">MBR Residence</span></p>\r\n<p><span style=\"font-size: 24pt;\">Pesona Aglonema</span></p>'),
(44, 'konten-5', '<h1 class=\"font-weight-bold\">Mengapa Membeli Rumah Di Kami</h1>\n<h6>MB Properti merupakan developer properti spesialis lebak bulus &ndash; cirendeu yang berpengalaman lebih dari 10 tahun di bidangnya dan sudah merealisasikan 100+ keluarga untuk mendapatkan rumah impiannya.</h6>\n<h3 class=\"py-2 font-weight-bold\">MULAI 1,4 M!</h3>\n<h5 class=\"font-w\">&gt; LEGALITAS &amp; PEMBANGUNAN JELAS</h5>\n<h6 class=\"font-weight-light pb-2\">(SHM &amp; IMB Pecah Per Kavling)</h6>\n<h5>&gt; LOKASI STRATEGIS</h5>\n<h6 class=\"font-weight-light pb-2\">(4 KM Ke MRT Lebak Bulus)</h6>\n<h5>&gt; SKEMA PEMBAYARAN FLEKSIBEL DAN BERVARIASI</h5>\n<h6 class=\"font-weight-light pb-2\">(Tanpa Bunga, Tanpa Sita, Menyesuaikan Kemampuan Anda)</h6>\n<h5>&gt; DP BELAKANGAN, PROSES KPR DULUAN</h5>\n<h6 class=\"font-weight-light pb-2\">(DP Up to 0%)</h6>\n<h5>&gt; TERMASUK KATEGORI DEVELOPER GRADE A DI BANK BUMN</h5>\n<h6 class=\"font-weight-light pb-2\">(Perjanjian Kerjasama dengan BSI dan BTNs)</h6>\n<h5>&gt; GARANSI KUALITAS'),
(55, 'konten-6', '<h1 class=\"font-weight-bold\">SPESIFIKASI BANGUNAN</h1>\r\n<h6 class=\"py-2 font-weight-bold\">1. Pondasi: Batu kali, beton bertulang</h6>\r\n<h6 class=\"py-2 font-weight-bold\">2. Dinding Double Hebel</h6>\r\n<h6 class=\"py-2 font-weight-bold\">3. Kusen dan pintu: Alumunium dan Kayu Kamper</h6>\r\n<h6 class=\"py-2 font-weight-bold\">4.Cat luar: Jotun Jotashield</h6>\r\n<h6 class=\"py-2 font-weight-bold\">5. Cat dalam: Jotun Easy Wipe</h6>\r\n<h6 class=\"py-2 font-weight-bold\">6. Atap: Rangka atap baja ringan</h6>\r\n<h6 class=\"py-2 font-weight-bold\">7. Genteng beton</h6>\r\n<h6 class=\"py-2 font-weight-bold\">8. Lantai granite 60x60</h6>\r\n<h6 class=\"py-2 font-weight-bold\">9. Keramik kamar mandi mulia</h6>\r\n<h6 class=\"py-2 font-weight-bold\">10. Sanitair: Toto/setara</h6>\r\n<h6 class=\"py-2 font-weight-bold\">11. Listrik 2200</h6>\r\n<h6 class=\"py-2 font-weight-bold\">12. Air Bersih sumur pantek + Toren</h6>'),
(60, 'konten-7', '<h1 style=\"text-align: center;\">Dapatkan Promo PPKM<br>Bulan Ini</h1>\r\n<h5 class=\"font-italic text-danger\" style=\"text-align: center;\"><span style=\"color: rgb(186, 55, 42);\"><em>(berlaku dengan screenshot halaman ini)</em></span></h5>'),
(64, 'konten-8', 'FAQs'),
(65, 'konten-8', 'Bagaimana skema pembayarannya ?'),
(66, 'konten-8', 'Kami menyediakan 2 skema pembayaran :'),
(67, 'konten-8', '<ul>    <li>Cash</li>    <li>KPR (KPR kami bantu sampai akad)</li></ul>'),
(68, 'konten-8', 'Berapa lama waktu pembangunannya?'),
(69, 'konten-8', 'Tahap pembangunan 6 bulan'),
(70, 'konten-8', 'Untuk harga cash, boleh dicicil berapa lama?'),
(71, 'konten-8', 'Berbeda tergantung kebijakan developer. Ada yang 3 bulanada juga yang sampai 12 bulan. Bahkan ada juga (walaupunsangat jarang) yang KPR bertahun-tahun pun harganya samaseperti cash.<br />'),
(72, 'konten-8', 'Bila terjadi gagal bayar, bagaimana sistemnya? Apakahrumah akan disita ?'),
(73, 'konten-8', 'Bila terjadi gagal bayar Insya Allah tidak akan adapenyitaan terhadap unit rumah yang dibeli. Karena dalamsistem syariah rumah yang sudah melalui akad dandibayarkan DP sudah 100% menjadi hak milik pembeli.'),
(74, 'konten-8', 'Jika sertifikat tidak ditahan apakah tidak merugikan Developer ?'),
(75, 'konten-8', 'Developer sudah mengantisipasinya dengan caranya masing-masing, umumnya akan ada permintaan jaminan pengganti. Bisa itu berupa sertifikat tanah lain, BPKB kendaraan, atau yang lain. Semuanya Insya Allah akan dijelaskan oleh developer sebelum Anda fix membeli unit.'),
(76, 'konten-8', 'Bagaimana skema pembangunannya ?'),
(77, 'konten-8', 'Untuk pembangunan umumnya menggunakan akad pesan bangun atau akad istishna. Rata-rata untuk serah terima bangunan jika cash bisa mulai dari hanya sekitar 3 bulan, bisa jugasampai 18 bulan, memang sangat bervariasi tergantung developer. Dan jika menggunakan kredit, umumnya 8-24 bulan. Bisa juga lebih cepat misalkan beberapa bulan setelah DP lunas. Untuk unit yang ready stock, umumnya setelah DP lunas rumah bisa langsung ditempati.'),
(78, 'footer', 'MB Properti Office'),
(79, 'footer', 'PT. MEKAR BARU PROPERTI INDONESIA<br />Jl. Jalan Raya Cirendeu\r\nNo.107 Ciputat Timur, Tangsel (10 Menit Dari MRT Lebak Bulus)'),
(80, 'footer', 'mbproperti.com'),
(81, 'footer', 'Kontak Kami'),
(82, 'footer', '(+62) 82288773351'),
(83, 'footer', 'info@mbproperti.com'),
(84, 'footer', ' © 2022 PT. Mekar Baru Properti Indonesia. '),
(86, 'siteplan', 'Site Plan Pesona Azalea'),
(87, 'siteplan', 'Pinggir Jalan Raya Utama'),
(88, 'konten-7a', '<h1 style=\"text-align: center;\">Dapatkan Promo PPKM<br>Bulan Ini</h1>\r\n<h5 class=\"font-italic text-danger\" style=\"text-align: center;\"><span style=\"color: rgb(22, 145, 121);\"><em>(berlaku dengan screenshot halaman ini)</em></span></h5>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
