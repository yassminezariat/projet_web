-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 10:57
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `final`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `sponsor_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `ID_animal` int(11) NOT NULL,
  `race` varchar(40) NOT NULL,
  `espece` varchar(40) NOT NULL,
  `date_naissance` date NOT NULL,
  `prix` int(11) NOT NULL,
  `origine` varchar(40) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`ID_animal`, `race`, `espece`, `date_naissance`, `prix`, `origine`, `image`) VALUES
(68, 'Caniche', 'Chiens', '2021-04-17', 2500, 'Tunisia', 'image_6.jpg'),
(73, 'Rgdoll', 'Chat', '2021-04-17', 22, 'QQ', 'image_5.jpg'),
(75, 'Poisson', 'Poisson', '2021-04-12', 15, 'JJ', 'image_17.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `note` int(11) NOT NULL,
  `date_avis` date NOT NULL,
  `id_user` int(5) NOT NULL,
  `type_avis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `description`, `note`, `date_avis`, `id_user`, `type_avis`) VALUES
(118, 'aze', 1, '2021-04-21', 3, 'un avis favorable'),
(126, 'aaaaa', 3, '2021-04-26', 2, 'un avis favorable'),
(127, 'kjs', 2, '2021-04-26', 2, 'un avis favorable'),
(128, 'zzz', 2, '2021-04-26', 2, 'un avis favorable'),
(131, 'aaaaaaaaaa', 3, '2021-04-28', 4, 'un avis defavorable'),
(134, ' je ne suis pas satisfait', 1, '2021-05-19', 0, 'un avis defavorable'),
(135, ' je suis bien ici', 1, '2021-05-19', 0, 'un avis favorable'),
(136, ' ija nahkiw ma badhna', 1, '2021-05-19', 1, 'un avis favorable'),
(140, 'dsafa dfa ad s', 1, '2021-05-19', 45, 'un avis favorable');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `sujet` text NOT NULL,
  `article` text NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `sujet`, `article`, `image`) VALUES
(26, 'blog 1', 'ddd', '<p>Lorem Ipsum est un texte d&#39;espace r&eacute;serv&eacute; couramment utilis&eacute; dans les industries graphique, imprim&eacute;e et &eacute;ditoriale pour pr&eacute;visualiser les mises en page et les maquettes visuelles</p>\r\n', 'g9.jpg'),
(27, 'blog2', 'aa', '<p>Lorem Ipsum est un texte d&#39;espace r&eacute;serv&eacute; couramment utilis&eacute; dans les industries graphique, imprim&eacute;e et &eacute;ditoriale pour pr&eacute;visualiser les mises en page et les maquettes visuelles</p>\r\n', 'g5.jpg'),
(39, 'heyyy', 'QQQ', '<p>asdfasfdasfasdfa</p>\r\n', 'g8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `email`, `login`, `password`, `adresse`, `tel`, `role`) VALUES
(5, 'srat', 'dorsaf', 'sirine.srat@esprit.tn', 'lll', '22222', 'mahdia', 23240020, 'client'),
(36, 'ayed', 'jawher', 'jawhar.ayed2017@gmail.com', 'mmm', 'mmm', 'chebba', 25478956, ''),
(45, 'srat', 'aya', 'aya.srat@esprit.tn', 'lll', 'lll', 'chebba', 21455876, 'client'),
(46, 'Youssef', 'Youssef', 'youssef.elmili@esprit.tn', 'you', 'sss', '2010', 22333267, 'client'),
(47, 'Youssef', 'Youssef', 'youssef.elmili@esprit.tn', 'youssef', 'fwfp64p8XZ6eenw', '2010', 22333267, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(8) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `id_b` int(8) NOT NULL,
  `nom_u` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `text`, `id_b`, `nom_u`) VALUES
(12, ' Lorem Ipsum est un texte d\'espace réservé couramment utilisé dans les industries graphique, imprimée et éditoriale pour prévisualiser les mises en page et les maquettes visuelles', 27, 'asma'),
(13, ' joli blog ', 26, 'med'),
(15, ' un bon sujet', 26, 'gd'),
(17, ' great blog', 27, 'gd'),
(20, ' gg', 26, 'asma'),
(29, ' grfe', 26, 'asma'),
(38, ' mauvais blog ', 26, 'med'),
(39, ' bad blog , i don\'t like it', 27, 'med'),
(41, 'great', 26, 'med'),
(55, '', 26, 'med'),
(56, 'hello', 26, 'asma'),
(57, 'water', 26, 'asma'),
(58, 'hahahahah', 26, 'asma'),
(59, 'essmi youssef', 26, 'asma'),
(60, 'essmi youssef', 26, 'asma'),
(61, 'essmi youssef', 26, 'asma'),
(62, 'essmi youssef', 26, 'asma'),
(63, 'bon blog', 26, 'asma'),
(64, 'essmi youssef', 39, 'asma'),
(65, 'hello there', 26, 'aya.srat@esprit'),
(66, 'dfsadfadfa', 26, 'aya.srat@esprit');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `idE` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`idE`, `nom`, `prenom`, `email`, `age`, `numero`, `login`) VALUES
(162, 'kkjhgft', 'llkjihugy', 'gytfrdes', 25, 8777, 25478);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `Nom` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `date`, `type`, `description`, `Nom`, `image`) VALUES
(12, '0522-05-22', 'Media', 'un bon event', 'Soiree', 'g3.jpg'),
(13, '2021-05-08', 'Animaux', 'un bon event', 'Assemblee', 'g1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

CREATE TABLE `plantes` (
  `id_plante` int(11) NOT NULL,
  `espece` varchar(50) NOT NULL,
  `environnement` varchar(80) NOT NULL,
  `prix` int(11) NOT NULL,
  `origine` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plantes`
--

INSERT INTO `plantes` (`id_plante`, `espece`, `environnement`, `prix`, `origine`, `image`) VALUES
(4, 'Cactus', 'Desert', 200, 'Tunise', 'image_8.jpg'),
(72, 'KHoukkh', 'Desert', 3500, 'QQ', 'image_0.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `ID_produit` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `appartenance` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID_produit`, `prix`, `type`, `appartenance`, `description`, `image`) VALUES
(1, 45, 'Alimentaire', 'Chiens', 'Ahala bel m3allem chnahwlek ?', 'image_1.jpg'),
(4, 200, 'Alimentaire', 'Chat', 'C\'est un bon produit', 'image_1.jpg'),
(5, 20, 'C', 'C', 'C', 'g5.jpg'),
(6, 55, 'A', 'A', 'A', 'g5.jpg'),
(7, 45, 'A', 'Poisson', 'Je suis ici la bas', 'image_1.jpg'),
(8, 45, 'Alimentaire', 'Cactus', 'Hahala bel m3allem chnahwlek ?', 'image_1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id_reclamation` int(11) NOT NULL,
  `type_reclamation` varchar(100) NOT NULL,
  `date_reclamation` date NOT NULL,
  `description_reclamation` varchar(300) NOT NULL,
  `id_user` int(9) NOT NULL,
  `etat_reclamation` varchar(60) NOT NULL DEFAULT 'non traitee',
  `reponse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id_reclamation`, `type_reclamation`, `date_reclamation`, `description_reclamation`, `id_user`, `etat_reclamation`, `reponse`) VALUES
(14, 'le site', '2021-04-28', 'yyyaaaaa', 3, 'traitee', 'yioo'),
(22, 'Produits', '2021-05-03', 'kknkil', 4, 'traitee', 'aaaa'),
(23, 'Produits', '2021-05-05', 'kknkil', 2, 'traitee', 'zzzzzzzzzzz'),
(24, 'le site', '2021-05-05', 'pas de rech', 2, 'traitee', 'zzzzzzzzzzz'),
(25, 'Produits', '2021-05-05', 'jhi', 4, 'traitee', 'ssssss'),
(27, 'Produits', '2021-05-05', 'zaza', 2, 'traitee', 'loool'),
(28, 'Produits', '2021-05-05', 'zaza', 3, 'non traitee', ''),
(30, 'Produits', '2021-05-05', 'kknkil', 4, 'traitee', 'ayaaa'),
(31, 'le site', '2021-05-19', 'je viens', 3, 'non traitee', ''),
(32, 'Produits', '2021-05-19', 'je viens ici', 45, 'non traitee', '');

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nom`, `prenom`, `email`, `type`) VALUES
(12, 'amel', 'souissi', 'amal.souissi@esprit.tn', 'Sponsoring financier'),
(14, 'aya', 'souissi', 'hedheuho@zfdt.com', 'Sponsoring financier');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`) VALUES
(0, 'amal', 'amal');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `CIN` int(8) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `telephone` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `CIN`, `nom`, `prenom`, `telephone`, `email`, `login`, `password`) VALUES
(1, 78984565, 'ctvybu', 'X', 78984561, 'youssef.elmili@esprit.tn', 'asma', '123'),
(2, 78945612, 'Hakim', 'Bedhief', 74185296, 'medhakimbedhief@gmail.com', 'hakim', '123'),
(3, 1234567898, 'Xctyvub', 'Xcvubin', 79465123, 'hngfbdvsc@gmail.com', 'vvvd', '123'),
(4, 12345688, 'Med', 'Kjz', 147855963, 'medhakimbedhief@gmail.com', 'med', '123'),
(9, 41389494, 'Ghada', 'Llo', 78945612, 'hngfbdvsc@gmail.com', 'gd', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`ID_animal`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`idE`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plantes`
--
ALTER TABLE `plantes`
  ADD PRIMARY KEY (`id_plante`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID_produit`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id_reclamation`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `ID_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `plantes`
--
ALTER TABLE `plantes`
  MODIFY `id_plante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
