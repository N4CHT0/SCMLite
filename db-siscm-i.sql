-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2023 pada 22.07
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
-- Database: `db-siscm-i`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori_barang` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_kategori_barang`, `id_gudang`, `nama_barang`, `harga_barang`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'MSI KATANA GF66 i5 11400 8GB 512SSD RTX3050 4GB W10 15.6FHD 144Hz-BLACK', 'Rp11.499.000', '2023-04-19 06:49:01', '2023-04-20 06:49:01'),
(2, 1, 1, 'MSI Modern 14-C12M-060ID | Ci5-1235U | 8GB | 512GB | IrishXe | 14\" | W11H | 2 Years', 'Rp8.883.000', '2023-04-19 08:13:10', '2023-04-19 08:13:10'),
(3, 1, 2, 'MSI GF63 Thin 11SC - 654ID | i5-11400H | 512GB SSD | 8GB | GTX1650-4GB | 15.6\" | W11Home | 2 Years', 'Rp9.999.000', '2023-04-19 08:13:10', '2023-04-19 08:13:10'),
(4, 1, 2, 'MSI GF63 Thin 11UC-1200ID | i7-11800H | RTX3050 | 15.6\" FHD IPS-Level 144Hz | Win 11 Home | 2Y', 'Rp11.799.000', '2023-04-19 08:16:44', '2023-04-19 08:16:44'),
(5, 2, 3, 'MSI GP66 Leopard 11UG - 475ID | i7-11800H | 16GB | 512GB.SSD | RTX3070-6GB | 15,6\" | W10 Home | 2 Year', 'Rp30.499.000', '2023-04-19 08:16:44', '2023-04-20 08:16:44'),
(6, 4, 3, 'MSI Stealth 15M B12UE - 017ID Black | i7-1280P | 16GB | 1TB.SSD | RTX3060-6GB | 15,6\" | W11 Home | 2 Year', 'Rp21.999.000', '2023-04-19 08:16:44', '2023-04-19 08:16:44'),
(7, 1, 1, 'MSI KATANA GF66 12UD Core i7-12700H RAM 2X8GB SSD 512GB VGA RTX3050TI 4GB/15.6/WIN11/BLACK/239', 'Rp14.999.000', '2023-04-19 15:34:16', '2023-04-19 09:21:16'),
(9, 1, 3, 'MSI Cyborg 15 A12VF i7-12650H RTX4060 15.6\" FHD 144Hz IPS-Level', 'Rp18.899.000', '2023-04-19 09:11:31', '2023-04-19 09:11:31'),
(10, 5, 3, 'SI TITAN GT77 RTX™ 4090 16GB I9 13980HX 64GB RAM 4TB SSD W11 17.3UHD MINILED -13VI.059', 'Rp89.079.000', '2023-04-19 22:26:37', '2023-04-19 22:26:37');

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
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gudang` varchar(255) NOT NULL,
  `alamat_gudang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `nama_gudang`, `alamat_gudang`, `created_at`, `updated_at`) VALUES
(1, 'Gudang Laptop Prima', 'Jl. Terusan Soekarno Hatta Barat 3, Mojolangu, Kec. Lowokwaru', '2023-04-20 04:07:40', '2023-04-20 04:07:40'),
(2, 'Gudang Laptop Maju Jaya', 'Jl. Danau Toba, Lesanpuro, Kec. Kedungkandang', '2023-04-20 04:07:40', '2023-04-19 21:20:59'),
(3, 'Gudang Elektronik Gembira', 'Jl. Raya Manyar, Menur Pumpungan, Kec. Sukolilo', '2023-04-19 21:17:07', '2023-04-19 21:17:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpengiriman`
--

CREATE TABLE `jadwalpengiriman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rute` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `id_pengiriman` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pengiriman` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwalpengiriman`
--

INSERT INTO `jadwalpengiriman` (`id`, `id_rute`, `id_outlet`, `id_pengiriman`, `id_kategori`, `tanggal_pengiriman`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2023-04-19 23:10:34', '2023-04-21 20:05:26', '2023-04-21 20:05:26'),
(2, 1, 3, 3, 2, '2023-04-21 00:00:00', '2023-04-21 09:26:40', '2023-04-21 09:26:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribarang`
--

CREATE TABLE `kategoribarang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoribarang`
--

INSERT INTO `kategoribarang` (`id`, `nama_kategori_barang`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'GF Thin _ Mobilitas & Gaya Menjadi Dapat Dijangkau', 'Seri GF membawa mobilitas dan estetika menjadi lebih dapat diakses dari sebelumnya dengan desainnya yang tipis dan ringan. Para gamer tidak lagi harus meilih untuk mengutamakan nilai dan penampilan.', '2023-04-19 17:05:50', '2023-04-19 17:05:50'),
(2, 'Seri GP Leopard / GL _ Nilai Sempurna untuk Semua Orang', 'Seri GP & GL menghadirkan fitur permainan inti dari model high-end, yang kini tersedia pada berbagai konfigurasi. Setiap gamer pasti dapat menemukan tingkat performa yang mereka inginkan.', '2023-04-19 17:06:37', '2023-04-19 17:06:37'),
(3, 'Seri GE Raider _ Untuk para antusias', 'Seri GE terlahir untuk para gamer yang antusias. Selain memberikan kinerja yang maksimal, dari seri pertama hingga fitur penchayaan RGB dan cover laptop dengan potongan model diamond, seri GE terus menghadirkan yang paling \"bling\" untuk para gamer untuk m', '2023-04-19 17:06:37', '2023-04-19 17:06:37'),
(4, 'Seri GS Stealth _ Portabilitas-Super dengan Gaya yang Sleek', 'Seri GS menggabungkan antara mobilitas, performa, dan gaya. Tujuannya adalah untuk mengemas kinerja premium dalam laptop yang paling tipis dan ringan, serta chasiss premium. Masa pakai baterai yang diperpanjang juga menambah aspek portabilitas, menjadikannya teman yang baik saat bepergian.', '2023-04-19 10:50:48', '2023-04-19 10:50:48'),
(5, 'Seri GT Titan _ Puncak dari Segalanya - Laptop Unggulan', 'Seri GT adalah flagship ekstrem yang dirancang untuk melebihi dan melampaui status quo performa apapun. Ini biasanya berarti prosesor yang dapat di-overclock, grafik unggulan, dan fitur-fitur terkini. Seri ini juga memanfaatkan faktor bentuk yang lebih tebal untuk memaksimalkan sistem pendingin, sehingga menghadirkan kinerja tak terbatas.', '2023-04-19 11:11:37', '2023-04-19 11:11:37');

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
(5, '2023_04_19_063647_create_barang_table', 1),
(6, '2023_04_19_162532_create_gudang_table', 2),
(7, '2023_04_19_162645_create_kategoribarang_table', 2),
(8, '2023_04_19_162734_create_stokbarang_table', 2),
(9, '2023_04_19_162810_create_outlet_table', 2),
(10, '2023_04_19_162916_create_pengiriman_table', 3),
(11, '2023_04_19_162949_create_jadwalpengiriman_table', 3),
(12, '2023_04_19_163023_create_rute_table', 3),
(13, '2023_04_19_163044_create_supir_table', 3),
(14, '2023_04_19_163113_make_truk_table', 3),
(15, '2023_04_19_175003_increase_kategoribarang_deskripsi_length', 4),
(16, '2014_10_12_100000_create_password_resets_table', 5),
(17, '2023_04_21_165410_add_role_to_users_table', 5),
(18, '2023_04_21_165623_add_role_to_users_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `alamat_outlet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id`, `nama_outlet`, `alamat_outlet`, `created_at`, `updated_at`) VALUES
(1, 'Calosa Laptop & Gadget Store', 'Jl. Mayjend Panjaitan No.6, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113', '2023-04-20 14:54:00', '2023-04-20 14:54:00'),
(2, 'Hartono Malang (Hartono Electronics Store Malang)', 'Jl. Letjend S. Parman No.94, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65125', '2023-04-20 14:54:00', '2023-04-20 14:54:00'),
(3, 'ONE IT Maspion Square - Toko Komputer dan Laptop Surabaya', 'Lt. 1 blok D19. MIT 3, Jl. Ahmad Yani No.73, Margorejo, Kec. Wonocolo, Kota SBY, Jawa Timur 60238', '2023-04-20 09:05:01', '2023-04-20 09:05:01');

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
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rute` bigint(20) UNSIGNED NOT NULL,
  `id_outlet` bigint(20) UNSIGNED NOT NULL,
  `id_truk` bigint(20) UNSIGNED NOT NULL,
  `id_supir` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `status_pengiriman` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `id_rute`, `id_outlet`, `id_truk`, `id_supir`, `tanggal_pengiriman`, `status_pengiriman`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2023-04-21', 'Sedang Dikirim', '2023-04-21 09:02:31', '2023-04-21 09:02:31'),
(3, 1, 2, 1, 2, '2023-04-22', 'Sedang Dikirim', '2023-04-21 03:04:59', '2023-04-21 03:04:59');

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
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota_asal` varchar(255) NOT NULL,
  `kota_tujuan` varchar(255) NOT NULL,
  `jarak_rute` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `kota_asal`, `kota_tujuan`, `jarak_rute`, `created_at`, `updated_at`) VALUES
(1, 'Kota Malang', 'Kota Surabaya', '95.4 km', '2023-04-20 17:10:26', '2023-04-20 17:10:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokbarang`
--

CREATE TABLE `stokbarang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_kategori_barang` bigint(20) UNSIGNED NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stokbarang`
--

INSERT INTO `stokbarang` (`id`, `id_barang`, `id_kategori_barang`, `jumlah_stok`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, '2023-04-20 04:37:52', '2023-04-20 04:37:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_truk` bigint(20) UNSIGNED NOT NULL,
  `nama_supir` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id`, `id_truk`, `nama_supir`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Udin', '081354133711', '2023-04-21 05:21:25', '2023-04-21 05:21:25'),
(2, 1, 'Rico', '081314793712', '2023-04-21 05:21:25', '2023-04-21 05:21:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `truk`
--

CREATE TABLE `truk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_polisi` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `truk`
--

INSERT INTO `truk` (`id`, `nomor_polisi`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 'N1798HF', '2,200 kg', '2023-04-20 17:58:08', '2023-04-20 17:58:08'),
(2, 'N8830AJ', '800 kg', '2023-04-20 17:59:22', '2023-04-20 17:59:22');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'gudang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Lestari', 'hannessinaga77@gmail.com', NULL, '$2y$10$47DOhlzsotGu5vjswDI29uYd0Hf.poqjXejr4R2U/aYWdD0bck2YW', 'AFMp8YWEImLbqECLfBTWbO8JYvXM7JEXpqT0a1R2jNAvod9HJ5V0hmkPLAoQ', '2023-04-21 10:31:18', '2023-04-21 10:31:18', 'pengiriman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori_barang` (`id_kategori_barang`),
  ADD KEY `id_gudang` (`id_gudang`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwalpengiriman`
--
ALTER TABLE `jadwalpengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_pengiriman` (`id_pengiriman`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `kategoribarang`
--
ALTER TABLE `kategoribarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_supir` (`id_supir`),
  ADD KEY `id_truk` (`id_truk`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stokbarang`
--
ALTER TABLE `stokbarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kategori_barang` (`id_kategori_barang`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_truk` (`id_truk`);

--
-- Indeks untuk tabel `truk`
--
ALTER TABLE `truk`
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
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwalpengiriman`
--
ALTER TABLE `jadwalpengiriman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategoribarang`
--
ALTER TABLE `kategoribarang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `truk`
--
ALTER TABLE `truk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori_barang`) REFERENCES `kategoribarang` (`id`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwalpengiriman`
--
ALTER TABLE `jadwalpengiriman`
  ADD CONSTRAINT `jadwalpengiriman_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoribarang` (`id`),
  ADD CONSTRAINT `jadwalpengiriman_ibfk_2` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id`),
  ADD CONSTRAINT `jadwalpengiriman_ibfk_3` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman` (`id`),
  ADD CONSTRAINT `jadwalpengiriman_ibfk_4` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_3` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_4` FOREIGN KEY (`id_truk`) REFERENCES `truk` (`id`);

--
-- Ketidakleluasaan untuk tabel `stokbarang`
--
ALTER TABLE `stokbarang`
  ADD CONSTRAINT `stokbarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `stokbarang_ibfk_2` FOREIGN KEY (`id_kategori_barang`) REFERENCES `kategoribarang` (`id`);

--
-- Ketidakleluasaan untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`id_truk`) REFERENCES `truk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
