-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 juin 2024 à 11:21
-- Version du serveur : 8.2.0
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `realsodipharm`
--
CREATE DATABASE IF NOT EXISTS `realsodipharm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `realsodipharm`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `univers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hauteur` int NOT NULL,
  `largeur` int NOT NULL,
  `longueur` int NOT NULL,
  `poids` int NOT NULL,
  `famille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `position` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `libelle`, `univers`, `hauteur`, `largeur`, `longueur`, `poids`, `famille`, `code`, `position`) VALUES
(1, 'LYSOPAÏNE MAUX DE GORGE CETYLPYRIDINIUM LYSOZYME SANS SUCRE, comprimé à sucer édulcoré au sorbitol et à la saccharine 2 x 18 comprimés', 'ORL', 28, 57, 99, 74, 'Maux de gorge', 2147483647, 0),
(2, 'VICKS VAPORUB, pommade 50 g', 'ORL', 59, 60, 68, 85, 'Rhûme', 2147483647, 0),
(3, 'VICKS INHALER, tampon imprégné pour inhalation par fumigation 1 tampon', 'ORL', 21, 58, 89, 12, 'Rhûme', 2147483647, 0),
(4, 'STREPSILS LIDOCAINE, pastille 24 pastilles', 'ORL', 21, 80, 111, 78, 'Maux de gorge', 2147483647, 0),
(5, 'STREPSILS MIEL-CITRON, pastille à sucer 24 pastilles', 'ORL', 23, 80, 110, 79, 'Maux de gorge', 2147483647, 0),
(6, 'MUCOMYST 200 mg, poudre orale en sachet 18 sachets', 'ORL', 53, 60, 73, 58, 'Toux', 2147483647, 0),
(7, 'STREPSILS CITRON SANS SUCRE, pastille édulcorée à l\'isomalt, au maltitol et à la saccharine sodique 24 pastilles', 'ORL', 20, 80, 110, 72, 'Maux de gorge', 2147483647, 0),
(8, ' HUMEX MAL DE GORGE LIDOCAINE/BENZALKONIUM 0,30 g/0,03 g pour 100 mL, collutoire, flacon pressurisé  35 ml', 'ORL', 43, 43, 147, 80, 'Maux de gorge', 2147483647, 0),
(9, 'PERUBORE INHALATION, capsule pour inhalation par vapeur 15 capsules', 'ORL', 24, 59, 129, 25, 'Inhlation', 2147483647, 0),
(10, 'HUMEX MAL DE GORGE LIDOCAINE/ALCOOL DICHLOROBENZYLIQUE/AMYLMETACRESOL 2 mg/1,2 mg/0,6 mg MIEL CITRON SANS SUCRE,  24 pastilles', 'ORL', 50, 50, 50, 50, 'Maux de gorge', 2147483647, 0),
(11, 'ZYRTECSET 10 mg, comprimé pelliculé sécable 7 comprimés', 'ORL', 18, 64, 110, 20, 'Allergie', 2147483647, 0),
(12, 'STREPSILS FRAISE SANS SUCRE, pastille édulcorée à l\'isomalt, au maltitol et à la saccharine sodique 24 pastilles', 'ORL', 26, 81, 113, 72, 'Maux de gorge', 2147483647, 0),
(13, 'CANTALENE, comprimé à sucer 24 comprimés', 'ORL', 21, 71, 107, 37, 'Maux de gorge', 2147483647, 0),
(14, 'HUMEX RHUME DES FOINS A LA BECLOMETASONE 50 microgrammes / doses, suspension pour pulvérisation nasale en flacon. 1 flacon (100 doses)', 'ORL', 35, 36, 127, 67, 'Allergie', 2147483647, 0),
(15, 'CORYZALIA, comprimé orodispersible ', 'ORL', 20, 75, 95, 30, 'Rhûme', 2147483647, 0),
(16, 'HUMEX 5% ADULTES EXPECTORANT SANS SUCRE, solution buvable édulcorée à la saccharine sodique 250 ml', 'ORL', 67, 70, 155, 43, 'Toux', 2147483647, 0),
(17, 'HUMEX ALLERGIE CETIRIZINE 10 mg , comprimé pelliculé sécable 7 comprimés', 'ORL', 22, 66, 104, 12, 'Allergie', 2147483647, 0),
(18, 'DRILL SANS SUCRE, pastille édulcorée à l\'aspartam et à l\'isomalt 24 pastilles', 'ORL', 23, 79, 129, 76, 'Maux de gorge', 2147483647, 0),
(19, 'DRILL MIEL-ROSAT, pastille à sucer 24 pastilles', 'ORL', 21, 77, 126, 77, 'Maux de gorge', 2147483647, 0),
(20, 'CALYPTOL INHALANT, émulsion pour inhalation par fumigation 10 ampoules ', 'ORL', 18, 103, 142, 105, 'Rhûme', 2147483647, 0),
(21, 'STREPSILS MIEL-CITRON, pastille à sucer 36 pastilles', 'ORL', 32, 79, 110, 120, 'Maux de gorge', 2147483647, 0),
(22, 'HEXASPRAY FRUITS EXOTIQUES, collutoire en flacon pressurisé Flacon de 30 g', 'ORL', 53, 54, 123, 145, 'Maux de gorge', 2147483647, 0),
(23, 'CARBOCISTEINE CLARIX 5 % ADULTES, solution buvable édulcorée à la saccharine sodique 250 ml', 'ORL', 68, 67, 157, 433, 'Toux', 2147483647, 0),
(24, 'STREPSILS ORANGE VITAMINE C, pastille\r\n 24 pastilles', 'ORL', 26, 81, 113, 79, 'Maux de gorge', 2147483647, 0),
(25, 'HOMEOGENE N°9, comprimé  ', 'ORL', 20, 77, 97, 26, 'Maux de gorge', 2147483647, 0),
(26, 'HEXALYSE, comprimé à sucer 24 comprimés', 'ORL', 23, 58, 111, 43, 'Maux de gorge', 2147483647, 0),
(27, 'ALAIRGIX ALLERGIE CETIRIZINE 10 mg, comprimé à sucer sécable 7 comprimés', 'ORL', 19, 56, 111, 20, 'Allergie', 2147483647, 0),
(28, 'EUPHON SANS SUCRE, pastille édulcorée à la saccharine ', 'ORL', 40, 69, 71, 78, 'Maux de gorge', 2147483647, 0),
(29, 'HOMEOVOX, comprimé enrobé ', 'ORL', 24, 77, 98, 33, 'Maux de gorge', 2147483647, 0),
(30, 'FLUIMUCIL EXPECTORANT ACETYLCYSTEINE 200 mg ADULTES, granulés pour solution buvable en sachet 18 sachets', 'ORL', 50, 70, 75, 40, 'Toux', 2147483647, 0),
(31, 'CORYZALIA, solution buvable en récipient unidose ', 'ORL', 40, 90, 107, 68, 'Rhûme', 2147483647, 0),
(32, 'FLUIMUCIL EXPECTORANT ACETYLCYSTEINE 2 % ADULTES SANS SUCRE, solution buvable édulcorée à la saccharine sodique, au cyclamate de sodium et au sucralose 200 ml', 'ORL', 63, 66, 142, 384, 'Toux', 2147483647, 0),
(33, 'STREPSILS MENTHE GLACIALE, pastille à sucer 24 pastilles', 'ORL', 21, 80, 112, 78, 'Maux de gorge', 2147483647, 0),
(34, 'CITRATE DE BETAINE CITRON UPSA 2 g SANS SUCRE, comprimé effervescent édulcoré à la saccharine sodique 20 comprimés', 'GASTROLOGIE', 39, 71, 90, 144, 'Digestion', 2147483647, 0),
(35, 'VOGALIB 7,5 mg SANS SUCRE, lyophilisat oral édulcoré à l\'aspartam 8 lyocs', 'GASTROLOGIE', 18, 51, 125, 17, 'Nausées - Vomissements', 2147483647, 0),
(36, 'IMODIUMLINGUAL 2 mg, lyophilisat oral 12 lyocs', 'GASTROLOGIE', 53, 53, 94, 10, 'Diarhée', 2147483647, 0),
(37, 'IMODIUMCAPS 2 mg, gélules 12 gélules', 'GASTROLOGIE', 20, 70, 97, 13, 'Diarhée', 2147483647, 0),
(38, 'GAVISCONELL MENTHE SANS SUCRE, suspension buvable en sachet-dose édulcorée à la saccharine sodique  12 sachets', 'GASTROLOGIE', 35, 95, 143, 155, 'Acidité', 2147483647, 0),
(39, 'GAVISCONELL MENTHE SANS SUCRE, suspension buvable en sachet-dose édulcorée à la saccharine sodique  24 sachets', 'GASTROLOGIE', 50, 96, 142, 25, 'Acidité', 2147483647, 0),
(40, 'SMECTALIA 3g, suspension buvable en sachet 12 sachets', 'GASTROLOGIE', 80, 100, 120, 106, 'Diarhée', 2147483647, 0),
(41, 'SMECTALIA 3g, poudre pour suspension buvable en sachet 18 sachets', 'GASTROLOGIE', 42, 91, 107, 106, 'Diarhée', 2147483647, 0),
(42, 'MICROLAX SORBITOL CITRATE ET LAURILSULFOACETATE DE SODIUM, solution rectale en récipient unidose 4 récipients', 'GASTROLOGIE', 25, 83, 121, 59, 'Constipation', 2147483647, 0),
(43, 'MAALOX MAUX D\'ESTOMAC HYDROXYDE D\'ALUMINIUM/HYDROXYDE DE MAGNESIUM 400 mg/400 mg SANS SUCRE, comprimé à croquer ', 'GASTROLOGIE', 30, 55, 125, 84, 'Acidité', 2147483647, 0),
(44, 'LANSOYL SANS SUCRE 78,23g POUR CENT, gel oral en pot édulcoré à la saccharine sodique 215 g', 'GASTROLOGIE', 71, 102, 102, 370, 'Constipation', 2147483647, 0),
(45, 'OXYBOLDINE, comprimé effervescent 2 x 12 comprimés', 'GASTROLOGIE', 29, 57, 87, 83, 'Digestion', 2147483647, 0),
(46, 'DIARETYL 2 mg, gélule 12 gélules', 'GASTROLOGIE', 20, 50, 101, 12, 'Diarhée', 2147483647, 0),
(47, 'RENNIE SANS SUCRE, comprimé à croquer 36 comprimés', 'GASTROLOGIE', 27, 72, 103, 57, 'Acidité', 2147483647, 0),
(48, 'RENNIE SANS SUCRE, comprimé à croquer 60 comprimés', 'GASTROLOGIE', 35, 69, 99, 91, 'Acidité', 2147483647, 0),
(49, 'RENNIE SANS SUCRE, comprimé à croquer 96 comprimés', 'GASTROLOGIE', 44, 68, 100, 157, 'Acidité', 2147483647, 0),
(50, 'CHARBON DE BELLOC 125 mg, capsule molle 36 capsules', 'GASTROLOGIE', 39, 65, 72, 59, 'Digestion', 2147483647, 0),
(51, 'MAALOX MAUX D\'ESTOMAC HYDROXYDE D\'ALUMINIUM/ HYDROXYDE DE MAGNESIUM 400mg/400mg, comprimé à croquer 40 comprimés', 'GASTROLOGIE', 30, 55, 123, 67, 'Acidité', 2147483647, 0),
(52, 'CHARBON DE BELLOC 125 mg, capsule molle 60 capsules', 'GASTROLOGIE', 52, 87, 90, 64, 'Digestion', 2147483647, 0),
(53, 'ALCOOL MODIFIE COOPER, solution pour application cutanée 250 ml', 'CUTANES', 52, 52, 140, 250, 'Cutanés', 2147483647, 0),
(54, 'VASELINE OFFICINALE COOPER, pommade 45 g', 'CUTANES', 35, 39, 161, 64, 'Cutanés', 2147483647, 0),
(55, 'ACTIVIR 5 POUR CENT, crème 2 g', 'CUTANES', 31, 31, 83, 9, 'Cutanés', 2147483647, 0),
(56, 'BISEPTINESPRAID, solution pour application cutanée 50 ml', 'CUTANES', 38, 38, 111, 75, 'Cutanés', 2147483647, 0),
(57, 'DIASEPTYL 0,5 %, solution pour application cutanée 75 ml', 'CUTANES', 46, 46, 117, 108, 'Cutanés', 2147483647, 0),
(58, 'CORTISEDERMYL  0,5 %, crème 15 g', 'CUTANES', 23, 28, 122, 25, 'Cutanés', 2147483647, 0),
(59, 'DUOFILM, solution pour application locale 15 ml', 'CUTANES', 30, 30, 80, 50, 'Cutanés', 2147483647, 0),
(60, 'CETAVLON, crème 80 g', 'CUTANES', 50, 40, 162, 100, 'Cutanés', 2147483647, 0),
(61, 'EOSINE COOPER 2 POUR CENT, solution pour application cutanée en récipient unidose 10 récipents unidoses de 2 ml ', 'CUTANES', 19, 56, 124, 39, 'Cutanés', 2147483647, 0),
(62, 'VASELINE OFFICINALE COOPER, pommade 80 g', 'CUTANES', 38, 45, 180, 106, 'Cutanés', 2147483647, 0),
(63, 'VITAMINE C UPSA EFFERVESCENTE 1000 mg, comprimé effervescent 2 x 10 comprimés', 'STRESS - VITAMINES', 30, 60, 85, 102, 'Vitamines', 2147483647, 0),
(64, 'VITAMINE C UPSA 500 mg arôme orange, comprimé à croquer 2 x 15 comprimés', 'STRESS - VITAMINES', 30, 54, 98, 89, 'Vitamines', 2147483647, 0),
(65, 'EUPHYTOSE, comprimé enrobé ', 'STRESS - VITAMINES', 46, 48, 84, 86, 'Stress - Sommeil', 2147483647, 0),
(66, ' SEDATIF PC, comprimé sublingual ', 'STRESS - VITAMINES', 30, 76, 96, 54, 'Stress - Sommeil', 2147483647, 0),
(67, 'SPASMINE, comprimé enrobé ', 'STRESS - VITAMINES', 40, 45, 91, 47, 'Stress - Sommeil', 2147483647, 0),
(68, 'MAGNEVIE B6 100mg/10mg, comprimé pelliculé 60 comprimés', 'STRESS - VITAMINES', 40, 65, 130, 74, 'Magnésium', 2147483647, 0),
(69, 'MAGNEVIE B6 100mg/10mg, comprimé pelliculé 2 x 60 comprimés', 'STRESS - VITAMINES', 70, 80, 130, 150, 'Magnésium', 2147483647, 0),
(70, 'ZENALIA, comprimé sublingual ', 'STRESS - VITAMINES', 20, 78, 99, 22, 'Stress - Sommeil', 2147483647, 0),
(71, 'ARNIGEL, gel ', 'RHUMATOLOGIE', 37, 49, 120, 65, 'Rhumatologie', 2147483647, 0),
(72, 'HEMOCLAR 0,5 POUR CENT, crème 30 g', 'RHUMATOLOGIE', 26, 36, 140, 46, 'Rhumatologie', 2147483647, 0),
(73, 'ARNICAN 4 POUR CENT, crème ', 'RHUMATOLOGIE', 31, 42, 130, 64, 'Rhumatologie', 2147483647, 0),
(74, 'SPORTENINE, comprimé à croquer ', 'RHUMATOLOGIE', 28, 77, 93, 99, 'Rhumatologie', 2147483647, 0),
(75, 'SYNTHOL solution pour application cutanée 225 ml', 'RHUMATOLOGIE', 45, 82, 131, 264, 'Rhumatologie', 2147483647, 0),
(76, 'FLECTOREFFIGEL 1%, gel 60 g ', 'RHUMATOLOGIE', 32, 49, 160, 70, 'Rhumatologie', 2147483647, 0);

-- --------------------------------------------------------

--
-- Structure de la table `descente`
--

DROP TABLE IF EXISTS `descente`;
CREATE TABLE IF NOT EXISTS `descente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hauteur` int NOT NULL,
  `largeur` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etagere`
--

DROP TABLE IF EXISTS `etagere`;
CREATE TABLE IF NOT EXISTS `etagere` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descente_id` int DEFAULT NULL,
  `hauteur` int NOT NULL,
  `largeur` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B83FE5C459D4935E` (`descente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etagere_article`
--

DROP TABLE IF EXISTS `etagere_article`;
CREATE TABLE IF NOT EXISTS `etagere_article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int DEFAULT NULL,
  `descente_id` int DEFAULT NULL,
  `position` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C9DD9CB7294869C` (`article_id`),
  KEY `IDX_C9DD9CB59D4935E` (`descente_id`),
  KEY `position` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etagere_article`
--

INSERT INTO `etagere_article` (`id`, `article_id`, `descente_id`, `position`) VALUES
(1, NULL, NULL, 0),
(2, NULL, NULL, 0),
(3, NULL, NULL, 0),
(4, NULL, NULL, 0),
(5, NULL, NULL, 0),
(6, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etagere`
--
ALTER TABLE `etagere`
  ADD CONSTRAINT `FK_B83FE5C459D4935E` FOREIGN KEY (`descente_id`) REFERENCES `descente` (`id`);

--
-- Contraintes pour la table `etagere_article`
--
ALTER TABLE `etagere_article`
  ADD CONSTRAINT `FK_C9DD9CB59D4935E` FOREIGN KEY (`descente_id`) REFERENCES `descente` (`id`),
  ADD CONSTRAINT `FK_C9DD9CB7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
