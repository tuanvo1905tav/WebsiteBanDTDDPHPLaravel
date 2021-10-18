-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 02, 2021 lúc 05:09 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `SoDONHANG` int(11) NOT NULL AUTO_INCREMENT,
  `MaKHACHHANG` int(11) NOT NULL,
  `NgayDATHANG` datetime DEFAULT NULL,
  `TriGia` int(11) NOT NULL,
  `NgayGiaoHang` datetime NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaSANPHAM` varchar(10) NOT NULL,
  PRIMARY KEY (`SoDONHANG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKHACHHANG` int(11) NOT NULL AUTO_INCREMENT,
  `hoDem` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenTV` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `TenDangNhap` varchar(512) NOT NULL,
  `MatKhau` varchar(512) NOT NULL,
  `GioiTinh` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eMail` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaKHACHHANG`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKHACHHANG`, `hoDem`, `tenTV`, `DiaChi`, `SoDienThoai`, `NgaySinh`, `TenDangNhap`, `MatKhau`, `GioiTinh`, `eMail`, `updated_at`, `created_at`) VALUES
(3, 'Nguyễn', 'Khang', 'APD', '0364772181', '2009-02-03', 'khangdeptrailamluon', 'e10adc3949ba59abbe56e057f20f883e', 'Nam', 'conmeookhang@gmail.com', '2020-12-30 23:06:40', '2020-12-30 23:06:40'),
(4, 'test', 'test', 'test', '03303030303', '2021-01-12', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Nam', 'tuanvo1905tav@gmail.com', '2021-01-01 07:33:37', '2021-01-01 07:33:37'),
(5, 'admin', 'admin', 'admin', '00000000000', '2000-05-19', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nam', 'admin', '2021-01-01 07:38:00', '2021-01-01 07:38:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

DROP TABLE IF EXISTS `nhasanxuat`;
CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `MaNHASANXUAT` int(11) NOT NULL AUTO_INCREMENT,
  `TenNHASANXUAT` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MaNHASANXUAT`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNHASANXUAT`, `TenNHASANXUAT`, `DiaChi`) VALUES
(1, 'BKAV', NULL),
(2, 'BKAV', NULL),
(3, 'Apple', NULL),
(4, 'Samsung', NULL),
(5, 'Opple', NULL),
(6, 'Vingroup', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phankhuc`
--

DROP TABLE IF EXISTS `phankhuc`;
CREATE TABLE IF NOT EXISTS `phankhuc` (
  `MaPHANKHUC` int(11) NOT NULL AUTO_INCREMENT,
  `TenPHANKHUC` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaPHANKHUC`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phankhuc`
--

INSERT INTO `phankhuc` (`MaPHANKHUC`, `TenPHANKHUC`) VALUES
(2, 'Giá rẻ'),
(4, 'Tầm trung'),
(6, ' Cao cấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamdienthoai`
--

DROP TABLE IF EXISTS `sanphamdienthoai`;
CREATE TABLE IF NOT EXISTS `sanphamdienthoai` (
  `MaSANPHAM` varchar(10) NOT NULL,
  `TenSANPHAM` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DONGIA` int(11) DEFAULT NULL,
  `MoTa` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhMinhHoa` varchar(50) NOT NULL,
  `MaPHANKHUC` varchar(3) NOT NULL,
  `MaNHASANXUAT` varchar(3) NOT NULL,
  `NgayCapNhat` datetime NOT NULL,
  `SoLuongBan` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaSANPHAM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sanphamdienthoai`
--

INSERT INTO `sanphamdienthoai` (`MaSANPHAM`, `TenSANPHAM`, `DONGIA`, `MoTa`, `HinhMinhHoa`, `MaPHANKHUC`, `MaNHASANXUAT`, `NgayCapNhat`, `SoLuongBan`, `updated_at`, `created_at`) VALUES
('ip12', 'iPhone 12 pro', 27000000, 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.', 'Y3uS_hinh2.png', '6', '3', '2021-01-02 11:43:25', 15, '2021-01-02 04:44:55', '2021-01-02 04:44:55'),
('samsung1', 'Samsung galaxy A20s', 5219000, 'Samsung Galaxy A20s vừa được Samsung cho ra mắt, là chiếc smartphone phổ thông mỏng nhẹ với hiệu năng vượt trội và gây ấn tượng mạnh với người dùng nhờ thời lượng pin khủng so với mức giá của sản phẩm.', 'svYb_ssa20.jpg', '4', '4', '2021-01-02 11:45:09', 120, '2021-01-02 04:47:28', '2021-01-02 04:47:28'),
('ip11001', 'iPhone 11 pro max plus', 23000000, 'iPhone 11 là chiếc điện thoại thuộc dòng iPhone được ra mắt vào ngày 10 tháng 9 năm 2019 cùng với iPhone 11 Pro và iPhone 11 Pro Max bởi CEO Tim Cook. Đây là phiên bản kế nhiệm của iPhone XR, với giá bán khởi điểm là 699 USD, rẻ hơn 50 USD so với iPhone XR. iPhone 11 được trang bị vi xử lý Apple A13 Bionic cùng với máy ảnh kép với tính năng chụp góc siêu rộng.[4] Tuy nhiên iPhone 11 chỉ được trang bị sẵn sạc phổ thông 5W trong hộp giống với các thế hệ iPhone tiền nhiệm.', 'jZ6H_hinh1.png', '6', '3', '2021-01-01 01:55:37', 100, '2021-01-02 04:45:08', '2021-01-01 06:57:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
