-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 19 Janvier 2018 à 22:30
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `micro_blog_hertsoen_marvin`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(6) unsigned NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date` int(6) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`) VALUES
(58, 'Et en voilÃ  un autre :)', 1516400091),
(24, ' Bonjour', 1516399962),
(37, '?> <a href= ''google.fr''></a>', 1510245458),
(38, '?> <a href= ''google.fr''>lien</a>', 1510245468),
(55, 'ceci est un micro blog', 1516399985),
(56, 'je suis un message de remplissage ', 1516399995),
(41, '?> <a href= ''http://google.fr''>lien</a>', 1510245504),
(54, ' blablatest  2', 1516389895),
(57, '..moi aussi !', 1516400010),
(60, 'Le dernier ? ', 1516400129),
(59, 'On est presque Ã  3 pages de messages.', 1516400122),
(47, 'I <3 CSS3', 1511362448);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sid` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `password`, `sid`) VALUES
(1, 'hertsoen.m@hotmail.fr', 'da024630a414393eead50e1cbe2f37e0', '7d1ad173813edb66822258da81132ce1'),
(28, 'hertsoen.n@hotmail.fr', '098f6bcd4621d373cade4e832627b4f6', '868feb004951d1ffd06b267136b015fd'),
(50, 'qsx@gmail', '63a77021ce2c11562e4cb7bc0d5875ab', '9fffec101026dac6dd4aa7fcb16227e9'),
(49, 'qsx@gmail', '63a77021ce2c11562e4cb7bc0d5875ab', '9fffec101026dac6dd4aa7fcb16227e9'),
(44, 'hertsoen.f@hotmail.fr', 'df5ea29924d39c3be8785734f13169c6', 'd0db602f20c684ab78a794e284670224'),
(43, 'test@hotmail.fr', '098f6bcd4621d373cade4e832627b4f6', NULL),
(36, 'hertsoen.l@hotmail.fr', '128ecf542a35ac5270a87dc740918404', NULL),
(38, 'hertsoen.s@hotmail.fr', '098f6bcd4621d373cade4e832627b4f6', NULL),
(39, 'hertsoen.test@hotmail.fr', '098f6bcd4621d373cade4e832627b4f6', '0817024ea03b72560fc087c852b60a77'),
(40, 'hertsoen.mpub@hotmail.fr', 'da024630a414393eead50e1cbe2f37e0', NULL),
(41, 'hertsoen.a@hotmail.fr', 'da024630a414393eead50e1cbe2f37e0', NULL),
(42, 'hertsoen.u@hotmail.fr', 'da024630a414393eead50e1cbe2f37e0', NULL),
(73, 'hertsoen.n@hotmail.frqsc', 'd5fdfd7f4b6382f776ca28bd44ae1c53', '4305ad3899bedb2046364afc51840a93'),
(74, 'hertsoen.n@hotmail.frqsc', 'd5fdfd7f4b6382f776ca28bd44ae1c53', '4305ad3899bedb2046364afc51840a93');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
