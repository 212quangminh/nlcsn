-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 07:02 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vemaybay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenbay`
--

CREATE TABLE `chuyenbay` (
  `ma_chuyenbay` int(100) NOT NULL,
  `gia_Ve` int(10) NOT NULL,
  `cho_ngoi` varchar(100) NOT NULL,
  `noi_di` varchar(50) NOT NULL,
  `noi_den` varchar(50) NOT NULL,
  `thoi_gian_di` time NOT NULL,
  `thoi_gian_den` time NOT NULL,
  `ngay_di` date NOT NULL,
  `ngay_den` date NOT NULL,
  `noi_di_text` varchar(100) DEFAULT NULL,
  `noi_den_text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenbay`
--

INSERT INTO `chuyenbay` (`ma_chuyenbay`, `gia_Ve`, `cho_ngoi`, `noi_di`, `noi_den`, `thoi_gian_di`, `thoi_gian_den`, `ngay_di`, `ngay_den`, `noi_di_text`, `noi_den_text`) VALUES
(1, 1222000, '11', 'Cần thơ', 'Hà Nội', '01:50:00', '02:50:00', '2023-12-21', '2023-12-21', NULL, NULL),
(2, 1222000, '12', 'Cần thơ', 'Hà Nội', '13:34:00', '14:34:00', '2023-12-05', '2023-12-05', NULL, NULL),
(3, 1222000, '12', 'Cần thơ', 'Hà Nội', '13:33:00', '17:33:00', '2023-12-05', '2023-12-05', NULL, NULL),
(4, 1222000, '10', 'Cần thơ', 'Hà Nội', '13:38:00', '15:39:00', '2023-12-20', '2023-12-21', NULL, NULL),
(5, 1220000, '12', 'Cần Thơ', 'Hà Nội', '20:14:00', '22:14:00', '2023-12-06', '2023-12-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `Id_hoadon` int(100) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` int(100) NOT NULL,
  `machuyenbay` int(100) NOT NULL,
  `noidi` varchar(50) NOT NULL,
  `noiden` varchar(50) NOT NULL,
  `thoigiandi` time NOT NULL,
  `thoigianden` time NOT NULL,
  `ngaydi` date NOT NULL,
  `giave` int(10) NOT NULL,
  `ngaydatve` datetime NOT NULL,
  `chongoi` varchar(100) NOT NULL,
  `ma_ghe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`Id_hoadon`, `tenkhachhang`, `email`, `sdt`, `machuyenbay`, `noidi`, `noiden`, `thoigiandi`, `thoigianden`, `ngaydi`, `giave`, `ngaydatve`, `chongoi`, `ma_ghe`) VALUES
(295, 'Lê Quang Minh', 'minh212@gmail.com', 763921246, 4, 'Cần thơ', 'Hà Nội', '13:38:00', '15:39:00', '2023-12-20', 1222, '2023-12-06 04:41:22', '12', ''),
(296, 'Lê Quang Minh', 'minh212@gmail.com', 763921246, 4, 'Cần thơ', 'Hà Nội', '13:38:00', '15:39:00', '2023-12-20', 1222, '2023-12-06 08:39:21', '11', ''),
(297, 'Lê Quang Minh', 'minh212@gmail.com', 763921246, 1, 'Cần thơ', 'Hà Nội', '01:50:00', '02:50:00', '2023-12-21', 1222, '2023-12-06 09:09:08', '12', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ten_khachhang` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Id_nv` int(6) NOT NULL,
  `ten_nhanvien` varchar(50) NOT NULL,
  `ten_dangnhap` varchar(30) NOT NULL,
  `password` varchar(6) NOT NULL,
  `sdt` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Id_nv`, `ten_nhanvien`, `ten_dangnhap`, `password`, `sdt`, `email`) VALUES
(123, 'lee minh', 'B2016981', 'B20169', '0763921246', 'minh212@gmail.com'),
(123123, 'minh', 'minh123', '123123', '123123', 'minh@gmail.com'),
(321321, 'trang lê', 'b201222', 'b201', '123123312', 'trang212@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidinoiden`
--

CREATE TABLE `noidinoiden` (
  `Id_diadiem` int(50) NOT NULL,
  `diadiem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidinoiden`
--

INSERT INTO `noidinoiden` (`Id_diadiem`, `diadiem`) VALUES
(4, 'Cần Thơ'),
(5, 'Hà Nội'),
(6, 'Sài Gòn'),
(7, 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `Id_quangcao` int(11) NOT NULL,
  `anh` varchar(50) NOT NULL,
  `noi_dii` varchar(100) NOT NULL,
  `noi_denn` varchar(100) NOT NULL,
  `ngay_dii` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`Id_quangcao`, `anh`, `noi_dii`, `noi_denn`, `ngay_dii`) VALUES
(18, 'hn02.jpg', 'Cần Thơ', 'Hà Nội', '2023-12-10'),
(19, 'OIP (3).jpg', 'Cần Thơ', 'Đà Nẵng', '2023-12-11'),
(20, 'R (1).jpg', 'Hà Nội', 'Cần Thơ', '2023-12-12'),
(21, 'R.jpg', 'Sài Gòn ', 'Đà Nẵng', '2023-12-13'),
(22, 'OIP (2).jpg', 'Hà Nội', 'Sài Gòn', '2023-12-14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyenbay`
--
ALTER TABLE `chuyenbay`
  ADD PRIMARY KEY (`ma_chuyenbay`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Id_hoadon`),
  ADD KEY `hoadon_chuyenbay` (`machuyenbay`),
  ADD KEY `hoado_chuyenba` (`noidi`),
  ADD KEY `hoad_chuyenb` (`noiden`),
  ADD KEY `hoa_chuyen` (`thoigiandi`),
  ADD KEY `ho_chuye` (`giave`),
  ADD KEY `hoadon_chuyen` (`ngaydi`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Id_nv`);

--
-- Chỉ mục cho bảng `noidinoiden`
--
ALTER TABLE `noidinoiden`
  ADD PRIMARY KEY (`Id_diadiem`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`Id_quangcao`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuyenbay`
--
ALTER TABLE `chuyenbay`
  MODIFY `ma_chuyenbay` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26102026;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Id_hoadon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `noidinoiden`
--
ALTER TABLE `noidinoiden`
  MODIFY `Id_diadiem` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `Id_quangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_chuyenbay` FOREIGN KEY (`machuyenbay`) REFERENCES `chuyenbay` (`ma_chuyenbay`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
