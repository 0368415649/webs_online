-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2022 lúc 02:32 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dinhduy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `price` int(50) NOT NULL,
  `quantily` int(10) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `link`, `price`, `quantily`, `category`) VALUES
(53, 'QUẦN JEANS XANH RÁCH QJ039 MÀU XANH', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-xanh-rach-qj039-mau-xanh-16595-slide-products-620c7cb9976ee.JPG', 495, 1, 'trousers'),
(54, 'QUẦN JEANS TRƠN QJ040 MÀU XANH DƯƠNG', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-tron-qj040-mau-xanh-duong-16596-slide-products-620c7ba08a08a.JPG', 495, 3, 'trousers'),
(55, 'QUẦN JEANS TRƠN QJ040 MÀU XANH DƯƠNG', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-tron-qj040-mau-xanh-duong-16596-slide-products-620c7ba08a08a.JPG', 495, 1, 'trousers'),
(56, 'QUẦN JEANS TRƠN QJ040 MÀU XANH DƯƠNG', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-tron-qj040-mau-xanh-duong-16596-slide-products-620c7ba08a08a.JPG', 495, 1, 'trousers'),
(57, 'QUẦN JEANS TRƠN QJ040 MÀU XANH DƯƠNG', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-tron-qj040-mau-xanh-duong-16596-slide-products-620c7ba08a08a.JPG', 495, 5, 'trousers'),
(58, 'ÁO KHOÁC THÊU 4M AK024 MÀU XANH', 'https://4menshop.com/images/thumbs/2022/02/ao-khoac-theu-4m-ak024-mau-xanh-16572-slide-products-620db87b232a8.JPG', 545, 4, 'shirt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `link` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `liked` varchar(100) NOT NULL,
  `percent` int(255) NOT NULL,
  `cart` varchar(100) NOT NULL,
  `star` varchar(100) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `price2` int(255) NOT NULL,
  `new` varchar(20) NOT NULL,
  `sold` int(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`id`, `name`, `link`, `price`, `liked`, `percent`, `cart`, `star`, `brand`, `country`, `price2`, `new`, `sold`, `category`, `size`, `description`, `color`) VALUES
(1, 'QUẦN TÂY TRƠN LAI LƠ VÊ QT032 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/quan-tay-tron-lai-lo-ve-qt032-mau-den-16598-slide-products-620c7b480a3cb.JPG', '445.000', '', 10, '', '', '', '', 445, 'new', 11, 'trousers', '', '', 'black'),
(2, 'QUẦN JEANS TRƠN QJ040 MÀU XANH DƯƠNG', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-tron-qj040-mau-xanh-duong-16596-slide-products-620c7ba08a08a.JPG', '495.000', '', 5, '', '', '', '', 495, 'new', 30, 'trousers', '', '', 'blue'),
(3, 'QUẦN JEANS XANH RÁCH QJ039 MÀU XANH', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-xanh-rach-qj039-mau-xanh-16595-slide-products-620c7cb9976ee.JPG', '495.000', '', 0, '', '', '', '', 495, 'new', 50, 'trousers', '', '', 'blue'),
(4, 'QUẦN JEANS THÊU LOGO QJ038 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-theu-logo-qj038-mau-den-16593-slide-products-620c7bef1ccf6.JPG', '475.000', '', 0, '', '', '', '', 475, 'new', 22, 'trousers', '', '', 'black'),
(5, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU XÁM MUỐI TIÊU', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-xam-muoi-tieu-16592-slide-products-620db1f832c30.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'white'),
(6, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU XÁM CHUỘT ĐẬM', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-xam-chuot-dam-16591-slide-products-620db2321766c.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'black'),
(7, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU NÂU', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-nau-16590-slide-products-620db26562e61.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'brown'),
(8, 'QUẦN KAKI TRƠN CĂN BẢN QK004 MÀU XÁM CHUỘT ĐẬM', 'https://4menshop.com/images/thumbs/2022/02/quan-kaki-tron-can-ban-qk004-mau-xam-chuot-dam-16581-slide-products-620db45dadff3.JPG', '395.000', '', 0, '', '', '', '', 395, 'new', 15, 'trousers', '', '', 'brown'),
(9, 'Quần Kaki Trơn Căn Bản QK004 Màu Xám', 'https://4menshop.com/images/thumbs/2022/02/quan-kaki-tron-can-ban-qk004-mau-xam-16580-slide-products-620db49309041.JPG', '395.000', '', 0, '', '', '', '', 395, 'new', 14, 'trousers', '', '', 'white'),
(10, 'QUẦN KAKI TRƠN CĂN BẢN QK004 MÀU XÁM XANH', 'https://4menshop.com/images/thumbs/2022/02/quan-kaki-tron-can-ban-qk004-mau-xam-xanh-16579-slide-products-620db4d815e14.JPG', '395.000', '', 0, '', '', '', '', 395, 'new', 11, 'trousers', '', '', 'blue'),
(11, 'Quần Jogger Túi Đắp J006 MÀU XÁM XANH', 'https://4menshop.com/images/thumbs/2022/02/quan-jogger-tui-dap-j006-mau-xam-xanh-16578-slide-products-620db6ffdcf60.JPG', '375.000', '', 0, '', '', '', '', 375, 'new', 13, 'trousers', '', '', 'blue'),
(12, 'Quần Jogger Túi Đắp J006 MÀU XÁM', 'https://4menshop.com/images/thumbs/2022/02/quan-jogger-tui-dap-j006-mau-xam-16577-slide-products-620db74385c0e.JPG', '375.000', '', 0, '', '', '', '', 375, 'new', 17, 'trousers', '', '', 'white'),
(13, 'QUẦN JOGGER TÚI ĐẮP J006 MÀU BÒ', 'https://4menshop.com/images/thumbs/2022/02/quan-jogger-tui-dap-j006-mau-bo-16576-slide-products-620db77eafb80.JPG', '375.000', '', 0, '', '', '', '', 375, 'new', 16, 'trousers', '', '', 'brown'),
(14, 'QUẦN JOGGER TÚI ĐẮP J006 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/quan-jogger-tui-dap-j006-mau-den-16575-slide-products-620db7c26712a.JPG', '375.000', '', 0, '', '', '', '', 375, 'new', 11, 'trousers', '', '', 'black'),
(15, 'QUẦN JEANS QJ037 MÀU XÁM', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-qj037-mau-xam-16567-slide-products-620dbadbd73be.JPG', '495.000', '', 0, '', '', '', '', 495, 'new', 12, 'trousers', '', '', 'black'),
(16, 'QUẦN JEANS QJ036 MÀU XANH ĐEN', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-qj036-mau-xanh-den-16566-slide-products-620dbb43c7808.JPG', '495.000', '', 0, '', '', '', '', 495, 'new', 11, 'trousers', '', '', 'blue'),
(17, 'QUẦN JEANS QJ035 MÀU XANH ĐEN', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-qj035-mau-xanh-den-16565-slide-products-620dbc4993d8e.jpg', '495.000', '', 5, '', '', '', '', 495, 'new', 14, 'trousers', '', '', 'blue'),
(18, 'QUẦN JEANS QJ034 MÀU XANH BIỂN', 'https://4menshop.com/images/thumbs/2022/02/quan-jeans-qj034-mau-xanh-bien-16563-slide-products-620dbe7367324.jpg', '495.000', '', 0, '', '', '', '', 495, 'new', 11, 'trousers', '', '', 'blue'),
(19, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU XÁM MUỐI TIÊU', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-xam-muoi-tieu-16592-slide-products-620db1f832c30.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'white'),
(20, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU XÁM CHUỘT ĐẬM', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-xam-chuot-dam-16591-slide-products-620db2321766c.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'black'),
(21, 'QUẦN SHORT TRƠN CĂN BẢN QS014 MÀU NÂU', 'https://4menshop.com/images/thumbs/2022/02/quan-short-tron-can-ban-qs014-mau-nau-16590-slide-products-620db26562e61.JPG', '315.000', '', 0, '', '', '', '', 315, 'new', 10, 'trousers', '', '', 'brown'),
(22, 'QUẦN KAKI TRƠN CĂN BẢN QK004 MÀU XÁM CHUỘT ĐẬM', 'https://4menshop.com/images/thumbs/2022/02/quan-kaki-tron-can-ban-qk004-mau-xam-chuot-dam-16581-slide-products-620db45dadff3.JPG', '395.000', '', 0, '', '', '', '', 395, 'new', 15, 'trousers', '', '', 'brown'),
(23, 'Quần Kaki Trơn Căn Bản QK004 Màu Xám', 'https://4menshop.com/images/thumbs/2022/02/quan-kaki-tron-can-ban-qk004-mau-xam-16580-slide-products-620db49309041.JPG', '395.000', '', 0, '', '', '', '', 395, 'new', 14, 'trousers', '', '', 'white');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shirt`
--

CREATE TABLE `shirt` (
  `id` int(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `liked` varchar(100) NOT NULL,
  `percent` int(255) NOT NULL,
  `cart` varchar(40) NOT NULL,
  `star` varchar(20) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `price2` int(255) NOT NULL,
  `new` varchar(20) NOT NULL,
  `sold` int(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shirt`
--

INSERT INTO `shirt` (`id`, `name`, `link`, `price`, `liked`, `percent`, `cart`, `star`, `brand`, `country`, `price2`, `new`, `sold`, `category`, `size`, `description`, `color`) VALUES
(NULL, 'ÁO SƠ MI IN HỌA TIẾT ASM084 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-in-hoa-tiet-asm084-mau-den-16614-slide-products-620c7469e5369.JPG', '315.000', '', 0, '', '', '', '', 315, '', 56, 'shirt', '', '', ''),
(NULL, 'ÁO SƠ MI IN HỌA TIẾT ASM083 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-in-hoa-tiet-asm083-mau-den-16613-slide-products-620c768e6a1fa.JPG', '315.000', '', 0, '', '', '', '', 315, '', 41, 'shirt', '', '', ''),
(NULL, 'ÁO VEST TRƠN REGULAR AV003 MÀU NÂU', 'https://4menshop.com/images/thumbs/2022/02/ao-vest-tron-regular-av003-mau-nau-16611-slide-products-620c76db480f5.JPG', '985.000', '', 5, '', '', '', '', 985, '', 23, 'shirt', '', '', ''),
(NULL, 'Áo Vest Trơn Regular AV002 MÀU KEM', 'https://4menshop.com/images/thumbs/2022/02/ao-vest-tron-regular-av002-mau-kem-16609-slide-products-620c7721af71d.jpg', '985,000', '', 5, '', '', '', '', 985, '', 24, 'shirt', '', '', ''),
(NULL, 'ÁO POLO PHỐI CỔ SỌC PO049 MÀU XANH', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-phoi-co-soc-po049-mau-xanh-16608-slide-products-620c71cb3eb88.JPG', '315.000', '', 0, '', '', '', '', 315, '', 24, 'shirt', '', '', ''),
(NULL, 'ÁO POLO PHỐI CỔ SỌC PO049 MÀU TRẮNG', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-phoi-co-soc-po049-mau-trang-16607-slide-products-620c72237088d.JPG', '315.000', '', 0, '', '', '', '', 315, '', 37, 'shirt', '', '', ''),
(NULL, 'Áo Polo Phối Cổ Sọc PO049 Màu Đen', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-phoi-co-soc-po049-mau-den-16606-slide-products-620c725d6b944.JPG', '315,000', '', 0, '', '', '', '', 315, '', 46, 'shirt', '', '', ''),
(NULL, 'ÁO POLO THÊU LOGO 4M PO051 MÀU BE', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-theu-logo-4m-po051-mau-be-16603-slide-products-620c79837150c.JPG', '315.000', '', 0, '', '', '', '', 315, '', 36, 'shirt', '', '', ''),
(NULL, 'ÁO POLO THÊU LOGO 4M PO051 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-theu-logo-4m-po051-mau-den-16601-slide-products-620c7a1698fcf.JPG', '315.000', '', 0, '', '', '', '', 315, '', 36, 'shirt', '', '', ''),
(NULL, 'ÁO SƠ MI TRƠN SLIMFIT ASM079 MÀU XANH BIỂN', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-tron-slimfit-asm079-mau-xanh-bien-16585-slide-products-620db3714f63d.JPG', '385.000', '', 0, '', '', '', '', 385, '', 46, 'shirt', '', '', ''),
(NULL, 'ÁO SƠ MI TRƠN SLIMFIT ASM079 MÀU TRẮNG', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-tron-slimfit-asm079-mau-trang-16584-slide-products-620db3a209fa6.JPG', '385.000 ', '', 0, '', '', '', '', 385, '', 44, 'shirt', '', '', ''),
(NULL, 'ÁO SƠ MI TRƠN SLIMFIT ASM079 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-tron-slimfit-asm079-mau-den-16583-slide-products-620db3d55d1ef.JPG', '385.000', '', 0, '', '', '', '', 385, '', 15, 'shirt', '', '', ''),
(NULL, 'ÁO KHOÁC THÊU 4M AK024 MÀU XÁM TRẮNG', 'https://4menshop.com/images/thumbs/2022/02/ao-khoac-theu-4m-ak024-mau-xam-trang-16573-slide-products-620db83db59d9.JPG', '545.000', '', 0, '', '', '', '', 545, '', 16, 'shirt', '', '', ''),
(NULL, 'ÁO KHOÁC THÊU 4M AK024 MÀU XANH', 'https://4menshop.com/images/thumbs/2022/02/ao-khoac-theu-4m-ak024-mau-xanh-16572-slide-products-620db87b232a8.JPG', '545.000 ', '', 0, '', '', '', '', 545, '', 115, 'shirt', '', '', ''),
(NULL, 'ÁO KHOÁC THÊU 4M AK024 MÀU XÁM', 'https://4menshop.com/images/thumbs/2022/02/ao-khoac-theu-4m-ak024-mau-xam-16571-slide-products-620db8b3112a9.JPG', '545.000', '', 0, '', '', '', '', 545, '', 17, 'shirt', '', '', ''),
(NULL, 'ÁO KHOÁC THÊU 4M AK024 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-khoac-theu-4m-ak024-mau-den-16570-slide-products-620db8f3bd5b5.JPG', '545.000', '', 0, '', '', '', '', 545, '', 17, 'shirt', '', '', ''),
(NULL, 'Áo Polo Len Dệt Kim Sọc PO053 Màu Trắng', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-len-det-kim-soc-po053-mau-trang-16511-slide-products-620f13db185e9.JPG', '385.000', '', 0, '', '', '', '', 385, '', 17, 'shirt', '', '', ''),
(NULL, 'Áo Sơ Mi Caro ASM078 Màu Nâu', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-caro-asm078-mau-nau-16510-slide-products-620dc20c92d0d.JPG', '375.000', '', 0, '', '', '', '', 375, '', 17, 'shirt', '', '', ''),
(NULL, 'Áo Polo Len Dệt Kim Sọc PO053 Màu Nâu', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-len-det-kim-soc-po053-mau-nau-16509-slide-products-620f140b4ca17.JPG', '385.000', '', 0, '', '', '', '', 385, '', 17, 'shirt', '', '', ''),
(NULL, 'ÁO THUN PHỐI MÀU AT060 MÀU TRẮNG', 'https://4menshop.com/images/thumbs/2021/12/-16505-slide-products-61c43d34456a4.jpg', '215.000', '', 0, '', '', '', '', 215, '', 17, 'shirt', '', '', ''),
(NULL, 'ÁO THUN PHỐI MÀU AT060 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2021/12/-16504-slide-products-61c43be6cefea.jpg', '215.000', '', 0, '', '', '', '', 215, '', 17, 'shirt', '', '', ''),
(NULL, 'Áo Polo Phối Cổ Sọc PO049 Màu Đen', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-phoi-co-soc-po049-mau-den-16606-slide-products-620c725d6b944.JPG', '315,000', '', 0, '', '', '', '', 315, '', 46, 'shirt', '', '', ''),
(NULL, 'ÁO POLO THÊU LOGO 4M PO051 MÀU BE', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-theu-logo-4m-po051-mau-be-16603-slide-products-620c79837150c.JPG', '315.000', '', 0, '', '', '', '', 315, '', 36, 'shirt', '', '', ''),
(NULL, 'ÁO POLO THÊU LOGO 4M PO051 MÀU ĐEN', 'https://4menshop.com/images/thumbs/2022/02/ao-polo-theu-logo-4m-po051-mau-den-16601-slide-products-620c7a1698fcf.JPG', '315.000', '', 0, '', '', '', '', 315, '', 36, 'shirt', '', '', ''),
(NULL, 'ÁO SƠ MI TRƠN SLIMFIT ASM079 MÀU XANH BIỂN', 'https://4menshop.com/images/thumbs/2022/02/ao-so-mi-tron-slimfit-asm079-mau-xanh-bien-16585-slide-products-620db3714f63d.JPG', '385.000', '', 0, '', '', '', '', 385, '', 46, 'shirt', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
