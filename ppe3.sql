-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 01 avr. 2021 à 14:34
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ppe3`
--
CREATE DATABASE IF NOT EXISTS `ppe3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ppe3`;

-- --------------------------------------------------------

--
-- Structure de la table `avis_produit`
--

CREATE TABLE `avis_produit` (
  `id` int(11) NOT NULL,
  `note` decimal(15,2) NOT NULL,
  `commentaire` text CHARACTER SET utf8 NOT NULL,
  `id_client_id` int(11) NOT NULL,
  `id_produit_id` int(11) NOT NULL,
  `date_avis` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_commande_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_fac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr_complement_fac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_fac` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_fac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_fac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `prenom`, `nom`, `email`, `telephone`, `adresse_fac`, `adr_complement_fac`, `cp_fac`, `ville_fac`, `pays_fac`) VALUES
(1, 'test', 'TEST', 'test@test.com', '0606060606', '0 rue des Test', '1ère Appartement', '00000', 'Paris', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_etat_commande_id` int(11) NOT NULL,
  `id_client_id` int(11) NOT NULL,
  `id_personnel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date_commande`, `id_etat_commande_id`, `id_client_id`, `id_personnel_id`) VALUES
(1, '2020-11-02 19:09:07', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id` int(11) NOT NULL,
  `id_commande_id` int(11) NOT NULL,
  `id_produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `tarif` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`id`, `id_commande_id`, `id_produit_id`, `quantite`, `tarif`) VALUES
(1, 1, 1, 9, 0.00),
(2, 1, 3, 2, 0.00),
(3, 1, 6, 8, 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etat_commande`
--

CREATE TABLE `etat_commande` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_enregistrement` date DEFAULT NULL,
  `Id_Profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`, `roles`, `telephone`, `date_enregistrement`, `Id_Profil`) VALUES
(1, NULL, NULL, 'user', '$argon2id$v=19$m=65536,t=4,p=1$U0x0MYZU2AoUyC/lDDoF5w$tfvqLgNmTcWrQ1HQ8zALUhtLVubtWqyK5nAooFaoEQ0', 'user@user.com', '[\"ROLE_USER\"]', NULL, '2021-01-01', 2),
(2, NULL, NULL, 'root', '$argon2id$v=19$m=65536,t=4,p=1$fd9XGZkiaSaE/32MrXSsJg$AMy+aKgR46z0H/W9McwpRSsrmwJUc+yFsfZb0MfqcB4', 'root@root.com', '[\"ROLE_ADMIN\"]', NULL, '2021-01-01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `tarif` decimal(19,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `note` decimal(15,2) DEFAULT NULL,
  `lien_image` text COLLATE utf8mb4_unicode_ci,
  `id_categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `Id_Profil` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptif` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`Id_Profil`, `libelle`, `descriptif`) VALUES
(1, 'Administrateur', ''),
(2, 'Agent', '');

-- --------------------------------------------------------

--
-- Structure de la table `ref_produit`
--

CREATE TABLE `ref_produit` (
  `Id_Ref_Produit` int(11) NOT NULL,
  `Ref_Produit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis_produit`
--
ALTER TABLE `avis_produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client_id`) USING BTREE,
  ADD KEY `fk_avis_commande` (`id_commande_id`) USING BTREE,
  ADD KEY `fk_avis_produit` (`id_produit_id`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Etat_Commande` (`id_etat_commande_id`),
  ADD KEY `Id_Personnel` (`id_personnel_id`),
  ADD KEY `Id_Client` (`id_client_id`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id_Produit` (`id_produit_id`),
  ADD KEY `Id_Commande` (`id_commande_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `etat_commande`
--
ALTER TABLE `etat_commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `Id_Profil` (`Id_Profil`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Categorie` (`id_categorie_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Id_Profil`);

--
-- Index pour la table `ref_produit`
--
ALTER TABLE `ref_produit`
  ADD PRIMARY KEY (`Id_Ref_Produit`),
  ADD KEY `Id_Produit` (`Id_Produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis_produit`
--
ALTER TABLE `avis_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contenir`
--
ALTER TABLE `contenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etat_commande`
--
ALTER TABLE `etat_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `Id_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ref_produit`
--
ALTER TABLE `ref_produit`
  MODIFY `Id_Ref_Produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

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
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`Id_Profil`) REFERENCES `profil` (`Id_Profil`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `ref_produit`
--
ALTER TABLE `ref_produit`
  ADD CONSTRAINT `ref_produit_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
