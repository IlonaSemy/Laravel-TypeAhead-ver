-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 04:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhero`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Action figures', 'Action Figures collection', 'action-figures', '2017.08.14.21.30.07-actionheroescat.png', '2017-08-14 21:30:07', '2017-06-22 00:00:00'),
(2, 'Funko Pop! figures', 'Funko Pop Vinyl Series', 'funko-pop!-figures', '2017.08.01.15.00.25-popcat.jpg', '2017-08-01 15:00:25', '2017-06-22 00:00:00'),
(3, 'Lego action figures', 'Marvel, DC comics,Star Wars and More', 'lego-figures', 'legocat.png', '2017-06-22 00:00:00', '2017-06-22 00:00:00'),
(7, 'Comics books', 'DC,Marvel and more', 'comics-books', '2017.08.04.12.26.30-comicmarvel.jpg', '2017-08-04 12:26:30', '2017-08-02 09:43:14'),
(8, 'Posters', 'DC,Marvel, Game of Thrones, Star Wars and More', 'posters', '2017.08.14.12.37.08-dcposter.jpg', '2017-08-14 12:37:08', '2017-08-14 07:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About our products', 'Lorem ipsum dolor sit amet, maluisset deterruisset consequuntur quo ex. Ex eius evertitur mea, ea qui stet consetetur. Causae eligendi vim no, duo delicata sadipscing dissentiet an. Omnes impetus pro ne, has cetero indoctum te. Autem accumsan est et. Te saperet scripserit vel.\r\n\r\nNovum liber sonet has ne, ex usu modus posse dicat, ne cum nonumy electram. Sit in persius molestiae, nec no quem dicta. Ut porro facilis vim, ne quo scaevola dissentias. Nec civibus accusam deleniti ne, est timeam interesset id. Ea sint novum pro, pericula gloriatur no cum, mel option quaeque detraxit ea.', '2017-07-23 00:00:00', '2017-07-23 00:00:00'),
(2, 1, 'About Shipping', 'Lorem ipsum dolor sit amet, maluisset deterruisset consequuntur quo ex. Ex eius evertitur mea, ea qui stet consetetur. Causae eligendi vim no, duo delicata sadipscing dissentiet an. Omnes impetus pro ne, has cetero indoctum te. Autem accumsan est et. Te saperet scripserit vel.\r\n\r\nNovum liber sonet has ne, ex usu modus posse dicat, ne cum nonumy electram. Sit in persius molestiae, nec no quem dicta. Ut porro facilis vim, ne quo scaevola dissentias. Nec civibus accusam deleniti ne, est timeam interesset id. Ea sint novum pro, pericula gloriatur no cum, mel option quaeque detraxit ea.', '2017-07-23 00:00:00', '2017-07-23 00:00:00'),
(3, 2, 'Our Services', 'Lorem ipsum dolor sit amet, maluisset deterruisset consequuntur quo ex. Ex eius evertitur mea, ea qui stet consetetur. Causae eligendi vim no, duo delicata sadipscing dissentiet an. Omnes impetus pro ne, has cetero indoctum te. Autem accumsan est et. Te saperet scripserit vel.\r\n\r\nNovum liber sonet has ne, ex usu modus posse dicat, ne cum nonumy electram. Sit in persius molestiae, nec no quem dicta. Ut porro facilis vim, ne quo scaevola dissentias. Nec civibus accusam deleniti ne, est timeam interesset id. Ea sint novum pro, pericula gloriatur no cum, mel option quaeque detraxit ea.', '2017-07-23 00:00:00', '2017-07-23 00:00:00'),
(4, 2, 'Contact us', '<p>Our phone: 0547233568 </p><p>Our email: ilonasemy@gmail.com </p><p><br></p><p>Our world</p>', '2017-08-01 10:02:10', '2017-07-30 10:55:30'),
(5, 1, 'About us us', '<p><b>Our phone: 0547233568</b></p>', '2017-08-01 10:02:47', '2017-07-30 10:57:46'),
(6, 2, 'Our services', '<p>Our phone : 0547233568</p>', '2017-07-30 11:30:49', '2017-07-30 11:30:49'),
(9, 2, 'fff', '<p>njkk</p>', '2017-07-31 14:43:49', '2017-07-31 14:43:49'),
(10, 2, 'servisessss', 'hhhhhhhhh', '2017-08-01 10:00:20', '2017-08-01 10:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `title`, `url`, `updated_at`, `created_at`) VALUES
(1, 'About us', 'About us', 'about-us', '2017-07-28 14:05:31', '2017-07-23 00:00:00'),
(2, 'Services', 'Our Services', 'our-services', '2017-07-23 00:00:00', '2017-07-23 00:00:00'),
(3, 'Contact', 'Contact us', 'contact-us', '2017-07-23 00:00:00', '2017-07-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 4, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:9:\"Superman \";s:5:\"price\";d:29.9;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:9:\"Star Lord\";s:5:\"price\";d:27.9;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '115.60', '2017-07-23 17:06:57', '2017-07-23 17:06:57'),
(2, 4, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:9:\"Superman \";s:5:\"price\";d:29.9;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:9:\"Star Lord\";s:5:\"price\";d:27.9;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '115.60', '2017-07-23 17:08:01', '2017-07-23 17:08:01'),
(3, 4, 'a:2:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"Jon Snow\";s:5:\"price\";d:25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:6:\"Jo Sno\";s:5:\"price\";d:25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '50.00', '2017-07-23 17:08:53', '2017-07-23 17:08:53'),
(4, 5, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Superman\";s:5:\"price\";d:25;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:9:\"Star Lord\";s:5:\"price\";d:27.9;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '105.80', '2017-08-02 11:37:53', '2017-08-02 11:37:53'),
(5, 4, 'a:2:{i:9;a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:10:\"Doctor Who\";s:5:\"price\";d:25;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:8:\"Sherlock\";s:5:\"price\";d:25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '75.00', '2017-08-14 08:54:01', '2017-08-14 08:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `url`, `image`, `price`, `updated_at`, `created_at`) VALUES
(1, 1, 'Superman', 'Justice League Superman', 'superman', '2017.08.02.10.59.40-superman.jpg', '25.00', '2017-08-02 10:59:40', '2017-06-25 15:08:25'),
(2, 1, 'Star Lord', 'Marvel Star Lord 6-inch figure.\r\nPart of the Guardians of the Galaxy Legends Series.', 'Star-Lord', '2017.08.14.07.48.57-starlordguardian.jpg', '27.90', '2017-08-14 07:51:33', '2017-06-25 15:31:12'),
(3, 1, 'Spiderman', 'Marvel  Spiderman ,14 inch action figure', 'Spiderman', '2017.08.14.08.02.57-spidie.jpg', '25.90', '2017-08-14 08:02:57', '2017-06-25 15:37:36'),
(8, 2, 'Sherlock', '<p>Sherlock Holmes from Sherlock TV series</p>', 'sherlock', '2017.08.14.05.42.25-sherlock.jpg', '20.00', '2017-08-17 20:27:26', '2017-08-13 18:47:52'),
(9, 2, 'Doctor Who', '<p>The 10th doctor from  Doctor Who TV series</p>', 'doctor-who', '2017.08.14.05.25.22-doctor11.jpg', '18.00', '2017-08-17 20:27:44', '2017-08-14 05:25:22'),
(10, 2, 'John Watson', '<p>John Watson from Sherlock TV series</p>', 'john-watson', '2017.08.14.06.24.59-jonwatson.jpg', '17.00', '2017-08-17 20:29:47', '2017-08-14 06:24:59'),
(11, 2, 'Jon Snow', '<p>Jon Snow from Game of Thrones series</p>', 'jon-snow', '2017.08.14.08.29.25-johnsnow2.jpg', '25.00', '2017-08-14 08:29:25', '2017-08-14 06:27:06'),
(12, 2, 'Tyrion Lannister', '<p>Tyrion Lannister from Game of Thrones TV series</p>', 'tyrion-lannister', '2017.08.14.06.53.33-lanistert.jpg', '25.00', '2017-08-14 07:01:37', '2017-08-14 06:53:33'),
(13, 1, 'Wonder Woman', '<p>Dc Comics Wonder Woman , 12 inch action figure.</p>', 'wonder-woman', '2017.08.14.07.55.45-wonderdc.jpg', '30.00', '2017-08-14 07:55:45', '2017-08-14 07:55:45'),
(14, 1, 'Flash Gordon', 'DC Flash Gordon Justice League action figure', 'flash-gordon', '2017.08.14.07.59.30-flash.jpg', '35.00', '2017-08-14 07:59:30', '2017-08-14 07:59:30'),
(15, 2, 'Daenerys Targaryen', '<p>Daenerys Targaryen from Game of Thrones TV series</p>', 'daenerys-targaryen', '2017.08.14.08.28.04-dayneris.jpg', '25.00', '2017-08-14 08:28:04', '2017-08-14 08:28:04'),
(16, 2, 'Arya Stark', '<p>Arya Stark from Game of Thrones TV series</p>', 'arya-stark', '2017.08.14.08.29.04-aryastark.jpg', '25.00', '2017-08-14 08:29:04', '2017-08-14 08:29:04'),
(18, 3, 'Lego Star Wars minifigure  Darth Vader', '<p><font color=\"#ff9c00\"><b>Only 3 left in stock !</b></font></p>', 'lego-star-wars-minifigure--darth-vader', '2017.08.14.09.29.02-darthvaderleg.jpg', '12.00', '2017-08-14 09:29:02', '2017-08-14 09:29:02'),
(19, 3, 'Lego Star Wars minifigure  Han Solo', '<b><font color=\"#ff9c00\">In stock !</font></b>', 'lego-star-wars-minifigure--han-solo', '2017.08.14.09.30.05-hansolo.jpg', '12.00', '2017-08-14 09:30:05', '2017-08-14 09:30:05'),
(20, 3, 'Lego Star Wars minifigure  Luke Skywalker', '<p><b><font color=\"#ff9c00\">Only 5 left in stock !</font></b></p>', 'lego-star-wars-minifigure--luke-skywalker', '2017.08.14.09.32.46-lukeleg.jpg', '12.00', '2017-08-14 09:32:46', '2017-08-14 09:32:46'),
(21, 3, 'Lego Batman minifigure', '<p><b><font color=\"#ff9c00\">In stock !</font></b></p>', 'lego-batman-minifigure', '2017.08.14.09.43.08-batmanlegg.jpg', '12.00', '2017-08-14 09:43:08', '2017-08-14 09:43:08'),
(22, 3, 'Lego Batman minifigure  Robin', '<p><b><font color=\"#ff9c00\">In stock !</font></b></p>', 'lego-batman-minifigure--robin', '2017.08.14.09.43.55-robinleg.jpg', '12.00', '2017-08-14 09:43:55', '2017-08-14 09:43:55'),
(23, 3, 'Lego Batman minifigure   Joker', '<p><b><font color=\"#ff9c00\">In stock !</font></b></p>', 'lego-batman-minifigure---joker', '2017.08.14.09.45.31-jokerleg.jpg', '12.00', '2017-08-14 09:45:31', '2017-08-14 09:44:39'),
(24, 8, 'Guardians of the Galaxy', '<b><font color=\"#ff9c00\">In stock !</font></b>', 'guardians-of-the-galaxy', '2017.08.14.18.29.55-gotg.jpg', '10.00', '2017-08-14 18:29:55', '2017-08-14 12:41:00'),
(25, 8, 'Avangers', '<p><b><font color=\"#ff9c00\">In stock !</font></b></p>', 'avangers', '2017.08.14.12.52.08-avangersposter.jpg', '10.00', '2017-08-14 12:52:08', '2017-08-14 12:52:08'),
(26, 8, 'Spiderman Homecoming', '<p><b><font color=\"#ff9c00\">In stock !</font></b></p>', 'spiderman-homecoming', '2017.08.14.12.58.24-spidermanposter.jpg', '10.00', '2017-08-14 12:58:24', '2017-08-14 12:58:24'),
(27, 8, 'Wonder Woman Gal Gadot', '<p><span style=\"font-weight: 700;\"><font color=\"#ff9c00\">In stock !</font></span></p>', 'wonder-woman-gal-gadot', '2017.08.14.12.59.32-wonderwposter.jpg', '10.00', '2017-08-14 12:59:32', '2017-08-14 12:59:32'),
(28, 8, 'Deadpool', '<p><span style=\"font-weight: 700;\"><font color=\"#ff9c00\">In stock !</font></span></p>', 'deadpool', '2017.08.14.13.00.20-deadpulposter.jpg', '10.00', '2017-08-14 13:00:20', '2017-08-14 13:00:20'),
(29, 7, 'Avengers', '<p>Avengers 1963 &nbsp;1st Series</p>', 'avengers', '2017.08.14.14.13.01-avangerscom.jpg', '20.00', '2017-08-14 14:13:01', '2017-08-14 14:13:01'),
(30, 7, 'X Men', 'Marvel, 1th issue', 'x-men', '2017.08.14.14.15.54-xmencomics.JPG', '20.00', '2017-08-14 14:15:54', '2017-08-14 14:15:54'),
(31, 7, 'Iron Man', '<p>Marvel , The invincible Iron Man</p>', 'iron-man', '2017.08.14.14.18.38-ironmancomic.jpg', '20.00', '2017-08-14 14:18:38', '2017-08-14 14:18:38'),
(32, 7, 'DC Superman', '<p>DC  Superman </p>', 'dc-superman', '2017.08.14.14.20.43-supermancomic.jpg', '20.00', '2017-08-14 14:21:41', '2017-08-14 14:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2017-07-13 00:00:00', '2017-07-13 00:00:00'),
(2, '--', '--', '--', '2017-07-13 00:00:00', '2017-07-13 00:00:00'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$YKXbYrURhQTPQTT3nK3hVuy7KbAigLTyUSrDvuAMoWZhblBaGw7SG', '2017-07-13 00:00:00', '2017-07-13 00:00:00'),
(4, 'Clark Kent', 'clarkkent@gmail.com', '$2y$10$YKXbYrURhQTPQTT3nK3hVuy7KbAigLTyUSrDvuAMoWZhblBaGw7SG', '2017-07-13 00:00:00', '2017-07-13 00:00:00'),
(5, 'Peter Parker', 'peterparker@gmail.com', '$2y$10$YKXbYrURhQTPQTT3nK3hVuy7KbAigLTyUSrDvuAMoWZhblBaGw7SG', '2017-07-13 00:00:00', '2017-07-13 00:00:00'),
(6, 'Bruce Wayne', 'brucewayne@gmail.com', '$2y$10$981POO8BytFySUxFQGxnD.F7x7.g4GRmxBfjVDfggw.dZGvjjIO12', '2017-07-21 19:45:04', '2017-07-21 19:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `uid` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`uid`, `role`) VALUES
(3, 3),
(4, 4),
(5, 4),
(6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
