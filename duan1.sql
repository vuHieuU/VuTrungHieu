-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2022 lúc 05:22 PM
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
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `noidung` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(5, 'Trái cây'),
(6, 'Quả'),
(7, 'Rau'),
(9, 'Rau quả'),
(10, 'Củ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `price` float NOT NULL,
  `soluong` text NOT NULL,
  `mota` text NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `soluong`, `mota`, `id_dm`) VALUES
(3, 'Táo envy size 70', 'apple.png', 199000, '', 'Vì mỗi ngày một quả táo sẽ giúp “ tránh xa bác sĩ”. Nên Organic Mart tích cực đưa táo về phục vụ cả nhà - Hàng mới đáp, cập bến kho Organic Mart. - Trái vừa, thơm giòn, ngọt đậm đà. - Táo Envy đang là một trong những loại táo được ưu chuộng nhất tại Việt Nam. Táo Envy chứa nhiều chất khoáng cần thiết', 5),
(4, 'Dưa leo baby Organic 300g', 'dualeo.png', 17000, '', 'Dưa chuột có vị ngọt, tính mát, hương vị giòn ngon hấp dẫn và đặc biệt chứa rất nhiều nước, chính vì vậy từ lâu nó đã trở thành thực phẩm quen thuộc trong tủ lạnh của nhiều gia đình với công dụng làm đẹp và là nguyên liệu giúp chị em phụ nữ chế biến nên những món ăn thơm ngon trong bữa cơm hàng ngày', 5),
(5, 'Bí đỏ Organic 500g', 'bido.png', 24000, '', 'Trong Bí đỏ có hàm lượng sắt cao, các chất muối khoáng, giàu vitamin và các axít hữu cơ tốt cho cơ thể. Bí đỏ không chỉ là đồ ăn bổ dưỡng tác dụng của bí đỏ giúp ngăn ngừa tim mạch,ngăn ngừa ung thư,hỗ trợ giảm cân ,chống lão hóa da ,tốt cho hệ tiêu hóa ,tốt cho hệ thống xương khớp. Bí đỏ cũng rất giàu dinh dưỡng', 6),
(6, 'Rau muống Organic 300gr', 'raumuong.png', 18000, '', 'Mùa rau muống là cơ hội cho bạn thỏa sức chế biến những món ăn ngon, mát lành, bổ dưỡng. Dưới đây là vài món cho bạn tham khảo. 1. Ốc móng tay xào rau muống. Nguyên liệu: Rau muống, ốc móng tay, tỏi, gia vị. Ốc mua về ngâm nước cho ít muối và ớt. Sau đó lấy ốc ra trụng sơ với nước sôi để bỏ vỏ.', 7),
(7, 'Bí ngòi Organic 300gr', 'bingoi.png', 21600, '', 'Bí ngòi không xa lạ gì đối với chúng ta. Bí ngòi được các nhà dinh dưỡng học cho vào “sách đỏ” vì có giá trị dinh dưỡng cao và mang lại nhiều lợi ích cho sức khỏe. 1 Ngừa ung thư:   Lượng chất xơ dồi dào trong bí ngòi có tác dụng ngăn ngừa các độc tố gây bệnh ung thư ruột kết cũng như', 6),
(8, 'Rau cần tây Organic 500g', 'raucantay.png', 42500, '', 'Cần tây mang lại rất nhiều dưỡng chất thiết yếu cho cơ thể nên có khả năng phòng chống một số bệnh nguy hiểm, đặc biệt là chứng huyết áp cao. Không chỉ là nguyên liệu dùng để chế biến nhiều món ăn ngon, cần tây còn mang lại rất nhiều dưỡng chất thiết yếu cho cơ thể nên có khả năng phòng chống một số', 7),
(9, 'Bắp cải tim Organic 500g', 'catim.png', 30000, '', 'Công dụng  Kháng viêm, hỗ trợ tiêu hóa. Điều trị loét dạ dày Duy trì sức khỏe xương khớp. Giảm nguy cơ mắc bệnh tim mạch. Hỗ trợ giảm cân. Cải thiện thị lực. Bảo vệ tế bào thần kinh, điều trị bệnh Alzheimer. Làm đẹp da và điều trị các bệnh rối loạn về da. Cách sử dụng Ăn số', 7),
(10, 'Củ cải trắng Organic 500gr', 'cucaitrang.png', 39000, '', 'Củ cải trắng không chỉ là một món ăn phổ biến, mà còn được biết tới như loại thần dược có công năng không thua kém gì nhân sâm, củ cải trắng giúp trị đờm, thanh nhiệt, dưỡng da, chống ung thư, phòng tránh thiếu máu và giúp cho cơ thể đủ nước... Cách chế biến và ăn củ cải sống: * Củ cải chấm tương ', 10),
(11, 'Hoa Chuối Organic 1kg', 'hoachuoi.png', 35000, '', 'Nộm hoa chuối là một món ăn quen thuộc tại Việt Nam. Món ăn này được gọi là nộm bắp chuối ở miền Bắc Việt Nam, còn tại miền Nam được gọi là gỏi bắp chuối. Nó là một trong những món ăn quê dân giã mang đậm hương vị thôn quê và phổ biến ở cả ba miền Bắc, Trung, Nam', 9),
(12, 'Đậu Bắp Organic 250gr', 'daubap.png', 15000, '', 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', 10),
(13, 'Cà Tím Organic 250gr', 'catim.png', 15000, '', 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', 6),
(14, 'Rau má Organic 250gr', 'rauma.png', 17000, '', 'Cà tím là loại thực phẩm rất phổ biến ở Việt Nam. Nó không chỉ có màu sắc bắt mắt mà còn rất bổ dưỡng cho sức khỏe. Theo Medicalnewstoday, một trái cà tím cỡ vừa có chứa 20 kalo, 0,8g protein, 4,82g carbonhydrate, 0,15g chất béo và 2,5g chất xơ. Một phần ăn tương đương có thể đáp ứng 10% nhu cầu chất xơ hàng ngày, 5% kali, 3% vitamin C, 5% vitamin B6, 1% sắt và 2% magie. Chính vì những dưỡng chất tuyệt vời đó, cà tím luôn là sự lựa chọn của các chị em nội trợ. Sau đây, bài viết sẽ giới thiệu một số cách chế biến món ngon từ cà tím làm cơ sở tham khảo cho bữa ăn gia đình.', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `tel` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
