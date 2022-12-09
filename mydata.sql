-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `desc`
--

CREATE TABLE `desc` (
  `id` int(11) NOT NULL,
  `brief` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desc`
--

INSERT INTO `desc` (`id`, `brief`, `long`) VALUES
(1, 'THE WORLD\'S LARGEST WEB DEVELOPER SITE', 'W3Schools is an educational website for learning '),
(2, 'The most popular HTML, CSS and JS lirary in the world.', 'Build responsive, mobile-first projects on the web'),
(3, 'Daily articles about css', 'Daily articles about css, html, javascript and all');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` varchar(10) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `nights` int(3) NOT NULL,
  `quantity` int(3) NOT NULL,
  `harga_room` int(7) NOT NULL,
  `amount` int(9) NOT NULL,
  `detail` text NOT NULL,
  `id_room` varchar(4) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `no_urut` int(2) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `smoking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `in_date`, `out_date`, `nights`, `quantity`, `harga_room`, `amount`, `detail`, `id_room`, `id_transaksi`, `no_urut`, `breakfast`, `smoking`) VALUES
('D220924001', '2022-09-27', '2022-09-28', 1, 1, 500000, 500000, 'Minta early check in', 'R001', 'T220924001', 1, 0, 0),
('D221001001', '2022-10-04', '2022-11-06', 2, 1, 500000, 1000000, '', 'R002', 'T221001001', 1, 0, 0),
('D221016001', '2022-10-18', '2022-10-20', 1, 2, 500000, 1000000, 'Minta ruang dengan view kolam renang', 'R001', 'T221016001', 1, 1, 1),
('D221016002', '2022-10-23', '2022-10-24', 1, 3, 500000, 1500000, '', 'R002', 'T221016002', 1, 0, 0),
('D221029001', '2022-11-01', '2022-11-04', 3, 1, 1100000, 3300000, 'Minta late check out', 'R003', 'T221029001', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `id_room` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `id_room`, `nama`) VALUES
(1, 'R001', 'Air Conditioner'),
(2, 'R001', 'Fast Wireless Connectivity'),
(3, 'R001', 'Smart Tv'),
(4, 'R001', 'Hairdryer'),
(5, 'R002', 'Air Conditioner'),
(6, 'R002', 'Fast Wireless Connectivity'),
(7, 'R002', 'Smart Tv'),
(8, 'R002', 'Hairdryer'),
(9, 'R003', 'Smart Rooms & Smart '),
(10, 'R003', 'Air Conditioner'),
(11, 'R003', 'Fast Wireless Connectivity'),
(12, 'R003', 'Smart Tv'),
(13, 'R003', 'Coffee Machine'),
(14, 'R003', 'Hairdryer');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_kredit`
--

CREATE TABLE `kartu_kredit` (
  `id_kartu` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_kredit`
--

INSERT INTO `kartu_kredit` (`id_kartu`, `nama`, `cvv`) VALUES
('1435346547474475', 'Fadil Jaidi', 234),
('1913192391923919', 'Agnes Monica', 134),
('2436574753524678', 'Tiara Andini', 567),
('3565475685253521', 'Jason andika', 464),
('4534535243566793', 'Taylor Swift', 680),
('5345365475868681', 'Ani Astuti', 342),
('9423243929442431', 'Budi Santoso', 435);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `tanggal_lahir`, `no_telp`, `email`, `password`) VALUES
('bill', 'Billay', '0000-00-00', '08675', 'c14210043@john.petra.ac.id', 'gaerf'),
('M001', 'Bruno Mars', '1983-05-17', '081293193192', 'brunomars98@gmail.com', 'coding1234'),
('M002', 'Taylor Swift', '1978-02-09', '0812358542121', 'taylorkeren@gmail.com', 'yeyyliburr'),
('M003', 'Harry Styles', '1993-07-31', '085123913292', 'harry1d@gmail.com', 'nyanyii983'),
('M004', 'Agnes Monica', '1990-02-14', '0812313212366', 'agnesmo14@gmail.com', 'tralalalaa'),
('M005', 'Fadil Jaidi', '1994-06-22', '081321213891', 'pasukanghoib@gmail.com', 'ghoibanget'),
('M006', 'Selena Gomez', '2000-09-06', '081292539204', 'selenaaaa@gmail.com', 'pizzaenak5'),
('M007', 'Rihanna', '2001-11-22', '0812939131011', 'rihannacantik@gmail.com', 'dufann9836'),
('M008', 'Billie Eillish', '2003-11-19', '0859123910139', 'badguy99@gmail.com', 'happierr44'),
('M009', 'Charlie Puth', '1976-01-11', '081939386935', 'sukamusik123@gmail.com', 'gorilla123'),
('M010', 'Tiara Andini', '2003-10-15', '0810423592955', 'tiaraidol@gmail.com', 'selenmacan'),
('M011', 'Mira', '1983-03-08', '081232492394', 'miraaaakuy@gmail.com', 'rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `Nrp` varchar(9) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Kota` varchar(100) NOT NULL,
  `Jenis Kelamin` varchar(1) NOT NULL,
  `Umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`Nrp`, `Nama`, `Kota`, `Jenis Kelamin`, `Umur`) VALUES
('c14210043', 'Billy', 'Surabaya', '', 19),
('c14210056', 'Tiffany', 'Surabaya', '', 19),
('C14210065', 'Jessy', 'Surabaya', '', 19),
('c142144', 'mira', 'on', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `detail` text DEFAULT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `id_member` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `user_rating`, `detail`, `id_transaksi`, `id_member`) VALUES
(12, 4, 'Me', 'T221001001', 'M005');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` varchar(4) NOT NULL,
  `tipe_room` varchar(20) NOT NULL,
  `harga` int(8) NOT NULL,
  `stock` int(3) NOT NULL,
  `ukuran_room` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `tipe_room`, `harga`, `stock`, `ukuran_room`, `image`, `detail`) VALUES
('R001', 'Classic Twin', 500000, 100, 23, 'images/rooms/twinn.jpg', 'Enjoy this spacious, clean and comfortable room with the view of Surabaya city. You will get the best experience with the affordable price. '),
('R002', 'Classic Deluxe', 500000, 80, 23, 'images/rooms/deluxe6n.jpg', 'Enjoy this spacious, clean and comfortable room with the view of Surabaya city. You will get the best experience with the affordable price. '),
('R003', 'King Suite', 1100000, 5, 45, 'images/rooms/suite2.jpg', 'It is a perfect room for you and your family to stay. It has a very complete facility and of course with the view of Surabaya city. We promise that you will get your best time here.'),
('R004', 'Rafflesia', 5000000, 1, 70, 'images/rooms/rafflesia.jpg', ''),
('R005', 'Fuchsia', 8000000, 1, 100, 'images/rooms/Fuchsia.jpg', ''),
('R006', 'Cruss', 1100000, 2, 93, 'images/rooms/Cruss.jpg', 'Enjoy your meeting without any problem');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `url`) VALUES
(1, 'W3schools', 'https://www.w3schools.com/'),
(2, 'Bootstrap', 'https://getbootstrap.com/'),
(3, 'Css Tricks', 'https://css-tricks.com/');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `subtotal` int(8) NOT NULL,
  `pajak` int(8) NOT NULL,
  `total_transaksi` int(8) NOT NULL,
  `status` int(1) NOT NULL,
  `id_member` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `subtotal`, `pajak`, `total_transaksi`, `status`, `id_member`) VALUES
('T220924001', '2022-09-24', 500000, 50000, 550000, 1, 'M004'),
('T221001001', '2022-10-01', 2100000, 210000, 2310000, 1, 'M005'),
('T221016001', '2022-10-16', 1000000, 100000, 1100000, 1, 'M001'),
('T221016002', '2022-10-16', 1500000, 150000, 1650000, 1, 'M010'),
('T221029001', '2022-10-29', 3300000, 330000, 3630000, 1, 'M002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jessy', 'halo'),
(2, 'maria', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` varchar(4) NOT NULL,
  `id_member` varchar(4) NOT NULL,
  `tipe_room` varchar(20) NOT NULL,
  `detail` text DEFAULT NULL,
  `in_date` date NOT NULL,
  `id_room` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_member`, `tipe_room`, `detail`, `in_date`, `id_room`) VALUES
('W001', 'M002', 'Classic Deluxe', NULL, '2023-01-19', 'R002'),
('W002', 'M007', 'King Suite', NULL, '2023-01-31', 'R003'),
('W003', 'M004', 'Classic Twin', NULL, '2023-01-23', 'R001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desc`
--
ALTER TABLE `desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_id_room` (`id_room`),
  ADD KEY `fk_id_transaksi` (`id_transaksi`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_room2` (`id_room`);

--
-- Indexes for table `kartu_kredit`
--
ALTER TABLE `kartu_kredit`
  ADD PRIMARY KEY (`id_kartu`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`Nrp`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `transaction_id` (`id_transaksi`),
  ADD KEY `member_id` (`id_member`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_id_member` (`id_member`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `fk_id_member2` (`id_member`),
  ADD KEY `fk_id_room3` (`id_room`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desc`
--
ALTER TABLE `desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_id_room` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`),
  ADD CONSTRAINT `fk_id_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `fk_id_room2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `member_id` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `transaction_id` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_id_member2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `fk_id_room3` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
