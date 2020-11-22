-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul`, `penulis`, `genre`, `description`) VALUES
(1, 'img/laskar-pelangi-cover.jpg', 'Laskar Pelangi', 'Andrea HIrata', 'Novel', 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.'),
(2, 'img/bumi-manusia-cover.jpg', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Novel, Fiksi Sejarah', 'Bumi Manusia adalah buku pertama dari Tetralogi Buru karya Pramoedya Ananta Toer yang pertama kali diterbitkan oleh Hasta Mitra pada tahun 1980. Buku ini ditulis Pramoedya Ananta Toer ketika masih mendekam di Pulau Buru.'),
(3, 'img/ronggeng-dukuh-paruk-cover.jpg', 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', 'Fiksi', 'Ronggeng Dukuh Paruk adalah sebuah novel yang ditulis oleh penulis Indonesia asal Banyumas, Ahmad Tohari, dan diterbitkan pertama kali tahun 1982. Novel ini bercerita tentang kisah cinta antara Srintil, seorang penari ronggeng, dan Rasus, teman sejak kecil Srintil yang berprofesi sebagai tentara.'),
(4, 'img/negeri-5-menara-cover.jpg', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Fiksi', 'Negeri 5 Menara adalah roman karya Ahmad Fuadi yang diterbitkan oleh Gramedia pada tahun 2009. Novel ini bercerita tentang kehidupan 6 santri dari 6 daerah yang berbeda menuntut ilmu di Pondok Madani Ponorogo Jawa Timur yang jauh dari rumah dan berhasil mewujudkan mimpi menggapai jendela dunia.'),
(5, 'img/cantik-itu-luka-cover.jpg', 'Cantik Itu Luka', 'Eka Kurniawan', 'Fiksi', 'Cantik itu Luka merupakan novel pertama karya penulis Indonesia, Eka Kurniawan. Pertama kali diterbitkan tahun 2002 atas kerjasama Akademi Kebudayaan Yogyakarta dan Penerbit Jendela. Edisi kedua dan seterusnya, diterbitkan oleh Gramedia Pustaka Utama sejak tahun 2004.'),
(6, 'img/filosofi-teras-cover.jpg', 'Filosofi Teras', 'Henry Manampiring', 'Non Fiksi', 'Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.'),
(7, 'img/sebuah-seni-untuk-bersikap-bodo-amat-cover.jpg', 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Mark Manson', 'Buku bantuan diri', 'Sebuah Seni untuk Bersikap Bodo Amat: Pendekatan yang Waras Demi Menjalani Hidup yang Baik atau The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life adalah buku kedua Mark Manson, seorang narablog dan penulis.'),
(8, 'img/the-martian-cover.jpg', 'The Martian', 'Andy Weir', 'Novel, Fiksi Ilmiah', 'Enam hari yang lalu, astronaut Mark Watney menjadi salah satu orang pertama yang menjejakkan kaki di Mars. Sekarang dia yakin akan menjadi yang pertama mati di sana. Mark ditinggalkan di Mars oleh rekan-rekannya, yang mengira dia tewas ketika terjadi badai pasir. Sekarang dia sendirian, tak punya sarana untuk mengirim sinyal ke Bumi, dan persediaan makanannya sudah pasti akan habis lama sebelum tim penyelamat bisa datang.'),
(9, 'img/contact-cover.jpg', 'Contact', 'Carl Sagan', 'Novel, Fiksi Ilmiah', 'Contact adalah novel fiksi ilmiah keras 1985 oleh ilmuwan Amerika Carl Sagan. Ini berkaitan dengan tema kontak antara manusia dan bentuk kehidupan ekstraterestrial yang lebih maju secara teknologi. Ini peringkat No 7 pada daftar buku terlaris AS A.S.'),
(10, 'img/golden-son-cover.jpg', 'Golden Son', 'Pierce Brown', 'Sci Fi', 'Golden Son adalah novel fiksi ilmiah 2015 karya penulis Amerika Pierce Brown, yang kedua dalam trilogi Red Rising-nya. Sekuel Red Rising 2014, Golden Son terus mengikuti rencana Darrow rendahan untuk menghancurkan Society dari dalam.');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(255) DEFAULT NULL,
  `batas_pengembalian` date DEFAULT NULL,
  `denda` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
