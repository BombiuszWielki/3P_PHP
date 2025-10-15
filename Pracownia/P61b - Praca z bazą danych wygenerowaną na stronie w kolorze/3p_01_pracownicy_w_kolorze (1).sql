-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 15, 2025 at 08:24 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3p_01_pracownicy_w_kolorze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `3p_01_pracownicy_w_kolorze`
--

CREATE TABLE `3p_01_pracownicy_w_kolorze` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `3p_01_pracownicy_w_kolorze`
--

INSERT INTO `3p_01_pracownicy_w_kolorze` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Gard', 'Daviot', 'gdaviot0@aol.com', 'Male', '152.58.191.85', '#2409f0'),
(2, 'Pauline', 'Barensen', 'pbarensen1@psu.edu', 'Bigender', '47.91.12.66', '#9d7e52'),
(3, 'Darnall', 'Hunnicot', 'dhunnicot2@unesco.org', 'Male', '81.159.27.32', '#976376'),
(4, 'Ruprecht', 'Vedntyev', 'rvedntyev3@buzzfeed.com', 'Male', '31.145.209.254', '#9bb242'),
(5, 'Wood', 'Mellor', 'wmellor4@mlb.com', 'Male', '12.68.230.248', '#5b4f84'),
(6, 'Worth', 'Lathey', 'wlathey5@sohu.com', 'Male', '92.208.150.37', '#a51020'),
(7, 'Denice', 'Schroter', 'dschroter6@hexun.com', 'Female', '225.221.17.59', '#0b61c3'),
(8, 'Charmaine', 'Herity', 'cherity7@engadget.com', 'Agender', '11.62.52.148', '#89d55d'),
(9, 'Oberon', 'Wesson', 'owesson8@godaddy.com', 'Male', '110.85.68.127', '#d12001'),
(10, 'Adeline', 'Ludye', 'aludye9@delicious.com', 'Female', '109.251.197.174', '#fbe97e'),
(11, 'Levi', 'Herries', 'lherriesa@e-recht24.de', 'Non-binary', '49.43.249.173', '#13e146'),
(12, 'Vicki', 'Cherry', 'vcherryb@mozilla.org', 'Bigender', '146.7.187.66', '#e8dfa2'),
(13, 'Merrill', 'Jasiak', 'mjasiakc@dot.gov', 'Male', '45.195.151.136', '#8aa93f'),
(14, 'Lin', 'Paris', 'lparisd@wikispaces.com', 'Male', '115.155.215.226', '#163120'),
(15, 'Eolande', 'Itzak', 'eitzake@rambler.ru', 'Female', '166.71.44.194', '#86ac3e'),
(16, 'Dena', 'Gabbetis', 'dgabbetisf@youtube.com', 'Non-binary', '12.161.193.179', '#82f5d3'),
(17, 'Rudolfo', 'Fathers', 'rfathersg@latimes.com', 'Male', '35.7.168.193', '#fa8b6e'),
(18, 'Randi', 'Huggett', 'rhuggetth@mapy.cz', 'Male', '100.230.237.91', '#a84189'),
(19, 'Helyn', 'Ruppele', 'hruppelei@flavors.me', 'Female', '0.55.60.99', '#9d7081'),
(20, 'Ellerey', 'Willder', 'ewillderj@cnet.com', 'Male', '243.110.215.214', '#59d235'),
(21, 'Holli', 'Taylor', 'htaylork@mozilla.org', 'Female', '59.118.2.102', '#1af940'),
(22, 'Peri', 'Ragbourne', 'pragbournel@instagram.com', 'Female', '228.219.120.28', '#5529b0'),
(23, 'Lurette', 'Szimon', 'lszimonm@umn.edu', 'Female', '140.46.231.4', '#2b8deb'),
(24, 'Javier', 'Boylin', 'jboylinn@omniture.com', 'Male', '120.221.136.57', '#8c3254'),
(25, 'Hendrik', 'Starmer', 'hstarmero@yellowbook.com', 'Male', '58.88.161.205', '#e4a62d'),
(26, 'Samuel', 'Coare', 'scoarep@ucoz.ru', 'Male', '238.18.249.121', '#420580'),
(27, 'Loutitia', 'Anlay', 'lanlayq@prlog.org', 'Female', '115.8.127.198', '#e0c570'),
(28, 'Jackquelin', 'MacVean', 'jmacveanr@buzzfeed.com', 'Female', '57.172.104.161', '#e2962f'),
(29, 'Martainn', 'Mumm', 'mmumms@telegraph.co.uk', 'Male', '61.247.199.154', '#9c84f2'),
(30, 'Cathie', 'Laffan', 'claffant@ycombinator.com', 'Female', '174.163.59.213', '#8c05de'),
(31, 'Derward', 'Baker', 'dbakeru@wired.com', 'Male', '18.72.137.90', '#42bf64'),
(32, 'Artemus', 'Yakolev', 'ayakolevv@google.fr', 'Male', '217.144.86.215', '#45e47b'),
(33, 'Phoebe', 'Winsper', 'pwinsperw@virginia.edu', 'Female', '17.113.15.31', '#223e5d'),
(34, 'Lindsey', 'Robotham', 'lrobothamx@ucsd.edu', 'Male', '255.226.44.47', '#d2eb53'),
(35, 'Lyon', 'Stedson', 'lstedsony@php.net', 'Male', '68.138.227.46', '#893898'),
(36, 'Benetta', 'Keston', 'bkestonz@washington.edu', 'Female', '87.167.14.34', '#1550fd'),
(37, 'Pietro', 'Raikes', 'praikes10@disqus.com', 'Male', '127.5.24.12', '#eb350a'),
(38, 'Fernando', 'Gaiter', 'fgaiter11@google.es', 'Male', '7.166.127.10', '#3f7201'),
(39, 'Gustavo', 'Clapperton', 'gclapperton12@senate.gov', 'Male', '202.107.119.242', '#abb5ce'),
(40, 'Moise', 'McKinie', 'mmckinie13@nhs.uk', 'Male', '13.137.246.24', '#99f7c0'),
(41, 'Abrahan', 'Atger', 'aatger14@ftc.gov', 'Male', '127.114.147.122', '#bd83b3'),
(42, 'Fran', 'Quinion', 'fquinion15@slashdot.org', 'Agender', '218.40.189.186', '#a2d968'),
(43, 'Paulita', 'Crookshank', 'pcrookshank16@tumblr.com', 'Female', '45.39.255.166', '#072330'),
(44, 'Ingaborg', 'Seden', 'iseden17@devhub.com', 'Female', '197.170.226.102', '#941ee4'),
(45, 'Hubie', 'Wallach', 'hwallach18@nymag.com', 'Male', '6.123.104.242', '#fb97eb'),
(46, 'Kristopher', 'Borrel', 'kborrel19@studiopress.com', 'Genderqueer', '245.144.22.87', '#f3bd6a'),
(47, 'Nikolaos', 'Lane', 'nlane1a@ca.gov', 'Male', '229.181.63.201', '#4c5887'),
(48, 'Ossie', 'Woodrup', 'owoodrup1b@typepad.com', 'Male', '20.214.218.152', '#d44017'),
(49, 'Linnet', 'Stobart', 'lstobart1c@japanpost.jp', 'Female', '86.4.177.122', '#8f0a78'),
(50, 'Rafaelia', 'McIsaac', 'rmcisaac1d@pinterest.com', 'Bigender', '103.157.0.10', '#1689fd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
