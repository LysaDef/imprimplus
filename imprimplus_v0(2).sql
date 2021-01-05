-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 05 jan. 2021 à 13:15
-- Version du serveur :  10.3.25-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imprimplus_v0`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `raisonSociale` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reduction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `raisonSociale`, `adresse`, `cp`, `ville`, `tel`, `email`, `reduction_id`) VALUES
(1, 'enri', '7 rue des Fleurs', '37000', 'Tours', '0698534712', 'enri@gmail.com', 1),
(2, 'tual', '13 rue des Champs', '37000', 'Nantes', '0639587217', 'tual@gmail.com', 2),
(3, 'zer', 'impasse Deligny', '75000', 'Paris', '0635829675', 'zer@gmail.com', 3),
(4, 'lik', '2 rue Basse', '75000', 'Paris', '0659887534', 'lik@gmail.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE `commander` (
  `id` int(11) NOT NULL,
  `modele_id` int(11) NOT NULL,
  `salarie_id` int(11) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `fichierImage` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commander`
--

INSERT INTO `commander` (`id`, `modele_id`, `salarie_id`, `quantite`, `fichierImage`, `date`) VALUES
(2, 15, 1, '12', '', '5 septembre 2020'),
(3, 8, 2, '25', '', '9 octobre 2020'),
(4, 1, 3, '200', '', '18 decembre 2020'),
(5, 3, 4, '8', '', '2 janvier 2021');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `fichierImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`id`, `libelle`, `fichierImage`) VALUES
(1, 'carte de visite', ''),
(2, 'cartons de correspondance', ''),
(3, 'affiches au format A3', ''),
(4, 'affiches au format A2', ''),
(5, 'affiches au format A0\r\n', 'affiches au format A1'),
(6, 'enrouleurs XS', ''),
(7, 'enrouleurs S', ''),
(8, 'enrouleurs M', ''),
(9, 'enrouleurs L', ''),
(10, 'enrouleurs XL', ''),
(11, 'enrouleurs XL', ''),
(12, 'banderoles XS', ''),
(13, 'banderoles S', ''),
(14, 'banderoles M', ''),
(15, 'banderoles L', ''),
(16, 'banderoles XL', ''),
(17, 'banderoles XXL', ''),
(18, 'affiches au format A1', '');

-- --------------------------------------------------------

--
-- Structure de la table `operateur`
--

CREATE TABLE `operateur` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `operateur`
--

INSERT INTO `operateur` (`id`, `user_id`, `service_id`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

CREATE TABLE `reduction` (
  `id` int(11) NOT NULL,
  `caMoisDernier` varchar(255) NOT NULL,
  `pourcentageReduction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reduction`
--

INSERT INTO `reduction` (`id`, `caMoisDernier`, `pourcentageReduction`) VALUES
(1, '206 euros', '5'),
(2, '1003 euros', '10'),
(3, '140 euros', '0'),
(4, '2250 euros ', '12');

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE `salarie` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salarie`
--

INSERT INTO `salarie` (`id`, `user_id`, `client_id`) VALUES
(1, 2, 1),
(2, 3, 4),
(3, 4, 3),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `libelle`) VALUES
(1, 'Service Achat'),
(2, 'Service Administratif'),
(3, 'Service Comptable');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(11) NOT NULL,
  `modele_id` int(11) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `montant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id`, `modele_id`, `quantite`, `montant`) VALUES
(1, 15, '12', '1003 euros'),
(2, 8, '25', '2250 euros'),
(3, 1, '200', '206 euros'),
(4, 3, '8', '140 euros');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(512) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `su` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `nom`, `prenom`, `actif`, `su`) VALUES
(1, 'usersio', '0ec960d4105605608894658ed65e81a85a34839e', 'SIO', 'user', 1, 1),
(2, 'Lysa', '0ec960d4105605608894658ed65e81a85a34839e', 'DEFURNE', 'Lysa', 1, 0),
(3, 'Mathieu', '0ec960d4105605608894658ed65e81a85a34839e', 'CHARRON', 'Mathieu', 1, 0),
(4, 'Nathan', '0ec960d4105605608894658ed65e81a85a34839e', 'Guillet', 'Nathan', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reduction_id` (`reduction_id`);

--
-- Index pour la table `commander`
--
ALTER TABLE `commander`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modele_id` (`modele_id`),
  ADD KEY `salarie_id` (`salarie_id`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operateur`
--
ALTER TABLE `operateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`service_id`);

--
-- Index pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modele_id` (`modele_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commander`
--
ALTER TABLE `commander`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `operateur`
--
ALTER TABLE `operateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reduction`
--
ALTER TABLE `reduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `salarie`
--
ALTER TABLE `salarie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_reduction_id` FOREIGN KEY (`reduction_id`) REFERENCES `reduction` (`id`);

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `fk_modele_id` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`id`),
  ADD CONSTRAINT `fk_salarie_id` FOREIGN KEY (`salarie_id`) REFERENCES `salarie` (`id`);

--
-- Contraintes pour la table `operateur`
--
ALTER TABLE `operateur`
  ADD CONSTRAINT `fk_service_id` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `fk_client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_user_basic_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `fk_modele_basic_id` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
