-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2019 lúc 03:16 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tttt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cautraloibinhchon`
--

CREATE TABLE `cautraloibinhchon` (
  `id_bc` int(10) NOT NULL,
  `id_ch` int(10) NOT NULL,
  `noidungbc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id_cv` int(10) NOT NULL,
  `tencv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id_cv`, `tencv`, `created_at`, `updated_at`) VALUES
(1, 'Giám đốc', '2019-06-05 00:32:15', '2019-06-05 00:32:15'),
(2, 'Phó giám đốc', '2019-06-05 20:22:50', '2019-06-05 20:22:50'),
(3, 'Trưởng phòng', '2019-06-05 20:22:59', '2019-06-05 20:22:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khaosat`
--

CREATE TABLE `khaosat` (
  `id_ks` int(10) NOT NULL,
  `tenks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id_lv` int(10) NOT NULL,
  `tenlv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`id_lv`, `tenlv`, `created_at`, `updated_at`) VALUES
(1, 'Công việc', '2019-06-05 01:11:46', '2019-06-05 01:11:46'),
(2, 'Môi trường làm việc', '2019-06-05 01:07:27', '2019-06-05 01:07:27'),
(3, 'Lương', '2019-06-05 01:08:08', '2019-06-05 01:08:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nd` int(10) NOT NULL,
  `id_pb` int(10) NOT NULL,
  `id_cv` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennv` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` int(10) NOT NULL,
  `QUYEN` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id_pb` int(10) NOT NULL,
  `tenpb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id_pb`, `tenpb`, `created_at`, `updated_at`) VALUES
(1, 'Phòng kinh doanh abc', '2019-06-05 07:34:15', '0000-00-00 00:00:00'),
(3, 'Phòng hành chánh', '2019-06-05 07:34:15', '0000-00-00 00:00:00'),
(4, 'Phòng kế toán', '2019-06-05 07:34:15', '0000-00-00 00:00:00'),
(5, 'Phòng kinh doanh', '2019-06-05 07:34:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieuchidanhgia`
--

CREATE TABLE `tieuchidanhgia` (
  `id_ch` int(10) NOT NULL,
  `id_lv` int(10) NOT NULL,
  `noidungch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tl_ks`
--

CREATE TABLE `tl_ks` (
  `id_nd` int(10) NOT NULL,
  `id_bc` int(10) NOT NULL,
  `id_ks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pb` int(11) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gioitinh` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `id_pb`, `id_cv`, `name`, `username`, `password`, `check_pass`, `email`, `remember_token`, `quyen`, `created_at`, `updated_at`, `gioitinh`) VALUES
(8, 1, 1, 'Nguyễn Tấn Thành Huy', 'b1500060', '$2y$10$J79X7Pi/thImnzUz8w.NX.EnQFv8vnJCXaBptb7dnlNTtOTxWve6O', '12345678', 'lydat78@gmail.com', NULL, 0, '2019-06-06 02:35:35', '2019-06-06 02:35:35', 0),
(9, 3, 3, 'Nguyễn Tiến Đạt', 'b1500061', '$2y$10$cfb89ydPh7zhyFbbgKzrfusUE9ZX6rYorp5jW3.GNTf3LUgZquOXO', '12345678', 'lydat79@gmail.com', NULL, 0, '2019-06-02 07:47:37', '2019-06-02 07:47:37', 0),
(10, 4, 2, 'Lê Tuấn', 'b1500062', '$2y$10$4AUb.Gs6ck0Yk5XepkB2L.XB2KANX6gsVanSJT2U5klCzoaPa6dVa', '12345678', 'lydat76@gmail.com', NULL, 1, '2019-06-02 07:48:21', '2019-06-02 07:48:21', 0),
(11, 5, 1, 'Trần Phước Bình', 'B1509620', '$2y$10$qcZNK5QlfiLWx0mDeDh/6OxF6svtDlbEJEHRbfUIY.zOkzaURffYe', '12345678', 'lydat75@gmail.com', NULL, 1, '2019-06-02 07:49:05', '2019-06-02 07:49:05', 0),
(12, 3, 1, 'Sơn Văn Toàn', 'b1500066', '$2y$10$A6y7JK.jaw3DFKmD9Suko.Kb/pTDhI8uxSJxY2WQe3lFDcQz5IbTO', '12345678', 'lydat99@gmail.com', NULL, 0, '2019-06-02 19:30:13', '2019-06-02 19:30:13', 0),
(13, 5, 3, 'Thạch Thị Đào Le', 'b1500069', '$2y$10$/iQbx3RaCrATckuDzLW33efM4vHdDceGieFaxknwckVRpejCI.l92', '12345678', 'lydat77@gmail.com', NULL, 0, '2019-06-02 19:34:18', '2019-06-02 19:34:18', 1),
(14, 3, 1, 'hibari nhu', 'hibari nhu', '$2y$10$Vxy/kMEZuOGwZc4AVG2zDetKYzdhpoHwr1BZGUXdgtzabPSLspPoS', '123456789', 'hibarikyoya1370@gmail.com', NULL, 0, '2019-06-06 00:00:08', '2019-06-06 00:00:08', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ykiendanhgia`
--

CREATE TABLE `ykiendanhgia` (
  `id_yk` int(10) NOT NULL,
  `id_nv` int(10) NOT NULL,
  `id_ks` int(10) NOT NULL,
  `noidungyk` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cautraloibinhchon`
--
ALTER TABLE `cautraloibinhchon`
  ADD PRIMARY KEY (`id_bc`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id_cv`);

--
-- Chỉ mục cho bảng `khaosat`
--
ALTER TABLE `khaosat`
  ADD PRIMARY KEY (`id_ks`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id_lv`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id_pb`);

--
-- Chỉ mục cho bảng `tieuchidanhgia`
--
ALTER TABLE `tieuchidanhgia`
  ADD PRIMARY KEY (`id_ch`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ykiendanhgia`
--
ALTER TABLE `ykiendanhgia`
  ADD PRIMARY KEY (`id_yk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cautraloibinhchon`
--
ALTER TABLE `cautraloibinhchon`
  MODIFY `id_bc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id_cv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khaosat`
--
ALTER TABLE `khaosat`
  MODIFY `id_ks` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id_lv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nd` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id_pb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tieuchidanhgia`
--
ALTER TABLE `tieuchidanhgia`
  MODIFY `id_ch` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ykiendanhgia`
--
ALTER TABLE `ykiendanhgia`
  MODIFY `id_yk` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
