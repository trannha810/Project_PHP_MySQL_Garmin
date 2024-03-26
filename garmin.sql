-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 26, 2024 lúc 02:20 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `garmin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commen`
--

CREATE TABLE `commen` (
  `idcommen` int NOT NULL,
  `makh` int NOT NULL,
  `mahh` int NOT NULL,
  `commen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `commen`
--

INSERT INTO `commen` (`idcommen`, `makh`, `mahh`, `commen`) VALUES
(28, 10, 22, ''),
(29, 10, 22, '  cadcawd'),
(30, 10, 22, '  vzdfssf'),
(31, 18, 10, '  mjinh'),
(32, 18, 22, '  bgbub'),
(33, 10, 21, '  hubgu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idmahh` int NOT NULL,
  `dongia` int NOT NULL,
  `soluongton` int NOT NULL,
  `giamgia` int NOT NULL,
  `size` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idmahh`, `dongia`, `soluongton`, `giamgia`, `size`) VALUES
(1, 300, 9, 289, 0),
(2, 200, 9, 0, 0),
(3, 150, 9, 120, 0),
(4, 150, 9, 125, 0),
(5, 99, 9, 0, 0),
(6, 123, 9, 0, 0),
(7, 89, 9, 0, 0),
(8, 450, 9, 299, 0),
(9, 450, 9, 320, 0),
(10, 199, 9, 0, 0),
(11, 199, 9, 0, 0),
(12, 120, 9, 0, 0),
(13, 299, 9, 0, 0),
(14, 259, 9, 0, 0),
(15, 300, 9, 0, 0),
(16, 99, 9, 0, 0),
(17, 200, 9, 199, 0),
(18, 160, 7, 123, 0),
(19, 150, 8, 0, 0),
(20, 149, 0, 0, 0),
(21, 169, 5, 0, 0),
(22, 179, -4, 0, 0),
(23, 299, 9, 199, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `tinhtrang` int NOT NULL,
  `masohd` int NOT NULL,
  `soluongmua` int NOT NULL,
  `mahh` int NOT NULL,
  `thanhtien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`tinhtrang`, `masohd`, `soluongmua`, `mahh`, `thanhtien`) VALUES
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 63, 1, 22, 15000),
(0, 64, 1, 21, 15000),
(0, 65, 1, 21, 15000),
(0, 67, 1, 21, 15000),
(0, 67, 1, 22, 15000),
(0, 68, 1, 21, 15000),
(0, 68, 1, 22, 15000),
(0, 69, 1, 21, 15000),
(0, 69, 1, 22, 15000),
(0, 70, 1, 21, 15000),
(0, 70, 1, 22, 15000),
(0, 71, 1, 21, 15000),
(0, 71, 1, 22, 15000),
(0, 72, 1, 21, 15000),
(0, 72, 1, 22, 15000),
(0, 73, 1, 21, 15000),
(0, 73, 1, 22, 15000),
(0, 74, 1, 21, 15000),
(0, 74, 1, 22, 15000),
(0, 75, 1, 21, 15000),
(0, 75, 1, 22, 15000),
(0, 76, 1, 21, 15000),
(0, 76, 1, 22, 15000),
(0, 83, 1, 21, 15000),
(0, 83, 1, 22, 15000),
(0, 83, 1, 4, 15000),
(0, 84, 1, 21, 15000),
(0, 86, 1, 22, 15000),
(0, 87, 1, 22, 15000),
(0, 88, 1, 22, 15000),
(0, 89, 1, 21, 15000),
(0, 90, 3, 23, 45000),
(0, 91, 3, 23, 45000),
(0, 92, 4, 23, 60000),
(0, 93, 4, 23, 60000),
(0, 95, 1, 21, 15000),
(0, 96, 1, 22, 15000),
(0, 98, 1, 22, 15000),
(0, 99, 1, 22, 15000),
(0, 100, 1, 5, 15000),
(0, 102, 5, 22, 75000),
(0, 104, 10, 22, 150000),
(0, 105, 1, 22, 15000),
(0, 107, 4, 18, 60000),
(0, 108, 2, 18, 30000),
(0, 108, 1, 17, 15000),
(0, 109, 1, 18, 15000),
(0, 109, 1, 15, 15000),
(0, 110, 1, 21, 15000),
(0, 111, 1, 21, 15000),
(0, 113, 1, 21, 15000),
(0, 114, 2, 12, 30000),
(0, 116, 1, 22, 15000),
(0, 117, 1, 22, 15000),
(0, 119, 1, 21, 15000),
(0, 120, 1, 21, 15000),
(0, 121, 3, 10, 45000),
(0, 122, 3, 18, 45000),
(0, 123, 6, 18, 90000),
(0, 124, 9, 20, 135000),
(0, 125, 1, 22, 15000),
(0, 126, 8, 22, 120000),
(0, 126, 1, 19, 15000),
(0, 128, 1, 21, 15000),
(0, 129, 1, 21, 15000),
(0, 131, 1, 21, 15000),
(0, 132, 4, 22, 716),
(0, 133, 8, 22, 1432);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int NOT NULL,
  `hinh` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `act` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `hinh`, `ten`, `act`) VALUES
(1, 'senda.png', 'Fashion', 'caycanh'),
(2, 'sport.jpg', 'Sport', 'senda'),
(3, 'healt.jpg', 'Healt', 'xuongrong'),
(4, 'banner1.jpg', 'Outdoor Activities', 'thuysinh'),
(5, 'senda.png', 'Accessory', 'khac');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloai` int NOT NULL,
  `ngaylap` date NOT NULL,
  `soluotxem` int NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `hinh`, `maloai`, `ngaylap`, `soluotxem`, `mota`) VALUES
(2, ' Venu 3', 'fs1.webp', 1, '2024-02-02', 3, ' Venu 3 không chỉ là một chiếc đồng hồ thông minh — mà còn là huấn luyện viên cá nhân trên cổ tay.'),
(3, ' Vívoactive 5', 'fs2.png', 1, '2024-02-02', 3, 'vívoactive 5 không chỉ là một chiếc đồng hồ thông minh—đó là huấn luyện viên cá nhân trên cổ tay của bạn,hỗ trợ mọi mục tiêu của bạn.'),
(4, 'Instinct Crossover ', 'fs3.webp', 1, '2024-02-02', 7, 'Nhận email, SMS và cảnh báo ngay trên chiếc đồng hồ của bạn khi được kết nối với điện thoại thông minh Apple hoặc Android tương thích.'),
(5, 'Venu Sq – phiên bản Music', 'fs4.jpg', 1, '2024-02-02', 3, 'Phù hợp với cổ tay có chu vi từ 125-190 mm.Xem mọi thứ rõ ràng trên màn hình màu tươi sáng có chế độ luôn bật, hoàn hảo để xem nhanh'),
(7, 'Garmin Edge 840 Solar', 'nt1.jpg', 4, '2024-02-02', 3, 'Cung cấp  hiểu biết về hiệu suất động nhằm giúp bạn đạt thành tích tốt nhất: Đo lường Grit và Flow, huấn luyện theo mục tiêu, Stamina, Power Guide, Động lực học MTB…'),
(8, 'Garmin EDGE 1040', 'nt2.jpg', 4, '2024-02-02', 8, 'Máy tính đạp xe GPS tiên tiến kết hợp điều hướng vượt trội, lập kế hoạch và theo dõi hiệu suất, nhận thức đi xe đạp và kết nối thông minh'),
(9, 'Garmin Edge 130 Plus Bundle', 'nt3.png', 4, '2024-02-02', 9, 'Thiết kế đơn giản, chắc chắn với màn hình 1. 8 ”sắc nét và dễ đọc trong điều kiện ánh sáng mặt trời hoặc ánh sáng yếu\r\n\r\n'),
(10, 'Garmin Instinct Crossover Solar Tactical', 'nt4.jpg', 4, '2024-02-02', 3, 'Chiếc đồng hồ đạt tiêu chuẩn quân đội Mỹ MIL-STD-810 có khả năng chống nước đến 10 ATM cùng khả năng chịu nhiệt và chống sốc tiêu chuẩn.'),
(11, 'Garmin Forerunner 920XT', 'phukien2.jpg', 5, '2024-02-02', 3, 'Dành cho Garmin Forerunner 920XT Dây đeo đồng hồ thay thế silicon màu rắn (Màu đen)'),
(12, 'Garmin EDGE 1040 Solar - M1', 'nt5.jpg', 4, '2024-02-02', 3, 'Máy tính đạp xe GPS tiên tiến kết hợp điều hướng vượt trội, lập kế hoạch và theo dõi hiệu suất, nhận thức đi xe đạp và kết nối thông minh.'),
(13, ' Forerunner 265', 'tt1.webp', 2, '2024-02-04', 3, 'Forerunner 265 được đánh giá cao nhờ hiệu năng được cải thiện đáng kể so với thế hệ tiền nhiệm cùng thiết kế tinh tế, hiện đại.'),
(14, 'Garmin Forerunner 945', 'tt2k.webp', 2, '2024-02-04', 5, 'Garmin Forerunner 945 không chỉ kế thừa toàn bộ tính năng cao cấp từ Forerunner 935 cũ mà nó còn sở hữu thêm nhiều tính năng khác trước đây chỉ được tích hợp cho dòng Fenix 5 Plus.'),
(15, 'Garmin Forerunner 965 - M1', 'tt3.webp', 2, '2024-02-04', 8, 'Đồng hồ thông minh Garmin Forerunner 965 có thiết kế đơn giản mà mạnh mẽ với khung viền làm bằng titanium bền bỉ. Cùng với đó, phần dây là silicon tạo cảm giác thoải mái khi đeo.'),
(16, 'Garmin Forerunner 265 - M2', 'tt4.jpg', 2, '2024-02-04', 9, 'Forerunner 265 là đồng hồ chạy bộ tốt nhất vừa mới ra mắt năm 2023.Trang bị màn hình AMOLED 1.3 inch cho hình ảnh sống động, hiển thị thông tin rõ ràng'),
(17, ' Garmin Forerunner 45', 'tt5.png', 2, '2024-02-04', 6, 'Đồng hồ chạy dễ sử dụng theo dõi nhịp tim ở cổ tay và có tính năng GPS để theo dõi tốc độ, khoảng cách, khoảng thời gian của bạn và hơn thế nữa.'),
(18, 'Garmin Fenix 6X', 'tt6.png', 2, '2024-02-04', 2, 'Có tính năng nhịp tim cổ tay và Pulse Ox cao cấp đo độ bão hòa oxy trong máu để hỗ trợ theo dõi giấc ngủ nâng cao và mức thích nghi khí hậu độ cao ở những nơi cao,'),
(19, 'Garmin Vivofit 4', 'sk1.jpg', 3, '2024-02-04', 7, 'Smartband dành cho smartphone và tablet sử dụng hệ điều hành Android, iOS.Tính bước chân, đo quãng đường, theo dõi giấc ngủ, bộ đếm thời gian.'),
(20, 'Garmin Lily 2 Classic', 'sk2.jpg', 3, '2024-02-04', 5, 'Garmin Lily 2 là chiếc đồng hồ thông minh nhỏ gọn, thời trang với vỏ kim loại, ống kính có hoa văn, chỉ cần chạm để hiển thị màn hình sáng.'),
(21, 'Garmin Lily Classic', 'sk3.jpg', 3, '2024-02-04', 6, 'Cả 2 phiên bản có bộ khung máy 34mm, nhỏ hơn cả Apple Watch bản thấp nhất với 40mm, màn hình cảm ứng 1 inch, tấm nền TFT LCD, được bảo vệ bởi kính cường lực Gorilla Glass 3.'),
(22, 'Garmin Quatix 7 Standard Edition', 'sk4.jpg', 3, '2024-02-04', 8, 'Thiết kế tinh xảo, chắc chắn với màn hình 1,3 inch luôn bật, gờ bằng thép không gỉ, các nút bấm, vỏ sau và hệ thống dây đeo QuickFit'),
(24, ' Approach S70 - 42 mm', 'fs5.jpg', 1, '2024-03-05', 8, 'Thiết kế gọn nhẹ và thời trang, nổi bật với gờ gốm bóng bẩy cùng ống kính chống trầy xước và khả năng chống nước 5 ATM.'),
(25, 'Garmin Forerunner 945 M8', 'phukien3.jpg', 5, '2024-03-06', 7, 'Cung cấp các bài workout nâng cao, thích hợp cho người dùng đang luyện tập cho các cuộc thi IronMan hoặc Marathon. Cho phép tự tạo bài tập hoặc tải về các bài tập có sẵn trên Garmin Coach – MIỄN PHÍ.\r\n\r\n'),
(26, 'MARQ Golfer (Gen 2)', 'tt7.jpg', 2, '2024-03-01', 7, 'Đồng hồ hỗ trợ chơi GOLF tốt nhất hiện nay được chế tác từ hợp kim Titanium cấp độ 5 siêu bền, mặt kính Sapphire vòm cứng cáp và rõ nét như pha lê.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int NOT NULL,
  `makh` int NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(97, 9, '2024-02-21', 0),
(98, 9, '2024-02-21', 15000),
(99, 9, '2024-02-21', 15000),
(100, 9, '2024-02-21', 15000),
(101, 9, '2024-02-21', 0),
(102, 9, '2024-02-21', 75000),
(103, 9, '2024-02-21', 0),
(104, 9, '2024-02-21', 150000),
(105, 9, '2024-02-21', 15000),
(106, 9, '2024-02-21', 0),
(107, 9, '2024-02-21', 60000),
(108, 9, '2024-02-21', 45000),
(109, 9, '2024-02-21', 30000),
(110, 9, '2024-02-21', 15000),
(111, 9, '2024-02-21', 15000),
(112, 9, '2024-02-21', 0),
(113, 9, '2024-02-21', 15000),
(114, 9, '2024-02-21', 30000),
(115, 9, '2024-02-21', 0),
(116, 9, '2024-02-21', 15000),
(117, 9, '2024-02-21', 15000),
(118, 9, '2024-02-21', 0),
(119, 9, '2024-02-21', 15000),
(120, 9, '2024-02-21', 15000),
(121, 10, '2024-03-05', 45000),
(122, 10, '2024-03-05', 45000),
(123, 10, '2024-03-05', 90000),
(124, 10, '2024-03-06', 135000),
(125, 10, '2024-03-08', 15000),
(126, 19, '2024-03-23', 135000),
(127, 19, '2024-03-23', 0),
(128, 9, '2024-03-23', 15000),
(129, 9, '2024-03-23', 15000),
(130, 9, '2024-03-23', 0),
(131, 9, '2024-03-23', 15000),
(132, 9, '2024-03-24', 716),
(133, 9, '2024-03-24', 1432);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int NOT NULL,
  `tenkh` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(8, 'nam2', 'nam2', '0da4e57d0c88e17bd62908f23ac96e74', '434@gmail.com', '12', '0032659941'),
(9, 'nam1', 'nam1', '0da4e57d0c88e17bd62908f23ac96e74', 'root@gmail.com', '12v', '0032659941'),
(10, 'nam', 'mk', '0da4e57d0c88e17bd62908f23ac96e74', 'root1@gmail.com', '12', '0032659941');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `iddanhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `iddanhmuc`) VALUES
(1, 'Cây cảnh', 2),
(2, 'Sen đá', 1),
(3, 'Xương rồng', 3),
(4, 'Cây thủy sinh', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'nam', '12v', 'ng@gmail.com', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `commen`
--
ALTER TABLE `commen`
  ADD PRIMARY KEY (`idcommen`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idmahh`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `commen`
--
ALTER TABLE `commen`
  MODIFY `idcommen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
