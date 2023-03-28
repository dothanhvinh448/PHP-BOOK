-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2022 at 05:08 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `binhluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `book_id`, `date`, `binhluan`) VALUES
(43, 11, '2022-11-21', '  sách hay'),
(44, 11, '2022-11-21', '  sách hay'),
(45, 11, '2022-11-21', '  sách hay'),
(46, 11, '2022-11-21', '  sách hay'),
(47, 11, '2022-11-21', '  sách hay');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(126) NOT NULL,
  `created_by` date NOT NULL,
  `number_book` int(11) NOT NULL,
  `number_pages` int(5) NOT NULL,
  `author` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL,
  `is_deleted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `created_by`, `number_book`, `number_pages`, `author`, `category`, `image`, `is_deleted`) VALUES
(2, 'vinh', '2022-11-18', 12, 12, 'vinh', '123', '275873125_3197815997115487_5900855022561953265_n.jpg', 'true'),
(3, 'THAY ĐỔI ĐỂ THÀNH CÔNG', '2022-11-18', 123, 217, 'Dale Carnegie', 'Phát Triển Bản Thân', 'phong-da-mau-sac.jpg', 'true'),
(4, '\r\nMANG THAI SINH NỞ VÀ NUÔI CON KHỎE MẠNH', '2022-11-24', 3, 123, 'Kim Geon Oh', 'Tâm Lý-Kỹ Năng', '3.jpg', 'false'),
(5, '\r\nQUẲNG GÁNH LO ĐI VÀ VUI SỐNG', '2022-11-19', 3, 231, 'Dale Carnegie', 'Khai Tâm Mở Trí', '4.jpg', 'false'),
(6, '\r\nNỘI TÌNH CỦA NGOẠI TÌNH', '2022-11-26', 2, 123, 'Esther Perel', 'Tâm Lí-Kỹ Năng', '5.jpg', 'false'),
(7, 'aaa', '2022-11-10', 12312, 123, 'asdf', 'asfdsfasd', '273610909_1360324474374718_4847383629657115104_n.jpg', 'true'),
(8, 'vinh1', '2022-11-27', 123, 123, 'asdafsdf', 'asdfasdf', '272783735_3043548269239727_7977835315603945757_n.jpg', 'true'),
(9, ' ĐÁNH THỨC ĐAM MÊ: LÀM THẾ NÀO ĐỂ TẠO RA CON NGƯỜI PHI THƯỜNG TRONG BẠN', '2022-12-08', 3, 213, 'Naomi Simson', 'Khám Phá Bị Ẩn', '', 'true'),
(10, ' ĐÁNH THỨC ĐAM MÊ: LÀM THẾ NÀO ĐỂ TẠO RA CON NGƯỜI PHI THƯỜNG TRONG BẠN', '2022-12-08', 3, 213, 'Naomi Simson', 'Khám Phá Bị Ẩn', '7.jpg', 'true'),
(11, ' ĐÁNH THỨC ĐAM MÊ: LÀM THẾ NÀO ĐỂ TẠO RA CON NGƯỜI PHI THƯỜNG TRONG BẠN', '2022-12-08', 3, 213, 'Naomi Simson', 'Khám Phá Bị Ẩn', '7.jpg', 'false'),
(12, 'DỮ LIỆU LỚN - BIG DATA', '2022-11-10', 123, 44, 'Nhiều Tác Giả', 'KHOA HỌC - KỸ THUẬT', '8.jpg', 'true'),
(13, 'DỮ LIỆU LỚN - BIG DATA', '2022-11-10', 123, 44, 'Nhiều Tác Giả', 'KHOA HỌC - KỸ THUẬT', '8.jpg', 'false'),
(14, 'DỮ LIỆU LỚN - BIG DATA', '2022-11-10', 123, 44, 'Nhiều Tác Giả', 'KHOA HỌC - KỸ THUẬT', '8.jpg', 'true'),
(15, 'DỮ LIỆU LỚN - BIG DATA', '2022-11-10', 123, 44, 'Nhiều Tác Giả', 'KHOA HỌC - KỸ THUẬT', '8.jpg', 'true'),
(16, 'BÓNG MA TRÊN MẠNG', '2022-11-17', 10, 2000, 'Kevin Mitnick', 'CÔNG NGHỆ THÔNG TIN', '10.jpg', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(64) NOT NULL,
  `is_deleted` varchar(64) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(126) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `age`, `gender`, `is_deleted`, `user_name`, `phone`, `email`, `password`, `address`) VALUES
(1, 'thành vinh', '12', 'nam', 'flase', 'g', '12', '', '1', 'sdfasdf'),
(4, 'ads', '12', 'nam', 'true', 'g2', '211', '', '1', 'sfds'),
(5, 'vinh12345', '20', 'nam', 'true', 'vinh2002', '123', 'vinhdo405@gmail.com', '1', 'abc'),
(6, 'vinh', '12', 'nam', 'false', 'v', '12', '', '1', 'ádfsd');

-- --------------------------------------------------------

--
-- Table structure for table `employee_book`
--

CREATE TABLE `employee_book` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_by` date NOT NULL,
  `date_back` date NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(126) NOT NULL,
  `current_date_back` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_book`
--

INSERT INTO `employee_book` (`id`, `employee_id`, `book_id`, `date_by`, `date_back`, `total`, `status`, `current_date_back`) VALUES
(29, 4, 4, '2022-11-20', '2022-11-26', 1, 'back', '2022-11-20'),
(30, 4, 5, '2022-11-20', '2022-11-13', 1, 'back', '2022-11-20'),
(31, 4, 5, '2022-11-20', '2022-11-12', 1, 'back', '2022-11-20'),
(32, 4, 5, '2022-11-20', '2022-02-02', 1, 'back', '2022-11-20'),
(33, 4, 5, '2022-11-20', '2022-11-12', 1, 'back', '2022-11-20'),
(34, 4, 4, '2022-11-20', '2022-11-11', 1, 'back', '2022-11-20'),
(35, 5, 13, '2022-11-20', '2022-11-04', 3, 'back', '2022-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_book`
--
ALTER TABLE `employee_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_book`
--
ALTER TABLE `employee_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

--
-- Constraints for table `employee_book`
--
ALTER TABLE `employee_book`
  ADD CONSTRAINT `employee_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `employee_book_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
