-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 31 oct. 2018 à 13:09
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fete_du_numerique`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(11) NOT NULL,
  `titre_event` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `responsable_event` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `descriptif_event` text COLLATE latin1_general_ci NOT NULL,
  `type_event` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `info_duree` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `nbplacesou` smallint(3) UNSIGNED NOT NULL,
  `nbplaceres` smallint(3) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `raisonrefus` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `infocomp` text COLLATE latin1_general_ci NOT NULL,
  `resadmin` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `titre_event`, `responsable_event`, `descriptif_event`, `type_event`, `info_duree`, `nbplacesou`, `nbplaceres`, `status`, `raisonrefus`, `infocomp`, `resadmin`) VALUES
(1, 'Présentation Raspberry', 'Simplon', 'Le Raspberry Pi est un micro ordinateur de la taille d\'une carte de crédit coûtant 35 euros aux possibilités infinies. Lors de cette conférence, vous pourrez apprendre à mieux connaître cette petite machine. A la fin, diverses démonstrations vous seront proposées.', 'Conférence', '1h30m', 50, 50, 1, '', '', ''),
(2, 'Présentation NAOS', 'Nakamura Computing Systems', 'Entrez dans la nouvelle ère de l\'informatique grâce à NAOS. Découvrez un nouveau système d\'exploitation révolutionnaire orienté multimédia et production où la sécurité de vos données et de votre matériel sont mis en priorité ! Testez sur place la puissance de ce nouveau système et laissez-vous séduire par l\'aventure NAOS !', 'Animation', '8h00m', 0, 0, 2, '', '', ''),
(3, 'Histoire de l\'informatique', 'Organisateurs', 'Découvrez l\'histoire de l\'informatique depuis le métier Jacquard jusqu\'à l\'Iphone, les grands Hommes qui forgèrent ce que les technologies de l\'information sont telles de nos jours. (Re)découvrez les machines qui, sans lesquelles, l\'informatique auraient été complètement différentes.', 'Exposition', '8h00m', 0, 0, 4, '', '', ''),
(4, 'Atelier Jeux Vidéos', 'Organisateurs', 'Jouez à de nombreux jeux rétro, de l\'Atari 2600 jusqu\'à la playstation 2 sur les plate-formes originelles pour une meilleure immersion \"comme à l\'époque\".', 'Animation', '8h00m', 0, 0, 4, '', '', ''),
(5, 'Présentation Ecole Simplon', 'Simplon', 'Découvrez l\'école de développeurs Web de Charleville. Discutez avec les formateurs et les apprenants.', 'Conférence', '1h00m', 80, 80, 4, '', '', ''),
(6, 'Présentation CCI', 'Organisateurs', 'Apprenez à connaître votre CCI, son rôle, ses prestations, etc...', 'Conférence', '0h30m', 40, 40, 4, '', 'Besoin d\'un vidéo-projecteur.', ''),
(7, '111', 'Organisateurs', '112', 'Conférence', '1h30m', 30, 30, 5, '114', '113', 'test'),
(8, 'Présentation MIRE', 'NEC', 'Suivez en avant-première la présentation du nouvel ordinateur du futur : MIRE.', 'Conférence', '1h00m', 50, 50, 4, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `noml` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nbplacemax` smallint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `id_lieu` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `propose`
--

CREATE TABLE `propose` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE `reserver` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `r_sociale` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `civilite_user` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `n_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tel_user` char(11) COLLATE latin1_general_ci DEFAULT NULL,
  `ad_user` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `login_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `mdp_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `type_user` tinyint(1) DEFAULT NULL,
  `siret` text COLLATE latin1_general_ci,
  `n_valid` int(11) DEFAULT NULL,
  `valid` tinyint(1) NOT NULL,
  `a_valid` tinyint(1) NOT NULL,
  `banni` tinyint(1) NOT NULL,
  `whybanni` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `r_sociale`, `civilite_user`, `n_user`, `p_user`, `email_user`, `tel_user`, `ad_user`, `login_user`, `mdp_user`, `type_user`, `siret`, `n_valid`, `valid`, `a_valid`, `banni`, `whybanni`) VALUES
(1, 'Organisateurs', 'M', 'Administrateur', '', 'fetedunumerique@ryuzendoji.net', '0300000026', '', 'Administrateur', '107d348bff437c999a9ff192adcb78cb03b8ddc6', 3, '', 503983859, 1, 1, 0, ''),
(2, 'NEC', 'M', 'Takamichi', 'Saito', 's.takamichi@nec.com', NULL, NULL, 'Takamichi', '107d348bff437c999a9ff192adcb78cb03b8ddc6', 2, NULL, 646464644, 1, 1, 0, ''),
(3, NULL, 'Mme', 'Michou', 'Chantal', 'chantal-michou@sfr.fr', NULL, NULL, 'Mamiedu08', '107d348bff437c999a9ff192adcb78cb03b8ddc6 	', 1, NULL, 946464764, 1, 1, 0, ''),
(4, NULL, NULL, NULL, NULL, 's.nakamura@ncs.co.jp', NULL, NULL, 'Nakamura', '107d348bff437c999a9ff192adcb78cb03b8ddc6', 2, NULL, 371859301, 0, 0, 0, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id_lieu`,`id_event`),
  ADD KEY `planning_evenement0_FK` (`id_event`);

--
-- Index pour la table `propose`
--
ALTER TABLE `propose`
  ADD PRIMARY KEY (`id_event`,`id_user`),
  ADD KEY `propose_user0_FK` (`id_user`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_event`,`id_user`),
  ADD KEY `reserver_user0_FK` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `propose`
--
ALTER TABLE `propose`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_evenement0_FK` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`),
  ADD CONSTRAINT `planning_lieu_FK` FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id_lieu`);

--
-- Contraintes pour la table `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `propose_evenement_FK` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`),
  ADD CONSTRAINT `propose_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_evenement_FK` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id_event`),
  ADD CONSTRAINT `reserver_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
