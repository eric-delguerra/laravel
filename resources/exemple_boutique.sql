-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 avr. 2019 à 15:13
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique_eric`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pstCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `address_users_id_foreign` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id`, `users_id`, `street`, `pstCode`, `city`, `country`, `updated_at`, `created_at`) VALUES
(3, 3, 'Rue des Bélugas', '04450', 'Bélugaland', 'Béluganda', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(4, 1, 'Allée des fleurs qui poussent', '13000', 'Salt  Flower City', 'Corée centrale', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(5, 2, 'Tout en haut', '00001', 'Mont Fujihama', 'A droite de la Chine', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(6, 4, 'Avenue des enfants perdus', '75000', 'Lilles', 'Espagne', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(7, 8, 'Boulevard des grands hommes', '38000', 'Grenoble', 'Pas loin de Paris', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(8, 7, 'L\'avenue des troues de serpents', '38100', 'Grenoble', 'Gaulle', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(9, 6, 'Impasse du RockNRoll', '38000', 'Grenoble', 'New Jersey', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(10, 5, 'Avenue des arbres centenaires', '38100', 'Grenoble', 'France', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(11, 9, 'Impasse des routes romaines', '39400', 'Valencia', 'Espagne', '2019-03-21 13:35:21', '2019-03-21 13:35:21'),
(12, 10, 'Street from the street', '45BCY', 'Washington DB', 'Japon', '2019-03-21 13:35:21', '2019-03-21 13:35:21');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Book', '2019-03-21 13:35:49', '2019-03-21 13:35:49'),
(2, 'Wear', '2019-03-21 13:35:49', '2019-03-21 13:35:49'),
(3, 'Animal', '2019-03-21 13:35:49', '2019-03-21 13:35:49'),
(4, 'For Home ', '2019-03-21 13:35:49', '2019-03-21 13:35:49');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_08_145256_orders', 1),
(2, '2019_03_18_101929_products', 1),
(3, '2019_03_18_102346_users', 1),
(4, '2019_03_18_102609_adress', 1),
(5, '2019_03_18_102820_order_product', 1),
(6, '2019_03_18_102938_categories', 1),
(7, '2019_03_18_122943_promo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_users_id_foreign` (`users_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders_product`
--

DROP TABLE IF EXISTS `orders_product`;
CREATE TABLE IF NOT EXISTS `orders_product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `orders_product_products_id_foreign` (`products_id`),
  KEY `orders_product_orders_id_foreign` (`orders_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idOrder` (`order_id`),
  KEY `idProduct` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `weigth` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `promos_id` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `products_categories_id_foreign` (`categories_id`),
  KEY `products_promos_id_foreign` (`promos_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img`, `price`, `weigth`, `stock`, `categories_id`, `promos_id`, `updated_at`, `created_at`) VALUES
(1, 'Paire de chaussettes sales', 'Une INCROYABLE paire de chaussettes sales ayant appartenu très certainement à Jacques Chirac', 'chaussette.jpg', 1500, 560, 15, 2, 2, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(2, 'L\'encyclopédie des petits dauphins moches.', 'Découvrez le véritable visage de la mer, celui des Bélugas.', 'beluga.jpg', 120, 1000, 50, 1, 0, '2019-03-21 23:00:00', '2019-03-22 09:44:09'),
(3, 'Tasse à café CHIC mais pas trop', 'Retrouvez tout le goût du café ou du thé dans cette tasse qui fait CHIC mais pas trop', 'tasse.jpg', 6500, 387, 34, 4, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(4, 'Houhou le Hiboux', 'Véritable sage chez les rapaces, Houhou sera vous faire rire avec des blagues vraiment dr?le que vous pourrez redire au travail !', 'hiboux.jpg', 4500, 280, 1, 3, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(5, 'Landau CALRISSIAN', 'Promenez votre progéniture avec ce nouveau lando tirer de la plus belle des SAGA. ', 'lando.jpg', 70000, 3500, 0, 4, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(6, 'Parasol en feuille de Noyer', 'Authentique parasol en feuille de noyer de Grenoble (AOP).', 'parasol.jpg', 2000, 1500, 4, 4, 1, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(7, 'Avenir plaisant', 'RUPTURE FOURNISSEUR// Avec un manque de gratitude de la part de toute l\'?quipe', 'avenir.jpg', 100000, 42, 0, 4, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(8, 'Lot de 2 Cuillères', 'Ce jolie lot de cuillère fera un parfait cadeau de mariage ou un excellent faire-part. ', 'cuillere.jpg', 400, 960, 65, 4, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(9, 'Collection de requêtes SQL.', 'Superbe collection de requêtes SQL qui ne fonctionnent pas qui nous viennes tout droit du Campus Numérique In The Alps. ', 'requete.jpg', 200, 100, 75, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(10, 'Vieux bouc. ', 'Ce vieux bouc vous permettra de désodoriser votre maison et même votre quartier de l\'odeur de la pollution', 'bouc.jpg', 15000, 2400, 0, 3, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(11, 'Pigeon de Grenoble', 'Particulièrement dégueulasse, le pigeon de Grenoble pourra refiler certaine maladie ? vos amis que vous n\'apprécier pas trop.', 'pigeon.jpg', 15000, 200, 3, 3, 1, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(12, 'Veste en cuir', 'Vous croyez vraiment qu\'à ce prix là c\'est du vrai cuir ? ', 'veste.jpg', 15000, 2000, 32, 2, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(13, 'Gant de ski non étanche', 'Protège du froid mais pas de l\'eau. Bataille de boule de neige déconseillée. ', 'gant.jpg', 450, 400, 0, 2, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(14, 'Lire l\'avenir dans le papier toilette édition Livre de Poche', 'Apprenez à voir l\'avenir après un passage au toilette (conseillé pour une meilleure lecture) ou avant.', 'pq.jpg', 1000, 100, 5, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(15, 'Comprendre le Code avec Nico', 'Tu pige rien au code mais ça t\'intéresse quand même ? Regarde le miroir avec ce bouquin et dis \"Nico\" trois fois.', 'nico.jpg', 300, 360, 0, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(16, 'Tabouret retourné pour 4 personnes', 'Grace à ce petit tabouret vous allez gagnez beaucoup de place de votre logement ! \r\nDemander conseil à votre pharmacien avant de l\'utiliser.', 'tabouret.jpg', 15000, 450, 15, 4, 1, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(17, 'Ticket de Loto perdant encadré. ', 'L\'ancien propriétaire de ce ticket était un peu déçu. (Mauvais joueur surement) ', 'loto.jpg', 100, 100, 69, 4, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(18, '\"Les poignées de porte dans leurs états naturels.\"', 'Véritable consécration pour Bernard Don Moricio avec ce portfolio qui à fait l\'unanimité au \"conseil des photos qu\'elles sont belles\".', 'poignet.jpg', 2500, 300, 25, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(19, 'L\'astrophysique par Samuel', 'Encore un auteur qui se croit au dessus de tout le monde. ', 'sam.jpg', 4000, 450, 47, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(20, 'Le carnet de Chloé', '\"La putin d\'sa race\" Voilà un des merveilleux exemples que l\'on peut retrouver dans le carnet de Chloé.\r\nPour les petits et grands et même la famille. ', 'chloe.jpg', 1250, 200, 33, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12'),
(37, 'Lolo', 'Un bon p\'tit lolo pour l\'apéro. Par contre c\'est tout à vos frais', 'lolo.jpg', 450, 80, 1, 1, 0, '2019-03-21 13:36:12', '2019-03-21 13:36:12');

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `promo_start` date DEFAULT NULL,
  `promo_end` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promos`
--

INSERT INTO `promos` (`id`, `name`, `description`, `value`, `type`, `promo_start`, `promo_end`, `updated_at`, `created_at`) VALUES
(1, 'test', NULL, 5454, 1, NULL, NULL, '2019-03-18 13:22:47', '2019-03-18 13:22:47'),
(2, 'test2', 'SOMBRERO', 18, 2, '2019-03-05', '2019-03-31', '2019-03-22 09:58:18', '2019-03-22 09:58:18');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `updated_at`, `created_at`, `is_admin`) VALUES
(1, 'Jean-Marie', 'Le stylo', 'lestylo@ex.pet', 'oui', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(2, 'Thib', 'Papluba', 'Papluba6587@guedin.com', 'sisimafamille', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(3, 'Sam', 'Itch', 'itcheurdu38@beluga.fr', 'draguosse', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(4, 'Litchi', 'Palefrui', 'jenesuispasunfruit@fruitier.org', 'banana', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(5, 'Albert', 'Dudofinet', 'albertotuchi@isere.fr', 'vercorsbelledone', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(6, 'Johnny', 'Maccony', 'allumelabougie@feu.com', 'lelouplamoto', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(7, 'Pêre', 'Siffleur', 'ssssssssss@gmail.com', 'sssssssssssssss', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(8, 'Prad', 'Bitt', 'leVraiPradBitt@orange.fr', 'jsuisbo', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(9, 'Jean-Marie', 'Travolta', 'JMTravolta@os.com', '123456', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(10, 'Albert', 'Tototzi', 'jechante@sing.fr', 'lamusiqueitalienne', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(11, 'Marie-Charlotte', 'Deladonchamps', 'mc-ddchamps@solar.com', 'grossebite', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(12, 'Samuel', 'Elamraoui', 'pedale@jesuce.com', 'sexuel', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(13, 'Michel', 'Fugain', 'Mimifufu@mail.com', 'yolo', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(14, 'Zoro', 'Delavega', 'signezZ@justiciermasque.com', 'z', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(15, 'Th', 'Dort', 'teub@gmal.com', 'boulverser', '2019-03-21 13:36:30', '2019-03-21 13:36:30', 0),
(16, 'Mr Bonjour', 'Aurevoir', 'Bonjour@hello.com', '$2y$10$pnTAOioKvYkaj6HNdJp6BeuCgP3vmZ3TfdqgEwnPWkZQrRy.iNHxq', '2019-04-09 08:59:27', '2019-04-09 08:59:27', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
