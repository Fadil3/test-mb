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
INSERT INTO `image` VALUES (1,'konten-8a','azalea.jpg'),(2,'konten-1','bg0.png'),(3,'konten-5','bg1.jpg'),(4,'konten-3','bg1.png'),(5,'konten-5','bg2.jpg'),(6,'konten-3','bg2.png'),(7,'konten-6','bg3.jpg'),(8,'konten-6','bg4.jpg'),(9,'konten-7','bg5.jpg'),(12,'konten-5a','carousel1.jpg'),(13,'konten-5a','carousel2.jpg'),(14,'konten-5a','carousel3.jpg'),(15,'konten-4','cluster1.png'),(16,'konten-4','cluster2.png'),(17,'konten-4','cluster3.png'),(25,'konten-8b','rumah3.jpg'),(33,'siteplan','siteplan.jpg'),(34,'konten-8a','zinnia.jpeg'),(35,'navbar','MB_logo.png'),(41,'Doe','Lambang-Pangkat-Polisi-Perwira-.png'),(42,'Doe','Lambang-Pangkat-Polisi-Perwira-.png'),(43,'Doe','5.jpg'),(44,'Doe','14.jpg'),(45,'Doe','16-1.jpg'),(46,'Doe','5.jpg'),(47,'Doe','16-1.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text`
--

LOCK TABLES `text` WRITE;
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
INSERT INTO `text` VALUES (1,'navbar','Tentang'),(2,'navbar','Galeri'),(3,'navbar','Daftar Harga'),(4,'navbar','Promo'),(5,'navbar','FAQs'),(6,'navbar','Kontak'),(7,'navbar','Site Plan'),(8,'konten-1','HUNIAN YANG STRATEGIS'),(9,'konten-1','FREE BIAYA PAJAK,'),(10,'konten-1','SURAT DAN KPR'),(11,'konten-1','Terintegrasi Transportasi Umum, 3KM ke MRT, 9 Menit ke TRANSJAKARTA Stopstation, Dilewati Angkot'),(12,'konten-2','PROMO BULAN INI'),(13,'konten-2','BEBAS MERDEKA'),(14,'konten-2','<b>BEBAS </b>Ubah Denah Rumah <b>BEBAS </b>Pilih Hadiah <b>BEBAS </b>Pilih Skema Pembayaran'),(15,'konten-2','MERDEKA BIAYA'),(16,'konten-2','KPR, ASURANSI JIWA NASABAH, NOTARIS, PAJAK PEMBELI, BALIK NAMA, PPN, BPHTB, AJB'),(17,'konten-3','Mulai 1.4 M'),(18,'konten-3','Luas Tanah 60 - 90m<sup>2</sup>'),(19,'konten-3','Luas Bangunan 85 - 110m<sup>2</sup>'),(20,'konten-3','2 Lantai + Rooftop'),(21,'konten-3','3 Kamar Tidur'),(22,'konten-3','3 Kamar Mandi'),(23,'konten-3','Fasilitas Umum'),(24,'konten-3','Security 24 Jam'),(25,'konten-3','Musholla'),(26,'konten-3','Mini Gym'),(27,'konten-3','Kolam Renang'),(28,'konten-4','3 Cluster Kami Dekat Dengan'),(29,'konten-4','MRT Lebak Bulus'),(30,'konten-4','Pesona Azalea'),(31,'konten-4','MBR Residence'),(32,'konten-4','Pesona Aglonema'),(33,'konten-5','Mengapa Membeli Rumah Di Kami'),(34,'konten-5','MB Properti merupakan developer properti spesialis lebak bulus –cirendeu yang berpengalaman lebih dari 10 tahun di bidangnya dansudah merealisasikan 100+ keluarga untuk mendapatkan rumahimpiannya.'),(35,'konten-5','MULAI 1,4 M!'),(36,'konten-5','> LEGALITAS & PEMBANGUNAN JELAS'),(37,'konten-5','(SHM & IMB Pecah Per Kavling)'),(38,'konten-5','(4 KM Ke MRT Lebak Bulus)'),(39,'konten-5','> SKEMA PEMBAYARAN FLEKSIBEL DAN BERVARIASI'),(40,'konten-5','(Tanpa Bunga, Tanpa Sita, Menyesuaikan Kemampuan Anda)'),(41,'konten-5','> DP BELAKANGAN, PROSES KPR DULUAN'),(42,'konten-5','(DP Up to 0%)'),(43,'konten-5','> TERMASUK KATEGORI DEVELOPER GRADE A DI BANK BUMN'),(44,'konten-5','(Perjanjian Kerjasama dengan BSI dan BTNs)'),(45,'konten-5','> GARANSI KUALITAS BANGUNAN, KELISTRIKAN, DAN SANITASI'),(46,'konten-5','(Kepuasan Anda Adalah Prioritas Kami)'),(47,'konten-6','SPESIFIKASI BANGUNAN'),(48,'konten-6','1. Pondasi: Batu kali, beton bertulang'),(49,'konten-6','2. Dinding Double Hebel'),(50,'konten-6','3. Kusen dan pintu: Alumunium dan Kayu Kamper'),(51,'konten-6','4.Cat luar: Jotun Jotashield'),(52,'konten-6','5. Cat dalam: Jotun Easy Wipe'),(53,'konten-6','6. Atap: Rangka atap baja ringan'),(54,'konten-6','7. Genteng beton'),(55,'konten-6','8. Lantai granite 60x60'),(56,'konten-6','9. Keramik kamar mandi mulia'),(57,'konten-6','10. Sanitair: Toto/setara'),(58,'konten-6','11. Listrik 2200'),(59,'konten-6','12. Air Bersih sumur pantek + Toren'),(60,'konten-7','Dapatkan Promo PPKM <br />Bulan Ini'),(61,'konten-7','(berlaku dengan screenshot halaman ini)'),(62,'konten-7','Bebas Rubah Denah Rumah Sesukamu<br />\r\nSkema Pembayaran fleksibel dan Bervariasi<br />\r\nDp Belakangan<br />\r\nSHM IMB pecah per kavling<br />\r\nGratis Biaya KPR<br />\r\nGratis Biaya Asuransi Jiwa Nasabah<br />\r\nGratis Biaya Notaris<br />\r\nGratis Biaya Pajak Pembeli<br />\r\nGratis Biaya Balik Nama<br />\r\nGratis PPN<br />\r\nGratis BPHTB<br />\r\nGratis AJB<br />\r\nGratis Biaya Balik Nama<br />\r\nTanpa Bunga<br />\r\nTanpa Sita'),(63,'konten-7','Bonus Hadiah Langsung:<br />\r\nYamaha Nmax<br />\r\nIphone 13 Pro<br />\r\nLogam Mulia Emas 20gr<br />\r\nCasback Tambahan upto 20jt'),(64,'konten-8','FAQs'),(65,'konten-8','Bagaimana skema pembayarannya ?'),(66,'konten-8','Kami menyediakan 2 skema pembayaran :'),(67,'konten-8','<ul>\r\n    <li>Cash</li>\r\n    <li>KPR (KPR kami bantu sampai akad)</li>\r\n</ul>'),(68,'konten-8','Berapa lama waktu pembangunannya?'),(69,'konten-8','Tahap pembangunan 6 bulan'),(70,'konten-8','Untuk harga cash, boleh dicicil berapa lama?'),(71,'konten-8','Berbeda tergantung kebijakan developer. Ada yang 3 bulan\r\nada juga yang sampai 12 bulan. Bahkan ada juga (walaupun\r\nsangat jarang) yang KPR bertahun-tahun pun harganya sama\r\nseperti cash.<br />'),(72,'konten-8','Bila terjadi gagal bayar, bagaimana sistemnya? Apakah\r\nrumah akan disita ?'),(73,'konten-8','Bila terjadi gagal bayar Insya Allah tidak akan ada\r\npenyitaan terhadap unit rumah yang dibeli. Karena dalam\r\nsistem syariah rumah yang sudah melalui akad dan\r\ndibayarkan DP sudah 100% menjadi hak milik pembeli.'),(74,'konten-8','Jika sertifikat tidak ditahan apakah tidak merugikan\r\nDeveloper ?'),(75,'konten-8','Developer sudah mengantisipasinya dengan caranya\r\nmasing-masing, umumnya akan ada permintaan jaminan\r\npengganti. Bisa itu berupa sertifikat tanah lain, BPKB\r\nkendaraan, atau yang lain. Semuanya Insya Allah akan\r\ndijelaskan oleh developer sebelum Anda fix membeli unit.'),(76,'konten-8','Bagaimana skema pembangunannya ?'),(77,'konten-8','Untuk pembangunan umumnya menggunakan akad pesan bangun\r\natau akad istishna. Rata-rata untuk serah terima bangunan\r\njika cash bisa mulai dari hanya sekitar 3 bulan, bisa juga\r\nsampai 18 bulan, memang sangat bervariasi tergantung\r\ndeveloper. Dan jika menggunakan kredit, umumnya 8-24\r\nbulan. Bisa juga lebih cepat misalkan beberapa bulan\r\nsetelah DP lunas. Untuk unit yang ready stock, umumnya\r\nsetelah DP lunas rumah bisa langsung ditempati.'),(78,'footer','MB Properti Office'),(79,'footer','PT. MEKAR BARU PROPERTI INDONESIA<br />Jl. Jalan Raya Cirendeu\r\nNo.107 Ciputat Timur, Tangsel (10 Menit Dari MRT Lebak Bulus)'),(80,'footer','mbproperti.com'),(81,'footer','Kontak Kami'),(82,'footer','(+62) 82288773351'),(83,'footer','info@mbproperti.com'),(84,'footer',' © 2022 PT. Mekar Baru Properti Indonesia. '),(85,'konten-5','> LOKASI STRATEGIS'),(86,'siteplan','Site Plan Pesona Azalea'),(87,'siteplan','Pinggir Jalan Raya Utama');
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

-- Dump completed on 2022-05-13 15:35:40
