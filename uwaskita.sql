-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2024 pada 16.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uwaskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `nidn`, `email`, `photo`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Eni Sud', '12345', 'eni@uas.com', 'C:\\xampp\\tmp\\phpE330.tmp', '2024-05-21 03:25:13', '2024-05-21 09:59:46', 7),
(3, 'Cia Cahya', '21212121', 'cia@uas.com', 'C:\\xampp\\tmp\\php4FE2.tmp', '2024-05-21 15:56:19', '2024-05-21 15:56:19', NULL),
(6, 'Wahyu Yuya', NULL, 'yuya@uas.com', NULL, '2024-05-21 21:32:32', '2024-05-21 21:32:32', 15);

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
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `nim`, `email`, `photo`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Sang Kala Aji', '3222054', 'aji2@uas.com', '2747073020_shred body, cinematic, traditional wear, detailed_esrgan-v1-x2plus.png', '2024-05-21 02:17:46', '2024-05-21 10:08:36', NULL),
(2, 'Toni Paat', '3222080', 'toni@uas.com', NULL, '2024-05-21 04:22:17', '2024-05-21 04:22:17', NULL),
(7, 'sonia', '131232214', 'sonia@uas.com', 'sonia.png', '2024-05-21 10:12:22', '2024-05-21 10:12:22', NULL),
(9, 'Koko Kusuma', '3222987', 'koko@uas.com', 'Koko Kusuma.png', '2024-05-21 15:57:46', '2024-05-21 15:57:46', NULL),
(10, 'Kaneki Yusuf', '3222059', 'yusuf@uas.com', '2884858482_A man sits on a grassy field, reaching out his han_xl-beta-v2-2-2.png', '2024-05-21 16:27:15', '2024-05-21 17:51:44', 10),
(11, 'Kuya yahya', '3223879', 'kuya@uas.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_kuliahs`
--

INSERT INTO `mata_kuliahs` (`id`, `kode`, `nama`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'PG-05', 'Pemrograman', 3, '2024-05-21 05:31:39', '2024-05-21 17:53:08'),
(2, 'TS-010', 'Kalkulus', 3, '2024-05-21 07:30:39', '2024-05-21 07:30:39'),
(3, 'PG-09', 'Kewirausahaan', 2, '2024-05-21 16:07:32', '2024-05-21 16:07:32'),
(4, 'TS-101', 'IoT', 2, '2024-05-21 16:09:40', '2024-05-21 16:09:40'),
(5, 'KW-010', 'Kewirausahaan', 2, '2024-05-21 17:53:52', '2024-05-21 17:53:52'),
(6, 'KY', 'Kewirausahaan', 2, '2024-05-21 21:25:37', '2024-05-21 21:25:37');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_21_002526_create_mahasiswas_table', 1),
(6, '2024_05_21_002537_create_dosens_table', 1),
(7, '2024_05_21_002652_create_mata_kuliahs_table', 1),
(8, '2024_05_21_002709_create_tahun_akademiks_table', 1),
(9, '2024_05_21_002716_create_nilais_table', 1),
(10, '2024_05_21_095538_add_user_id_to_mahasiswas_table', 2),
(11, '2024_05_21_095538_add_user_id_to_dosens_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `mata_kuliah_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_akademik_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_tugas` double(8,2) DEFAULT NULL,
  `nilai_uts` double(8,2) DEFAULT NULL,
  `nilai_uas` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `mahasiswa_id`, `mata_kuliah_id`, `tahun_akademik_id`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 4, 100.00, 100.00, 100.00, '2024-05-21 06:13:12', '2024-05-21 06:13:12'),
(5, 9, 2, 4, 90.00, 76.00, 70.00, '2024-05-21 16:16:28', '2024-05-21 16:16:28'),
(7, 10, 4, 3, 100.00, 90.00, 89.00, '2024-05-21 17:56:22', '2024-05-21 17:56:22'),
(8, 11, 4, 4, 70.00, 90.00, 100.00, '2024-05-21 21:27:24', '2024-05-21 21:27:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Struktur dari tabel `tahun_akademiks`
--

CREATE TABLE `tahun_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `tahun`, `semester`, `created_at`, `updated_at`) VALUES
(1, '2025', 'genap', '2024-05-21 05:58:52', '2024-05-21 07:19:55'),
(2, '2024', 'ganjil', '2024-05-21 06:11:26', '2024-05-21 06:11:26'),
(3, '2030', 'ganjil', '2024-05-21 06:11:42', '2024-05-21 07:14:56'),
(4, '2023', 'genap', '2024-05-21 06:11:53', '2024-05-21 06:11:53');

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
  `role` enum('operator','mahasiswa','dosen') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Waskita OP', 'waskita@uas.com', NULL, '$2y$12$LSsEaibhYi7JLRu4FAK9S.kNGeivRONhS5K50Ey1ue5NfqQSDXirm', 'operator', NULL, '2024-05-20 17:43:14', '2024-05-20 17:43:14'),
(2, 'Nadin Akamsi', 'nadin@uas.com', NULL, '$2y$12$ZiXWjRNmZISr.GG3Lq1Ic.fJeWeSGQHERqNJbuMChxxQVCu86fujm', 'mahasiswa', NULL, '2024-05-20 17:43:14', '2024-05-20 17:43:14'),
(3, 'Sendi', 'sendi@uas.com', NULL, '$2y$12$n4a6OMbfOjtiB0v96FlaGOu.E7ji63g3k4kMt93wpr8gVCX8qVoxu', 'dosen', NULL, '2024-05-20 17:43:14', '2024-05-20 17:43:14'),
(7, 'Eni Sud', 'eni@uas.com', NULL, '$2y$12$lBLzp.30jHIpVi1XFCmrf.ZkQ4WLZu3UOuPDcQN1K.IZQm9VNOXu6', 'dosen', NULL, '2024-05-21 03:25:13', '2024-05-21 03:25:13'),
(9, 'Son', 'son@uas.com', NULL, '$2y$12$TZqsEcb4wkTwI7FYeGcpXuwjH5OvrjnHJTFEkY4DDxMGcXwApBiVO', 'mahasiswa', NULL, '2024-05-21 15:33:30', '2024-05-21 15:33:30'),
(10, 'Kaneki Yusuf', 'yusuf@uas.com', NULL, '$2y$12$81pzQHYEmAq/wbiQRqvHmOEwOBrWzcOwx8nqn1nBC5Hzd9Rc7Y/Cq', 'mahasiswa', NULL, '2024-05-21 16:27:14', '2024-05-21 16:27:14'),
(11, 'Nana', 'nana@uas.com', NULL, '$2y$12$LY.mjJBSHv2cLgo9nO/CvOyXQDlVTgohahi9ec.flzPvmtNMjTqxG', 'dosen', NULL, '2024-05-21 17:42:15', '2024-05-21 17:42:15'),
(12, 'gd OP', 'gd@uas.com', NULL, '$2y$12$S6FBQ6cdNBW1f7xd7CG10eA8xmMDC.pg9nj8kwNcl4/6AMZss.mSW', 'operator', NULL, '2024-05-21 19:26:57', '2024-05-21 19:26:57'),
(13, 'Nina Nani', 'nina@uas.com', NULL, '$2y$12$.bPmFozg1fsAkj07jqq1Bu7BfYa667lKgASCeuSUCv2iXzgIqMEte', 'mahasiswa', NULL, '2024-05-21 19:26:57', '2024-05-21 19:26:57'),
(14, 'Sandia', 'sandia@uas.com', NULL, '$2y$12$i56a.9jPUQZSx7LQnZtLauCizarTAsbAW3ITmwkLpJ3YRQECbLVrS', 'dosen', NULL, '2024-05-21 19:26:57', '2024-05-21 19:26:57'),
(15, 'Wahyu Yuya', 'yuya@uas.com', NULL, '$2y$12$.fEF1KuiyZ1IDEDoCYEHg.dzQww4lUEfxV2ixwWNs81uH6bMBBTTO', 'dosen', NULL, '2024-05-21 21:32:32', '2024-05-21 21:32:32'),
(16, 'apopa', 'popa@uas.com', NULL, '$2y$12$n8oN0yr5eoYvMbQwRrWPhOENzCKKxehAYbizJr8hDZo96Eiu5wpyG', 'operator', NULL, '2024-05-21 21:57:39', '2024-05-21 21:57:39'),
(17, 'Nian ', 'jia@uas.com', NULL, '$2y$12$CXrGS3EpOadfRo3fGJlRgeywNTvdlUbKUSZdsO10HmTHYuM.vL2m2', 'mahasiswa', NULL, '2024-05-21 21:57:40', '2024-05-21 21:57:40'),
(18, 'Eri', 'Jiko@uas.com', NULL, '$2y$12$bXOAAqPpD35khuHLhvKY4.nUWyGIZnATQJjsfqdPWC/NhUygcOoXW', 'dosen', NULL, '2024-05-21 21:57:40', '2024-05-21 21:57:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_nidn_unique` (`nidn`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`),
  ADD KEY `dosens_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswas_email_unique` (`email`),
  ADD KEY `mahasiswas_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mata_kuliahs_kode_unique` (`kode`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `nilais_mata_kuliah_id_foreign` (`mata_kuliah_id`),
  ADD KEY `nilais_tahun_akademik_id_foreign` (`tahun_akademik_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD CONSTRAINT `dosens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD CONSTRAINT `mahasiswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilais_mata_kuliah_id_foreign` FOREIGN KEY (`mata_kuliah_id`) REFERENCES `mata_kuliahs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilais_tahun_akademik_id_foreign` FOREIGN KEY (`tahun_akademik_id`) REFERENCES `tahun_akademiks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
