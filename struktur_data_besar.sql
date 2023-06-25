-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 18.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `struktur_data_besar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(4) UNSIGNED NOT NULL,
  `nama` char(255) NOT NULL,
  `harga` char(255) NOT NULL,
  `stok` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Minyak Goreng', '11000', '150', '2023-06-18 07:44:29', '2023-06-18 08:58:00'),
(2, 'Beras 5 KG', '50000', '140', '2023-06-18 07:45:04', '2023-06-18 09:06:11'),
(3, 'Beras 10 KG', '100000', '95', '2023-06-18 07:45:26', '2023-06-18 08:43:02'),
(4, 'Tepung Terigu', '13000', '200', '2023-06-18 07:45:51', '2023-06-18 07:45:51'),
(5, 'Indomie Goreng', '3500', '950', '2023-06-18 07:46:11', '2023-06-18 07:58:00'),
(6, 'Indomie Soto', '3500', '980', '2023-06-18 07:46:30', '2023-06-18 07:59:25'),
(7, 'Sabun Lifeboy 100ml', '11000', '196', '2023-06-18 07:47:21', '2023-06-18 07:58:44'),
(8, 'Shampo Dove 250ml', '15000', '100', '2023-06-18 07:47:43', '2023-06-18 07:47:43'),
(9, 'Dunhil Black 16s', '27000', '20', '2023-06-18 08:03:39', '2023-06-18 08:03:39'),
(10, 'Marlboro Long 16s', '27000', '20', '2023-06-18 08:05:29', '2023-06-18 08:05:29'),
(11, 'Juara Kretek', '15000', '20', '2023-06-18 08:05:50', '2023-06-18 08:05:50'),
(12, 'Juara Filter', '21000', '20', '2023-06-18 08:06:06', '2023-06-18 08:06:06'),
(13, 'Gajah Baru', '15000', '20', '2023-06-18 08:06:26', '2023-06-18 08:06:26'),
(14, 'Kopi Kapal Api 250Gr', '6000', '100', '2023-06-18 08:07:21', '2023-06-18 08:07:21'),
(15, 'Rokok Surya', '20000', '30', '2023-06-18 08:56:47', '2023-06-18 08:56:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsumens`
--

INSERT INTO `konsumens` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Esa Age', NULL, NULL),
(2, 'Nopal Firman', NULL, NULL),
(3, 'Zaedar', NULL, NULL),
(4, 'Khazin sang milyarder', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_062351_create_barangs_table', 1),
(6, '2023_06_14_085225_create_transaksis_table', 2),
(7, '2023_06_14_092952_create_konsumens_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konsumen_id` bigint(255) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` char(255) NOT NULL,
  `harga` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `konsumen_id`, `barang_id`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(11, 3, 1, '10', '110000', '2023-06-18 07:51:06', '2023-06-18 07:51:06'),
(12, 4, 3, '50', '5000000', '2023-06-18 07:56:47', '2023-06-18 07:56:47'),
(13, 2, 5, '50', '175000', '2023-06-18 07:58:00', '2023-06-18 07:58:00'),
(14, 1, 7, '4', '44000', '2023-06-18 07:58:44', '2023-06-18 07:58:44'),
(15, 2, 6, '20', '70000', '2023-06-18 07:59:25', '2023-06-18 07:59:25'),
(16, 3, 1, '30', '330000', '2023-06-18 07:59:52', '2023-06-18 07:59:52'),
(17, 3, 3, '5', '500000', '2023-06-18 08:43:02', '2023-06-18 08:43:02'),
(18, 1, 2, '10', '500000', '2023-06-18 09:06:11', '2023-06-18 09:06:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sku` (`barang_id`),
  ADD KEY `sku_2` (`barang_id`),
  ADD KEY `konsumen` (`konsumen_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79879;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_ibfk_2` FOREIGN KEY (`konsumen_id`) REFERENCES `konsumens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
