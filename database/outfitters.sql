-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 10:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outfitters`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `top_image` varchar(255) NOT NULL,
  `bottom_image` varchar(255) NOT NULL,
  `shoes_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `top_image`, `bottom_image`, `shoes_image`) VALUES
(1, 'uploads/646e3a9557fa9.png', 'uploads/646e3a9558230.png', 'uploads/646e3a95584c1.png'),
(2, 'uploads/646e3ab73c124.png', 'uploads/646e3ab73c3df.png', 'uploads/646e3ab73c65e.png'),
(3, 'uploads/646e3b2ca53c1.png', 'uploads/646e3b2ca5619.png', 'uploads/646e3b2ca5844.png'),
(4, 'uploads/646e3b5ad9101.png', 'uploads/646e3b5ad93e1.png', 'uploads/646e3b5ad961a.png'),
(5, 'uploads/646e3b5e875a3.png', 'uploads/646e3b5e878d6.png', 'uploads/646e3b5e87bfe.png'),
(6, 'uploads/646e3b61b7352.png', 'uploads/646e3b61b7592.png', 'uploads/646e3b61b77b3.png'),
(7, 'uploads/646e3be5821d3.png', 'uploads/646e3be5824a3.png', 'uploads/646e3be5826f2.png'),
(8, 'uploads/646e3bf38f1eb.png', 'uploads/646e3bf38f44c.png', 'uploads/646e3bf38f663.png'),
(9, 'uploads/646e3c104a9f7.png', 'uploads/646e3c104ac52.png', 'uploads/646e3c104ae9a.png'),
(10, 'uploads/646e3c491abba.png', 'uploads/646e3c491ae13.png', 'uploads/646e3c491b06c.png'),
(11, 'uploads/646e3c49ef5a9.png', 'uploads/646e3c49ef808.png', 'uploads/646e3c49efa71.png'),
(12, 'uploads/646e3c4b03355.png', 'uploads/646e3c4b035d3.png', 'uploads/646e3c4b038ec.png'),
(39, 'uploads/646e5d1b3acad.png', 'uploads/646e5d1b3afce.png', 'uploads/646e5d1b3b34e.png'),
(40, 'uploads/646e5d2fb69a0.png', 'uploads/646e5d2fb6cf9.png', 'uploads/646e5d2fb7121.png'),
(41, 'uploads/646e5d360992c.png', 'uploads/646e5d3609d57.png', 'uploads/646e5d360a1c6.png'),
(42, 'uploads/646e5d7e73706.png', 'uploads/646e5d7e73b7b.png', 'uploads/646e5d7e74089.png'),
(43, 'uploads/646e5d8665d3d.png', 'uploads/646e5d86660ab.png', 'uploads/646e5d8666403.png'),
(44, 'uploads/646e5e41db2fb.png', 'uploads/646e5e41db625.png', 'uploads/646e5e41db99e.png'),
(45, 'uploads/646e5ea2482b5.png', 'uploads/646e5ea2485b0.png', 'uploads/646e5ea248974.png'),
(46, 'uploads/646e5ea3b01a0.png', 'uploads/646e5ea3b0466.png', 'uploads/646e5ea3b080d.png'),
(47, 'uploads/646e5ec6c855e.png', 'uploads/646e5ec6c88b0.png', 'uploads/646e5ec6c8bc5.png'),
(52, 'uploads/646e5ef317fa5.png', 'uploads/646e5ef318637.png', 'uploads/646e5ef3189eb.png'),
(53, 'uploads/646e5f2830a68.png', 'uploads/646e5f2830e04.png', 'uploads/646e5f2831110.png'),
(54, 'uploads/646e5f379f434.png', 'uploads/646e5f379f6c5.png', 'uploads/646e5f379f9cf.png'),
(55, 'uploads/646e5f39846cf.png', 'uploads/646e5f398497f.png', 'uploads/646e5f3984c8e.png'),
(56, 'uploads/646e5f3ae6ea1.png', 'uploads/646e5f3ae71b9.png', 'uploads/646e5f3ae744e.png'),
(57, 'uploads/646e5f45640c1.png', 'uploads/646e5f4564352.png', 'uploads/646e5f456466c.png'),
(58, 'uploads/646e5f46938cf.png', 'uploads/646e5f4693ba2.png', 'uploads/646e5f4693e5c.png'),
(59, 'uploads/646e5f476c19a.png', 'uploads/646e5f476c5a6.png', 'uploads/646e5f476c888.png'),
(60, 'uploads/646e5f68e2917.png', 'uploads/646e5f68e2c19.png', 'uploads/646e5f68e2eab.png'),
(61, 'uploads/646e5f753a6d7.png', 'uploads/646e5f753a9f1.png', 'uploads/646e5f753ad15.png'),
(62, 'uploads/646e5fbe678a9.png', 'uploads/646e5fbe67bde.png', 'uploads/646e5fbe67f19.png'),
(63, 'uploads/646e5fbfc4569.png', 'uploads/646e5fbfc4894.png', 'uploads/646e5fbfc4b97.png'),
(64, 'uploads/646e5fc11bd48.png', 'uploads/646e5fc11bfd5.png', 'uploads/646e5fc11c288.png'),
(65, 'uploads/646e60ed4d8b3.png', 'uploads/646e60ed4dba2.png', 'uploads/646e60ed4f90e.png'),
(66, 'uploads/646e60eeb4894.png', 'uploads/646e60eeb4b64.png', 'uploads/646e60eeb4e3b.png'),
(67, 'uploads/646e60f592668.png', 'uploads/646e60f592a88.png', 'uploads/646e60f592eb9.png'),
(68, 'uploads/646e60f6f2e02.png', 'uploads/646e60f6f307d.png', 'uploads/646e60f6f3332.png'),
(69, 'uploads/646e60f7c60ba.png', 'uploads/646e60f7c6349.png', 'uploads/646e60f7c66ad.png'),
(70, 'uploads/646e60f885841.png', 'uploads/646e60f885af0.png', 'uploads/646e60f885d85.png'),
(71, 'uploads/646e60f92a17c.png', 'uploads/646e60f92a71f.png', 'uploads/646e60f92aa36.png'),
(72, 'uploads/646e6101bc12a.png', 'uploads/646e6101bc3ba.png', 'uploads/646e6101bc67c.png'),
(73, 'uploads/646e610322acb.png', 'uploads/646e610322edf.png', 'uploads/646e610323238.png'),
(74, 'uploads/646e6103b6c69.png', 'uploads/646e6103b6ef2.png', 'uploads/646e6103b725b.png'),
(75, 'uploads/646e6104a49d5.png', 'uploads/646e6104a4cee.png', 'uploads/646e6104a50ad.png'),
(76, 'uploads/646e6129b1894.png', 'uploads/646e6129b1b0b.png', 'uploads/646e6129b1db9.png'),
(77, 'uploads/646e612b0f8ec.png', 'uploads/646e612b0fc14.png', 'uploads/646e612b0fee0.png'),
(78, 'uploads/646e61465c205.png', 'uploads/646e61465c5c2.png', 'uploads/646e61465c94b.png'),
(79, 'uploads/646e61604df64.png', 'uploads/646e61604e358.png', 'uploads/646e61604e6fb.png'),
(80, 'uploads/646e61647a618.png', 'uploads/646e61647a91e.png', 'uploads/646e61647ac1c.png'),
(81, 'uploads/646e6180c6254.png', 'uploads/646e6180c6517.png', 'uploads/646e6180c67b9.png'),
(82, 'uploads/646e619483911.png', 'uploads/646e619483bea.png', 'uploads/646e619483f5f.png'),
(83, 'uploads/646e61958a470.png', 'uploads/646e61958a6f2.png', 'uploads/646e61958aa9c.png'),
(84, 'uploads/646e61966048f.png', 'uploads/646e61966076c.png', 'uploads/646e6196609d9.png'),
(85, 'uploads/646e61ae2083c.png', 'uploads/646e61ae20b41.png', 'uploads/646e61ae20e61.png'),
(86, 'uploads/646e61d940719.png', 'uploads/646e61d940ac2.png', 'uploads/646e61d940e7b.png'),
(87, 'uploads/646e61e3076c0.png', 'uploads/646e61e307943.png', 'uploads/646e61e307c20.png'),
(88, 'uploads/646e61e9d62e2.png', 'uploads/646e61e9d663e.png', 'uploads/646e61e9d69f2.png'),
(89, 'uploads/646e61fac4435.png', 'uploads/646e61fac468c.png', 'uploads/646e61fac48fc.png'),
(90, 'uploads/646e61fbb4bd1.png', 'uploads/646e61fbb4e23.png', 'uploads/646e61fbb50c0.png'),
(91, 'uploads/646e620a65735.png', 'uploads/646e620a65a75.png', 'uploads/646e620a65dbc.png'),
(92, 'uploads/646e621a314b9.png', 'uploads/646e621a31719.png', 'uploads/646e621a31a80.png'),
(93, 'uploads/646e62742ce8c.png', 'uploads/646e62742d134.png', 'uploads/646e62742d3b3.png'),
(94, 'uploads/646e627a7e5ae.png', 'uploads/646e627a7e802.png', 'uploads/646e627a7eb17.png'),
(95, 'uploads/646e62ada77c3.png', 'uploads/646e62ada7b76.png', 'uploads/646e62ada8103.png'),
(96, 'uploads/646e62aeb2c76.png', 'uploads/646e62aeb2fda.png', 'uploads/646e62aeb32c6.png'),
(97, 'uploads/646e62b059b45.png', 'uploads/646e62b059dc8.png', 'uploads/646e62b05a161.png'),
(98, 'uploads/646e7588a8a74.png', 'uploads/646e7588a8d5d.png', 'uploads/646e7588a9014.png'),
(99, 'uploads/646e759d8b540.png', 'uploads/646e759d8b852.png', 'uploads/646e759d8bb8f.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`) VALUES
(1, 'brian', 'zushikikato8@gmail.com', 'ad09959742bd3aeb551066e4a506e71b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
