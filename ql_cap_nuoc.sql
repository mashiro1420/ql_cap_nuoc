-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 08:20 PM
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

--
-- Dumping data for table `dm_loaikhachhang`
--

INSERT INTO `dm_loaikhachhang` (`ma_loai_khach_hang`, `ten_loai_khach_hang`) VALUES
(1, 'Vip pro');

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
-- Table structure for table `ls_chisodhkhoi`
--

CREATE TABLE `ls_chisodhkhoi` (
  `ma_lich_su` int(11) NOT NULL,
  `ma_dong_ho_khoi` int(11) NOT NULL,
  `ky_chi_so` int(11) NOT NULL,
  `tu_ngay` date NOT NULL,
  `den_ngay` date NOT NULL,
  `khoa` int(11) NOT NULL,
  `chi_so_cu` int(11) NOT NULL,
  `chi_so_moi` int(11) NOT NULL,
  `so_tieu_thu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ls_chisodhkhoi`
--

INSERT INTO `ls_chisodhkhoi` (`ma_lich_su`, `ma_dong_ho_khoi`, `ky_chi_so`, `tu_ngay`, `den_ngay`, `khoa`, `chi_so_cu`, `chi_so_moi`, `so_tieu_thu`) VALUES
(1, 1, 111, '2024-04-02', '2024-04-10', 0, 0, 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ql_donghokhoi`
--

CREATE TABLE `ql_donghokhoi` (
  `ma_dong_ho_khoi` int(11) NOT NULL,
  `ten_dong_ho_khoi` varchar(100) NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  `trang_thai_dong_ho` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_co_dong_ho` int(11) NOT NULL,
  `ma_nha_cung_cap` int(11) NOT NULL,
  `ma_loai_dong_ho` int(11) NOT NULL,
  `so_nam_hieu_luc` int(11) NOT NULL,
  `ma_lap_dat` int(11) NOT NULL,
  `ngay_kiem_dinh` date NOT NULL,
  `so_thang_bao_hanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ql_donghokhoi`
--

INSERT INTO `ql_donghokhoi` (`ma_dong_ho_khoi`, `ten_dong_ho_khoi`, `tinh_trang`, `trang_thai_dong_ho`, `ngay_nhap`, `ma_co_dong_ho`, `ma_nha_cung_cap`, `ma_loai_dong_ho`, `so_nam_hieu_luc`, `ma_lap_dat`, `ngay_kiem_dinh`, `so_thang_bao_hanh`) VALUES
(1, 'An Dương', 1, 1, '2024-04-03', 1, 1, 1, 10, 1, '2024-04-10', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ql_gianuoc`
--

CREATE TABLE `ql_gianuoc` (
  `ma_nhom_gia` int(11) NOT NULL,
  `ten_nhom_gia` varchar(100) NOT NULL,
  `ma_loai_khach_hang` int(11) NOT NULL,
  `gia_0_10` int(11) NOT NULL,
  `gia_10_20` int(11) NOT NULL,
  `gia_20_30` int(11) NOT NULL,
  `gia_tren_30` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ql_gianuoc`
--

INSERT INTO `ql_gianuoc` (`ma_nhom_gia`, `ten_nhom_gia`, `ma_loai_khach_hang`, `gia_0_10`, `gia_10_20`, `gia_20_30`, `gia_tren_30`) VALUES
(1, 'Nông dân', 1, 10, 20, 30, 40),
(3, 'Siêu cấp', 1, 100, 200, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ql_lapdatdhkhoi`
--

CREATE TABLE `ql_lapdatdhkhoi` (
  `ma_lap_dat` int(11) NOT NULL,
  `ma_dong_ho_khoi` int(11) NOT NULL,
  `ma_tuyen_doc` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  `ngay_lap_dat` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `chi_so_dau` int(11) NOT NULL,
  `chi_so_cuoi` int(11) NOT NULL
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

--
-- Dumping data for table `ql_nguoidung`
--

INSERT INTO `ql_nguoidung` (`ma_nhan_vien`, `mat_khau`, `ten_nguoi_dung`, `chuc_vu`, `trang_thai`, `sdt`, `email`, `ngay_sinh`) VALUES
('1420', 'a', 'Manh', 'intern', 1, '0123423232', 'a@gmail.com', '0000-00-00'),
('2207', 'a', 'Hien', 'Boss', 0, '0123445545', 'b', '2024-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `ql_phanquyen`
--

CREATE TABLE `ql_phanquyen` (
  `ma_quyen` int(11) NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ql_phanquyen`
--

INSERT INTO `ql_phanquyen` (`ma_quyen`, `ma_nhan_vien`) VALUES
(1, 1420),
(2, 2207);

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
-- Dumping data for table `ql_quyen`
--

INSERT INTO `ql_quyen` (`ma_quyen`, `ten_quyen`, `trang_thai`) VALUES
(1, 'admin', 1),
(2, 'user', 1);

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
-- Indexes for table `ls_chisodhkhoi`
--
ALTER TABLE `ls_chisodhkhoi`
  ADD PRIMARY KEY (`ma_lich_su`);

--
-- Indexes for table `ql_donghokhoi`
--
ALTER TABLE `ql_donghokhoi`
  ADD PRIMARY KEY (`ma_dong_ho_khoi`);

--
-- Indexes for table `ql_gianuoc`
--
ALTER TABLE `ql_gianuoc`
  ADD PRIMARY KEY (`ma_nhom_gia`);

--
-- Indexes for table `ql_lapdatdhkhoi`
--
ALTER TABLE `ql_lapdatdhkhoi`
  ADD PRIMARY KEY (`ma_lap_dat`);

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
  MODIFY `ma_loai_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `ls_chisodhkhoi`
--
ALTER TABLE `ls_chisodhkhoi`
  MODIFY `ma_lich_su` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ql_donghokhoi`
--
ALTER TABLE `ql_donghokhoi`
  MODIFY `ma_dong_ho_khoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ql_gianuoc`
--
ALTER TABLE `ql_gianuoc`
  MODIFY `ma_nhom_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ql_lapdatdhkhoi`
--
ALTER TABLE `ql_lapdatdhkhoi`
  MODIFY `ma_lap_dat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ql_quyen`
--
ALTER TABLE `ql_quyen`
  MODIFY `ma_quyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
