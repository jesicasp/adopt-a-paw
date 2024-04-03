-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adoptapaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption_apps`
--

CREATE TABLE `adoption_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_parent` bigint(20) UNSIGNED NOT NULL,
  `id_pet` bigint(20) NOT NULL,
  `nama_adopter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_adopter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_adopter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_adopter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adoption_apps`
--

INSERT INTO `adoption_apps` (`id`, `id_parent`, `id_pet`, `nama_adopter`, `nohp_adopter`, `email_adopter`, `alamat_adopter`, `message`, `created_at`, `updated_at`) VALUES
(7, 2, 1, 'adopter1', '0987654543', 'adopter1@gmail.com', 'jl.adopter1', 'halo saya ingin mengadopsi...', '2023-07-22 06:07:16', '2023-07-22 06:07:16'),
(9, 3, 6, 'adopter2', '0834723', 'adopter2@gmail.com', 'jl.adopter2', 'testestest', '2023-07-22 06:19:54', '2023-07-22 06:19:54'),
(11, 11, 11, 'adopter4', '082467428', 'adopter4@gmail.com', 'jl.adopter4', 'asdfgh asdfg lkjhg', '2023-07-22 23:04:33', '2023-07-22 23:04:33'),
(12, 16, 12, 'araa', '018301830123', 'asjajshajdh@gmail.com', 'asasas', 'qwkqlkwq', '2023-07-23 19:08:08', '2023-07-23 19:08:08'),
(13, 2, 7, 'adopter5', '0912345698', 'adopter5@gmail.com', 'jl.adopter5', 'asdfgj', '2023-07-23 21:36:14', '2023-07-23 21:36:14'),
(14, 2, 1, 'Jesica', '09098987', 'asjajshajdh@gmail.com', 'asasassds', 'asdadad', '2023-12-28 07:30:26', '2023-12-28 07:30:26'),
(15, 18, 13, 'jesica', '0998877', 'jesica@gmail.com', 'jl asasdsad', 'asaddsd', '2023-12-28 21:45:48', '2023-12-28 21:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `id_user`, `id_type`, `file_upload`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Rabbit Fav Food', 1, 3, 'img_1689848121_download (4).jpg', 'Para peneliti hewan dari Universitas Terkemuka tel...', 'Para peneliti hewan dari Universitas Terkemuka telah mengungkap hasil penelitian terbaru mengenai makanan favorit kelinci domestik. Dalam penelitian yang dilakukan selama beberapa bulan, para ahli menemukan bahwa kelinci sangat menyukai makanan yang kaya serat, seperti berbagai jenis rumput liar, daun hijau, dan dedaunan. Hasil ini menegaskan pentingnya memberikan pola makan yang sehat bagi kelinci peliharaan kita. Selain mencegah masalah kesehatan, memberikan makanan yang sesuai dengan preferensi alaminya juga dapat meningkatkan kebahagiaan dan kualitas hidup kelinci. Para pemilik kelinci diharapkan untuk berperan aktif dalam menyediakan makanan bergizi yang mencakup varietas pangan nabati untuk memastikan kesejahteraan dan kesehatan optimal bagi hewan peliharaan kesayangan mereka.', '2023-07-20 03:15:21', '2023-07-20 03:48:52'),
(2, 'Cat Habbits', 1, 3, 'img_1689873785_a33eeac7-eba9-45a4-967b-9ab6a45249d0.jpg', 'Dalam sehari, rata-rata kucing akan menghabiskan w...', 'Dalam sehari, rata-rata kucing akan menghabiskan waktu tidur selama 16 jam. Alasannya, kucing memiliki aktivitas alami berburu yang membutuhkan banyak energi. Ketika mereka sedang tidak berburu, kucing biasanya akan tidur untuk mengumpulkan tenaga sehingga akan siap digunakan berburu kapan saja.', '2023-07-20 10:23:05', '2023-07-20 10:23:05'),
(3, 'Sleepy Hamster', 1, 4, 'img_1689874122_5fe6734774a74751c38d26a954186ad3.jpg', 'Hamster biasanya tidur sekitar 12 sampai 14 jam se...', 'Hamster biasanya tidur sekitar 12 sampai 14 jam sehari. Akan tetapi, hamster tidur beberapa kali sehari sehingga 12 sampai 14 jam ini akan dipecah menjadi periode-periode yang lebih sebentar sepanjang hari.', '2023-07-20 10:28:11', '2023-07-20 10:28:42'),
(4, 'Anjing, Sahabat Manusia', 1, 6, 'img_1689874317_vkhYZjmD_400x400.jpeg', 'Bagi seekor anjing, entah bagaimana, tidak ada hal...', 'Bagi seekor anjing, entah bagaimana, tidak ada hal lain yang penting. Seekor anjing akan membagikan cinta yang murni dan sama sekali tidak meminta imbalan kepada Anda.\r\n\r\nMereka hanya ingin merasakan kenyamanan hidup yang terbaik. Ini bukan imajinasi kita bahwa anjing memang memandang orang-orang yang memeliharanya sebagai keluarga.\r\n\r\nPara ilmuwan kognitif di Universitas Emory telah melakukan penelitian dengan menempatkan beberapa anjing di mesin MRI dan memindai otak mereka. Hasilnya \'otak\' anjing paling menyala ketika mencium aroma manusia. \r\n\r\nHal ini menunjukkan bahwa mereka memang memprioritaskan hubungannya dengan manusia. Hasil ini mendukung penelitian lain yang menunjukkan bahwa anjing adalah satu-satunya non-primata yang akan berlari ke arah manusia untuk memiliki perlindungan dan kenyamanan.', '2023-07-20 10:31:57', '2023-07-20 10:31:57'),
(5, 'Kelinci Netherland Dwarf', 1, 1, 'img_1689909939_Netherland-Dwarf-Rabbit_-Breed-Information-and-Top-Facts.jpg', 'Kelinci Netherland Dwarf meski tubuhnya termasuk k...', 'Kelinci Netherland Dwarf meski tubuhnya termasuk kecil tapi cukup aktif sifatnya dan lincah gerakannya. Jika berusaha didekati maka kelinci ini akan segera berlari.\r\n\r\nHal ini sesuai instinct dasar nya agar tak dimangsa oleh hewan predator nya. Jadi akan cukup sulit untuk bisa mengangkat dan menggendongnya. Sifatnya memang kurang bersahabat dengan manusia.', '2023-07-20 20:25:39', '2023-07-20 20:25:39'),
(6, 'Kucing Persia', 1, 3, 'img_1689910116_Fall-in-Love-with-Pretty-Cats_-Browse-Pictures-_-Dive-into-Video-animal-tattoo-nature-aesthetic.jpg', 'ucing persia adalah ras kucing domestik berbulu pa...', 'ucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek. Namanya mengacu pada Persia, nama lama Iran, di mana kucing serupa ditemukan. Sejak akhir abad 19, kucing jenis ini dikembangkan di Britania Raya dan Amerika Serikat usai Perang Dunia II.[1] Di Britania Raya, ras ini disebut kucing bulu panjang persia, dibagi dalam dua jenis, yaitu Chinchilla dengan warna perak cerah dan yang agak gelap..', '2023-07-20 20:28:36', '2023-07-22 22:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_14_135144_create_pets_tabel', 1),
(6, '2023_07_14_144558_create_parents_tabel', 1),
(7, '2023_07_14_145151_create_owned_pets_tabel', 1),
(8, '2023_07_14_145516_create_pet_types_tabel', 1),
(9, '2023_07_14_145659_create_beritas_tabel', 1),
(10, '2023_07_14_150023_create_adoption_apps_tabel', 1),
(11, '2023_07_22_123237_add_parent_id_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nama_pet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('jantan','betina') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `id_user`, `nama_pet`, `id_type`, `umur`, `jenis_kelamin`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 2, 'Choii', 3, 1, 'jantan', 'img_1689850458_download.jpg', 'abcd', '2023-07-19 06:52:38', '2023-07-22 22:44:00'),
(3, 3, 'Celly', 1, 1, 'betina', 'img_1689780166_Bunny.jpg', 'Celly si rabbit putih yang suka berlari', '2023-07-19 06:54:45', '2023-07-21 16:06:12'),
(5, 2, 'simel', 4, 1, 'jantan', 'img_1689850532_nMVFd.jpg', 'Mumut si hamster comel', '2023-07-20 03:55:32', '2023-07-20 03:55:32'),
(6, 3, 'mumut', 4, 1, 'jantan', 'img_1689854263_JrWmg.jpg', 'abcde', '2023-07-20 04:57:43', '2023-07-20 04:57:43'),
(7, 2, 'Pussy', 3, 2, 'jantan', 'img_1689854595_VHQUA.jpg', 'pussy pus pus', '2023-07-20 05:03:16', '2023-07-20 05:03:16'),
(8, 3, 'powpow', 6, 1, 'jantan', 'img_1689855733_sJKx4.jpg', 'abcdefgh', '2023-07-20 05:22:13', '2023-07-20 05:22:13'),
(9, 3, 'Dodo', 6, 1, 'jantan', 'img_1689980926_IBXtC.jpg', 'Dodo anjing kecil yang lincah', '2023-07-21 16:08:46', '2023-07-21 16:08:46'),
(11, 11, 'Kocheng', 3, 2, 'betina', 'img_1690092163_PVnKX.jpg', 'kucingkucing 123', '2023-07-22 23:02:43', '2023-07-22 23:02:43'),
(12, 16, 'molly', 3, 1, 'jantan', 'img_1690164264_XhZpR.jpg', 'kucing comel', '2023-07-23 19:04:24', '2023-07-23 19:04:24'),
(13, 18, 'kucing anggora', 3, 1, 'jantan', 'img_1703825057_UUfBl.png', 'kucing anggora yang sangat lincah', '2023-12-28 21:44:17', '2023-12-28 21:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `pet_parents`
--

CREATE TABLE `pet_parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nama_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_parents`
--

INSERT INTO `pet_parents` (`id`, `id_user`, `nama_parent`, `no_hp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 3, 'House Pet A', '0873364632', 'housepeta@gmail.com', 'housepeta', '2023-07-19 06:49:28', '2023-07-19 06:49:28'),
(2, 2, 'House Pet B', '08342374', 'housepetb@gmail.com', 'jl.housepetb', '2023-07-20 03:52:24', '2023-07-20 03:52:24'),
(6, 11, 'House Pet C', '0823734728', 'housepetc@gmail.com', 'jl.house.pet.c', '2023-07-22 22:40:56', '2023-07-22 22:41:17'),
(10, 15, 'House Pet E', '091239873', 'housepete@gmail.com', 'jl.house.pet.e', '2023-07-22 23:42:16', '2023-07-22 23:50:08'),
(13, 18, 'petparent', '-', 'petparent@gmail.com', '-', '2023-12-28 21:42:52', '2023-12-28 21:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `pet_types`
--

CREATE TABLE `pet_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_types`
--

INSERT INTO `pet_types` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Rabbit', '2023-07-19 05:54:01', '2023-07-19 05:54:01'),
(3, 'Cat', '2023-07-19 23:07:51', '2023-07-19 23:08:08'),
(4, 'Hamster', '2023-07-20 03:53:33', '2023-07-20 03:53:33'),
(6, 'Dog', '2023-07-20 05:09:30', '2023-07-20 05:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`, `parent_id`) VALUES
(1, 'Jesica Sanditia Putri', 'jesicasanditia.sg@gmail.com', NULL, '$2y$10$osVLcmC7.GIsByja1y78fes0Oq7VtPSCngBpK.b/RIh7malaKszxC', NULL, '2023-07-19 06:47:45', '2023-07-19 06:47:45', 1, NULL),
(2, 'House Pet B', 'housepetb@gmail.com', NULL, '$2y$10$osVLcmC7.GIsByja1y78fes0Oq7VtPSCngBpK.b/RIh7malaKszxC', NULL, '2023-07-19 06:49:54', '2023-07-20 20:37:43', 0, NULL),
(3, 'House Pet A', 'housepeta@gmail.com', NULL, '$2y$10$osVLcmC7.GIsByja1y78fes0Oq7VtPSCngBpK.b/RIh7malaKszxC', NULL, '2023-07-20 03:51:17', '2023-07-22 23:32:20', 0, NULL),
(11, 'House Pet C', 'housepetc@gmail.com', NULL, '$2y$10$od9A65I1VvuL9SSXgcKp9eqS.6o4V27GYqznp5lF3R2tbWKhmphCi', NULL, '2023-07-22 22:40:56', '2023-07-22 22:40:56', 0, NULL),
(15, 'House Pet E', 'housepete@gmail.com', NULL, '$2y$10$lGzenV.SOFEGG4v77EHUdu1cqjz7hh8uxQkjJ52Y.16wOCfQ0IgCW', NULL, '2023-07-22 23:42:16', '2023-07-22 23:42:16', 0, NULL),
(18, 'petparent', 'petparent@gmail.com', NULL, '$2y$10$OU6EzSkQ5r2PocyLucWbJ.Hghm6SZKCGvON1QTZQ9GXR.yQtYRBOq', NULL, '2023-12-28 21:42:52', '2023-12-28 21:42:52', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption_apps`
--
ALTER TABLE `adoption_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_parents`
--
ALTER TABLE `pet_parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parents_email_unique` (`email`);

--
-- Indexes for table `pet_types`
--
ALTER TABLE `pet_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_parent_id_foreign` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption_apps`
--
ALTER TABLE `adoption_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pet_parents`
--
ALTER TABLE `pet_parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pet_types`
--
ALTER TABLE `pet_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `pet_parents` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
