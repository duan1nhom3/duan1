-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1

-- Thời gian đã tạo: Th10 21, 2022 lúc 02:27 PM

-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,

  `method` varchar(255) NOT NULL,

  `total` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `fullname`, `address`, `email`, `phone_number`, `method`, `total`, `status`) VALUES
(1, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, '0', 127, ''),
(2, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, '0', 127, ''),
(3, 0, 'abc', 'hn', 'abc@gmail.com', 123151, 'Thanh toán ', 60, ''),
(4, 0, 'abc', 'hn', 'abc@gmail.com', 123151, 'Thanh toán ', 60, ''),
(5, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(6, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 37, ''),
(7, 0, '', '', '', 0, 'Thanh toán trực tiếp', 90, ''),
(8, 0, '', '', '', 0, 'Thanh toán trực tiếp', 90, ''),
(9, 0, '', '', '', 0, 'Thanh toán trực tiếp', 90, ''),
(10, 0, '', '', '', 0, 'Thanh toán trực tiếp', 90, ''),
(11, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(12, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(13, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(14, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(15, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(16, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(17, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 150, ''),
(18, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 67, ''),
(19, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(20, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 60, ''),
(21, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 30, ''),
(22, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 30, ''),
(23, 0, 'abc', 'hn', 'abc@gmail.com', 123123, 'Chuyển khoản ngân hàng', 30, ''),
(24, 0, 'abc', 'hn', 'abc@gmail.com', 12312312, 'Chuyển khoản ngân hàng', 30, '');

>>>>>>> b3e78136ce4f9037bef42b750e06b8b6f5b12ba5
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,

  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `color` int(11) NOT NULL,

  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_bill`, `product_name`, `price`, `img`, `size`, `color`, `amount`, `total`) VALUES
(1, 1, 'Bomber in Cotton', 37, 'n_arrival_product01.jpg', 0, 0, 0, 127),
(2, 1, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 0, 0, 0, 127),
(3, 1, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 0, 0, 0, 127),
(4, 1, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 0, 0, 0, 127),
(5, 3, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 0, 0, 0, 60),
(6, 3, 'Women Shoes', 30, 'n_arrival_product04.jpg', 0, 0, 0, 60),
(7, 5, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 0, 0, 0, 60),
(8, 5, 'Women Shoes', 30, 'n_arrival_product04.jpg', 0, 0, 0, 60),
(9, 6, 'Bomber in Cotton', 37, 'n_arrival_product01.jpg', 0, 5, 0, 37),
(10, 7, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 90),
(11, 7, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 90),
(12, 7, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 90),
(13, 11, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 60),
(14, 11, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 5, 7, 0, 60),
(15, 12, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 3, 3, 0, 60),
(16, 12, 'Women Shoes', 30, 'n_arrival_product04.jpg', 1, 1, 0, 60),
(17, 13, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 60),
(18, 13, 'Women Shoes', 30, 'n_arrival_product04.jpg', 1, 2, 0, 60),
(19, 15, 'Women Shoes', 30, 'n_arrival_product04.jpg', 1, 2, 0, 60),
(20, 15, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 4, 2, 0, 60),
(21, 17, 'Winter Jackets', 30, 'n_arrival_product05.jpg', 4, 2, 0, 150),
(22, 17, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 3, 3, 0, 150),
(23, 17, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 4, 3, 0, 150),
(24, 17, 'Women Shoes', 30, 'n_arrival_product04.jpg', 5, 7, 0, 150),
(25, 17, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 3, 2, 0, 150),
(26, 18, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 3, 0, 67),
(27, 18, 'Bomber in Cotton', 37, 'n_arrival_product01.jpg', 3, 4, 0, 67),
(28, 19, 'Women Shoes', 30, 'n_arrival_product04.jpg', 5, 3, 0, 60),
(29, 19, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 3, 3, 0, 60),
(30, 21, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 3, 0, 30),
(31, 23, 'Exclusive Handbags', 30, 'n_arrival_product02.jpg', 5, 7, 0, 30),
(32, 24, 'Women Shoes', 30, 'n_arrival_product04.jpg', 5, 3, 0, 30);

>>>>>>> b3e78136ce4f9037bef42b750e06b8b6f5b12ba5
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `color_name`) VALUES
(1, 'Blue'),
(2, 'Black'),
(3, 'Red'),
(4, 'Yellow'),
(7, 'Green');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `img`, `price`, `id_cate`, `description`, `id_color`, `id_size`, `view`) VALUES
(1, 'Bomber in Cotton', 'n_arrival_product01.jpg', 37, 1, 'khong', 1, 2, 2),
(2, 'Exclusive Handbags', 'n_arrival_product02.jpg', 30, 1, 'o', 1, 1, 1),
(3, 'Women Shoes', 'n_arrival_product04.jpg', 30, 1, 'o', 1, 1, 1),
(4, 'Winter Jackets', 'n_arrival_product05.jpg', 30, 1, 'o', 1, 1, 1),
(5, 'Fashion Shoes', 'n_arrival_product06.jpg', 30, 1, 'o', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `img`, `address`, `phone_number`, `role_id`) VALUES
(1, 'ABC', 'abc@gmail.com', '123456', 'abc.img', 'hanoi', 123013518, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;


--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;


--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
