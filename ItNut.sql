-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2016 at 11:05 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ItNut`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `shortcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `shortcode`, `image`) VALUES
(1, 'Mélange pour Boisson Protéinée', 'Augmentez votre apport en protéines avec ce produit versatile qui offre deux alternatives. A préparer comme une collation à apport calorique contrôlé et riche en protéines - ou à ajouter à votre Shake de Formula 1* préféré pour obtenir une boisson délicieuse et onctueuse.<br/><b>\r\nAPPORTS ESSENTIELS></b><br/><ul><li>\r\n\r\n15 g de protéines de haute qualité</li><li>\r\n7 g de glucides</li><li>\r\n20 vitamines and minéraux</li><li>\r\nPeut être mélangé à de l\'eau</li><li>\r\nSaveur vanille</li></ul><br/><b>\r\nAVANTAGES PRODUIT</b><br/>\r\n\r\nLe Mélange pour boisson protéinée est une alternative de choix pour vous aider à atteindre votre apport quotidien en protéines. Les protéines sont les éléments constituants des muscles. Elles sont indispensables au bon fonctionnement des cellules et à la croissance et la réparation tissulaire. Le corps n\'est pas capable de stocker les protéines et ne peut pas les produire lui-même. Il est donc primordial d\'en consommer suffisamment au quotidien.\r\n<br/>\r\n<b>Nouveauté</b>', 62, 'Mélange-pour-Boisson-Protéinée', 'nomDeFichier'),
(2, 'Graines de soja grillées', 'Ce délicieux encas salé est idéal si vous êtes en déplacement. Chaque sachet contient 9g de protéines et 113 kcal. Les Graines de Soja Grillées constituent une excellente alternative aux autres encas salés tels que les chips ou les biscuits apéritifs.<br/><b>\r\n\r\nAPPORTS ESSENTIELS</b><br/><ul><li>\r\nRiches en protéines (9g par sachet) qui contribuent à augmenter la masse musculaire.</li><li>\r\n113 calories par sachet, soit moins que dans les encas salés classiques.</li><li>\r\nDes graines grillées à sec et légèrement salées – un vrai délice.</li><li>\r\nEn sachet, un format très pratique pour les déplacements.</li></ul><br/><b>\r\nAVANTAGES PRODUIT</b><br/><ul><li>\r\nUn encas équilibré et gourmand.</li><li>\r\nUne alternative aux encas salés tels que les chips, les biscuits apéritifs et les fruits secs salés, ou si vous souhaitez contrôler votre poids.</li><li>\r\nAide à augmenter votre consommation de protéines.</li><li>\r\nIdéal si vous menez une vie très active et si vous avez envie d’un encas équilibré alors que vous êtes en déplacement.</li></ul>', 30.99, 'herbalife-graines-soja-grillees', ''),
(4, 'Boulette de viande bio', 'Voici les nouvelles boulettes de viande bio faites par Herbalife.\r\n\r\nProduites dans nos fermes bio, nous vous garantissons une qualité maximale.', 90, 'Boulette-de-viande-bio', ''),
(5, 'chocolat', 'chocolat chaud', 5, 'chocolat', ''),
(7, 'pack', 'pack petit déjeuner', 122.5, 'pack', '7a8cffce06f088f3e11279f235c04a66.png'),
(8, 'Aloé Mangue', 'Concentré  d\'aloé vera.', 41.5, 'Aloé-Mangue', '87e3b30e41686a9b1248c75992259b29.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_29A5EC276C6E55B5` (`nom`),
  ADD UNIQUE KEY `UNIQ_29A5EC274D3E69FD` (`shortcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
