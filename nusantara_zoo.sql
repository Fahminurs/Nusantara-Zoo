-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2024 pada 09.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusantara_zoo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `Nama_Acara` varchar(50) NOT NULL,
  `Foto` text DEFAULT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `Waktu_Mulai` datetime NOT NULL,
  `Waktu_Berakhir` datetime DEFAULT NULL,
  `Deskripsi_Acara` text NOT NULL,
  `Nama_Pendata` varchar(50) NOT NULL,
  `Tanggal_Data_Masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id_acara`, `Nama_Acara`, `Foto`, `Lokasi`, `Waktu_Mulai`, `Waktu_Berakhir`, `Deskripsi_Acara`, `Nama_Pendata`, `Tanggal_Data_Masuk`) VALUES
(2, 'Atraksi Jerapah', 'Jerapah.jpg', 'Zona Jerapah', '2024-06-03 02:17:00', '2024-06-03 02:17:00', 'Jerapah adalah mamalia berkuku besar Afrika yang termasuk dalam genus Giraffa . Ini adalah hewan darat tertinggi yang masih hidup dan ruminansia terbesar di Bumi. Secara tradisional, jerapah dianggap sebagai satu spesies , Giraffa camelopardalis , dengan sembilan subspesies .', 'Fahmi Nursafaat', '2024-06-03 13:56:57'),
(10, 'Atraksi Harimau', 'HarimauSiberia.jpg', 'Zona Harimau', '2024-06-03 02:17:00', '2024-06-03 02:17:00', 'Pertunjukan harimau, atau &quot;Tiger Show,&quot; bisa merujuk pada berbagai jenis acara yang melibatkan harimau. Namun, sangat penting untuk menekankan perlunya memperlakukan hewan dengan hormat dan memastikan kesejahteraan mereka.', 'Fahmi Nursafaat', '2024-06-03 13:57:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(10) UNSIGNED NOT NULL,
  `Nama Hewan` varchar(50) NOT NULL,
  `Foto` text DEFAULT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Umur` varchar(10) NOT NULL,
  `Jenis Kelamin` varchar(191) NOT NULL,
  `Jenis Pakan` varchar(50) NOT NULL,
  `Berat` int(100) NOT NULL,
  `Klasifikasi` varchar(30) NOT NULL,
  `Asal` varchar(50) NOT NULL,
  `Habitat` varchar(50) NOT NULL,
  `Jenis hewan` varchar(50) NOT NULL,
  `Lokasi Kandang` varchar(50) NOT NULL,
  `Status Kesehatan` varchar(50) NOT NULL,
  `Status Konservasi` varchar(50) NOT NULL,
  `Deskripsi Hewan` text NOT NULL,
  `Nama Pendata` varchar(50) NOT NULL,
  `Tanggal Data Masuk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `Nama Hewan`, `Foto`, `Tanggal Lahir`, `Umur`, `Jenis Kelamin`, `Jenis Pakan`, `Berat`, `Klasifikasi`, `Asal`, `Habitat`, `Jenis hewan`, `Lokasi Kandang`, `Status Kesehatan`, `Status Konservasi`, `Deskripsi Hewan`, `Nama Pendata`, `Tanggal Data Masuk`) VALUES
(11, 'Harimau Siberia', 'HarimauSiberia.jpg', '2014-06-11', '9', 'Jantan', 'Daging', 50, 'Omnivora', '12', '12', 'Mamalia', 'Zona Harimau', 'Sehat', 'Rentan (VU)', 'Harimau siberia adalah subspesies harimau yang habitatnya berada di wilayah Rusia dan berstatus dilindungi. Harimau siberia dianggap sebagai subspesies terbesar dari enam subspesies harimau. Harimau siberia adalah hewan yang terancam punah. Kebanyakan hidup di sebuah wilayah kecil di sebelah selatan Timur Jauh Rusia.', 'Fahmi Nursafaat', '2024-06-03 14:50:12'),
(14, 'Bunglon', 'Bunglon.jpg', '2024-06-02', '0', 'Jantan', 'Serbuk Sereal', 12, 'Herbivora', '12', '12', 'Reptil', '12', 'Sehat', 'Rentan (VU)', 'Bunglon adalah sebutan khusus untuk beraneka jenis kadal/bengkarung yang memiliki kemampuan mengubah warna kulitnya. Secara umum, istilah &quot;bunglon&quot; digunakan untuk menyebut kadal-kadal dari suku Iguania termasuk Iguanidae, agamidae dan chamaeleonidae. Istilah dalam bahasa Inggris adalah Chameleon atau Chamaeleon.', 'Fahmi Nursafaat', '2024-06-03 13:48:29'),
(20, 'Jerapah', 'Jerapah.jpg', '1995-06-03', '29', 'Jantan', 'Rumput', 12, 'Karnivora', '12', '12', 'Reptil', '12', 'Sakit', 'Hampir Terancam (NT)', 'Jerapah Adalah', 'Fahmi Nursafaat', '2024-06-03 13:49:34'),
(21, 'Burung', 'Burung.jpg', '2024-06-03', '0', 'Jantan', 'Biji-bijian', 9876987, 'Herbivora', 'Majalengka', 'Majalengka', 'Mamalia', 'Cibiru', 'Sakit', 'Rentan (VU)', 'Burungg Terbangg', 'Ramdhan', '2024-06-03 13:50:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_05_25_223935_create_hewans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `Nama Pengunjung` varchar(50) DEFAULT NULL,
  `No_Tiket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `Nama Pengunjung`, `No_Tiket`) VALUES
(1, 'Fahmi', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CZGLgKeSxaIRM4mXyhJJyFeWX5K2cmKthZVp0UHK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieVQwdWFtOUQxSlBhdXFuWlRac0xSUVVWb3VXUGlBcDluTzNZSkkwTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9MYXBvcmFuIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0FkbWluL0Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNToicGVuZ3VuanVuZ19uYW1lIjtzOjE1OiJGYWhtaSBOdXJzYWZhYXQiO30=', 1717400853),
('EU1mnu6ZwFmS5t0RtSWFOYePJB23GYx3Wys2ecm8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNlNCbVh2a1pjb1UxWDU3OVVVTUxERVhOeEJhWkc2T25SelN3Nk5ERiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly80ZjgyLTEyNS0xNjQtMjItOS5uZ3Jvay1mcmVlLmFwcC9QZXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNToicGVuZ3VuanVuZ19uYW1lIjtzOjU6IkFiZHVsIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1717400930),
('JRHI62F2iodSjpledGKIkpI64Mgf2AGL71JF2aIY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZUY2M1IzdWY1VjdBSVM3TG5QT2tLSUZxcTRrTDd6a0JycEphRXV4dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly80ZjgyLTEyNS0xNjQtMjItOS5uZ3Jvay1mcmVlLmFwcC9BZG1pbi9IZXdhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6InBlbmd1bmp1bmdfbmFtZSI7czo2OiJhbG1la2kiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1717401403),
('OfZMRvwnCVCDjNnxG5U2JYtUlV5Pnl2Q9BYblNL3', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN1JmTUtqY0NyRnN5dGRkV2dmcUJWN0RxbHNrb3RYNG1pNkgySHB4eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly80ZjgyLTEyNS0xNjQtMjItOS5uZ3Jvay1mcmVlLmFwcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6InBlbmd1bmp1bmdfbmFtZSI7czo2OiJIYW1tYW0iO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1717397666),
('QRWSvqOEEnAPgmDWX37vkUwKhPahRlKEFu5mT9mV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVFWNVJxdVQ4TkV6ZzUzYlRTN0FKUmwyQWR5V0FaRkpBelRSVENUWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly80ZjgyLTEyNS0xNjQtMjItOS5uZ3Jvay1mcmVlLmFwcC9sb2dpbmFkbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6InBlbmd1bmp1bmdfbmFtZSI7czo1OiJhaWRoYSI7fQ==', 1717401402),
('t8CTLGk0pgnzCHGoTDe1L7aFaGhB2KDLhjNG8NKv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGpuZm1QVzRCbVliTjdRUWZrblBVWTdZWXdRblpkbDVBZlRheXNkdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly80ZjgyLTEyNS0xNjQtMjItOS5uZ3Jvay1mcmVlLmFwcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717399213),
('uyFJKwkZu2kxWObdHhAvj8ama65sIDLnRKpOHWdn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT05zdjBMT0NFdklPSUlOVXl6RkpCSEZ4bnRDYzYweFg0QTFMWXJWMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9BZG1pbi9IZXdhbiI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9BZG1pbi9IZXdhbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNToicGVuZ3VuanVuZ19uYW1lIjtzOjE1OiJGYWhtaSBOdXJzYWZhYXQiO30=', 1717401051);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` enum('Admin','Pengunjung') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mas Admin', 'admin@gmail.com', NULL, '$2y$12$I9yhu2j3SfJ2JJCb.Pizou1RoCnbyyFsrvz3FLRXqSnV34PXOqZHu', 'Admin', NULL, '2024-05-19 05:57:25', '2024-05-19 05:57:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`),
  ADD UNIQUE KEY `hewan_id_hewan_unique` (`id_hewan`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
