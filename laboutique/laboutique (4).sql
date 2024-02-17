-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 17 Août 2023 à 12:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `laboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_a` int(5) NOT NULL AUTO_INCREMENT,
  `np` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_a`, `np`, `login`, `mdp`, `photo`) VALUES
(1, 'Wael Bedoui', 'admin', 'admin', 'wael.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `mdp`, `adresse`, `tel`, `ville`, `pays`) VALUES
(11, 'eya', 'ammar', 'eya1@gmail.com', '2ddbf3497f321b7a9f76b22e471b7020', 'Mhamdia', '22222222', 'Ben Arous', 'Tunisie'),
(12, 'eya', 'ammar', 'eya2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mhamdia', '90082836', 'Ben Arous', 'Tunisie'),
(13, 'atef03', 'ammar03', 'jebabli.atef@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'Bardo3', '22222222', 'Ben Arous', 'Autres'),
(14, 'JEBABLI', 'Atef', 'jebabli.atef3@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '56 Rue de jardins Bardo', '90795880', 'Tunis', 'Tunisie');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE IF NOT EXISTS `couleur` (
  `id_c` int(20) NOT NULL AUTO_INCREMENT,
  `id_p` int(20) NOT NULL,
  `couleur1` varchar(10) NOT NULL,
  `couleur2` varchar(10) NOT NULL,
  `couleur3` varchar(10) NOT NULL,
  `couleur4` varchar(10) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `couleur`
--

INSERT INTO `couleur` (`id_c`, `id_p`, `couleur1`, `couleur2`, `couleur3`, `couleur4`) VALUES
(14, 14, '', 'Rouge', '', ''),
(15, 15, '', 'Rouge', 'Blanc', ''),
(16, 16, '', 'Rouge', 'Blanc', ''),
(17, 17, '', '', '', 'Noir'),
(18, 18, 'Bleu', '', 'Blanc', 'Noir'),
(19, 19, '', '', '', 'Noir'),
(20, 20, 'Bleu', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(5) NOT NULL AUTO_INCREMENT,
  `id_client` int(5) NOT NULL,
  `id_p` int(5) NOT NULL,
  `qte` int(10) NOT NULL,
  `date` date NOT NULL,
  `etat` int(2) NOT NULL,
  PRIMARY KEY (`id_panier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_client`, `id_p`, `qte`, `date`, `etat`) VALUES
(24, 13, 38, 12, '2023-08-16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_p` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `cat` varchar(60) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `qte` int(5) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_p`, `image`, `cat`, `nom`, `prix`, `qte`) VALUES
(35, 'cascette 1.jpg', 'Casquettes & Chapeaux', 'Cascette Noir', '70.000', 10),
(36, 'ceinture-homme-toile-militaire.jpg', 'Ceintures', 'ceinture homme toile militaire', '35.000', 10),
(37, 'montre-homme-megir.jpg', 'Montres', 'Montre Homme Megir', '75.000', 10),
(38, 'h_cravate-mosaique-per-l-uomo-BLEU-front-.jpg', 'Cravates & NÅ“uds Papillons', 'Cravate Bleu', '23.000', 10),
(39, 'enzo-collection-ec-ph1462glb.jpg', 'Bijoux', 'Bracelet Homme Bronze', '15.000', 10);

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE IF NOT EXISTS `taille` (
  `id_t` int(5) NOT NULL AUTO_INCREMENT,
  `id_p` int(5) NOT NULL,
  `taille1` varchar(2) NOT NULL,
  `taille2` varchar(2) NOT NULL,
  `taille3` varchar(2) NOT NULL,
  `taille4` varchar(2) NOT NULL,
  PRIMARY KEY (`id_t`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `taille`
--

INSERT INTO `taille` (`id_t`, `id_p`, `taille1`, `taille2`, `taille3`, `taille4`) VALUES
(11, 14, '38', '39', '40', '41'),
(12, 15, '38', '39', '40', '41'),
(13, 16, '38', '', '40', '41'),
(14, 17, '', 'S', 'L', 'XL'),
(15, 18, 'M', 'S', 'L', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
