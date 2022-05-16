-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pk
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@gmail.com','e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'konten-8a','azalea.jpg'),(2,'konten-1','bg0.png'),(3,'konten-5','bg1.jpg'),(4,'konten-3','bg1.png'),(5,'konten-5','bg2.jpg'),(6,'konten-3','bg2.png'),(7,'konten-6','bg3.jpg'),(8,'konten-6','bg4.jpg'),(9,'konten-7','bg5.jpg'),(12,'konten-5a','carousel1.jpg'),(13,'konten-5a','carousel2.jpg'),(14,'konten-5a','carousel3.jpg'),(15,'konten-4','cluster1.png'),(16,'konten-4','cluster2.png'),(17,'konten-4','cluster3.png'),(25,'konten-8b','rumah3.jpg'),(33,'siteplan','siteplan.jpg'),(34,'konten-8a','zinnia.jpeg'),(35,'navbar','MB_logo.png'),(47,'Doe','16-1.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan`
--

LOCK TABLES `pesan` WRITE;
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` VALUES (1,'zuhal','zuhalrobbani@upi.edu','085758069591','tanya','harganya berapa yaaa');
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `keyword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` VALUES (1,'Rumah Dekat MRT | MB Properti','Perusahaan yang bergerak bidang pembangunan dan penjualan cluster perumahan di Dekat MRT','rumah dekat mrt lebak bulus,Jual Rumah Cirendeu,jual rumah ciputat,jual rumah cirendeu raya,jual rumah dekat mrt,jual rumah lebak bulus,perumahan lebak bulus,rumah dekat mrt,rumah lebak bulus,cirendeu residence,cluster cirendeu,rumah dijual di cirendeu,jual rumah tanjung barat,rumah tanjung barat,perumahan tanjung barat,dijual rumah tanjung barat,apartemen tanjung barat,apartemen mahata tanjung barat,kontrakan tanjung barat,perumahan tanjung barat indah,rancho indah tanjung barat,harga apartemen mahata tanjung barat,rumah dijual di tanjung barat,rumah dijual tanjung barat,rumah dijual di tanjung barat 450 juta,apartemen di tanjung barat,jual rumah tanjung barat indah,komplek tanjung barat indah,rumah di tanjung barat,kontrakan di tanjung barat,rumah dijual di rancho indah tanjung barat,jual rumah di tanjung barat,rumah dijual tanjung barat indah,kontrakan di tanjung barat jakarta selatan,rumah dijual di tanjung barat indah,harga apartemen southgate tanjung barat,perumahan rancho indah tanjung barat,perumahan di tanjung barat,kontrakan murah di tanjung barat,kontrakan petakan di tanjung barat,kontrakan daerah tanjung barat,jual apartemen mahata tanjung barat,harga apartemen tanjung barat,kontrakan murah tanjung barat,tanjung barat apartemen,rumah murah di tanjung barat,edenhaus tanjung barat,rumah kontrakan di tanjung barat,apartemen tod tanjung barat,perum tanjung barat indah,jual rumah jalan nangka tanjung barat,jual rumah cirendeu,jual rumah ciputat,jual rumah lebak bulus,rumah dijual lebak bulus,jual rumah di ciputat,rumah dijual cirendeu,perumahan dekat mrt lebak bulus,jual rumah di lebak bulus,jual rumah di cirendeu,jual rumah bona indah,serenia hills lebak bulus harga,rumah dijual di bona indah lebak bulus,harga rumah di ciputat,perumahan murah di ciputat,perumahan daerah ciputat,harga rumah di lebak bulus,rumah dijual di ciputat tangerang selatan,rumah lebak bulus murah,rumah kpr murah di jombang ciputat,dijual rumah lebak bulus,dijual rumah di lebak bulus,rumah di ciputat olx,jual rumah dekat mrt lebak bulus,rumah dijual di bukit cirendeu,jual rumah bali view cirendeu,dijual rumah di ciputat,apartemen ciputat murah,rumah dijual di bali view cirendeu,rumah lebak bulus dijual,rumah dijual di bukit nusa indah ciputat,jual rumah lebak bulus indah,jual rumah karang tengah lebak bulus,jual serenia hills lebak bulus,rumah dijual karang tengah lebak bulus,jual rumah murah di ciputat,rumah dijual di serenia hills lebak bulus,rumah dijual bona vista lebak bulus,rumah murah di lebak bulus,jual rumah bona indah lebak bulus,rumah dijual di villa delima lebak bulus,dijual rumah di cirendeu,jual rumah di bali view cirendeu,rumah ciputat olx,rumah dijual di bumi karang indah lebak bulus,rumah dijual villa delima,dijual rumah ciputat,rumah ciputat murah,rumah dijual bumi karang indah,rumah bona indah dijual,rumah dijual di lebak lestari indah,rumah serenia hills dijual,rumah ciputat dijual,jual rumah villa delima,rumah dijual kampung ubud cirendeu,jual rumah di serenia hills lebak bulus,jual rumah serenia hills lebak bulus,jual rumah di bona indah lebak bulus,rumah murah di cirendeu,jual rumah bumi karang indah,jual rumah di lebak bulus jakarta selatan,jual rumah lebak lestari indah,rumah dijual di river valley lebak bulus,jual rumah bukit nusa indah ciputat,rumah di cirendeu dijual,jual rumah paradise resort ciputat,rumah cirendeu dijual,jual apartemen ciputat,olx rumah ciputat,rumah dijual di ciputat dekat uin,rumah dijual di jombang ciputat,dijual rumah cirendeu,harga rumah lebak bulus,rumah dijual bali view cirendeu,harga rumah ciputat,jual rumah taman kedaung ciputat,harga rumah serenia hills lebak bulus,rumah murah cirendeu,harga rumah di paradise resort ciputat,jual rumah cirendeu permai,rumah dijual di taman kedaung ciputat,jual rumah lebak bulus,dijual rumah lebak bulus,rumah dekat mrt,jual rumah dekat mrt,perumahan lebak bulus,rumah dijual di lebak bulus,rumah dijual lebak bulus,perumahan di lebak bulus,jual rumah di lebak bulus,rumah dijual di lebak bulus jakarta selatan,harga rumah di lebak bulus,rumah murah lebak bulus,rumah lebak bulus murah,perumahan di lebak bulus jakarta selatan,dijual rumah di lebak bulus,rumah lebak bulus dijual,rumah murah di lebak bulus,rumah dijual lebak bulus jakarta selatan,jual rumah di lebak bulus jakarta selatan,harga rumah lebak bulus,perumahan lebak bulus jakarta selatan,rumah lebak bulus,rumah lebak bulus dijual,rumah cirendeu,perumahan cirendeu,dijual rumah di ciputat,perumahan daerah ciputat,perumahan ciputat,jual rumah lebak bulus,rumah dijual di lebak bulus jakarta selatan,cluster lebak bulus,rumah dijual di lebak bulus,rumah dijual di bukit cirendeu,rumah dijual di bali view cirendeu,perumahan di lebak bulus jakarta selatan,mrt lebak bulus,jual rumah bukit nusa indah ciputat,jual rumah bumi karang indah,jual serenia hills lebak bulus,rumah dekat stasiun mrt,rumah syariah cirendeu,rumah syariah lebak bulus,rumah di lebak bulus,jual rumah cirendeu,jual rumah ciputat,jual rumah di ciputat,perumahan di ciputat,rumah ciputat,perumahan di lebak bulus,jual rumah di lebak bulus,rumah dijual cirendeu,serenia hills lebak bulus harga,rumah murah cirendeu,rumah mrt,rumah murah di cirendeu,rumah serenia hills dijual,rumah murah lebak bulus,rumah dekat mrt,rumah dekat mrt lebak bulus,rumah dijual bali view cirendeu,rumah syariah dekat mrt,');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `text`
--

DROP TABLE IF EXISTS `text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(10) NOT NULL,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text`
--

LOCK TABLES `text` WRITE;
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
INSERT INTO `text` VALUES (1,'navbar','<p>Tentang</p>'),(2,'navbar','<p>Galeri</p>'),(3,'navbar','<p>Daftar Harga</p>'),(4,'navbar','<p>Promo</p>'),(5,'navbar','<p>FAQs</p>'),(6,'navbar','<p>Kontak</p>'),(7,'navbar','<p>Site Plan</p>'),(8,'konten-1','<h1 style=\"text-align: center;\">HUNIAN YANG STRATEGIS</h1>\n<h1 style=\"text-align: center;\"><span style=\"font-size: 36pt;\"><strong>FREE BIAYA PAJAK, </strong></span><br><span style=\"font-size: 36pt;\"><strong>SURAT DAN KPR</strong></span></h1>\n<h2 style=\"text-align: center;\">Terintegrasi Transportasi Umum, 3KM ke MRT, 9 Menit ke<br>TRANSJAKARTA Stopstation, Dilewati Angkot</h2>'),(12,'konten-2','<h1 style=\"text-align: center;\"><strong>PROMO BULAN INI</strong></h1>\r\n<h1 style=\"text-align: center;\"><strong>BEBAS MERDEKA</strong></h1>\r\n<h1 style=\"text-align: center;\"><strong>MERDEKA BIAYA</strong></h1>\r\n<p style=\"text-align: center;\"><strong>BEBAS </strong>Ubah Denah Rumah, <strong>BEBAS </strong>Pilih Hadiah, <strong>BEBAS </strong>Pilih Skema Pembayaran</p>\r\n<p style=\"text-align: center;\">KPR, ASURANSI JIWA NASABAH, NOTARIS, PAJAK PEMBELI, BALIK NAMA, PPN, BPHTB, AJB</p>'),(17,'konten-3','<h1 class=\"font-weight-bold\">Mulai 1.4 M</h1>\r\n<h3 class=\"font-weight-bold\">Luas Tanah 60 - 90m<sup>2</sup></h3>\r\n<h3 class=\"font-weight-bold\">Luas Bangunan 85 - 110m<sup>2</sup></h3>\r\n<h3 class=\"font-weight-bold\">2 Lantai + Rooftop</h3>\r\n<h3 class=\"font-weight-bold\">3 Kamar Tidur</h3>\r\n<h3 class=\"font-weight-bold\">3 Kamar Mandi</h3>'),(26,'konten-3a','<h1 class=\"font-weight-bold\">Fasilitas Umum</h1>\r\n<h3 class=\"font-weight-bold\">Security 24 Jam</h3>\r\n<h3 class=\"font-weight-bold\">Musholla</h3>\r\n<h3 class=\"font-weight-bold\">Mini Gym</h3>\r\n<h3 class=\"font-weight-bold\">Kolam Renang</h3>'),(28,'konten-4','<h1><span style=\"font-size: 36pt;\">3 Cluster Kami Dekat Dengan</span></h1>\r\n<h1><span style=\"font-size: 36pt;\">MRT Lebak Bulus</span></h1>\r\n<p><span style=\"font-size: 24pt;\">Pesona Azalea</span></p>\r\n<p><span style=\"font-size: 24pt;\">MBR Residence</span></p>\r\n<p><span style=\"font-size: 24pt;\">Pesona Aglonema</span></p>'),(44,'konten-5','<h1 class=\"font-weight-bold\">Mengapa Membeli Rumah Di Kami</h1>\n<h6>MB Properti merupakan developer properti spesialis lebak bulus &ndash; cirendeu yang berpengalaman lebih dari 10 tahun di bidangnya dan sudah merealisasikan 100+ keluarga untuk mendapatkan rumah impiannya.</h6>\n<h3 class=\"py-2 font-weight-bold\">MULAI 1,4 M!</h3>\n<h5 class=\"font-w\">&gt; LEGALITAS &amp; PEMBANGUNAN JELAS</h5>\n<h6 class=\"font-weight-light pb-2\">(SHM &amp; IMB Pecah Per Kavling)</h6>\n<h5>&gt; LOKASI STRATEGIS</h5>\n<h6 class=\"font-weight-light pb-2\">(4 KM Ke MRT Lebak Bulus)</h6>\n<h5>&gt; SKEMA PEMBAYARAN FLEKSIBEL DAN BERVARIASI</h5>\n<h6 class=\"font-weight-light pb-2\">(Tanpa Bunga, Tanpa Sita, Menyesuaikan Kemampuan Anda)</h6>\n<h5>&gt; DP BELAKANGAN, PROSES KPR DULUAN</h5>\n<h6 class=\"font-weight-light pb-2\">(DP Up to 0%)</h6>\n<h5>&gt; TERMASUK KATEGORI DEVELOPER GRADE A DI BANK BUMN</h5>\n<h6 class=\"font-weight-light pb-2\">(Perjanjian Kerjasama dengan BSI dan BTNs)</h6>\n<h5>&gt; GARANSI KUALITAS'),(55,'konten-6','<h1 class=\"font-weight-bold\">SPESIFIKASI BANGUNAN</h1>\r\n<h6 class=\"py-2 font-weight-bold\">1. Pondasi: Batu kali, beton bertulang</h6>\r\n<h6 class=\"py-2 font-weight-bold\">2. Dinding Double Hebel</h6>\r\n<h6 class=\"py-2 font-weight-bold\">3. Kusen dan pintu: Alumunium dan Kayu Kamper</h6>\r\n<h6 class=\"py-2 font-weight-bold\">4.Cat luar: Jotun Jotashield</h6>\r\n<h6 class=\"py-2 font-weight-bold\">5. Cat dalam: Jotun Easy Wipe</h6>\r\n<h6 class=\"py-2 font-weight-bold\">6. Atap: Rangka atap baja ringan</h6>\r\n<h6 class=\"py-2 font-weight-bold\">7. Genteng beton</h6>\r\n<h6 class=\"py-2 font-weight-bold\">8. Lantai granite 60x60</h6>\r\n<h6 class=\"py-2 font-weight-bold\">9. Keramik kamar mandi mulia</h6>\r\n<h6 class=\"py-2 font-weight-bold\">10. Sanitair: Toto/setara</h6>\r\n<h6 class=\"py-2 font-weight-bold\">11. Listrik 2200</h6>\r\n<h6 class=\"py-2 font-weight-bold\">12. Air Bersih sumur pantek + Toren</h6>'),(60,'konten-7','<h1 style=\"text-align: center;\">Dapatkan Promo PPKM<br>Bulan Ini</h1>\r\n<h5 class=\"font-italic text-danger\" style=\"text-align: center;\"><span style=\"color: rgb(186, 55, 42);\"><em>(berlaku dengan screenshot halaman ini)</em></span></h5>'),(64,'konten-8','FAQs'),(65,'konten-8','Bagaimana skema pembayarannya ?'),(66,'konten-8','Kami menyediakan 2 skema pembayaran :'),(67,'konten-8','<ul>    <li>Cash</li>    <li>KPR (KPR kami bantu sampai akad)</li></ul>'),(68,'konten-8','Berapa lama waktu pembangunannya?'),(69,'konten-8','Tahap pembangunan 6 bulan'),(70,'konten-8','Untuk harga cash, boleh dicicil berapa lama?'),(71,'konten-8','Berbeda tergantung kebijakan developer. Ada yang 3 bulanada juga yang sampai 12 bulan. Bahkan ada juga (walaupunsangat jarang) yang KPR bertahun-tahun pun harganya samaseperti cash.<br />'),(72,'konten-8','Bila terjadi gagal bayar, bagaimana sistemnya? Apakahrumah akan disita ?'),(73,'konten-8','Bila terjadi gagal bayar Insya Allah tidak akan adapenyitaan terhadap unit rumah yang dibeli. Karena dalamsistem syariah rumah yang sudah melalui akad dandibayarkan DP sudah 100% menjadi hak milik pembeli.'),(74,'konten-8','Jika sertifikat tidak ditahan apakah tidak merugikan Developer ?'),(75,'konten-8','Developer sudah mengantisipasinya dengan caranya masing-masing, umumnya akan ada permintaan jaminan pengganti. Bisa itu berupa sertifikat tanah lain, BPKB kendaraan, atau yang lain. Semuanya Insya Allah akan dijelaskan oleh developer sebelum Anda fix membeli unit.'),(76,'konten-8','Bagaimana skema pembangunannya ?'),(77,'konten-8','Untuk pembangunan umumnya menggunakan akad pesan bangun atau akad istishna. Rata-rata untuk serah terima bangunan jika cash bisa mulai dari hanya sekitar 3 bulan, bisa jugasampai 18 bulan, memang sangat bervariasi tergantung developer. Dan jika menggunakan kredit, umumnya 8-24 bulan. Bisa juga lebih cepat misalkan beberapa bulan setelah DP lunas. Untuk unit yang ready stock, umumnya setelah DP lunas rumah bisa langsung ditempati.'),(78,'footer','<h5 class=\"font-weight-bold\">MB Properti Office</h5>\r\n            <p>\r\n              PT. MEKAR BARU PROPERTI INDONESIA<br />Jl. Jalan Raya Cirendeu\r\n              No.107 Ciputat Timur, Tangsel (10 Menit Dari MRT Lebak Bulus)\r\n            </p>\r\n            <p>mbproperti.com</p>'),(79,'footer','<h5 class=\"font-weight-bold\">Kontak Kami</h5>\r\n            <p>(+62) 82288773351</p>\r\n            <p>info@mbproperti.com</p>'),(86,'siteplan','Site Plan Pesona Azalea'),(87,'siteplan','Pinggir Jalan Raya Utama'),(88,'konten-7a','<h1 style=\"text-align: center;\">Dapatkan Promo PPKM<br>Bulan Ini</h1>\r\n<h5 class=\"font-italic text-danger\" style=\"text-align: center;\"><span style=\"color: rgb(22, 145, 121);\"><em>(berlaku dengan screenshot halaman ini)</em></span></h5>'),(89,'youtube','https://www.youtube.com/embed/bnBsBRRA93A'),(90,'youtube','https://www.youtube.com/embed/Z-Il0vxzTQk'),(91,'youtube','https://www.youtube.com/embed/reQhUwYMDQ4'),(92,'youtube','https://www.youtube.com/embed/7PeznlVg_o4'),(93,'sosmed','https://www.fb.com/ptmbproperti'),(94,'sosmed','https://www.instagram.com/mbproperti/'),(95,'sosmed','https://www.youtube.com/channel/UCVpRbQ9p-6W6ajbRxIooL0Q/featured'),(96,'sosmed','https://www.linkedin.com/company/mb-properti/'),(97,'sosmed','https://t.me/MbpropertiInfo'),(98,'konten-7','<h5 class=\"py-2\" style=\"line-height: 1.5\">\r\n              Bebas Rubah Denah Rumah Sesukamu<br />\r\n              Skema Pembayaran fleksibel dan Bervariasi<br />\r\n              Dp Belakangan<br />\r\n              SHM IMB pecah per kavling<br />\r\n              Gratis Biaya KPR<br />\r\n              Gratis Biaya Asuransi Jiwa Nasabah<br />\r\n              Gratis Biaya Notaris<br />\r\n              Gratis Biaya Pajak Pembeli<br />\r\n              Gratis Biaya Balik Nama<br />\r\n              Gratis PPN<br />\r\n              Gratis BPHTB<br />\r\n              Gratis AJB<br />\r\n              Gratis Biaya Balik Nama<br />\r\n              Tanpa Bunga<br />\r\n              Tanpa Sita\r\n            </h5>\r\n            <h5 class=\"py-2\" style=\"line-height: 1.5\">\r\n              Bonus Hadiah Langsung:<br />\r\n              Yamaha Nmax<br />\r\n              Iphone 13 Pro<br />\r\n              Logam Mulia Emas 20gr<br />\r\n              Casback Tambahan upto 20jt\r\n            </h5>');
/*!40000 ALTER TABLE `text` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-16 12:29:47
