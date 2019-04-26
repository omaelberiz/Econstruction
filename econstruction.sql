-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 avr. 2019 à 09:56
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `econstruction`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

DROP TABLE IF EXISTS `appartements`;
CREATE TABLE IF NOT EXISTS `appartements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superficie` int(11) NOT NULL,
  `piece` int(11) NOT NULL,
  `idPrograme` int(11) NOT NULL,
  `idAppartement` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appartements`
--

INSERT INTO `appartements` (`id`, `libelle`, `superficie`, `piece`, `idPrograme`, `idAppartement`, `image`, `prix`, `created_at`, `updated_at`) VALUES
(1, 'Villa', 500, 5, 1, 2, '1556200162.jpg', 1000000, '2019-04-25 13:49:22', '2019-04-25 13:49:22'),
(2, 'banvillars', 500, 5, 1, 2, '1556237167.jpg', 1000000, '2019-04-26 00:06:07', '2019-04-26 00:06:07'),
(3, 'Arcey', 300, 6, 1, 1, '1556242702.jpg', 2000000, '2019-04-26 01:38:22', '2019-04-26 01:38:22'),
(4, 'auxelle-bas', 300, 5, 2, 4, '1556249706.jpg', 1500000, '2019-04-26 03:35:07', '2019-04-26 03:35:07');

-- --------------------------------------------------------

--
-- Structure de la table `appart_clients`
--

DROP TABLE IF EXISTS `appart_clients`;
CREATE TABLE IF NOT EXISTS `appart_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etapes` int(11) NOT NULL,
  `idAppartement` int(11) NOT NULL,
  `IdClient` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appart_clients`
--

INSERT INTO `appart_clients` (`id`, `etapes`, `idAppartement`, `IdClient`, `created_at`, `updated_at`) VALUES
(1, 0, 3, 1, '2019-04-26 02:09:37', '2019-04-26 02:09:37'),
(2, 0, 3, 1, '2019-04-26 02:58:25', '2019-04-26 02:58:25'),
(3, 0, 3, 1, '2019-04-26 02:58:54', '2019-04-26 02:58:54'),
(4, 0, 3, 1, '2019-04-26 02:59:35', '2019-04-26 02:59:35'),
(5, 0, 3, 1, '2019-04-26 03:04:13', '2019-04-26 03:04:13'),
(6, 0, 3, 1, '2019-04-26 03:08:36', '2019-04-26 03:08:36'),
(7, 0, 3, 1, '2019-04-26 03:09:55', '2019-04-26 03:09:55'),
(8, 0, 3, 1, '2019-04-26 03:11:53', '2019-04-26 03:11:53'),
(9, 0, 3, 1, '2019-04-26 03:13:36', '2019-04-26 03:13:36'),
(10, 0, 3, 1, '2019-04-26 03:13:37', '2019-04-26 03:13:37'),
(11, 0, 3, 1, '2019-04-26 03:15:33', '2019-04-26 03:15:33'),
(12, 0, 3, 1, '2019-04-26 03:32:02', '2019-04-26 03:32:02');

-- --------------------------------------------------------

--
-- Structure de la table `localisations`
--

DROP TABLE IF EXISTS `localisations`;
CREATE TABLE IF NOT EXISTS `localisations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `localisations`
--

INSERT INTO `localisations` (`id`, `libelle`, `ville`, `region`, `created_at`, `updated_at`) VALUES
(1, 'abidjan', 'abidjan', 'les lagunes', '2019-04-24 21:09:50', '2019-04-24 21:09:50'),
(2, 'yamoussoukro', 'yamoussoukro', 'des lacs', '2019-04-25 08:41:32', '2019-04-25 08:41:32');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_20_135222_create_users_table', 1),
(9, '2019_04_20_145004_create_appartements_table', 3),
(3, '2019_04_20_145052_create_localisations_table', 1),
(4, '2019_04_20_145120_create_programmes_table', 1),
(8, '2019_04_20_145852_create_appart_clients_table', 2),
(7, '2019_04_20_145153_create_type_apparts_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `programmes`
--

DROP TABLE IF EXISTS `programmes`;
CREATE TABLE IF NOT EXISTS `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libellePro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLocalisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmes`
--

INSERT INTO `programmes` (`id`, `libellePro`, `idLocalisation`, `created_at`, `updated_at`) VALUES
(1, 'laurier 1', '1', '2019-04-25 09:52:43', '2019-04-25 09:52:43'),
(2, 'SICOGI 1', '1', '2019-04-26 01:51:06', '2019-04-26 01:51:06');

-- --------------------------------------------------------

--
-- Structure de la table `type_apparts`
--

DROP TABLE IF EXISTS `type_apparts`;
CREATE TABLE IF NOT EXISTS `type_apparts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_apparts`
--

INSERT INTO `type_apparts` (`id`, `libelle`, `representation`, `created_at`, `updated_at`) VALUES
(1, 'R+3', '1556191917.jpg', '2019-04-25 11:31:57', '2019-04-25 11:31:57'),
(2, 'R+1', '1556192192.jpg', '2019-04-25 11:36:32', '2019-04-25 11:36:32'),
(3, 'Duplex', '1556243355.jpg', '2019-04-26 01:49:15', '2019-04-26 01:49:15'),
(4, 'auxelle-bas', '1556249625.jpg', '2019-04-26 03:33:45', '2019-04-26 03:33:45');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeProfile` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `contact`, `adresse`, `email`, `password`, `typeProfile`, `created_at`, `updated_at`) VALUES
(1, 'n\'guessan', 'omael', '+22579312866', 'abidjan01', 'omaelberiz@gmail.com', '1ba4957f65e7bf2b2901f24c458a3e53', 1, '2019-04-23 13:32:09', '2019-04-23 13:32:09'),
(2, 'n\'guessan', 'omael', '+22579312866', 'abidjan01', 'omaelberiz@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', 2, '2019-04-23 22:35:05', '2019-04-23 22:35:05'),
(3, 'n\'guessan', 'omael', '+22579312866', 'abidjan01', 'omaelberiz@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '2019-04-26 03:30:55', '2019-04-26 03:30:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
