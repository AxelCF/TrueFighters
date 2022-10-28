-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 27 oct. 2022 à 23:59
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `truefighters`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tounoi', '2022-10-13 10:24:45', '2022-10-13 10:24:45'),
(2, 'Perferendis dignissimos.', '2022-10-13 10:24:45', '2022-10-13 10:24:45'),
(3, 'Ullam ut.', '2022-10-13 10:24:45', '2022-10-13 10:24:45'),
(4, 'Autem.', '2022-10-13 10:24:45', '2022-10-13 10:24:45'),
(5, 'Ipsum nisi similique.', '2022-10-13 10:24:45', '2022-10-13 10:24:45');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_13_115455_create_posts_table', 1),
(6, '2022_10_13_115522_create_categories_table', 1),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(8, '2022_10_13_123807_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`, `user_id`, `category_id`) VALUES
(1, 'Cum nihil.', 'Numquam voluptatem dolores cum consequatur dolores incidunt.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 1, 5),
(2, 'Magni ut illum quos delectus animi ab consectetur non.', 'Fugiat enim nobis fuga.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 1, 5),
(3, 'Facere in itaque.', 'Adipisci illum nesciunt sed minus delectus.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 2, 1),
(4, 'Eos iusto dolorem.', 'Corporis occaecati ea repudiandae.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 2, 1),
(5, 'Odit consectetur eveniet adipisci sed.', 'Recusandae rem ut non quasi consequuntur error.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 2, 1),
(6, 'Magnam atque dolores assumenda voluptatem quos saepe ea quia.', 'Eos iste dolores sapiente libero ullam tenetur.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 3, 5),
(7, 'Sed voluptate assumenda sint.', 'Error officiis et ullam quia.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 3, 5),
(8, 'Est enim ea consequatur non tempora aut qui pariatur.', 'Ut et quae labore.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 4, 5),
(9, 'Deleniti sit occaecati est id et at praesentium aliquam deleniti fugit.', 'Similique ut reprehenderit vel.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 4, 5),
(10, 'Eaque tempora aliquid odio magnam sapiente in magnam.', 'Quos aut cumque aut illum quasi.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 5, 4),
(11, 'Natus.', 'Earum cum ratione consequatur quod totam.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 6, 2),
(12, 'Est et quos alias totam.', 'Quo non dignissimos unde illo est.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 6, 2),
(13, 'Aut quia harum architecto velit et sed nihil ipsum dolorem aut sint provident.', 'Eveniet possimus at beatae enim.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 6, 2),
(14, 'Et quisquam necessitatibus.', 'Quis non nesciunt sed aut sit.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 7, 4),
(15, 'Magni veritatis sed quia omnis accusamus voluptates qui ratione sed maxime.', 'Nemo nulla qui dolor et ut omnis.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 7, 4),
(16, 'Qui magni consequatur quo culpa animi blanditiis qui non reiciendis et incidunt reprehenderit.', 'Impedit dignissimos id cumque.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 7, 4),
(17, 'Rerum eius mollitia.', 'Debitis odit incidunt sit vel a praesentium.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 8, 3),
(18, 'Dicta dolorem beatae nostrum sint itaque hic impedit minus maxime.', 'Explicabo voluptatem qui eligendi.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 9, 5),
(19, 'Enim.', 'Esse nihil voluptatem sint qui ea a.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 10, 3),
(20, 'Maiores quod eius animi error laborum corrupti incidunt et.', 'Suscipit iure qui magnam exercitationem.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 10, 3),
(21, 'Totam optio delectus.', 'Quod maiores veniam aperiam magnam error molestiae.', 'https://via.placeholder.com/1000', '2022-10-13 10:24:45', '2022-10-13 10:24:45', 10, 3),
(22, 'Tournament', 'Gérez tous vos tournois en un seul endroit quels que soient leurs structures et formats de matchs. Décidez comment vos résultats peuvent être consultés. Générez un site internet en marque blanche pour afficher les résultats. Connectez vos services à notre API. Gardez le contrôle de vos données. Des tournois amateurs aux circuits professionnels, Toornament rend tout cela possible.', 'https://via.placeholder.com/1000', '2022-10-17 13:53:30', '2022-10-17 13:53:30', 11, 4);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3XFRuuNBmbRapGteutVnyHuO5LPuRtaAFKIKHYgn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVm1UZFVYRllkdWVZWEdxZjV4UEpTVHBaQmpTTlJ2Tk1BdWNEbXVTeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1666871895),
('TdYtNp1qsz2sEWm2CG8hj6wRkRFkMiKul0m8Xrru', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2p1aE5SN0RZMFFqNXZRekZvYjJtbE41SmRBSEVUQ0YwRERwbHFHMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1666784381),
('WOQZ0lNXkbV2WUlJzo2yAgI0MBWcDidtqEkowggR', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiY0l5Zm1jNFg3SzVnVGFwaHpwa0V2Q2ZaQ1FjeDNUQVRCVlVGMkc3aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkekk4d2w2UzZuSVBCTlJOelAuRlZnLnJVMUNjNGdIeFVWRHhiSjNqMU94TkhqMS93RDI1MGEiO30=', 1666724362);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `profile_photo_path`) VALUES
(1, 'Dr. Malvina Bradtke', 'rohara@example.net', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'z7JkkzTo5O', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(2, 'Francisca Farrell', 'schamberger.oceane@example.com', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'GJxXCbigzH', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(3, 'Prof. Haskell Kovacek Jr.', 'raynor.amelia@example.net', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'iOKZMYvX53', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(4, 'Eloisa Gottlieb', 'gottlieb.judy@example.org', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'mTW5T5Wfqm', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(5, 'Lina Flatley', 'sporer.russell@example.org', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'iIzZW2LYNq', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(6, 'Reed Kerluke', 'charlotte74@example.com', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'lMQLuJkm3q', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(7, 'Francis Tromp', 'kuhn.silas@example.org', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'NPXQX3y3cs', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(8, 'Drake Lubowitz', 'bria.lubowitz@example.net', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'B0CJjebbDH', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(9, 'Mr. Fletcher Kris Jr.', 'milford01@example.org', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'Ahyza2c991', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(10, 'Bernardo Steuber', 'sarina35@example.com', '2022-10-13 10:24:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'nNFLvsz6bs', '2022-10-13 10:24:45', '2022-10-13 10:24:45', NULL),
(11, 'Axel', 'axel.maurice@hotmail.fr', '2022-10-13 10:24:45', '$2y$10$zI8wl6S6nIPBNRNzP.FVg.rU1Cc4gHxUVDxbJ3j1OxNHj1/wD250a', NULL, NULL, NULL, '1xzOUDGJ3pAkO4vNTsvUGXVcLWolMd2pNdp9yLr0cM7OLZT9bHwMGZP8TNbD', '2022-10-13 11:21:09', '2022-10-18 09:00:39', 'profile-photos/KGuCbCRFYemQCRn5Ij84NBOkuKJoFIdBZx2tMmzH.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
