-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 03:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wechat` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `student id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `wechat`, `phone`, `student id`, `email`) VALUES
(1, '张三', '13669842113', '13669842113', '2017122221', '2872238563@qq.com'),
(2, '李四', '13698754456', 'xjshjhjn', '2017122222', '5845593657@qq.com'),
(3, '吴五', '15849658776', 'dhsjnjdjhd', '2017122223', '5896632587@qq.com'),
(4, '二狗', '16515269875', '16589565523', '2017122224', '26988854569@qq.com'),
(5, '一哥', '1631985446', '16995632557', '2017122225', '1569987569@qq.com'),
(6, '小六', '15469853226', '15469853226', '2017122226', '25698863598@qq.com'),
(7, '小七', '13698754456', '13698754456', '2017122227', '25698863598@qq.com'),
(8, '阿八', '12556986635', '12556986635', '2017122228', '2698844569@qq.com'),
(9, '九九', '13697854669', '13697854669', '2017122229', '26988851169@qq.com'),
(10, '十阿哥', '13697854455', '13697854455', '2017122210', '2698844569@qq.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
