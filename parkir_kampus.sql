-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2025 at 04:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_parkir`
--

CREATE TABLE `area_parkir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kapasitas` int(11) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `kampus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `area_parkir`
--

INSERT INTO `area_parkir` (`id`, `nama`, `kapasitas`, `keterangan`, `kampus_id`) VALUES
(1, 'Parkir Utama Kampus A', 200, 'Dekat gerbang', 1),
(2, 'Parkir 2 Kampus A', 250, 'Dekat Masjid Nurul Fikri, depan lapangan futsal', 1),
(3, 'Parkir Depan Kampus B', 100, 'Dekat gerbang', 2),
(4, 'Parkir Karyawan Kampus B', 200, 'Area B1', 2),
(5, 'Parkir 1 Mahasiswa Kampus B', 200, 'Depan Mushola Wanita dan Pos satpam', 2),
(6, 'Parkir 2 Mahasiswa Kampus B', 100, 'Depan Area B3 dan B4', 2),
(7, 'Parkir Khusus Kepemimpinan NF', 50, 'Setelah tangga area B2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1750213389),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1750213389;', 1750213389);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(2, 'Mobil'),
(1, 'Motor'),
(4, 'Tank');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `nama`, `alamat`, `latitude`, `longtitude`) VALUES
(1, 'Kampus A STT Terpadu Nurul Fikri', 'Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat, Indonesia', -6.363391, -49),
(2, 'Kampus B STT Terpadu Nurul Fikri', 'Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan', -6.3589, 106.8504),
(3, 'Kampus C STT Terpadu Nurul Fikri', 'Semarrang', -60450, -928349),
(4, 'Kampus D STT Terpadu Nurul Fikri', 'Semarang', -910329, -192273);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `pemilik` varchar(40) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `tahun_beli` int(11) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `jenis_kendaraan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `merk`, `pemilik`, `nopol`, `tahun_beli`, `deskripsi`, `jenis_kendaraan_id`) VALUES
(1, 'Honda', 'Aqila', 'F 2354 FG', 2024, 'Beat 125 hitam', 1),
(2, 'Honda', 'Awa', 'F 5674 UIA', 2023, 'Vario 125 hitam', 1),
(3, 'Yamaha', 'Intan', 'B 1156 AAU', 2022, 'Fazzio merah', 1),
(4, 'Yamaha', 'Eshi', 'B 1706 IF', 2019, 'Fazzio silver', 1),
(5, 'Honda', 'Della', 'AD 5990 ABG', 2017, 'Vario 150 hitam', 1),
(6, 'Honda', 'Rusmanto', 'B 3423 WAG', 2019, 'Mobil Rush putih', 2),
(7, 'Honda', 'Dalias', 'B 2539 JH', 2017, 'Mobil CRV putih', 2),
(8, 'Yamaha', 'Razan', 'F 987 ADU', 2019, 'PCX hitam', 1),
(9, 'Yamaha', 'Haidar', 'B 5674 HIL', 2023, 'Aerox merah', 1),
(10, 'Yamaha', 'Danang', 'AA 5639 IL', 2018, 'Aerox hitam', 1),
(11, 'Toyota', 'Candra', 'E 7780 DFS', 2016, 'Avanza putih', 2),
(12, 'Mitsubishi', 'Sandi', 'E 5476 JK', 2024, 'Xpander hitam', 2),
(13, 'Suzuki', 'Sinta', 'F 9023 HKL', 2021, 'Baleno Merah', 2),
(14, 'Honda', 'Meisha', 'E 3221 IPP', 2018, 'Scoopy putih', 1),
(15, 'Yamaha', 'Doni', 'B 6741 ABT', 2019, 'Mio biru', 1),
(16, 'Vespa', 'Erza', 'AA 7644 BH', 2024, 'Vesmest putih', 1),
(17, 'Kawasaki', 'Ulya', 'AD 7765 AG', 2022, 'Ninja hijau', 1),
(18, 'Honda', 'Indah', 'B 2678 SDT', 2019, 'PCX putih', 1),
(19, 'Honda', 'Ica', 'F 893 IJK', 2020, 'Beat sport hitam', 1),
(20, 'Yamaha', 'Rian', 'B 7536 DKM', 2025, 'Aerox hitam', 1),
(21, 'Yamaha', 'Ulfa', 'E 2349 UL', 2020, 'Lexi kuning', 1),
(22, 'Vespa', 'Putri', 'B 796 CD', 2015, 'Vespa kuning', 1),
(23, 'Suzuki', 'Vita', 'B 1256 ZX', 2019, 'Nex II merah', 1),
(24, 'Honda', 'Zahra', 'E 1765 UYC', 2020, 'Scoopy pink', 1),
(25, 'Yamaha', 'Rina', 'B 7746 IB', 2021, 'Freego hitam', 1),
(26, 'Honda', 'Rini', 'B 899 BNB', 2020, 'Beat hijau', 1),
(27, 'Honda', 'Aura', 'B 7841 LK', 2021, 'Beat biru', 1),
(28, 'Vespa', 'Bima', 'B 3791 ADD', 2021, 'Vespa hijau', 1),
(29, 'Yamaha', 'Fino', 'B 7121 ADU', 2021, 'Fino coksu', 1),
(30, 'Honda', 'Bunga', 'B 2386 DEU', 2022, 'Vario putih', 1),
(31, 'Honda', 'Nanda', 'B 2998 DUI', 2019, 'Revo merah', 1),
(32, 'Honda', 'Narnia', 'B 9876 OOP', 2018, 'Beat merah putih', 1),
(33, 'Honda', 'Ilham', 'E 9987 IKL', 2019, 'Beat putih', 1),
(34, 'Honda', 'Cinta', 'B 1279 KLM', 2020, 'PCX hitam', 1),
(35, 'Yamaha', 'Elang', 'AA 375 ABH', 2015, 'Mio merah', 1),
(36, 'Honda', 'Eka', 'B 1897 ASD', 2021, 'Beat hitam doff', 1),
(37, 'Suzuki', 'Haikal', 'E 8736 AHU', 2020, 'Smash merah', 1),
(38, 'Yamaha', 'Piti', 'E 2983 JJK', 2018, 'Shogun hujau', 1),
(39, 'Honda', 'Jihan', 'B 235 JUI', 2021, 'Beat merah putih', 1),
(40, 'Kawasaki', 'Johan', 'B 9567 MN', 2019, 'W175 hitam', 1),
(41, 'Honda', 'Rahman', 'B 9863 ASD', 2021, 'Beat putih', 1),
(42, 'Honda', 'Wulan', 'B 1998 KJM', 2020, 'Beat biru', 1),
(43, 'Suzuki', 'Fikri', 'B 2876 DFD', 2019, 'Shogun biru', 1),
(44, 'Vespa', 'Ivan', 'B 1176 JH', 2022, 'Vesmest hijau', 1),
(45, 'Honda', 'Febrian', 'B 9797 BUN', 2021, 'Blade hitam', 1),
(46, 'Kawasaki', 'Doni', 'E 8891 AAD', 2021, 'Z125 pro hijau', 1),
(47, 'Yamaha', 'Vina', 'B 3698 ASE', 2020, 'Mio S merah', 1),
(48, 'Honda', 'Dinta', 'B 3675 AD', 2020, 'Beat hitam', 1),
(49, 'Vespa', 'Dzikra', 'E 3789 KJ', 2021, 'Vesmest biru', 1),
(50, 'Yamaha', 'Dina', 'B 983 HH', 2020, 'Gear 125 silver', 1),
(51, 'Honda', 'Diana', 'B 7768 KK', 2020, 'Vario 160 putih', 1),
(52, 'Honda', 'Ahmad', 'B 997 JH', 2021, 'Supra X', 1),
(53, 'Honda', 'Fimay', 'B 2657 IPJ', 2021, 'Scoopy hitam', 1),
(54, 'Yamaha', 'Ridho', 'F 9987 KLJ', 2020, 'Fazzio kuning', 1),
(55, 'Yamaha', 'Rizky', 'F 7654 FF', 2023, 'Fazzio merah', 1),
(56, 'Yamaha', 'Danang', ' B 3456 TI', 2026, 'Aerox', 1),
(57, 'Honda', 'Razan', 'Z 1234 SI', 2000, 'Beat merah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('m0wCq44XJPZMAUHCsYwfYRXonBejAQQQt78TrPIG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicTBxRHV0dTZpWHJhUFdSQVpNUXNJcnNvY0k0Rkg3a2JMa2hIN040diI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1750213945),
('MXrXLBZrWLGDbSzU7YiLGjf5XNmre4gZeZbZ1kSo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWlPR0M0WEh6U0pkYnpzb3VZb1UxMlFDUzZySGdkN2UxbkpBOEhXWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750212404),
('Rq57J0pMxAejMIEzGoWhvXeVJpDGV3TJPOMGqNbn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0RZSTdoY2M4andVVW9BRXljMHp5czhIR0Nxc0pjNGVmRmdHc0hZbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750210525);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `akhir` time NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `biaya` double NOT NULL,
  `kendaraan_id` int(11) NOT NULL,
  `area_parkir_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `mulai`, `akhir`, `keterangan`, `biaya`, `kendaraan_id`, `area_parkir_id`) VALUES
(1, '2025-04-27', '07:45:00', '16:45:55', 'Parkir Pagi - sore', 7000, 1, 5),
(2, '2025-04-27', '12:40:00', '16:10:58', 'Parkir sore', 3000, 2, 6),
(3, '2025-04-27', '12:03:08', '18:28:51', 'Parkir sore', 3000, 3, 6),
(4, '2025-04-27', '06:09:37', '18:28:51', 'Parkir fulltime', 6000, 4, 6),
(5, '2025-04-27', '06:09:37', '11:30:22', 'Parkir pagi', 3000, 5, 6),
(6, '2025-04-27', '09:02:44', '17:35:00', 'Parkir fulltime', 10000, 6, 1),
(7, '2025-04-27', '08:09:29', '17:33:47', 'Parkir fulltime', 10000, 7, 3),
(8, '2025-04-27', '12:10:29', '17:30:24', 'Parkir siang sore', 4000, 8, 5),
(9, '2025-04-27', '13:15:56', '17:45:18', 'Parkir siang sore', 5500, 9, 7),
(10, '2025-04-27', '07:59:47', '10:50:59', 'Parkir pagi', 3000, 10, 7),
(11, '2025-04-27', '07:31:11', '18:12:53', 'Parkir fulltime', 10000, 11, 1),
(12, '2025-04-27', '08:10:59', '14:22:27', 'Parkir pagi siang', 8500, 12, 1),
(13, '2025-04-27', '06:19:49', '18:22:27', 'Parkir fulltime', 10500, 13, 3),
(14, '2025-04-27', '07:35:39', '10:29:23', 'Parkir pagi', 3500, 14, 2),
(15, '2025-04-27', '07:10:09', '17:23:00', 'Parkir fulltime', 5000, 15, 5),
(16, '2025-04-27', '07:56:17', '18:03:07', 'Parkir fulltime', 5000, 16, 5),
(17, '2025-04-27', '08:13:45', '17:33:00', 'Parkir fulltime', 8000, 17, 3),
(18, '2025-04-27', '06:30:00', '10:45:15', 'Parkir pagi', 2500, 18, 3),
(19, '2025-04-27', '11:12:32', '16:43:59', 'Parkir siang sore', 5000, 19, 4),
(20, '2025-04-27', '09:40:11', '14:40:11', 'Parkir siang', 4000, 20, 6),
(21, '2025-04-27', '07:10:17', '12:30:00', 'Parkir pagi siang', 5000, 21, 6),
(22, '2025-04-27', '10:00:00', '18:00:00', 'Parkir fulltime', 7000, 22, 6),
(23, '2025-04-27', '07:23:45', '13:00:00', 'Parkir pagi siang', 4500, 23, 6),
(24, '2025-04-27', '06:45:30', '17:45:30', 'Parkir fulltime', 9000, 24, 6),
(25, '2025-04-27', '09:20:00', '15:30:00', 'Parkir siang', 3000, 25, 6),
(26, '2025-04-27', '08:00:00', '12:00:00', 'Parkir pagi', 2000, 26, 5),
(27, '2025-04-27', '07:05:55', '13:45:00', 'Parkir pagi siang', 4500, 27, 5),
(28, '2025-04-27', '06:50:00', '18:00:00', 'Parkir fulltime', 10000, 28, 5),
(29, '2025-04-27', '07:15:00', '10:15:00', 'Parkir pagi', 3000, 29, 5),
(30, '2025-04-27', '08:45:00', '17:45:00', 'Parkir fulltime', 10000, 30, 5),
(31, '2025-04-27', '12:30:00', '18:00:00', 'Parkir sore', 3500, 31, 5),
(32, '2025-04-27', '07:35:00', '16:00:00', 'Parkir fulltime', 8000, 32, 5),
(33, '2025-04-27', '07:50:00', '11:30:00', 'Parkir pagi', 2500, 33, 5),
(34, '2025-04-27', '08:10:00', '14:00:00', 'Parkir pagi siang', 4000, 34, 5),
(35, '2025-04-27', '09:00:00', '15:00:00', 'Parkir siang', 4000, 35, 5),
(36, '2025-04-27', '10:15:00', '18:15:00', 'Parkir siang sore', 6000, 36, 5),
(37, '2025-04-27', '07:30:00', '13:00:00', 'Parkir pagi siang', 4000, 37, 5),
(38, '2025-04-27', '08:20:00', '17:10:00', 'Parkir fulltime', 9000, 38, 5),
(39, '2025-04-27', '06:50:00', '10:50:00', 'Parkir pagi', 3000, 39, 5),
(40, '2025-04-27', '08:00:00', '17:00:00', 'Parkir fulltime', 9500, 40, 5),
(41, '2025-04-27', '07:30:00', '11:45:00', 'Parkir pagi', 3500, 41, 5),
(42, '2025-04-27', '09:30:00', '15:00:00', 'Parkir siang', 3000, 42, 5),
(43, '2025-04-27', '06:55:00', '13:55:00', 'Parkir pagi siang', 5000, 43, 5),
(44, '2025-04-27', '08:10:00', '17:10:00', 'Parkir fulltime', 8500, 44, 5),
(45, '2025-04-27', '10:45:00', '18:00:00', 'Parkir siang sore', 6500, 45, 5),
(46, '2025-04-27', '07:15:00', '11:15:00', 'Parkir pagi', 2500, 46, 5),
(47, '2025-04-27', '09:20:00', '14:20:00', 'Parkir siang', 4000, 47, 5),
(48, '2025-04-27', '06:40:00', '17:00:00', 'Parkir fulltime', 9500, 48, 5),
(49, '2025-04-27', '08:00:00', '10:00:00', 'Parkir pagi', 2000, 49, 5),
(50, '2025-04-27', '10:00:00', '17:00:00', 'Parkir siang sore', 7000, 50, 5),
(51, '2025-04-27', '07:30:00', '12:30:00', 'Parkir pagi siang', 5000, 51, 5),
(52, '2025-04-27', '08:50:00', '00:01:00', 'Selesai', 5000, 52, 5),
(53, '2025-04-27', '09:30:00', '15:30:00', 'Parkir siang', 4000, 53, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$GggTyywsrK99F0/TaU06xuDQdBafnkO5WnLNQD9OlsQ8ch1dqrxWe', NULL, '2025-06-17 19:16:21', '2025-06-17 19:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD KEY `fk_area_parkir_kampus1_idx` (`kampus_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  ADD KEY `fk_kendaraan_jenis_idx` (`jenis_kendaraan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_kendaraan1_idx` (`kendaraan_id`),
  ADD KEY `fk_transaksi_area_parkir1_idx` (`area_parkir_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_parkir`
--
ALTER TABLE `area_parkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD CONSTRAINT `fk_area_parkir_kampus1` FOREIGN KEY (`kampus_id`) REFERENCES `kampus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_kendaraan_jenis` FOREIGN KEY (`jenis_kendaraan_id`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_area_parkir1` FOREIGN KEY (`area_parkir_id`) REFERENCES `area_parkir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_kendaraan1` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
