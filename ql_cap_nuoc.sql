-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 12:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_cap_nuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_chinhanh`
--

CREATE TABLE `dm_chinhanh` (
  `ma_chi_nhanh` int(11) NOT NULL,
  `ten_chi_nhanh` varchar(100) NOT NULL,
  `dia_chi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dm_chinhanh`
--

INSERT INTO `dm_chinhanh` (`ma_chi_nhanh`, `ten_chi_nhanh`, `dia_chi`) VALUES
(2, 'Lê Chân', '34/46 Lạch Tray');

-- --------------------------------------------------------

--
-- Table structure for table `dm_codongho`
--

CREATE TABLE `dm_codongho` (
  `ma_co_dong_ho` int(11) NOT NULL,
  `ten_co_dong_ho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dm_codongho`
--

INSERT INTO `dm_codongho` (`ma_co_dong_ho`, `ten_co_dong_ho`) VALUES
(1, 'To');

-- --------------------------------------------------------

--
-- Table structure for table `dm_loaidongho`
--

CREATE TABLE `dm_loaidongho` (
  `ma_loai_dong_ho` int(11) NOT NULL,
  `ten_loai_dong_ho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_loaikhachhang`
--

CREATE TABLE `dm_loaikhachhang` (
  `ma_loai_khach_hang` int(11) NOT NULL,
  `ten_loai_khach_hang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_nhacungcapdongho`
--

CREATE TABLE `dm_nhacungcapdongho` (
  `ma_nha_cung_cap` int(11) NOT NULL,
  `ten_nha_cung_cap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_phuongthucthanhtoan`
--

CREATE TABLE `dm_phuongthucthanhtoan` (
  `ma_phuong_thuc_thanh_toan` int(11) NOT NULL,
  `ten_phuong_thuc_thanh_toan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_phuongxa`
--

CREATE TABLE `dm_phuongxa` (
  `ma_phuong_xa` int(11) NOT NULL,
  `ten_phuong_xa` varchar(100) NOT NULL,
  `ma_quan_huyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_quanhuyen`
--

CREATE TABLE `dm_quanhuyen` (
  `ma_quan_huyen` int(11) NOT NULL,
  `ten_quan_huyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_toquanly`
--

CREATE TABLE `dm_toquanly` (
  `ma_to_quan_ly` int(11) NOT NULL,
  `ten_to_quan_ly` varchar(100) NOT NULL,
  `ma_chi_nhanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dm_tuyendoc`
--

CREATE TABLE `dm_tuyendoc` (
  `ma_tuyen_doc` int(11) NOT NULL,
  `ten_tuyen_doc` varchar(100) NOT NULL,
  `ma_chi_nhanh` int(11) NOT NULL,
  `ma_to_quan_ly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ql_nguoidung`
--

CREATE TABLE `ql_nguoidung` (
  `ma_nhan_vien` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `ten_nguoi_dung` varchar(100) NOT NULL,
  `chuc_vu` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `sdt` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ql_phanquyen`
--

CREATE TABLE `ql_phanquyen` (
  `ma_quyen` int(11) NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ql_quyen`
--

CREATE TABLE `ql_quyen` (
  `ma_quyen` int(11) NOT NULL,
  `ten_quyen` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dm_chinhanh`
--
ALTER TABLE `dm_chinhanh`
  ADD PRIMARY KEY (`ma_chi_nhanh`);

--
-- Indexes for table `dm_codongho`
--
ALTER TABLE `dm_codongho`
  ADD PRIMARY KEY (`ma_co_dong_ho`);

--
-- Indexes for table `dm_loaidongho`
--
ALTER TABLE `dm_loaidongho`
  ADD PRIMARY KEY (`ma_loai_dong_ho`);

--
-- Indexes for table `dm_loaikhachhang`
--
ALTER TABLE `dm_loaikhachhang`
  ADD PRIMARY KEY (`ma_loai_khach_hang`);

--
-- Indexes for table `dm_nhacungcapdongho`
--
ALTER TABLE `dm_nhacungcapdongho`
  ADD PRIMARY KEY (`ma_nha_cung_cap`);

--
-- Indexes for table `dm_phuongthucthanhtoan`
--
ALTER TABLE `dm_phuongthucthanhtoan`
  ADD PRIMARY KEY (`ma_phuong_thuc_thanh_toan`);

--
-- Indexes for table `dm_phuongxa`
--
ALTER TABLE `dm_phuongxa`
  ADD PRIMARY KEY (`ma_phuong_xa`);

--
-- Indexes for table `dm_quanhuyen`
--
ALTER TABLE `dm_quanhuyen`
  ADD PRIMARY KEY (`ma_quan_huyen`);

--
-- Indexes for table `dm_toquanly`
--
ALTER TABLE `dm_toquanly`
  ADD PRIMARY KEY (`ma_to_quan_ly`);

--
-- Indexes for table `dm_tuyendoc`
--
ALTER TABLE `dm_tuyendoc`
  ADD PRIMARY KEY (`ma_tuyen_doc`);

--
-- Indexes for table `ql_nguoidung`
--
ALTER TABLE `ql_nguoidung`
  ADD PRIMARY KEY (`ma_nhan_vien`);

--
-- Indexes for table `ql_phanquyen`
--
ALTER TABLE `ql_phanquyen`
  ADD PRIMARY KEY (`ma_quyen`,`ma_nhan_vien`);

--
-- Indexes for table `ql_quyen`
--
ALTER TABLE `ql_quyen`
  ADD PRIMARY KEY (`ma_quyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_chinhanh`
--
ALTER TABLE `dm_chinhanh`
  MODIFY `ma_chi_nhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_codongho`
--
ALTER TABLE `dm_codongho`
  MODIFY `ma_co_dong_ho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_loaidongho`
--
ALTER TABLE `dm_loaidongho`
  MODIFY `ma_loai_dong_ho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_loaikhachhang`
--
ALTER TABLE `dm_loaikhachhang`
  MODIFY `ma_loai_khach_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_nhacungcapdongho`
--
ALTER TABLE `dm_nhacungcapdongho`
  MODIFY `ma_nha_cung_cap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_phuongthucthanhtoan`
--
ALTER TABLE `dm_phuongthucthanhtoan`
  MODIFY `ma_phuong_thuc_thanh_toan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_phuongxa`
--
ALTER TABLE `dm_phuongxa`
  MODIFY `ma_phuong_xa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_quanhuyen`
--
ALTER TABLE `dm_quanhuyen`
  MODIFY `ma_quan_huyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_toquanly`
--
ALTER TABLE `dm_toquanly`
  MODIFY `ma_to_quan_ly` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_tuyendoc`
--
ALTER TABLE `dm_tuyendoc`
  MODIFY `ma_tuyen_doc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ql_quyen`
--
ALTER TABLE `ql_quyen`
  MODIFY `ma_quyen` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
