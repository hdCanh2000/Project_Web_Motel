-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 03:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xdhttt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rp_phanhoi`
--

CREATE TABLE `rp_phanhoi` (
  `id_rp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tk_user`
--

CREATE TABLE `tk_user` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_phong` int(11) NOT NULL,
  `roles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tk_user`
--

INSERT INTO `tk_user` (`id_user`, `hoten`, `ngaysinh`, `quequan`, `email`, `matkhau`, `sdt`, `photo`, `id_phong`, `roles`) VALUES
(1, 'Nguyễn Văn Admin', '2000-03-03', 'Ninh Bình', 'nva@gmail.com', '123123', '012345678', 'uploads/hdc.jpg', 13, 1),
(2, 'Nguyễn Chí Thanh', '2000-04-04', 'Thái Nguyên', 'nvb@gmail.com', '123123', '0123456789', 'uploads/anh-chibi-sieu-nhan-sieu-anh-hung-dep-va-chat-nhat-23.jpg', 2, 0),
(11, 'Hoàng Đức Cảnh', '2021-11-16', 'Ninh Bình', 'hdc@gmail.com', '123', '0355744899', 'uploads/logo05.png', 10, 0),
(16, 'admin', '2021-11-01', 'Thái Nguyên', 'admin@gmail.com', '123', '0355400799', 'uploads/logo05.png', 0, 1),
(19, 'Nguyễn Chí Thanh', '2021-11-01', 'Phú Thọ', 'nct@gmail.com', '123', '0355400799', 'uploads/anh-chibi-sieu-nhan-sieu-anh-hung-dep-va-chat-nhat-23.jpg', 0, 1),
(26, 'Nguyễn Minh Đức', '2021-11-01', 'Bắc Ninh', 'nmd@gmai.com', '123', '0123456789', 'uploads/c1375f75-3ec1-4d90-9bce-b33199ac419e.png', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_phong`
--

CREATE TABLE `tt_phong` (
  `id_phong` int(11) NOT NULL,
  `HOTEN_CHUPHONG` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT_CHUPHONG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL_CHUPHONG` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GIA_PHONG` float NOT NULL,
  `DIENTICH` float NOT NULL,
  `GIADIEN` float NOT NULL,
  `GIANUOC` float NOT NULL,
  `TINH_TP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `QUAN_HUYEN` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `XA_PHUONG` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SONHA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ANH1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ANH2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ANH3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tt_phong`
--

INSERT INTO `tt_phong` (`id_phong`, `HOTEN_CHUPHONG`, `SDT_CHUPHONG`, `EMAIL_CHUPHONG`, `GIA_PHONG`, `DIENTICH`, `GIADIEN`, `GIANUOC`, `TINH_TP`, `QUAN_HUYEN`, `XA_PHUONG`, `SONHA`, `ANH1`, `ANH2`, `ANH3`, `MOTA`) VALUES
(2, 'Hoàng Đức Cảnh', '0322144578', 'hdc@gmail.com', 500000, 20, 3000, 10000, 'Thái Nguyên', 'Võ Nhai', 'Quyết Thắng', 'Đường Z115', 'uploads/anh22.jpg', 'uploads/anh13.png', 'uploads/anh10.png', '   Nhà có tất cả chỉ cần tấm lòng là vào ở được'),
(14, 'Hoàng Đức Cảnh', '0322144578', 'nct@gmail.com', 500000, 20, 3000, 10000, 'Thái Nguyên', 'Sông Công', 'Quyết Thắng', 'Đường Z115', 'uploads/anh8.png', 'uploads/anh11.png', 'uploads/anh15.png', ' Nhà có tất cả chỉ cần tấm lòng là vào ở được'),
(15, 'Nguyễn Chí Thanh', '0322144578', 'npt@gmail.com', 500000, 20, 3000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Quyết Thắng', 'Đường Z115', 'uploads/anh3.jpg', 'uploads/anh11.png', 'uploads/anh15.png', 'nhà có tất cả chì cần 2 trái tim vàng'),
(16, 'Hoàng Đức Cảnh', '0322144578', 'npt@gmail.com', 500000, 20, 3000, 10000, 'Thái Nguyên', 'Đại Từ', 'Quyết Thắng', 'Đường Z115', 'uploads/anh8.png', 'uploads/anh11.png', 'uploads/anh15.png', '  Nhà có tất cả chỉ cần tấm lòng là vào ở được'),
(18, 'Phạm Văn Vũ', '0322144578', '', 500000, 20, 3000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Quyết Thắng', 'Đường Z115', 'uploads/anh14.png', 'uploads/anh15.png', 'uploads/anh7.png', '  Nhà có tất cả chỉ cần tấm lòng là vào ở được'),
(38, 'Nguyễn Chí Thanh', '0322144578', 'nct@gmail.com', 1000000, 20, 5000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Tân Thịnh', 'Đường Việt Bắc', 'uploads/anh7.png', 'uploads/anh13.png', 'uploads/anh12.png', '   Có máy giạt, điều hòa nóng lạnh'),
(39, 'Nguyễn Phương Thảo', '0322144578', 'npt@gmail.com', 1000000, 100, 3000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Quyết Thắng', 'Đường Việt Bắc', 'uploads/anh12.png', 'uploads/anh7.png', 'uploads/anh9.png', 'Hàng xóm thân thiện chủ nhà tích cực'),
(40, 'Nguyễn Chí Thanh', '0322144578', 'nct@gmail.com', 1000000, 1000, 3000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Quyết Thắng', 'Đường Việt Bắc', 'uploads/anh1.jpg', 'uploads/anh15.png', 'uploads/anh13.png', ' internet free'),
(41, 'Nguyễn Phương Thảo', '0322144578', 'npt@gmail.com', 1000000, 100, 5000, 10000, 'Thái Nguyên', 'tp Thái Nguyên', 'Quyết Thắng', 'Đường Việt Bắc', 'uploads/anh14.png', 'uploads/anh1.jpg', 'uploads/anh15.png', ' Nhà thì các gì cúng có chỉ có tình cảm là chưa ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `rp_phanhoi`
--
ALTER TABLE `rp_phanhoi`
  ADD PRIMARY KEY (`id_rp`);

--
-- Chỉ mục cho bảng `tk_user`
--
ALTER TABLE `tk_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `tt_phong`
--
ALTER TABLE `tt_phong`
  ADD PRIMARY KEY (`id_phong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `rp_phanhoi`
--
ALTER TABLE `rp_phanhoi`
  MODIFY `id_rp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tk_user`
--
ALTER TABLE `tk_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tt_phong`
--
ALTER TABLE `tt_phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
