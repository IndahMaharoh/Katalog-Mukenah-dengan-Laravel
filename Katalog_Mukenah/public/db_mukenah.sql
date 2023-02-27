-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 04:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mukenah`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal`
--

CREATE TABLE `asal` (
  `asal_id` int(11) NOT NULL,
  `kota_asal` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asal`
--

INSERT INTO `asal` (`asal_id`, `kota_asal`, `updated_at`, `created_at`) VALUES
(1, 'Semarang', '2023-01-15 19:16:04', '2023-01-15 19:17:16'),
(2, 'Sidoarjo', '2023-01-15 19:16:04', '2023-01-15 19:17:16'),
(3, 'Surabaya', '2023-01-15 19:16:04', '2023-01-15 19:17:16'),
(4, 'Tasikmalaya', '2023-01-15 19:16:04', '2023-01-15 19:17:16'),
(5, 'Jakarta Barat', '2023-01-15 19:16:04', '2023-01-15 19:17:16'),
(6, 'Madiun', '2023-01-17 11:42:47', '2023-01-17 11:42:47'),
(7, 'jk  jjuh', '2023-01-18 07:30:08', '2023-01-17 11:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_mukenah`
--

CREATE TABLE `bahan_mukenah` (
  `bahan_id` varchar(20) NOT NULL,
  `bahan` varchar(80) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahan_mukenah`
--

INSERT INTO `bahan_mukenah` (`bahan_id`, `bahan`, `keterangan`, `updated_at`, `created_at`) VALUES
('bn001', 'katun rayon', 'dingin, tekstur lembut, mudah lusuh', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn002', 'sutra', 'anggun, elastis, tahan panas dan dingin', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn003', 'spandex', 'dingin,lembut,mudah diatur,susah menyerap keringat', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn004', 'katun lokal', 'mudah menyerap keringat', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn005', 'katun silk', 'elegan', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn006', 'katun jepang', 'dingin, tidak mudah luntur, daya serap keringat ba', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn007', 'katun paris', 'daya serap keringat baik, ', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn008', 'parasut', 'ringan, tipis, tahan air, cocok untuk traveling', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn009', 'Hyget', 'lumayan tebal', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn010', 'katun premium', 'adem, halus, ringan dan tidak menerawang', '2023-01-16 19:59:34', '2023-01-16 19:59:34'),
('bn213', 'dd', 'dddd', '2023-01-18 08:04:07', '2023-01-18 08:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `merk_mukenah`
--

CREATE TABLE `merk_mukenah` (
  `merk_id` varchar(20) NOT NULL,
  `merk_nama` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk_mukenah`
--

INSERT INTO `merk_mukenah` (`merk_id`, `merk_nama`, `updated_at`, `created_at`) VALUES
('mk001', 'Tazbiyah', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk002', 'Siti Khadijah', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk003', 'Tatuis', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk004', 'Diario', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk005', 'Zain Moslem Fashion', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk006', 'Syadzilah', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk007', 'Rashwal', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk008', 'Deenay Scarves', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk009', 'Meccanism', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk010', 'Cotton Inch', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk011', 'Laamia', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk012', 'Fazilla', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk013', 'Syaffania', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk014', 'RGB Arabian', '2023-01-16 20:00:22', '2023-01-16 20:00:22'),
('mk20', 'fff jhjhh', '2023-01-18 07:59:58', '2023-01-17 21:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_produk`
--

CREATE TABLE `rincian_produk` (
  `produk_id` varchar(24) NOT NULL,
  `gambar_produk` varchar(400) NOT NULL,
  `nama_produk` varchar(400) NOT NULL,
  `merk_id` varchar(20) NOT NULL,
  `bahan_id` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_toko` varchar(200) NOT NULL,
  `asal_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `link` text NOT NULL,
  `penjelasan` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rincian_produk`
--

INSERT INTO `rincian_produk` (`produk_id`, `gambar_produk`, `nama_produk`, `merk_id`, `bahan_id`, `harga`, `nama_toko`, `asal_id`, `rating`, `link`, `penjelasan`, `updated_at`, `created_at`) VALUES
('pd0001', 'img\\1.jpg', 'Laamia Mukenah Jumbo Amplop Travelling Bahan Hyget / mukenah polos jumbo hyget by', 'mk011', 'bn009', 34500, 'laamiahijab', 1, 4.5, 'https://shopee.co.id/product/14175065/7455448968?smtt=0.562352337-1667442728.9 ', 'Bahannya lumayan tebal mirip seperti bahan kaos, ada rendra yang mempercantik tampilan, serta tas amplop yang cocok digunakan untuk traveling', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd0002', 'img/2.jpg', 'Mukena 2 In 1 Fazilla Dewasa Pouch Kecil Resleting Katun Travel - Hijau Mint', 'mk012', 'bn001', 87500, 'mithahermalia', 4, 4.9, 'https://www.tokopedia.com/mitahermalia/mukena-2-in-1-fazilla-dewasa-pouch-kecil-resleting-katun-travel-hijau-mint?extParam=ivf%3Dfalse&src=topads', 'ni adalah mukena dengan model 2 in 1, dibawah dagu memakai resleting agar bagian muka bisa di atur dengan mudah, serta penutup kepala bisa di pakai atau buka.', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd0003', 'img/3.jpg', 'Mukena Travel 2 in 1 Ponco Dewasa Katun Premium Jumbo', 'mk013', 'bn010', 66500, 'Mukena Syaffania', 4, 4.9, 'https://www.tokopedia.com/syaffania/mukena-travel-2-in-1-ponco-dewasa-katun-premium-jumbo-hitam', ' Aplikasi renda cantik elegan mengelilingi mukena, bagian depan diberi retsleiting Jepang untuk memudahkan mengatur (adjustable) ukuran bagian wajah pengguna. Cocok untuk digunakan saat travelling atau untuk penggunaaan sehari-hari🌹', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd0004', 'img/4.jpg', '100% original RGB Arabian mukenah putusan rample renda import bahan Uniklo', 'mk014', 'bn001', 250000, 'Bubu Shop sby', 4, 5, 'https://www.lazada.co.id/products/100-original-rgb-arabian-mukenah-putusan-rample-renda-import-bahan-uniklo-i6303216492-s11977092974.html?clickTrackInfo=undefined&search=1&source=search&spm=a2o4j.searchlist.list.50', 'Super jumbo,ada rumbai + renda import, resleting bagian bawah dagu,jd bisa menyesuaikan bentuk wajah', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd0005', 'img/5.jpg', 'Tazbiya List 2IN1 Baqiya Series Allsize ', 'mk001', 'bn001', 331000, 'indiana.jones89', 5, 0, 'https://shopee.co.id/product/555939899/21934289945?smtt=0.562352337-1669275616.3', 'motif dengan warna solid, aksen motif pada bagian rok, tampilannya unik, tidak pasaran, terdapat zipper di bagian leher bawah', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd0006', 'img/6.jpg', 'Mukena Dewasa Khatijah Free Tas Mukenah Jumbo Bahan Katun Premium Bahan Adem', 'mk002', 'bn001', 135000, 'stokmee', 5, 4.8, 'https://shopee.co.id/product/275475996/4893599331?smtt=0.562352337-1669276523.3', 'motif cantik, kainnya dingin, include tas cantik, halus, lembut, ada ikat kepalanya, murah namun tidak murahan', '2023-01-16 20:01:01', '2023-01-16 20:01:01'),
('pd1216', '5.jpg', 'xxx', 'mk002', 'bn008', 87500, 'Mukena Syaffania', 3, 5, 'https://shopee.co.id/product/555939899/21934289945?smtt=0.562352337-1669275616.3', 'tebal, lembut, dingin', '2023-01-18 01:06:15', '2023-01-18 01:06:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`asal_id`);

--
-- Indexes for table `bahan_mukenah`
--
ALTER TABLE `bahan_mukenah`
  ADD PRIMARY KEY (`bahan_id`);

--
-- Indexes for table `merk_mukenah`
--
ALTER TABLE `merk_mukenah`
  ADD PRIMARY KEY (`merk_id`);

--
-- Indexes for table `rincian_produk`
--
ALTER TABLE `rincian_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `bahan_id` (`bahan_id`),
  ADD KEY `merk_id` (`merk_id`),
  ADD KEY `asal_id` (`asal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
