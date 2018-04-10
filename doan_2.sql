-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 04:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyen_nghanh`
--

CREATE TABLE `chuyen_nghanh` (
  `ma_chuyen_nghanh` varchar(10) NOT NULL,
  `ten_chuyen_nghanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuyen_nghanh`
--

INSERT INTO `chuyen_nghanh` (`ma_chuyen_nghanh`, `ten_chuyen_nghanh`) VALUES
('HTTT', 'Hệ thống thông tin'),
('KHMT', 'Khoa học máy tính'),
('KTPM', 'Kỹ Thuật Phần Mềm');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_cv`
--

CREATE TABLE `thong_tin_cv` (
  `ma_cv` varchar(10) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `quoc_tich` varchar(10) NOT NULL,
  `gioi_thieu` varchar(2000) NOT NULL,
  `muc_tieu` varchar(2000) NOT NULL,
  `kinh_nghiem` varchar(2000) NOT NULL,
  `ma_chuyen_nghanh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thong_tin_cv`
--

INSERT INTO `thong_tin_cv` (`ma_cv`, `ho_ten`, `ngay_sinh`, `dia_chi`, `phone`, `email`, `quoc_tich`, `gioi_thieu`, `muc_tieu`, `kinh_nghiem`, `ma_chuyen_nghanh`) VALUES
('CV01', 'Lê Thị Diễm Phượng', '1997-01-21', '389 - An Hòa - Ninh Kiều - Cần Thơ', 1676404446, 'ltdphuong@gmail.com', 'VIỆT NAM', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 'Cơ hội để làm việc và nâng cấp bản thân, cũng như tham gia vào một tổ chức tin tưởng vào việc giành được lợi thế cạnh tranh và đem lại cho cộng đồng. Tôi hiện đang mở rộng kinh nghiệm vững chắc của tôi trong thiết kế UI / UX. Tôi tập trung vào việc sử dụng kỹ năng giao tiếp để tạo trải nghiệm người dùng tốt và tạo sự quan tâm mạnh mẽ đến chủ nhân của mình. Tôi hy vọng sẽ phát triển kỹ năng thiết kế chuyển động và kiến thức của tôi về Web và trở thành một tài sản trung thực cho công việc kinh doanh. Là một cá nhân, tôi tự tin rằng bạn sẽ tìm thấy tôi sáng tạo, hài hước và tự nhiên đam mê. Tôi là một nhà tư tưởng tiến bộ, mà những người khác có thể cảm thấy hứng thú khi làm việc như một đội.', 'Tôi đã làm việc như một nhà thiết kế giao diện web kể từ đó. Tôi có một phong cách thanh lịch và thanh lịch, và tôi có nhiều kinh nghiệm trong việc sản xuất CSS3 và HTML5 cho các trang web hiện đại. Tôi yêu tạo nên sự tuyệt vời theo nhu cầu của khách hàng. Tôi nghĩ rằng trải nghiệm của người dùng khi tôi cố gắng tạo ra điều gì đó cho khách hàng của mình. Làm một thiết kế tuyệt vời', 'KTPM'),
('cv02', 'Trần Ngọc Huyền', '1997-04-11', 'Cần Thơ', 1254789602, 'tnhuyen@gmail.com', 'VIỆT NAM', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 'Cơ hội để làm việc và nâng cấp bản thân, cũng như tham gia vào một tổ chức tin tưởng vào việc giành được lợi thế cạnh tranh và đem lại cho cộng đồng. Tôi hiện đang mở rộng kinh nghiệm vững chắc của tôi trong thiết kế UI / UX. Tôi tập trung vào việc sử dụng kỹ năng giao tiếp để tạo trải nghiệm người dùng tốt và tạo sự quan tâm mạnh mẽ đến chủ nhân của mình. Tôi hy vọng sẽ phát triển kỹ năng thiết kế chuyển động và kiến thức của tôi về Web và trở thành một tài sản trung thực cho công việc kinh doanh. Là một cá nhân, tôi tự tin rằng bạn sẽ tìm thấy tôi sáng tạo, hài hước và tự nhiên đam mê. Tôi là một nhà tư tưởng tiến bộ, mà những người khác có thể cảm thấy hứng thú khi làm việc như một đội', 'Tôi đã làm việc như một nhà thiết kế giao diện web kể từ đó. Tôi có một phong cách thanh lịch và thanh lịch, và tôi có nhiều kinh nghiệm trong việc sản xuất CSS3 và HTML5 cho các trang web hiện đại. Tôi yêu tạo nên sự tuyệt vời theo nhu cầu của khách hàng. Tôi nghĩ rằng trải nghiệm của người dùng khi tôi cố gắng tạo ra điều gì đó cho khách hàng của mình. Làm một thiết kế tuyệt vời', 'HTTT'),
('cv03', 'Đặng Thị Mộng Vui', '1997-01-20', 'Trà Vinh', 1523547802, 'dtmvui@gmail.com', 'VIỆT NAM', 'Tôi là một chuyên gia tự do hoàn toàn tự do Sáng tạo Giao diện người dùng Nhà thiết kế và Nhà phát triển Liên quan với thiết kế web mới nhất và công nghệ là tuyệt vời cảm thấy liên lạc với sáng tạo.', 'Cơ hội để làm việc và nâng cấp bản thân, cũng như tham gia vào một tổ chức tin tưởng vào việc giành được lợi thế cạnh tranh và đem lại cho cộng đồng. Tôi hiện đang mở rộng kinh nghiệm vững chắc của tôi trong thiết kế UI / UX. Tôi tập trung vào việc sử dụng kỹ năng giao tiếp để tạo trải nghiệm người dùng tốt và tạo sự quan tâm mạnh mẽ đến chủ nhân của mình. Tôi hy vọng sẽ phát triển kỹ năng thiết kế chuyển động và kiến thức của tôi về Web và trở thành một tài sản trung thực cho công việc kinh doanh. Là một cá nhân, tôi tự tin rằng bạn sẽ tìm thấy tôi sáng tạo, hài hước và tự nhiên đam mê. Tôi là một nhà tư tưởng tiến bộ, mà những người khác có thể cảm thấy hứng thú khi làm việc như một đội.', 'Tôi đã làm việc như một nhà thiết kế giao diện web kể từ đó. Tôi có một phong cách thanh lịch và thanh lịch, và tôi có nhiều kinh nghiệm trong việc sản xuất CSS3 và HTML5 cho các trang web hiện đại. Tôi yêu tạo nên sự tuyệt vời theo nhu cầu của khách hàng. Tôi nghĩ rằng trải nghiệm của người dùng khi tôi cố gắng tạo ra điều gì đó cho khách hàng của mình. Làm một thiết kế tuyệt vời', 'KHMT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyen_nghanh`
--
ALTER TABLE `chuyen_nghanh`
  ADD PRIMARY KEY (`ma_chuyen_nghanh`);

--
-- Indexes for table `thong_tin_cv`
--
ALTER TABLE `thong_tin_cv`
  ADD PRIMARY KEY (`ma_cv`),
  ADD KEY `ma_chuyen_nghanh` (`ma_chuyen_nghanh`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thong_tin_cv`
--
ALTER TABLE `thong_tin_cv`
  ADD CONSTRAINT `thong_tin_cv_ibfk_1` FOREIGN KEY (`ma_chuyen_nghanh`) REFERENCES `chuyen_nghanh` (`ma_chuyen_nghanh`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
