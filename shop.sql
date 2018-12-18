-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2018 lúc 05:03 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners_slides`
--

CREATE TABLE `banners_slides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banners_slides`
--

INSERT INTO `banners_slides` (`id`, `name`, `content`) VALUES
(1, 'slides', '[{\"id\":\"1\",\"title\":\"\\u00c1O M\\u1edaI C\\u00c0 MAU\",\"content\":\"\\u00e1o anh \\u0111\\u00e3 m\\u1eb7c nhi\\u1ec1u l\\u1ea7n\",\"image\":\"http:\\/\\/127.0.0.1\\/SHOP\\/uploads\\/banner1.jpg\"},{\"id\":\"2\",\"title\":\"\\u00e1o thu n\\u1eef\",\"content\":\"\\u00e1o em ch\\u01b0a m\\u1eb7c m\\u1ed9t l\\u1ea7n\",\"image\":\"http:\\/\\/127.0.0.1\\/SHOP\\/uploads\\/banner2.jpg\"}]'),
(2, 'slides', '[{\"id\":\"1\",\"title\":\"EDITOR\'S PICK\",\"content\":\"education and sports\",\"image\":\"http:\\/\\/127.0.0.1\\/SHOP\\/uploads\\/banner1.jpg\"}]'),
(3, 'slides', '[{\"id\":\"1\",\"title\":\"XXX\",\"content\":\"YYYY\",\"image\":\"http:\\/\\/127.0.0.1\\/SHOP\\/uploads\\/banner4.jpg\"}]'),
(4, 'wrappers', '[{\"id\":1,\"title\":\"kaisuo\",\"content\":\"kai\",\"image\":\"http:\\/\\/127.0.0.1\\/SHOP\\/uploads\\/banner3.jpg\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_pd`
--

CREATE TABLE `list_pd` (
  `id_list` int(11) NOT NULL,
  `listpd_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `list_pd`
--

INSERT INTO `list_pd` (`id_list`, `listpd_name`) VALUES
(1, 'Áo'),
(2, 'Quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '0' COMMENT 'người nhận',
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='đơn hàng';

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `name`, `phone`, `address`, `total`, `user_id`) VALUES
(1, 'nam', '111', 'Amsterdam, Hà Lan', 20000, 1),
(2, 'a', '0000', 'Karnataka, Ấn Độ', 14000, 1),
(3, 'hoang', '00000', 'Karnataka, Ấn Độ', 7000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `id_pd` int(11) NOT NULL,
  `pd_quan` varchar(50) NOT NULL,
  `pd_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `id_pd`, `pd_quan`, `pd_price`) VALUES
(1, 40, '2', '4000'),
(1, 39, '1', '3000'),
(1, 33, '4', '5000'),
(1, 40, '2', '4000'),
(1, 39, '1', '3000'),
(1, 35, '3', '3000'),
(2, 40, '2', '4000'),
(2, 39, '2', '3000'),
(3, 40, '1', '4000'),
(3, 39, '1', '3000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partners`
--

CREATE TABLE `partners` (
  `id_pn` int(11) NOT NULL,
  `pn_name` varchar(255) NOT NULL,
  `pn_des` varchar(255) NOT NULL,
  `pn_fb` varchar(255) NOT NULL,
  `pn_tw` varchar(255) NOT NULL,
  `pn_gg` varchar(255) NOT NULL,
  `pn_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `partners`
--

INSERT INTO `partners` (`id_pn`, `pn_name`, `pn_des`, `pn_fb`, `pn_tw`, `pn_gg`, `pn_image`) VALUES
(1, 'NIKE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'nike.com', 'tw', 'gg', 'http://127.0.0.1/SHOP/uploads/team4.jpg'),
(2, 'ADIDAS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'fb', 'tw', 'gg', 'http://127.0.0.1/SHOP/uploads/team1.jpg'),
(4, 'UNDER', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'fb', 'tw', 'gg', 'http://127.0.0.1/SHOP/uploads/team2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pd_name` varchar(255) NOT NULL,
  `pd_des` varchar(255) NOT NULL,
  `pd_info` varchar(255) NOT NULL,
  `pd_price` varchar(255) NOT NULL,
  `pd_com` int(11) NOT NULL,
  `pd_date` varchar(255) NOT NULL,
  `pd_lid` int(11) NOT NULL,
  `pd_image` varchar(255) NOT NULL,
  `pd_gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pd_name`, `pd_des`, `pd_info`, `pd_price`, `pd_com`, `pd_date`, `pd_lid`, `pd_image`, `pd_gender`) VALUES
(32, 'Kính đen', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '4000', 1, '2018-10-22', 2, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(33, 'kkkk', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '5000', 1, '2018-10-22', 2, 'http://127.0.0.1/SHOP/uploads/d2.jpg', 'men'),
(35, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '3000', 1, '2018-10-22', 1, 'http://127.0.0.1/SHOP/uploads/d3.jpg', 'men'),
(37, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '3000', 1, '2018-10-22', 2, 'http://127.0.0.1/SHOP/uploads/d3.jpg', 'men'),
(38, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '4000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/d2.jpg', 'men'),
(39, 'NIKE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '3000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m1.jpg', 'women'),
(40, 'ADIDAS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '4000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m2.jpg', 'women'),
(41, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(42, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(43, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(44, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(45, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(46, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(47, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(48, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(49, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men'),
(50, 'chau', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna a', '2000', 1, '2018-10-23', 1, 'http://127.0.0.1/SHOP/uploads/m4.jpg', 'men');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `password`, `email`) VALUES
(1, 'nam', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'a@gmail.com'),
(2, 'test', '111111', 'c4ca4238a0b923820dcc509a6f75849b', 'x@gmail.com'),
(3, '1', '1', 'c81e728d9d4c2f636f067f89cc14862c', 'a@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banners_slides`
--
ALTER TABLE `banners_slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_pd`
--
ALTER TABLE `list_pd`
  ADD PRIMARY KEY (`id_list`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id_pn`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pd_lid` (`pd_lid`),
  ADD KEY `pd_com` (`pd_com`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banners_slides`
--
ALTER TABLE `banners_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `list_pd`
--
ALTER TABLE `list_pd`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `partners`
--
ALTER TABLE `partners`
  MODIFY `id_pn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`pd_lid`) REFERENCES `list_pd` (`id_list`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`pd_com`) REFERENCES `partners` (`id_pn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
