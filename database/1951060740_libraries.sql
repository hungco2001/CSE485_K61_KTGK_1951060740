-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060740_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(100) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(100) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Nguyen Van A', 1, '2002-01-03', 'Hoc Sinh', '2021-12-01', '2022-01-01', 'Ha Noi'),
(2, 'Nguyen Thi B', 0, '2001-06-15', 'Sinh Vien', '2021-10-12', '2021-11-12', 'Hai Phong'),
(3, 'Le Van C', 1, '2000-10-25', 'Sinh Vien', '2021-09-22', '2021-10-22', 'Hung Yen'),
(4, 'Nguyen Van H', 1, '1999-05-06', 'Nhan Vien', '2021-10-19', '2021-11-09', 'Ha Noi'),
(5, 'Nguyen Thi Van A', 0, '2000-07-16', 'Sinh Vien', '2021-06-07', '2021-07-07', 'Hai Duong'),
(6, 'hubn', 1, '0000-00-00', '1', '0000-00-00', '0000-00-00', '1'),
(7, 'hubn', 1, '0000-00-00', '1', '0000-00-00', '0000-00-00', '1'),
(8, 'hubn', 1, '0000-00-00', '1', '0000-00-00', '0000-00-00', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
