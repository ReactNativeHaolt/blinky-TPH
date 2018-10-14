-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2018 lúc 04:41 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jsondtb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_person`
--

CREATE TABLE `data_person` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `facebookConnection` tinyint(1) NOT NULL,
  `googleConnection` tinyint(1) NOT NULL,
  `subscribedUntil` varchar(100) NOT NULL,
  `policiesAccepted` varchar(100) NOT NULL,
  `profileImage` varchar(100) NOT NULL,
  `unverifiedEmail` varchar(100) NOT NULL,
  `marketingEmails` tinyint(1) NOT NULL,
  `marketingNotifications` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `data_person`
--

INSERT INTO `data_person` (`id`, `username`, `name`, `email`, `password`, `created`, `currency`, `facebookConnection`, `googleConnection`, `subscribedUntil`, `policiesAccepted`, `profileImage`, `unverifiedEmail`, `marketingEmails`, `marketingNotifications`) VALUES
(11, 'trangmeow', 'Trang Nguyá»…n', 'bananatrangg@gmail.com', 'nmtrang', '2018-10-12T05:04:12.000Z', 'VND', 0, 0, '', '2018-10-13T09:56:41.000Z', '', '', 0, 0),
(12, 'phuongnguyen', 'PhÆ°á»£ng Nguyá»…n', 'phuongnguyen.141228@gmail.com', 'kid281994', '2018-10-12T14:12:40.000Z', 'VND', 0, 0, '', '2018-10-13T09:57:31.000Z', '', '', 0, 0),
(15, 'hoang', 'HoÃ ng', 'huyhoang123@gmail.com', 'hoanggg', '2018-10-12T15:00:06.000Z', 'VND', 0, 0, '', '2018-10-13T09:55:06.000Z', '', '', 0, 0),
(13, 'akirafan', 'Akira Phan', 'phuongnguyen.akira@gmail.com', 'bruhhhhh', '2018-10-12T14:54:09.000Z', 'VND', 0, 0, '', '2018-10-13T10:01:04.000Z', '', '', 0, 0),
(14, 'hong', 'Nguyá»…n Nam Há»“ng', 'namhong.123@gmail.com', 'hongoong', '2018-10-12T14:58:15.000Z', 'VND', 0, 0, '', '2018-10-13T10:01:55.000Z', '', '', 0, 0),
(49, 'nguyenphuong', 'PhÆ°Æ¡ng Nguyá»…n', 'phuongnguyen.11228@gmail.com', 'ppppp', '2018-10-13T08:25:07.000Z', 'VND', 0, 0, '', '2018-10-13T10:03:52.000Z', '', '', 0, 0),
(52, 'yen', 'Yáº¿n Nguyá»…n', 'YenHai@gmail.com', 'yenyenyen', '2018-10-13T10:04:52.000Z', 'VND', 0, 0, '', '2018-10-13T10:05:14.000Z', '', '', 0, 0),
(53, 'tien', 'TiÃªn Nguyá»…n', 'tienn@gmail.com', 'cutien', '2018-10-13T10:06:05.000Z', 'VND', 0, 0, '', '2018-10-13T10:06:18.000Z', '', '', 0, 0),
(54, 'my', 'Háº¡ My', 'my@gmail.com', 'myha', '2018-10-13T10:07:30.311Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(55, 'giang', 'Giang My', 'giangmy@gmail.com', 'mygiang', '2018-10-13T10:08:04.977Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(56, 'Hoaj', 'Há»a My', 'hoamy@gmail.com', 'liulo', '2018-10-13T10:08:37.652Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(57, 'Kien', 'KiÃªn Nguyá»…n', 'kienkien@gmail.com', 'kiencan', '2018-10-13T10:09:14.392Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(58, 'Hieu', 'Hiáº¿u HoÃ ng', 'kienhien@gmail.com', 'hoanghiu', '2018-10-13T10:09:43.267Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(59, 'ThuHa', 'Thu HÃ ', 'Thuhaaa@gmail.com', 'thuhaha', '2018-10-13T10:10:44.228Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(60, 'Hang', 'Thu Háº±ng', 'hanghang@gmail.com', 'hangnga', '2018-10-13T10:11:06.646Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(61, 'Vua', 'HÃ¹ng', 'hawng@gmail.com', 'iamking', '2018-10-13T10:11:30.151Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(62, 'Keo', 'Báº£o', 'bua@gmail.com', 'kaibaibu', '2018-10-13T10:11:47.386Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(63, 'Ga', 'TÃ¹ng', 'chick@gmail.com', 'chickenwings', '2018-10-13T10:12:09.576Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(64, 'an', 'Háº£i', 'code@gmail.com', 'haiiithere', '2018-10-13T10:12:37.638Z', 'VND', 0, 0, '', '', '', '', 0, 0),
(65, 'lalala', 'TrÆ°á»ng', 'hihi@gmail.com', 'nmtrang', '2018-10-13T10:12:55.973Z', 'VND', 0, 0, '', '', '', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
