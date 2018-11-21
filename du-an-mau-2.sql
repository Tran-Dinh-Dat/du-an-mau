-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2018 lúc 06:10 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du-an-mau-2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'Mã bình luận',
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nội dung bình luận',
  `ma_hh` int(11) NOT NULL COMMENT 'Mã hàng hóa được bình luận',
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã người bình luận',
  `ngay_bl` date NOT NULL COMMENT 'Thời gian bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(2, 'Đẹp quá! mình muốn mua nó', 2, 'admin', '2018-10-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `ma_TT` int(11) DEFAULT NULL,
  `ma_hh` int(11) DEFAULT NULL,
  `ten_SP` varchar(50) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia_SP` int(11) DEFAULT NULL,
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `ma_TT`, `ma_hh`, `ten_SP`, `so_luong`, `gia_SP`, `ngay_tao`) VALUES
(326, 316, 1, ' Vợt cầu lông Yonex Astrox 99 - Xách tay', 1, 3599000, '2018-10-17 13:46:35'),
(327, 317, 2, 'Vợt cầu lông Yonex Duora 99', 1, 2179000, '2018-10-18 03:38:29'),
(328, 318, 6, 'Áo cầu lông Victor 1792 Nữ - Cam', 1, 140000, '2018-10-18 04:00:52'),
(329, 318, 7, 'Áo cầu lông Victor 1791 Nữ - Đen', 1, 140000, '2018-10-18 04:00:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT ' Mã hàng hóa',
  `ten_hh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hàng hóa',
  `don_gia` float NOT NULL COMMENT 'Đơn giá',
  `giam_gia` float NOT NULL COMMENT 'Mức giảm giá',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Hình ảnh',
  `ngay_nhap` date NOT NULL COMMENT 'Ngày nhập hàng',
  `mo_ta` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả hàng hóa',
  `dac_biet` bit(1) NOT NULL COMMENT 'Trạng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT '0' COMMENT 'Số lượt xem',
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(1, ' Vợt cầu lông Yonex Astrox 99 - Xách tay', 3599000, 0.1, 'vot1.jpeg', '2018-09-16', 'Vợt cầu lông Yonex Astrox 99 được xem là sản phẩm đỉnh nhất năm của hãng sản xuất của Nhật Bản. Trước khi tung ra sản phẩm này, các dòng khác của Astrox đã làm mưa làm gió với làng cầu lông thế giới như Astrox 66, 77 và cặp đôi 88S - 88D. Vì lẽ đó, không quá ngạc nhiên khi hầu như những ai yêu thích môn cầu lông đều đổ dồn mọi con mắt trông chờ vào dòng vợt siêu hot Astrox 99 này.', b'1', 17, 1),
(2, 'Vợt cầu lông Yonex Duora 99', 2179000, 0.1, 'vot2.jpeg', '2018-09-16', 'Duora là dòng vợt cực kỳ thành công của Yonex, không chỉ dễ dàng kiểm soát cầu mà với thiết kế “2 mặt” 1 mặt để cho tay thuận đánh những quả cầu uy lực, 1 mặt thiết kế cho cú trái tay nhanh , đây thật sự là cây vợt cầu lông nâng tầm cuộc chơi lên tầm cao mới khi dễ dàng đánh những cú thuận tay mạnh mẽ, những cú trái tay nhanh và thoát cầu, kèm khả năng kiểm soát tối ưu trong tạt, đập, bỏ cài cầu.', b'1', 16, 1),
(4, 'Giày cầu lông Flypower Plaosan 4 - Xanh nhạt', 900000, 0.1, 'giay1.jpeg', '2018-09-16', 'Duora là dòng vợt cực kỳ thành công của Yonex, không chỉ dễ dàng kiểm soát cầu mà với thiết kế “2 mặt” 1 mặt để cho tay thuận đánh những quả cầu uy lực, 1 mặt thiết kế cho cú trái tay nhanh , đây thật sự là cây vợt cầu lông nâng tầm cuộc chơi lên tầm cao mới khi dễ dàng đánh những cú thuận tay mạnh mẽ, những cú trái tay nhanh và thoát cầu, kèm khả năng kiểm soát tối ưu trong tạt, đập, bỏ cài cầu.', b'1', 8, 2),
(5, 'Giày Cầu Lông Lining AYTN 015-4', 1130000, 0.1, 'giay2.jpeg', '2018-09-21', 'Duora là dòng vợt cực kỳ thành công của Yonex, không chỉ dễ dàng kiểm soát cầu mà với thiết kế “2 mặt” 1 mặt để cho tay thuận đánh những quả cầu uy lực, 1 mặt thiết kế cho cú trái tay nhanh , đây thật sự là cây vợt cầu lông nâng tầm cuộc chơi lên tầm cao mới khi dễ dàng đánh những cú thuận tay mạnh mẽ, những cú trái tay nhanh và thoát cầu, kèm khả năng kiểm soát tối ưu trong tạt, đập, bỏ cài cầu.', b'1', 2, 2),
(6, 'Áo cầu lông Victor 1792 Nữ - Cam', 140000, 0.1, 'ao1.jpeg', '2018-09-21', 'Không có mô tả', b'1', 400, 3),
(7, 'Áo cầu lông Victor 1791 Nữ - Đen', 140000, 0.1, 'ao2.jpeg', '2018-09-21', 'Không có mô tả', b'1', 0, 3),
(8, 'Áo cầu lông Victor 1791 Nữ - Đỏ', 140000, 0.1, 'ao3.jpeg', '2018-09-21', 'Áo cầu lông Victor 1791 Nữ - Đỏ', b'1', 7, 3),
(9, 'Vợt cầu lông Victor MX 80B ', 4450000, 0.1, 'vot3.jpeg', '2018-09-16', 'Vợt cầu lông Victor MX 80B là cây vợt khá nổi tiếng của hãng sản xuất đến từ Đài Loan. Vợt được ưa chuộng gần như nhất nhì của Victor, chỉ thua BS12 đôi chút.\r\n\r\nVictor MX 80B được thiết kế bởi khung octablade, đây là công nghệ giúp vợt tăng độ ổn định và tăng thêm uy lực trong mỗi cú smash.\r\n\r\nNgoài ra, Vợt cầu lông Victor MX 80B còn được trang bị công nghệ eight 80 tăng số lỗ xỏ vợt giúp tăng độ bền của dây trên vợt Victor MX80B. Xét về tính năng, Vợt cầu lông Victor MX 80B là vợt chuyên dùng để tấn công, smash cháy sân.\r\n\r\nMàu sắc của vợt Victor MX80 được thiết kế cực kỳ bắt mắt với lớp sơn nổi bật khá độc đáo. Vợt tích hợp khung cầu khí động học elip làm giảm lực cản không khí, chống mài mòn cao hơn giúp tối đa hóa việc kiểm soát.\r\n\r\nThêm vào đó, với công nghệ nano tube còn giúp vợt tăng cường lực uốn so với than chì thông thường. Cấu trúc diamond-shape và sự ổn định mượt mà của sword-shape, khung aero-diamond giảm tối đa lực cản không khí và cải thiện tính ổn định trong đường cầu.\r\n\r\n\r\nThông số chi tiết vợt cầu lông Victor MX 80B:\r\nTrọng lượng vợt Victor MX 80B: 3U/G4,G5, 4U/G5.\r\nChiều dài dài: 675mm.\r\nLực căng tối đa: 30-31 lbs.\r\nVât liệu thân vợt: untra high modulus graphite + nano resin + hard cored technology.\r\nVật liệu khung vợt: untra high modulus graphite + fyrofil + 7.0 shaft.', b'1', 24, 1),
(10, 'Vợt cầu lông Yonex Voltric I-Force', 2150000, 0.1, 'vot4.jpeg', '2018-09-16', 'Vợt cầu lông Yonex Astrox 99 được xem là sản phẩm đỉnh nhất năm của hãng sản xuất của Nhật Bản. Trước khi tung ra sản phẩm này, các dòng khác của Astrox đã làm mưa làm gió với làng cầu lông thế giới như Astrox 66, 77 và cặp đôi 88S - 88D. Vì lẽ đó, không quá ngạc nhiên khi hầu như những ai yêu thích môn cầu lông đều đổ dồn mọi con mắt trông chờ vào dòng vợt siêu hot Astrox 99 này.', b'1', 14, 1),
(11, 'Quần cầu lông Lining 7022 - Đỏ trắng', 110000, 0.1, 'quan1.jpeg', '2018-09-16', 'Quần cầu lông Lining 7022 - Đỏ trắng', b'1', 26, 9),
(12, 'Quần cầu lông Lining 7022 - Đen xanh chuối', 110000, 0.1, 'quan2.jpeg', '2018-09-16', 'Quần cầu lông Lining 7022 - Đen xanh chuối', b'1', 23, 9),
(13, 'Quần cầu lông Victor 806 - Đen', 110000, 0.1, 'quan3.jpeg', '2018-09-16', 'Quần cầu lông Victor 806 - Đen', b'1', 29, 9),
(14, 'Giày cầu lông Lining AYTK107-3', 880000, 0.1, 'giay3.jpeg', '2018-09-16', 'Giày cầu lông Lining AYTK107-3', b'1', 31, 2),
(15, 'Balo cầu lông Yonex B901 - Xanh xanh chuối', 700000, 0.1, 'balo1.jpeg', '2018-09-16', 'Balo cầu lông Yonex B901 là sản phẩm mới nhất của Yonex được tung ra trong năm 2018. Mẫu balo cầu lông được thiết kế với tông màu cực kỳ bắt mắt và trẻ trung. Trong khi Yonex B901 xanh cam cho phái mạnh thì Yonex B901 thích hợp hơn cho phái yếu.\r\n\r\nCả 2 màu sắc đều toát lên vẻ năng động, thanh thoát. Ngoài ra, các ngăn trong của balo được sắp xếp rất rộng rãi và thoải mái. Bạn có thể chưa giày cầu lông, vợt cầu lông, phụ kiện, quấn cán, phấn mồ hôi, quần áo... để đi đánh cầu mà không cần mang theo bất cứ túi hoặc xách nào khác.', b'1', 1, 4),
(16, 'Balo cầu lông Yonex B901 - Xanh cam', 700000, 0.1, 'balo2.jpeg', '2018-09-16', 'Balo cầu lông Yonex B901 là sản phẩm mới nhất của Yonex được tung ra trong năm 2018. Mẫu balo cầu lông được thiết kế với tông màu cực kỳ bắt mắt và trẻ trung. Trong khi Yonex B901 xanh cam cho phái mạnh thì Yonex B901 thích hợp hơn cho phái yếu.\r\n\r\nCả 2 màu sắc đều toát lên vẻ năng động, thanh thoát. Ngoài ra, các ngăn trong của balo được sắp xếp rất rộng rãi và thoải mái. Bạn có thể chưa giày cầu lông, vợt cầu lông, phụ kiện, quấn cán, phấn mồ hôi, quần áo... để đi đánh cầu mà không cần mang theo bất cứ túi hoặc xách nào khác.\r\n', b'1', 2, 4),
(17, 'Balo cầu lông Kawasaki 8255', 500000, 0.1, 'balo3.jpeg', '2018-09-16', 'Balo cầu lông Kawasaki 8255', b'1', 1, 4),
(18, 'Túi vợt cầu lông Kawasaki 8630 - Xanh', 850000, 0.1, 'tuivot1.jpeg', '2018-09-16', 'Túi vợt cầu lông Kawasaki 8630 - Xanh', b'1', 1, 5),
(19, 'Túi vợt cầu lông Kawasaki 8701 - Đen', 950000, 0.1, 'tuivot2.jpeg', '2018-09-16', 'Túi vợt cầu lông Kawasaki 8701 - Đen', b'1', 2, 5),
(20, 'Túi vợt cầu lông Kawasaki 8673 - Xanh', 750000, 0.1, 'tuivot3.jpeg', '2018-09-16', 'Túi vợt cầu lông Kawasaki 8673 - Xanh', b'1', 3, 5),
(21, 'Quấn cán Yonex 7405E (24in1)', 35000, 0.1, 'phukien1.jpeg', '2018-09-23', 'Quấn cán Yonex 7405E (24in1)', b'1', 2, 6),
(22, 'Ống cầu lông Tiền Phong', 110000, 0.1, 'phukien2.jpeg', '2018-09-23', 'Ống cầu lông Tiền Phong', b'1', 0, 6),
(23, 'Ống cầu lông Tiến Bộ', 110000, 0.1, 'phukien3.jpeg', '2018-09-23', 'Ống cầu lông Tiến Bộ', b'1', 2, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã đăng nhập',
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `kich_hoat` bit(1) NOT NULL COMMENT 'Trạng thái kích hoạt',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hình ảnh',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ email',
  `vai_tro` bit(1) NOT NULL COMMENT 'Vai trò, true là nhân viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
(0, 'admin', 'admin', 'Trần Đình Đạt', b'1', 'admin.jpg', 'dat@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Vợt cầu lông'),
(2, 'Giày cầu lông'),
(3, 'Áo cầu lông'),
(4, 'Balo cầu lông'),
(5, 'Túi đụng vợt cầu lông'),
(6, 'Phụ kiện cầu lông'),
(9, 'Quần cầu lông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `ma_TT` int(11) NOT NULL,
  `gia_dh` int(11) DEFAULT NULL,
  `ma_kh` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` int(4) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` text,
  `dia_chi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanh_toan`
--

INSERT INTO `thanh_toan` (`ma_TT`, `gia_dh`, `ma_kh`, `trang_thai`, `ngay_tao`, `note`, `dia_chi`) VALUES
(316, 3401055, 'admin', 0, '2018-10-17 20:46:35', '', ''),
(317, 2059155, 'admin', 1, '2018-10-18 10:38:29', 'ok', '08, Hà Văn Tính'),
(318, 264600, 'admin', 0, '2018-10-18 11:00:52', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_kh_2` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`ma_TT`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`ma_TT`),
  ADD KEY `FK_PersonOr` (`ma_kh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT ' Mã hàng hóa', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `ma_TT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`ma_TT`) REFERENCES `thanh_toan` (`ma_TT`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);

--
-- Các ràng buộc cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD CONSTRAINT `FK_PersonOr` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
