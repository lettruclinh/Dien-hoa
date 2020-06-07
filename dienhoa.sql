-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2020 lúc 02:02 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienhoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietpd`
--

CREATE TABLE `chitietpd` (
  `id` int(10) NOT NULL,
  `id_order` int(10) DEFAULT NULL,
  `id_product` int(10) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `Gia` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(10) NOT NULL,
  `TenChuDe` varchar(100) CHARACTER SET utf8 NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `TenChuDe`, `updated_at`, `created_at`) VALUES
(1, 'Hoa Cưới', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Hoa Chúc Mừng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Hoa Khai Trương', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tiểu cảnh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hoa Sinh Nhật', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Giỏ Hoa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Hoa tặng mẹ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'sửa thêm', '2020-06-02 11:23:29', '2020-06-02 11:05:07'),
(10, 'chỉnh lại', '2020-06-02 11:08:34', '2020-06-02 11:08:34'),
(11, '123thử', '2020-06-02 11:09:38', '2020-06-02 11:09:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idSanPham` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idSanPham`, `NoiDung`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Được', '2020-05-31 20:20:45', NULL),
(2, 8, 1, 'Hay quá trời', '2020-05-31 20:20:45', NULL),
(3, 2, 1, 'Tôi rất thích', '2020-05-31 20:20:45', NULL),
(4, 2, 1, 'Không thích', '2020-05-31 20:20:45', NULL),
(5, 6, 1, 'Tôi rất thích', '2020-05-31 20:20:45', NULL),
(6, 9, 1, 'được', '2020-05-31 20:20:45', NULL),
(7, 5, 1, 'được', '2020-05-31 20:20:46', NULL),
(8, 8, 2, 'được', '2020-06-18 20:20:46', NULL),
(9, 7, 2, 'được', '2020-05-31 20:20:46', NULL),
(10, 5, 2, 'Tôi chưa có ý kiến gì', '2020-05-31 20:20:46', NULL),
(11, 4, 2, 'Hay lắm', '2020-05-31 20:20:46', NULL),
(12, 5, 3, 'Được', '2020-05-31 20:20:46', NULL),
(13, 6, 3, 'Tôi chưa có ý kiến gì', '2020-05-31 20:20:46', NULL),
(14, 5, 3, 'Tôi rất thích', '2020-05-31 20:20:46', NULL),
(15, 7, 4, 'Được', '2020-05-31 20:20:46', NULL),
(16, 9, 4, 'Được', '2020-06-18 20:20:46', NULL),
(17, 1, 4, 'Không thích', '2020-06-18 20:20:46', NULL),
(18, 4, 5, 'Tôi rất thích', '2020-05-31 20:20:46', NULL),
(19, 10, 5, 'Tạm ổn', '2020-05-31 20:20:46', NULL),
(20, 2, 5, 'Rất hay', '2020-05-31 20:20:46', NULL),
(21, 5, 5, 'Tôi chưa có ý kiến gì', '2020-05-31 20:20:46', NULL),
(22, 1, 5, 'Không thích', '2020-06-18 20:20:46', NULL),
(23, 4, 5, 'Hay quá trời', '2020-05-31 20:20:46', NULL),
(24, 10, 5, 'Chưa được tốt lắm', '2020-05-31 20:20:46', NULL),
(25, 4, 5, 'Tạm ổn', '2020-05-31 20:20:46', NULL),
(26, 10, 10, 'Tôi rất thích', '2020-05-31 20:20:46', NULL),
(27, 4, 10, 'Được', '2020-05-31 19:00:00', NULL),
(28, 6, 10, 'Không thích', '2020-05-31 20:20:47', NULL),
(29, 3, 10, 'Hay quá trời', '2020-05-31 20:20:47', NULL),
(30, 10, 11, 'Tôi chưa có ý kiến gì', '2020-05-31 20:20:47', NULL),
(31, 10, 11, 'Được', '2020-05-31 20:20:47', NULL),
(32, 5, 11, 'Hay quá trời', '2020-05-31 20:20:47', NULL),
(33, 9, 11, 'Tạm ổn', '2020-05-31 20:20:47', NULL),
(34, 5, 1, 'Tôi rất thích', '2020-05-31 20:20:47', NULL),
(35, 8, 11, 'Rất đẹp', '2020-05-31 20:20:47', NULL),
(36, 9, 11, 'Tôi chưa có ý kiến gì', '2020-05-31 20:20:47', NULL),
(75, 15, 1, 'thử', '2020-06-06 03:24:50', '2020-06-06 03:24:50'),
(76, 15, 1, 'thử', '2020-06-06 03:44:18', '2020-06-06 03:44:18'),
(77, 15, 3, 'đây là bình luận', '2020-06-06 03:45:58', '2020-06-06 03:45:58'),
(78, 2, 4, 'đây là bình luận vừa được thêm', '2020-06-06 03:54:56', '2020-06-06 03:54:56'),
(79, 5, 3, 'comment', '2020-06-06 07:58:15', '2020-06-06 07:58:15'),
(80, 7, 3, 'rất thích', '2020-06-07 02:40:11', '2020-06-07 02:40:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `id` int(10) NOT NULL,
  `TenDonVi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`id`, `TenDonVi`, `Mota`) VALUES
(1, 'giỏ', ''),
(2, 'Chậu', ''),
(3, 'bó', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthuctt`
--

CREATE TABLE `hinhthuctt` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenHTTT` char(30) NOT NULL,
  `thongtin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhthuctt`
--

INSERT INTO `hinhthuctt` (`id`, `tenHTTT`, `thongtin`) VALUES
(1, 'Thanh toán qua chuyển khoản', 'tài khoản:12345'),
(2, 'Thanh toán trực tiếp khi nhận', 'Tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucvc`
--

CREATE TABLE `hinhthucvc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenHTVC` char(30) NOT NULL,
  `phiVC` double NOT NULL,
  `phamvi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhthucvc`
--

INSERT INTO `hinhthucvc` (`id`, `tenHTVC`, `phiVC`, `phamvi`) VALUES
(1, 'Vận chuyển nhanh', 20000, 'Nội ô Cần Thơ'),
(2, 'Vận chuyển thường', 18000, 'Nội ô Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonxuat`
--

CREATE TABLE `hoadonxuat` (
  `id` int(10) NOT NULL,
  `NgLap` datetime NOT NULL,
  `idPD` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SDT` int(10) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `NgaySinh`, `SDT`, `DiaChi`, `Mail`) VALUES
(1, 'Nguyễn Văn A', '1967-06-03', 123456789, '123-Mậu Thân, Ninh Kiều, TP.CầnThơ', 'nguyenvana@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(10) NOT NULL,
  `TenKM` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mota` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `TenKM`, `Mota`, `updated_at`, `created_at`) VALUES
(1, 'Giảm giá 10%', '', NULL, NULL),
(2, 'Giảm giá 20%', '', NULL, NULL),
(3, 'Giảm giá 30%', '', NULL, NULL),
(4, 'Tặng kèm hoa tươi cùng loại', '', NULL, NULL),
(5, 'Gói hoa miễn phí', '', NULL, NULL),
(6, 'Tặng Chocolate', '', NULL, NULL),
(7, 'Giảm giá 40%', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieudang`
--

CREATE TABLE `kieudang` (
  `id` int(10) NOT NULL,
  `TenKD` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kieudang`
--

INSERT INTO `kieudang` (`id`, `TenKD`, `Mota`) VALUES
(1, 'Lẳng Hoa', ''),
(2, 'Giỏ Hoa', ''),
(3, 'Bó Hoa', ''),
(4, 'Cây văn phòng', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo`
--

CREATE TABLE `lo` (
  `id` int(11) NOT NULL,
  `ngNhap` date DEFAULT NULL,
  `nsx` date NOT NULL,
  `hsd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihoa`
--

CREATE TABLE `loaihoa` (
  `id` int(11) NOT NULL,
  `tenLHoa` varchar(30) NOT NULL,
  `mausac_LH` char(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihoa`
--

INSERT INTO `loaihoa` (`id`, `tenLHoa`, `mausac_LH`, `updated_at`, `created_at`) VALUES
(2, 'Hoa hồng', 'Trắng', NULL, NULL),
(3, 'Hoa lưu ly', 'Xanh dương', NULL, NULL),
(4, 'Cẩm tú cầu', 'Xanh lá', NULL, NULL),
(5, 'Cẩm tú cầu', 'Xanh dương', NULL, NULL),
(6, 'Cẩm tú cầu', 'Hồng', NULL, NULL),
(7, 'Cẩm tú cầu', 'Tím', NULL, NULL),
(8, 'Hoa thanh anh', 'Xanh lơ', NULL, NULL),
(9, 'Hoa diên vĩ', 'Tím', NULL, NULL),
(10, 'Hoa cúc', 'Trắng', NULL, NULL),
(15, 'thử', NULL, '2020-06-07 03:06:11', '2020-06-07 03:06:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nglieu`
--

CREATE TABLE `nglieu` (
  `id` int(11) NOT NULL,
  `tenNgLieu` varchar(30) NOT NULL,
  `kthuoc` int(11) DEFAULT NULL,
  `chatlieu` varchar(30) DEFAULT NULL,
  `mausac` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudat`
--

CREATE TABLE `phieudat` (
  `id` int(10) NOT NULL,
  `NgLap` date NOT NULL,
  `Loinhan_chuc` text DEFAULT NULL,
  `GioGiao` varchar(50) DEFAULT NULL,
  `NgayGiao` date DEFAULT NULL,
  `DChi` text DEFAULT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `idKH` int(10) UNSIGNED DEFAULT NULL,
  `idHTTT` int(10) UNSIGNED NOT NULL,
  `idHTVC` int(10) UNSIGNED DEFAULT NULL,
  `Tong` double NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phieudat`
--

INSERT INTO `phieudat` (`id`, `NgLap`, `Loinhan_chuc`, `GioGiao`, `NgayGiao`, `DChi`, `idSP`, `idKH`, `idHTTT`, `idHTVC`, `Tong`, `updated_at`, `created_at`) VALUES
(1, '2003-06-20', 'k', '6h-9h', '2020-06-03', NULL, 0, 1, 1, 2, 0, '2020-06-03 10:10:51', '2020-06-03 10:10:51'),
(2, '2003-06-20', 'k', '6h-9h', '2020-06-03', NULL, 0, 1, 1, 1, 0, '2020-06-03 10:11:33', '2020-06-03 10:11:33'),
(3, '2003-06-20', 'k', '6h-9h', '2020-06-03', NULL, 0, 1, 2, 1, 0, '2020-06-03 10:24:54', '2020-06-03 10:24:54'),
(4, '2003-06-20', 'k', '6h-9h', '2020-06-03', NULL, 0, 1, 2, 2, 0, '2020-06-03 10:26:09', '2020-06-03 10:26:09'),
(5, '2003-06-20', 'k', '6h-9h', '2020-06-03', NULL, 0, 1, 1, 1, 0, '2020-06-03 10:26:50', '2020-06-03 10:26:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCD` int(10) NOT NULL,
  `idDV` int(10) NOT NULL,
  `idKD` int(10) NOT NULL,
  `idKM` int(10) NOT NULL,
  `TenSP` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Y_Tuong` text DEFAULT NULL,
  `Mota` text DEFAULT NULL,
  `Hinh` varchar(255) DEFAULT NULL,
  `Gia` double NOT NULL,
  `New` int(5) DEFAULT NULL,
  `Gia_KM` double DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `idCD`, `idDV`, `idKD`, `idKM`, `TenSP`, `Y_Tuong`, `Mota`, `Hinh`, `Gia`, `New`, `Gia_KM`, `updated_at`, `created_at`) VALUES
(1, 4, 2, 4, 1, 'Secret Garden 4', NULL, 'Tiểu cảnh mini với những khu vườn, cỏ cây hoa lá, ngôi nhà và muôn thú,...ngày nay đã trở thành sản phẩm trang trí được yêu chuộng vì điểm nổi bật, thu hút và mang hiều tác dụng tốt cho người trồng. Mỗi chậu tiểu cảnh sẽ mang một ý nghĩa riêng có thể là lời chúc hay thể hiện mục đích nào đó mà người trồng hoặc người tặng muốn truyền đạt.', '8083_secret-garden-4.jpg', 450000, 1, 405000, NULL, NULL),
(2, 5, 1, 2, 6, 'My Love', NULL, 'Tình yêu đến khẽ như một cơn gió sớm mai với những tia nắng ngọt ngào và ấm áp. Ai đó đã từng nói rằng thật tội nghiệp cho những kẻ chưa từng được yêu. Khi thì nồng nàn và khi thì sâu lắng tạo nên những dư vị tuyệt vời của tình yêu.', 'ps4.png', 700000, 1, 0, NULL, NULL),
(3, 4, 2, 4, 1, 'Secret Garden 3', NULL, 'Tiểu cảnh mini với những khu vườn, cỏ cây hoa lá, ngôi nhà và muôn thú,...ngày nay đã trở thành sản phẩm trang trí được yêu chuộng vì điểm nổi bật, thu hút và mang hiều tác dụng tốt cho người trồng. Mỗi chậu tiểu cảnh sẽ mang một ý nghĩa riêng có thể là lời chúc hay thể hiện mục đích nào đó mà người trồng hoặc người tặng muốn truyền đạt.', '8086_secret-garden-3.jpg', 350000, 1, 305000, NULL, NULL),
(4, 5, 3, 3, 5, 'White rosa', NULL, 'Bó hoa đơn giản, mộc mạc nhưng vẫn không kém phần sang trọng và quyến rũ. Phong cách vintage chính là ý tưởng để sáng tạo ra sản phẩm này. Thích hợp tặng dịp sinh nhật, kỷ niệm ngày cưới, kỷ niệm yêu nhau, chào ngày mới....', 'sp3.png', 700000, 1, 0, NULL, NULL),
(5, 1, 3, 3, 1, 'Hoa Cưới số 1', NULL, '', 'sp2.png', 700000, 1, 630000, NULL, NULL),
(10, 4, 2, 4, 5, 'Secret garden 2', NULL, 'Tiểu cảnh mini với những khu vườn, cỏ cây hoa lá, ngôi nhà và muôn thú,...ngày nay đã trở thành sản phẩm trang trí được yêu chuộng vì điểm nổi bật, thu hút và mang hiều tác dụng tốt cho người trồng. Mỗi chậu tiểu cảnh sẽ mang một ý nghĩa riêng có thể là lời chúc hay thể hiện mục đích nào đó mà người trồng hoặc người tặng muốn truyền đạt.', '8085_secret-garden-2.jpg', 450000, 0, 0, NULL, NULL),
(11, 4, 2, 4, 1, 'secret garden 1\r\n', NULL, NULL, '8084_secret-garden-1.jpg', 450000, NULL, 405000, NULL, NULL),
(17, 11, 3, 3, 4, 'thử 123', NULL, NULL, 'wsPg_695210.jpg', 12345, 1, NULL, '2020-06-05 22:47:41', '2020-06-05 11:51:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `Ten`, `Hinh`, `link`, `updated_at`, `created_at`) VALUES
(1, '', 'banner1.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'dich-vu-dien-hoa.png', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'hinh-anh-shop-hoa.png', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'slide2.png', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'thu', '414_00b1d7568df574ab2de4.jpg', 'https://www.google.com/', '2020-05-25 12:41:39', '2020-05-25 12:41:39'),
(7, 'thử lần 3', '109_hinh-nen-laptop-4k-chu-ho-dep_034427957.jpg', NULL, '2020-05-25 12:46:11', '2020-05-25 12:46:11'),
(11, 'sửa thử', '395_Tổng-hợp-hình-nền-Game-Wallpaper-đẹp-nhất-22.jpg', NULL, '2020-05-25 13:30:12', '2020-05-25 13:29:57'),
(12, 'thử lỗi', '342_d2d4cb5491f768a931e6.jpg', NULL, '2020-06-02 09:18:31', '2020-06-02 09:18:31'),
(13, '123', '906_0bd1d032999160cf3980.jpg', NULL, '2020-06-05 18:42:46', '2020-06-02 10:55:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT 3,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `quyen`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, '$2y$10$rXj.h5ubIq5xKxuRISy6Luo9eoBQO54g0xXiODUBIG37D7vjpLuH2', NULL, NULL),
(2, 'User_2', 'User_2@gmail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(3, 'User_3', 'user_3@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(4, 'User_4', 'user_4@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(5, 'User_5', 'user_5@mymail.com', 3, '$2y$10$74bT1UGQUlIbnK/NQEp3le0XRYfgJZjVNA2jYs6boS63D8I/T79ui', NULL, '2020-06-06 07:56:07'),
(6, 'User_6', 'user_6@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(7, 'User_7', 'user_7@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(8, 'User_8', 'user_8@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(9, 'User_9', 'user_9@mymail.com', 3, '$2y$10$jmdbaY/M5kArIU9pEcKiaey9S3lKt9XCaqdN6a.aLrT/V2J5kczXu', NULL, NULL),
(10, 'User_10', 'user_10@mymail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', NULL, NULL),
(12, 'User_11', 'user_11@gmail.com', 3, '$2y$10$dCLh4kmlzD2zvg5MmbHiH.JM5twJciQLMwB9HU7cpfdTfaZq34XTy', '2020-06-04 08:43:57', '2020-06-04 08:43:57'),
(13, 'User_12', 'user_12@gmail.com', 3, '$2y$10$Itvgr2Pj1UK1AvbFJLtBDevVAy06v2pZegTC.CPaQ14puDW5DerWm', '2020-06-04 08:50:11', '2020-06-05 04:23:16'),
(14, 'new_admin', 'new_admin@gmail.com', 2, '$2y$10$rXj.h5ubIq5xKxuRISy6Luo9eoBQO54g0xXiODUBIG37D7vjpLuH2', '2020-06-04 09:23:56', '2020-06-04 09:23:56'),
(15, 'thử', 'thu@gmail.com', 3, '$2y$10$EiOtDilG8vZlFqumOVtKqetlTK35tMK7lLvCn6XLKatyJsJ4Fq/Qe', '2020-06-04 11:26:38', '2020-06-04 11:52:17'),
(16, 'User_14', 'user_14@gmail.com', 3, '$2y$10$ca.qq1qnMOzVCcJ7ZvTpC.ThBx1viQDsMbsS/60gvnx8ZXI3PJoo.', '2020-06-05 04:24:40', '2020-06-05 04:24:40'),
(20, 'User_15', 'user_15@gmail.com', 3, '$2y$10$gyDfrtoC8Tmb0TQ86Rt0COvZxVjizw3WMd7iT8rN9cJZlRwPsC/y.', '2020-06-07 04:54:45', '2020-06-07 04:54:45'),
(21, 'User_20', 'user_20@gmail.com', 3, '$2y$10$qjOiRJNXgZ6CN7w5Fjc.OORayYpsuGFTdUgW6GT6ENt4LdoizMbVi', '2020-06-07 04:55:05', '2020-06-07 04:55:05'),
(22, 'User_19', 'user_19@gmail.com', 3, '$2y$10$Ia3d46oo2NUhq6ocHKR0QuESUtREHmEOXU7.bf4dWXvKGCXXTf41.', '2020-06-07 04:56:18', '2020-06-07 04:56:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `tenvaitro` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `tenvaitro`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Nhân viên', NULL, NULL),
(3, 'Khách hàng', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietpd`
--
ALTER TABLE `chitietpd`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSanPham` (`idSanPham`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhthuctt`
--
ALTER TABLE `hinhthuctt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhthucvc`
--
ALTER TABLE `hinhthucvc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kieudang`
--
ALTER TABLE `kieudang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaihoa`
--
ALTER TABLE `loaihoa`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nglieu`
--
ALTER TABLE `nglieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieudat`
--
ALTER TABLE `phieudat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idHTVC` (`idHTVC`),
  ADD KEY `idKH` (`idKH`),
  ADD KEY `idHTTT` (`idHTTT`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCD` (`idCD`),
  ADD KEY `idDV` (`idDV`),
  ADD KEY `idKD` (`idKD`),
  ADD KEY `idKM` (`idKM`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaitro` (`quyen`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietpd`
--
ALTER TABLE `chitietpd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hinhthuctt`
--
ALTER TABLE `hinhthuctt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hinhthucvc`
--
ALTER TABLE `hinhthucvc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `kieudang`
--
ALTER TABLE `kieudang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lo`
--
ALTER TABLE `lo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaihoa`
--
ALTER TABLE `loaihoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nglieu`
--
ALTER TABLE `nglieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phieudat`
--
ALTER TABLE `phieudat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idSanPham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `phieudat`
--
ALTER TABLE `phieudat`
  ADD CONSTRAINT `phieudat_ibfk_1` FOREIGN KEY (`idHTVC`) REFERENCES `hinhthucvc` (`id`),
  ADD CONSTRAINT `phieudat_ibfk_2` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `phieudat_ibfk_3` FOREIGN KEY (`idHTTT`) REFERENCES `hinhthuctt` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idCD`) REFERENCES `chude` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idDV`) REFERENCES `donvi` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`idKD`) REFERENCES `kieudang` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`idKM`) REFERENCES `khuyenmai` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`quyen`) REFERENCES `vaitro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
