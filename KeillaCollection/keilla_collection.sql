-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 07:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keilla_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `role`) VALUES
(1, 'admin', 'admin', 'Admin Keilla Collection', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, '2021-06-04', 100000),
(3, 1, '2021-07-04', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 2, 1),
(2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 'SETELAN AIRA POLOS//MUSLIM', 120000, 150, '6dc97299-2a11-4bb1-8619-8dae14154f0d.jpg', 'WARNA KAIN TERKADANG BEDA GELAP TERANG TERGANTUNG EFEK PENCAHAYAAN SAAT MENGAMBIL GAMBAR ATAUPUN SAAT RESTOCK ULANG DARI PABRIK. YANG DIKLIK = YANG DIKIRIMKAN, TIDAK MENERIMA PERGANTIAN LEWAT CHAT ATAUPUN NOTE. MEMBELI DIANGGAP SUDAH MEMBACA = NO KOMPLAIN.\r\n---------------------------------------------\r\n-WARNA :  HITAM, NAVY, MAROON, ABU-ABU, MUSTARD, DAN COKLAT\r\n-BAHAN : HYGET PREMIUM\r\n-LD : ±  110CM\r\n-PJ.BADAN : ± 67CM\r\n-PJ.LENGAN-+ 48CM\r\n-LP CELANA-+ 100CM SUDAH MELAR\r\n-PJ CELANA-+90CM\r\n-L.PAHA-+58CM\r\nMODEL SETELAN POLOS ,  LENGAN KARET YAA\r\nKOMBINASI MOTIF MENYESUAIKAN DARI KONVEKSI ( NO COMPLAIN)!!'),
(2, 'SETELAN SALUR INDIRA', 100000, 500, '2bc28dd0-fe33-4f74-bb22-5120b37a6bea (1).jpg', '-WARNA :  HITAM, NAVY, MAROON, ARMY, COKLAT DAN PUTIH\r\n-BAHAN : HYGET PRREMIUM\r\n-LD : ±  1106CM\r\n-PJ.BADAN : ± 67CM\r\n-PJ.LENGAN-+ 48CM\r\n-LP CELANA-+ 100CM SUDAH MELAR\r\n-PJ CELANA-+90CM\r\n-L.PAHA-+58CM\r\nMODEL SETELAN , LENGAN KARET SERUT YAA\r\nKOMBINASI MOTIF MENYESUAIKAN DARI KONVEKSI ( NO COMPLAIN)!!'),
(3, 'Rok plisket Mutiara', 27000, 500, '36548580-94ba-4c66-8fbe-f0d4bf3d1d02.jpg', '			bahan hyget premium\r\nukuran allsize fit to xxl, jumbo ya cantik, \r\npanjang 90-92cm\r\npinggang 65cm		'),
(7, 'GAMIS RAYON SULTAN', 215000, 700, '856b97d3-4668-4901-85ad-f851f5d31ba8.jpg', 'Hello kaka sebelum membeli sebaiknya di baca dulu ya diskripsinya biar belanja puas\r\nyuk di checout sebelum kehabisan stok dan barangnya\r\n\r\nDetail Produk :\r\n~Bahan RAYON berkualitas\r\n~LD :110cm\r\n~P    :189cm\r\n~Bahan halus dan adem\r\n~Motif variant sultan terbaru\r\n~Bahan tidak nerawang\r\n~Bisa bayar ditempat(COD)\r\n\r\nSelamat berbelanja di toko kami shopee,semoga merasa puas dan tidak mengecewakan\r\n#gamisrayon'),
(8, 'setelan motif sultan rayon', 125000, 500, 'b32ff091-f6d7-4744-8f1a-c607e587c1df.jpg', 'setelan sultan rayon\r\nbahan rayon\r\nld 110-115 cm\r\npc 95cm\r\nbahan adem, lembut, nyaman dipakai'),
(9, 'setelan tiedye warna', 120000, 680, '289359f7-26d6-48ce-b51c-c192c79509d9.jpg', '			bahan rayon\r\nLd 110cm\r\nPc 95cm\r\nbahan adem nyaman dipakai, tidak nerawang		'),
(12, 'SETELAN MOTIF ABSTRAK NAGITA//TERBARU/COD', 32000, 500, 'a90ded79-84e6-4737-8566-2584ac7fe8bd.jpg', 'Hello kaka yuk di kepoin setelan abstraknya terbaru\r\nsebelum membeli baca dulu diskripsinya \r\n\r\nDetail Produk:\r\nBahan jersey/hyget kualitas \r\nBahan adem,lembut dan licin\r\nBahan tidak menerawang saat di pakai sehari-hari\r\nFull kerutan pinggang\r\nFull kerutan lengan\r\nLD : 100cm\r\nPC : 90cm\r\nMotif varian banyak dengan warna berbedah\r\nBisa COD (BAYAR DI TEMPAT)\r\nBisa menerima GROSIR DAN ECERAN ,lebih murah kalau beli grosir\r\n\r\nSelamat belanja di shopee ,semoga belanja memuaskan dan tidak mengecewakan\r\n#setelanabstrak#setelansultan#setelanakar#setelanaira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
