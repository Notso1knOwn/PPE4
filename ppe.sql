-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 05 mai 2021 à 05:11
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe`
--
CREATE DATABASE IF NOT EXISTS `ppe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ppe`;

-- --------------------------------------------------------

--
-- Structure de la table `avis_produit`
--

DROP TABLE IF EXISTS `avis_produit`;
CREATE TABLE IF NOT EXISTS `avis_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` decimal(15,2) NOT NULL,
  `commentaire` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_client_id` int(11) NOT NULL,
  `id_produit_id` int(11) NOT NULL,
  `date_avis` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_commande_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client_id`) USING BTREE,
  KEY `fk_avis_commande` (`id_commande_id`) USING BTREE,
  KEY `fk_avis_produit` (`id_produit_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis_produit`
--

INSERT INTO `avis_produit` (`id`, `note`, `commentaire`, `id_client_id`, `id_produit_id`, `date_avis`, `id_commande_id`) VALUES
(1, '9.00', 'Très bon ordinateur, je m\'en sert pour travailler et jouer et ce de manière intensive. Il tient le coup sans broncher', 1, 1, '2021-03-18 09:30:11', 1),
(2, '7.00', 'A ce prix la j\'espérais qu\'il m\'emmènerait au moins sur la lune que nenni!!', 1, 8, '2021-03-18 09:30:11', 1),
(3, '8.00', 'Etant fan de MSI, je n\'ai pus m\'en empêcher', 1, 3, '2021-03-18 09:34:38', 1),
(4, '9.50', 'Il remplit son taf, très bon rapport qualité/prix', 1, 2, '2021-03-18 09:34:38', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `descriptif`) VALUES
(1, 'PC Portable', 'Mobile, léger, puissant'),
(2, 'Tour Gaming', 'Puissant, durable, Personnalisable'),
(3, 'Composants', 'Variés, Accessible');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_fac` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr_complement_fac` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_fac` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_fac` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_fac` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `email`, `telephone`, `adresse_fac`, `adr_complement_fac`, `cp_fac`, `ville_fac`, `pays_fac`) VALUES
(1, 'test', 'TEST', 'test@test.com', '0606060606', '0 rue des Test', '1ère Appartement', '00000', 'Paris', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_etat_commande_id` int(11) NOT NULL,
  `id_client_id` int(11) DEFAULT NULL,
  `id_personnel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_Etat_Commande` (`id_etat_commande_id`),
  KEY `Id_Personnel` (`id_personnel_id`),
  KEY `Id_Client` (`id_client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date_commande`, `id_etat_commande_id`, `id_client_id`, `id_personnel_id`) VALUES
(1, '2021-02-02 19:09:07', 1, 1, 1),
(6, '2021-04-08 06:41:19', 1, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande_id` int(11) NOT NULL,
  `id_produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `tarif` double(15,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id_Produit` (`id_produit_id`),
  KEY `Id_Commande` (`id_commande_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id`, `id_commande_id`, `id_produit_id`, `quantite`, `tarif`) VALUES
(1, 1, 1, 9, 0.00),
(2, 1, 3, 2, 0.00),
(3, 1, 6, 8, 0.00),
(5, 6, 2, 2, 1299.99);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etat_commande`
--

DROP TABLE IF EXISTS `etat_commande`;
CREATE TABLE IF NOT EXISTS `etat_commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat_commande`
--

INSERT INTO `etat_commande` (`id`, `libelle`, `descriptif`) VALUES
(1, 'non-payé', ''),
(2, 'payé', ''),
(3, 'en cours de préparation', ''),
(4, 'préparé', ''),
(5, 'expédié', ''),
(6, 'livré', ''),
(7, 'terminé', '');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_personnel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produit_id` (`id_produit_id`),
  KEY `id_personnel_id` (`id_personnel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_enregistrement` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_profil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `Id_Profil` (`id_profil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`, `roles`, `telephone`, `date_enregistrement`, `id_profil_id`) VALUES
(1, NULL, NULL, 'user', '$argon2id$v=19$m=65536,t=4,p=1$U0x0MYZU2AoUyC/lDDoF5w$tfvqLgNmTcWrQ1HQ8zALUhtLVubtWqyK5nAooFaoEQ0', 'user@user.com', '[\"ROLE_USER\"]', NULL, '2021-01-01 00:00:00', 2),
(2, NULL, NULL, 'root', '$argon2id$v=19$m=65536,t=4,p=1$fd9XGZkiaSaE/32MrXSsJg$AMy+aKgR46z0H/W9McwpRSsrmwJUc+yFsfZb0MfqcB4', 'root@root.com', '[\"ROLE_ADMIN\"]', NULL, '2021-01-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tarif` decimal(19,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `note` decimal(15,2) DEFAULT NULL,
  `lien_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `id_categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_Categorie` (`id_categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `marque`, `libelle`, `description`, `tarif`, `stock`, `note`, `lien_image`, `id_categorie_id`) VALUES
(1, 'Asus', 'ROG Strix G (G531GT-HN574T)', '', '1099.99', 10, '8.00', 'ROG Strix G (G531GT-HN574T).png', 1),
(2, 'Asus', 'ROG Huracan (G21CN-FR102T)', '', '1299.99', 10, '9.00', 'ROG Huracan (G21CN-FR102T).png', 2),
(3, 'MSI', 'Trident A (9SD-664EU)', '', '1699.99', 5, '8.50', 'Trident A (9SD-664EU).png', 2),
(4, 'Apple', 'iMac 27 pouces Rétina 5K 2019', '', '1800.00', 2, '9.50', 'iMac 27 pouces Rétina 5K 2019.png', 2),
(5, 'Apple', 'MacBook Pro 16 Touch Bar 1 To Argent (2019)', '', '3200.00', 1, NULL, 'MacBook Pro 16 Touch Bar 1 To Argent (2019).png', 1),
(6, 'MSI', 'GE75 8RE-068XFR Raider RGB', '', '1149.99', 9, '6.00', 'GE75 8RE-068XFR Raider RGB.png', 1),
(7, 'HP', 'Pavilion Gaming 690-0117nf (6ZM33EA)', '', '799.99', 7, '5.50', 'Pavilion Gaming 690-0117nf (6ZM33EA).png', 2),
(8, 'Apple', 'iMac Pro 27 pouces Rétina 5K', '', '5000.00', 1, '7.50', 'iMac Pro 27 pouces Rétina 5K.png', 2),
(12, 'Test', 'test', NULL, '1000.00', 2, '9.00', '2021-03-25_téléchargement.jpeg', 1),
(13, 'Test', 'test1', NULL, '1.00', 3, '4.00', '2021-03-25_téléchargement.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit_caracteristique`
--

DROP TABLE IF EXISTS `produit_caracteristique`;
CREATE TABLE IF NOT EXISTS `produit_caracteristique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_caracteristique`
--

INSERT INTO `produit_caracteristique` (`id`, `categorie`, `libelle`, `description`) VALUES
(1, 'Processeur', 'Intel Core i5-9300H', 'Fréquence : 2.4 GHz / Turbo à 4.1 GHz\r\nCœurs : Quad Core / 8 Threads\r\nCache : 8 Mo'),
(2, 'Carte graphique', 'NVIDIA GeForce GTX 1650 4GB', 'Mémoire : 4 Go GDDR5'),
(3, 'Mémoire (RAM)', '16 Go DDR4', '2666 MHz'),
(4, 'Format', 'Gamer', 'Ordinateur ayant un besoin en ressources matérielles important (gaming, audiovisuel...)'),
(5, 'Processeur', 'Intel Core i7 8700', 'Fréquence : 3.2 GHz / Turbo à 4.6 GHz\r\nCœurs : Hexa Core\r\nCache : 12 Mo'),
(6, 'Mémoire (RAM)', '8 Go DDR4', 'SDRAM 2666MHz'),
(7, 'Carte graphique', 'NVIDIA GeForce GTX 1060 6GB', ''),
(8, 'Format', 'Bureautique', ''),
(9, 'Processeur', 'Intel Core i7-9700F', 'Fréquence : 3 GHz / Turbo à 4.7 GHz\r\nCoeurs : 8 Core / 8 Threads\r\nCache : 12 Mo'),
(10, 'Carte graphique', 'MSI GeForce RTX 2070 Ventus', 'Mémoire : 8 Go GDDR5'),
(11, 'Processeur', 'Intel Core i5-8500', 'Fréquence : 3.0 GHz / Turbo à 4.1 GHz\r\nCœurs : Hexa Core / 6 Threads\r\nCache : 9 Mo'),
(12, 'Carte_graphique', 'AMD Radeon Pro 570X', ''),
(13, 'Mémoire (RAM)', '32GB DDR4', '2666MHz'),
(14, 'Processeur', 'Intel Core i9-9880H', 'Fréquence : 2.3 GHz / Turbo à 4.8 GHz\r\nCoeurs : Octo Core\r\nThreads : 16\r\nCache : 16 Mo'),
(15, 'Carte graphique', 'AMD Radeon Pro 5500M', 'Mémoire : 4 Go GDDR6'),
(16, 'Processeur', 'Intel Core i7-8750H', 'Fréquence : 2.2 GHz / Turbo à 4.1 GHz\r\nCoeurs : Hexa Core / 12 Threads\r\nCache : 9 Mo'),
(17, 'Processeur', 'Intel Core i5-9400F', 'Fréquence : 2.9 GHz / Turbo à 4.1 GHz\r\nCoeurs : Hexa Core / 6 threads\r\nCache : 9 Mo'),
(18, 'Processeur', ' Intel Xeon W', 'Fréquence : 3.2 GHz / Turbo à 4.2 GHz\r\ncache : 23,75 Mo\r\nCoeurs : Octo Core'),
(19, 'Carte graphique', 'AMD Radeon Pro Vega 56', 'Mémoire : 8 Go HBM2'),
(20, 'Format', 'Professionnel', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit_caracteristique_produit`
--

DROP TABLE IF EXISTS `produit_caracteristique_produit`;
CREATE TABLE IF NOT EXISTS `produit_caracteristique_produit` (
  `produit_caracteristique_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`produit_caracteristique_id`,`produit_id`),
  KEY `IDX_B12F206A6FE28836` (`produit_caracteristique_id`),
  KEY `IDX_B12F206AF347EFB` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_caracteristique_produit`
--

INSERT INTO `produit_caracteristique_produit` (`produit_caracteristique_id`, `produit_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 3),
(3, 5),
(3, 6),
(4, 1),
(4, 2),
(4, 3),
(4, 6),
(5, 2),
(6, 2),
(6, 7),
(7, 2),
(7, 6),
(7, 7),
(8, 4),
(8, 5),
(8, 7),
(9, 3),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(13, 8),
(14, 5),
(15, 5),
(16, 6),
(17, 7),
(18, 8),
(19, 8),
(20, 8);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `libelle`, `descriptif`) VALUES
(1, 'Administrateur', ''),
(2, 'Agent', '');

-- --------------------------------------------------------

--
-- Structure de la table `ref_produit`
--

DROP TABLE IF EXISTS `ref_produit`;
CREATE TABLE IF NOT EXISTS `ref_produit` (
  `Id_Ref_Produit` int(11) NOT NULL AUTO_INCREMENT,
  `Ref_Produit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Produit` int(11) NOT NULL,
  PRIMARY KEY (`Id_Ref_Produit`),
  KEY `Id_Produit` (`Id_Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id`) REFERENCES `avis_produit` (`id_client_id`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`id_commande_id`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`id_produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`id_profil_id`) REFERENCES `profil` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `produit_caracteristique_produit`
--
ALTER TABLE `produit_caracteristique_produit`
  ADD CONSTRAINT `FK_B12F206A6FE28836` FOREIGN KEY (`produit_caracteristique_id`) REFERENCES `produit_caracteristique` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B12F206AF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ref_produit`
--
ALTER TABLE `ref_produit`
  ADD CONSTRAINT `ref_produit_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
