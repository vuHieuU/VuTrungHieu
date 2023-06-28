-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2022 lúc 03:30 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

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
  `id_user` int(11) DEFAULT 0,
  `bill_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `bill_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_pttt` tinyint(1) DEFAULT 1 COMMENT '1.thanh toán trực tiếp  2.thanh toán bằng thẻ  3.thanh toán ',
  `ngaydathang` datetime NOT NULL,
  `total` int(1) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.đơn hàng mới 1.đơn đang sử lý 2.đang giao hàng 3.đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `bill_name`, `name_hh`, `soluong`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(154, 1, 'hiếu', 'Rau muống Organic 300gr', 1, 'ha noi', '123', 'hieuvtph20113@fpt.edu.vn', 1, '2022-12-07 00:00:00', 18000, 0),
(156, 1, 'hiếu', 'Rau muống Organic 300gr', 1, 'ha noi', '123', 'hieuvtph20113@fpt.edu.vn', 1, '2022-12-08 00:00:00', 18000, 3),
(158, 1, 'hiếu', 'Táo envy size 70', 3, 'ha noi', '123', 'hieuvtph20113@fpt.edu.vn', 1, '2022-12-09 13:02:31', 597000, 0),
(159, 1, 'hiếu', 'Táo envy size 70', 1, 'ha noi', '123', 'hieuvtph20113@fpt.edu.vn', 1, '2022-12-10 19:20:41', 199000, 1),
(160, 1, 'hiếu', 'Táo envy size 70', 1, 'ha noi', '123', 'hieuvtph20113@fpt.edu.vn', 1, '2022-12-11 02:47:40', 199000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(131, 1, 8, 'raumuong.png', 'Rau muống Organic 300gr', 18000, 1, 18000, 154),
(132, 1, 8, 'raumuong.png', 'Rau muống Organic 300gr', 18000, 1, 18000, 156),
(134, 1, 5, 'apple.png', 'Táo envy size 70', 199000, 3, 199000, 158),
(135, 1, 5, 'apple.png', 'Táo envy size 70', 199000, 1, 199000, 159),
(136, 1, 5, 'apple.png', 'Táo envy size 70', 199000, 1, 199000, 160);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `name_cate`) VALUES
(4, 'Rau Lá'),
(5, 'Hoa Quả Tươi'),
(6, 'Rau Quả'),
(7, 'Rau Củ'),
(11, 'Hoa Quả Sấy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ngaybinhluan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `user_id`, `product_id`, `ngaybinhluan`) VALUES
(1, 'vai', 1, 5, '0000-00-00 00:00:00'),
(7, 'hieu', 2, 14, '0000-00-00 00:00:00'),
(8, 'hieu', 1, 15, '0000-00-00 00:00:00'),
(9, 'sao', 1, 16, '0000-00-00 00:00:00'),
(10, 'what', 1, 16, '0000-00-00 00:00:00'),
(11, 'hieu', 1, 16, '0000-00-00 00:00:00'),
(12, 'hfd', 1, 16, '0000-00-00 00:00:00'),
(13, 'đẹp quá', 1, 16, '0000-00-00 00:00:00'),
(14, 'f', 1, 16, '2022-12-11 03:30:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `user`, `email`, `title`, `content`) VALUES
(1, 'phamanhdung', 'dungpaph20175@fpt.edu.vn', '1', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `weight` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `voucher` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `weight`, `image`, `comment`, `content`, `voucher`, `status`, `amount`, `cate_id`) VALUES
(5, 'Táo envy size 70', 199000, 1, 'apple.png', NULL, 'Vì mỗi ngày một quả táo sẽ giúp “ tránh xa bác sĩ”. Nên Organic Mart tích cực đưa táo về phục vụ cả nhà - Hàng mới đáp, cập bến kho Organic Mart. - Trái vừa, thơm giòn, ngọt đậm đà. - Táo Envy đang là một trong những loại táo được ưu chuộng nhất tại Việt Nam. Táo Envy chứa nhiều chất khoáng cần thiết', NULL, NULL, 1, 5),
(6, 'Dưa leo baby Organic 300g', 17000, 1, 'dualeo.png', NULL, 'Dưa chuột có vị ngọt, tính mát, hương vị giòn ngon hấp dẫn và đặc biệt chứa rất nhiều nước, chính vì vậy từ lâu nó đã trở thành thực phẩm quen thuộc trong tủ lạnh của nhiều gia đình với công dụng làm đẹp và là nguyên liệu giúp chị em phụ nữ chế biến nên những món ăn thơm ngon trong bữa cơm hàng ngày', NULL, NULL, 1, 7),
(7, 'Bí đỏ Organic 500g', 24000, 1, 'bido.png', NULL, 'Trong Bí đỏ có hàm lượng sắt cao, các chất muối khoáng, giàu vitamin và các axít hữu cơ tốt cho cơ thể. Bí đỏ không chỉ là đồ ăn bổ dưỡng tác dụng của bí đỏ giúp ngăn ngừa tim mạch,ngăn ngừa ung thư,hỗ trợ giảm cân ,chống lão hóa da ,tốt cho hệ tiêu hóa ,tốt cho hệ thống xương khớp. Bí đỏ cũng rất giàu dinh dưỡng', NULL, NULL, 1, 6),
(8, 'Rau muống Organic 300gr', 18000, 1, 'raumuong.png', NULL, 'Mùa rau muống là cơ hội cho bạn thỏa sức chế biến những món ăn ngon, mát lành, bổ dưỡng. Dưới đây là vài món cho bạn tham khảo. 1. Ốc móng tay xào rau muống. Nguyên liệu: Rau muống, ốc móng tay, tỏi, gia vị. Ốc mua về ngâm nước cho ít muối và ớt. Sau đó lấy ốc ra trụng sơ với nước sôi để bỏ vỏ.', NULL, NULL, 1, 4),
(9, 'Bí ngòi Organic 300gr', 21600, 1, 'bingoi.png', NULL, 'Bí ngòi không xa lạ gì đối với chúng ta. Bí ngòi được các nhà dinh dưỡng học cho vào “sách đỏ” vì có giá trị dinh dưỡng cao và mang lại nhiều lợi ích cho sức khỏe. 1 Ngừa ung thư:   Lượng chất xơ dồi dào trong bí ngòi có tác dụng ngăn ngừa các độc tố gây bệnh ung thư ruột kết cũng như', NULL, NULL, 1, 7),
(10, 'Rau cần tây Organic 500g', 42500, 1, 'raucantay.png', NULL, 'Cần tây mang lại rất nhiều dưỡng chất thiết yếu cho cơ thể nên có khả năng phòng chống một số bệnh nguy hiểm, đặc biệt là chứng huyết áp cao. Không chỉ là nguyên liệu dùng để chế biến nhiều món ăn ngon, cần tây còn mang lại rất nhiều dưỡng chất thiết yếu cho cơ thể nên có khả năng phòng chống một số', NULL, NULL, 1, 4),
(11, 'Bắp cải tim Organic 500g', 30000, 1, 'bapcai.png', NULL, 'Công dụng  Kháng viêm, hỗ trợ tiêu hóa. Điều trị loét dạ dày Duy trì sức khỏe xương khớp. Giảm nguy cơ mắc bệnh tim mạch. Hỗ trợ giảm cân. Cải thiện thị lực. Bảo vệ tế bào thần kinh, điều trị bệnh Alzheimer. Làm đẹp da và điều trị các bệnh rối loạn về da. Cách sử dụng Ăn số', NULL, NULL, 1, 4),
(12, 'Củ cải trắng Organic 500gr', 39000, 1, 'cucaitrang.png', NULL, 'Củ cải trắng không chỉ là một món ăn phổ biến, mà còn được biết tới như loại thần dược có công năng không thua kém gì nhân sâm, củ cải trắng giúp trị đờm, thanh nhiệt, dưỡng da, chống ung thư, phòng tránh thiếu máu và giúp cho cơ thể đủ nước... Cách chế biến và ăn củ cải sống: * Củ cải chấm tương ', NULL, NULL, 1, 7),
(13, 'Hoa Chuối Organic 1kg', 35000, 1, 'hoachuoi.png', NULL, 'Nộm hoa chuối là một món ăn quen thuộc tại Việt Nam. Món ăn này được gọi là nộm bắp chuối ở miền Bắc Việt Nam, còn tại miền Nam được gọi là gỏi bắp chuối. Nó là một trong những món ăn quê dân giã mang đậm hương vị thôn quê và phổ biến ở cả ba miền Bắc, Trung, Nam', NULL, NULL, 1, 6),
(14, 'Đậu Bắp Organic 250gr', 15000, 1, 'daubap.png', NULL, 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', NULL, NULL, 1, 7),
(15, 'Cà Tím Organic 250gr', 15000, 1, 'catim.png', NULL, 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', NULL, NULL, 1, 6),
(16, 'Rau má Organic 250gr', 17000, 1, 'rauma.png', NULL, 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `address` text NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `image`, `tel`, `address`, `role`) VALUES
(1, 'hiếu', '1', 'hieuvtph20113@fpt.edu.vn', '', 123, 'ha noi', 0),
(2, 'hehe', '123', 'dungpaph20175@fpt.edu.vn', '', 333362187, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbill` (`idbill`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_comment_products` (`product_id`),
  ADD KEY `lk_comment_user` (`user_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_products_category` (`cate_id`);

--
-- Chỉ mục cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_vouchers_user` (`user_id`);

--
-- Chỉ mục cho bảng `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_weight_products` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idpro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `lk_comment_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `lk_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_products_category` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id_cate`);

--
-- Các ràng buộc cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  ADD CONSTRAINT `lk_vouchers_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `weight`
--
ALTER TABLE `weight`
  ADD CONSTRAINT `lk_weight_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
