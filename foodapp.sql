-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 15, 2021 at 05:42 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `idtype` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `idtype`, `name`, `description`, `price`, `img`) VALUES
(1, 1, 'Cơm Sườn', 'Gồm 1 miếng sườn, 1 phần canh', 35000, 'https://product.hstatic.net/200000043306/product/suon_v4_7b5b32eb25934595a545565ed39fd0c4_grande_bb8171ed1fc1482aa23383eb9bd1de6b_grande.png'),
(2, 1, 'Cơm Bì Chả', 'Gồm 1 phần cơm bì chả, 1 phần canh', 30000, 'https://product.hstatic.net/200000043306/product/combicha-c_c39407b53adb41319de41acf1885cc2d_grande.png'),
(3, 1, 'Cơm Đùi Gà Nướng', 'Gồm 1 đùi gà nướng ngũ vị, 1 phần canh', 35000, 'https://product.hstatic.net/200000043306/product/dui-ga-nuong-ngu-vi-2_194e97dc270742458771b9053bdb340e_grande.png'),
(4, 1, 'Cơm Má Đùi Gà Phi Lê ', 'Gồm 1 má đùi gà phi lê, 1 phần canh', 35000, 'https://product.hstatic.net/200000043306/product/com-ma-dui-ga-phi-le-3_e90901f92de74e71ad5b97e51c4fab2f_grande.png'),
(5, 1, 'Cơm Gà Quay Mắm', 'Gồm 1 miếng gà quay nước mắm, 1 phần canh', 40000, 'https://product.hstatic.net/200000043306/product/dui-ga-quay-mam-2_0063af22224d4f0e8fa11b4cc0063c92_grande_7091dcd3b7e649118a6770e47e572ddb_grande.png'),
(6, 1, 'Cơm Sườn Non ', 'Gồm 1 miếng sườn non, 1 phần canh', 60000, 'https://product.hstatic.net/200000043306/product/com-suon-non-3_4ed9ba1af57e43ada49649dd46b2dbe9_grande.png'),
(7, 1, 'Cơm Ba Rọi ', 'Gồm 1 phần cơm ba rọi, 1 phần canh', 40000, 'https://product.hstatic.net/200000043306/product/com-ba-roi-3_d3be480c922748b5b8fd3e9f5699829e_grande_5565f14675704852966306d1d2c1757b_grande.png'),
(8, 2, 'Cơm trộn', 'Gồm 1 phần cơm trộn, 1 phần canh', 40000, 'http://kingbbq.com.vn/wp-content/uploads/2014/08/mg_9252-a-900x600.jpg'),
(9, 2, 'Cơm cuốn lá rong biển', 'Gồm 1 phần cơm rong biển, 1 phần canh', 40000, 'http://kingbbq.com.vn/wp-content/uploads/2014/09/gimbab2.jpg'),
(10, 2, 'Mỳ lạnh', 'Gồm 1 phần mỳ lạnh, 1 phần canh', 45000, 'http://kingbbq.com.vn/wp-content/uploads/2014/09/naengmyeon1.jpg'),
(11, 2, 'Miến trộn Hàn Quốc', 'Gồm 1 phần miến trộn', 40000, 'http://kingbbq.com.vn/wp-content/uploads/2014/09/japchae-71.jpg'),
(12, 2, ' Bánh hải sản Hàn Quốc', 'Gồm 1 phần bánh hải sản ', 35000, 'http://kingbbq.com.vn/wp-content/uploads/2014/09/pizza-korean.jpg'),
(13, 2, 'Kimchi Hàn Quốc', 'Gồm 1 phần kimchi', 45000, 'http://kingbbq.com.vn/wp-content/uploads/2014/09/kimchi-6.jpg'),
(14, 2, 'Tokbokki', 'Gồm 1 phần tokbokki sốt cay', 39000, 'https://daylambanh.edu.vn/wp-content/uploads/2020/01/banh-gao-deo-thom-ngon.jpg'),
(15, 3, 'Pizza Margherita', 'Gồm 1 phần bánh pizza ', 50000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000008%20-%20Margherita%20Pizza.png'),
(16, 3, 'Pizza phô mai thịt nguội', 'Gồm 1 phần bánh pizza thịt nguội', 49000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000003%20-%20Burata%20Parma%20Ham%20Margherita%20Pizza.png'),
(17, 3, 'Pizza 4 loại phô mai', '1 phần bánh pizza 4 loại phô mai', 69000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000006%20-%204%20Cheese%20Pizza.png'),
(18, 3, 'Pizza xúc xích cay ', '1 phần xúc xích cay', 59000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000010%20-%20Salami%20_%20Chorizo%20Margherita.png'),
(19, 3, 'Pizza Cá hồi xốt kem miso', '1 phần cá hồi xốt kem miso', 59000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000013%20-%20Salmon%20Miso%20Cream%20Pizza.png'),
(20, 3, 'Pizza Hải sản và phô mai', 'Xốt cà chua cay với phô mai hun khói', 69000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000014%20-%20Seafood%20Pizza.png'),
(21, 3, 'Pizza tôm sốt Mayonnaise', '1 phần tôm sốt Mayonnaise', 59000, 'https://storage.googleapis.com/delivery-system-v2/Pizza/10000015%20-%20Shrimp%20Mayo%20Pizza.png'),
(22, 4, 'Hamburger Bò Nướng', 'Gồm 1 phần bò nướng kèm sốt', 29000, 'https://monngonsaigon.net/wp-content/uploads/2016/08/cach-lam-hamburger-bo-khong-can-lo-nuong-thom-ngon-nuc-long.jpg'),
(23, 4, 'Khoai tây chiên', 'Gồm 1 phần khoai tây chiên kèm sốt', 2500, 'https://daylambanh.edu.vn/wp-content/uploads/2020/02/khoai-tay-lac-pho-mai.jpg'),
(24, 4, 'Khoai tây lắc phô mai', 'Gồm 1 phần khoai tây kèm sốt', 30000, 'https://bayleefood.com/wp-content/uploads/2018/09/khoai-tay-lac-pho-mai-2.png'),
(25, 4, 'Sụn gà lắc phô mai', 'Gồm 1 phần sụn gà kèm sốt', 29000, 'https://bizweb.dktcdn.net/100/025/760/files/yahstar-content-c8d7b92fe5e0625434dfd15282932620-20160617134957.jpg?v=1560761571909'),
(26, 4, 'Gà viên (Sốt cay)', 'Gồm 1 phần gà viên kèm sốt', 35000, 'https://3.bp.blogspot.com/-dGT6t-3c0EQ/Wh1n0hn8KEI/AAAAAAABxVg/biElxdIHgLE1ax10_E61Gkcw0aHabDjhACLcBGAs/s1600/image014.png'),
(27, 4, 'Sandwich cuộn xúc xích', 'Gồm 1 phần sandwich kèm sốt', 35000, 'https://media.cooky.vn/recipe/g2/14189/s640/recipe14189-635720311497742255.jpg'),
(28, 4, 'Phô mai viên ngũ sắc', '1 phần gồm 5 viên phô mai', 25000, 'https://cf.shopee.vn/file/1f1afcdd2d777b9a869ea9943347a1e6'),
(29, 5, 'Mì xào trứng', 'Gồm 1 phần mì xào trứng', 35000, 'https://img-global.cpcdn.com/recipes/b1cee62a2633ed70/1200x630cq70/photo.jpg'),
(30, 5, 'Mì xào bò', 'Gồm 1 phần mì xào bò', 40000, 'https://img.timviecdaubep.com/2020/01/cach-lam-mi-xao-bbo.jpg'),
(31, 5, 'Mì xào xá xíu', 'Gồm 1 phần mì xào xá xíu', 30000, 'https://www.yensaohainam.com.vn/Data/Sites/1/media/News/205/199/FullSizeImages/mi-xao-xa-xiu.jpg'),
(32, 5, 'Mì xào trứng lòng đào', 'Gồm 1 phần mì xào trứng lòng đào', 45000, 'https://img-global.cpcdn.com/recipes/99847e2ab421abfe/751x532cq70/m%E1%BB%B3-tr%E1%BB%99n-tr%E1%BB%A9ng-h%E1%BB%93ng-dao-recipe-main-photo.jpg'),
(33, 5, 'Mì xào thập cẩm', 'Gồm 1 phần mì xào thập cẩm', 50000, 'https://beptruong.edu.vn/wp-content/uploads/2013/01/mi-xao-thap-cam.jpg'),
(34, 5, 'Mì trộn cay đặc biệt', 'Gồm 1 phần mì trộn cay đặc biệt', 49000, 'https://sanphamtuongot.com/wp-content/uploads/2020/06/m%C3%AC-tr%E1%BB%99n-cay-H%C3%A0n-Qu%E1%BB%91c-1024x774.png'),
(35, 5, 'Mì xào xúc xích', 'Gồm 1 phần mì xào xúc xích', 35000, 'https://1.bp.blogspot.com/-m-rFFg5c8Hw/XdF-Bm9T2-I/AAAAAAAAIII/Eu4JLm5VdVgJv4Qz0EWZkZu6UfuS9MnZwCLcBGAsYHQ/s1600/cach-lam-my-xao-xuc-xich-gia-do.jpg'),
(36, 6, 'Nem Nướng', 'Gồm 1 phần nem nướng', 25000, 'https://www.vietfuntravel.com.vn/image/data/Da-Lat/quan-an-da-lat/dia-chi-10-quan-nem-nuong-ngon-o-da-lat-h1.png'),
(37, 6, 'Bạch tuộc nướng', 'Gồm 1 phần bạch tuột nướng', 35000, 'https://cdn.tgdd.vn/Files/2018/09/14/1117367/cach-uop-bach-tuoc-nuong-sa-te-thom-cay-cuc-ngon-tai-nha-7-760x367.jpg'),
(38, 6, 'Gà nướng mật ong', 'Gồm 1 phần gà nướng mật ong', 45000, 'https://cdn.huongnghiepaau.com/wp-content/uploads/2018/06/ga-nuong-mat-ong.jpg'),
(39, 6, 'Cá nướng', 'Gồm 1 phần cá nướng', 65000, 'https://media.cooky.vn/recipe/g5/44675/s/recipe44675-cook-step3-636814308073250898.JPG'),
(40, 6, 'Xiên que', 'Gồm 1 phần xiên que', 20000, 'https://img-global.cpcdn.com/recipes/9b6894fb21dd1559/1200x630cq70/photo.jpg'),
(41, 6, 'Dê nướng', 'Gồm 1 phần dê nướng', 65000, 'https://cdn.jamja.vn/blog/wp-content/uploads/2018/01/cach-uop-thit-de-nuong.jpg'),
(42, 6, 'Cừu nướng', 'Gồm 1 phần cừu nướng', 95000, 'https://www.tlnet.com.vn/wp-content/uploads/2018/11/thit-cuu-nuong-1.jpg'),
(50, 2, 'tuyen123', 'asdsa', 100000, '7a9877dcf3fd0da354ec.jpg'),
(51, 1, 'tuyen121215', 'asdsad', 40000000, '7a9877dcf3fd0da354ec.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderfoods`
--

CREATE TABLE `orderfoods` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpayment` int(11) NOT NULL,
  `idfood` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `namefood` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderfoods`
--

INSERT INTO `orderfoods` (`id`, `iduser`, `idpayment`, `idfood`, `date`, `total`, `quantity`, `note`, `name`, `phone`, `address`, `status`, `namefood`) VALUES
(1, 3, 1, 1, '13/01/2021 01:39:36', 105000, 3, 'them 3 phan com them, tra phi', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, NULL),
(6, 3, 1, 2, '13/01/2021 01:40:44', 90000, 3, 'them 3 phan com them, tra phi', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, NULL),
(7, 3, 1, 1, '13/01/2021 01:41:14', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, NULL),
(7, 3, 1, 6, '13/01/2021 01:41:45', 60000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, NULL),
(19, 3, 1, 2, '14/01/2021 09:28:39', 30000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, NULL),
(27, 3, 1, 1, '14/01/2021 11:33:36', 105000, 3, '3 phan com', 'Ho Xuan Quangsd', '1234567890234567', '246/11/20 BD P24 QBT1234', 2, NULL),
(27, 3, 1, 2, '14/01/2021 11:33:36', 30000, 1, '3 phan com', 'Ho Xuan Quangsd', '1234567890234567', '246/11/20 BD P24 QBT1234', 2, NULL),
(2, 3, 1, 3, '14/01/2021 08:57:56', 105000, 3, 'them com', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Đùi Gà Nướng'),
(2, 3, 1, 5, '14/01/2021 08:57:56', 80000, 2, 'them com', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Gà Quay Mắm'),
(2, 3, 1, 4, '14/01/2021 08:57:56', 35000, 1, 'them com', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Má Đùi Gà Phi Lê '),
(3, 3, 1, 38, '15/01/2021 12:05:14', 45000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Gà nướng mật ong'),
(3, 3, 1, 36, '15/01/2021 12:05:14', 75000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Nem Nướng'),
(3, 3, 1, 40, '15/01/2021 12:05:14', 60000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Xiên que'),
(3, 3, 1, 41, '15/01/2021 12:05:14', 195000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Dê nướng'),
(3, 3, 1, 33, '15/01/2021 12:05:14', 50000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào thập cẩm'),
(5, 3, 1, 11, '15/01/2021 12:05:38', 120000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Miến trộn Hàn Quốc'),
(5, 3, 1, 5, '15/01/2021 12:05:38', 120000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Gà Quay Mắm'),
(5, 3, 1, 4, '15/01/2021 12:05:38', 70000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Má Đùi Gà Phi Lê '),
(5, 3, 1, 2, '15/01/2021 12:05:38', 60000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Bì Chả'),
(5, 3, 1, 13, '15/01/2021 12:05:38', 90000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Kimchi Hàn Quốc'),
(5, 3, 1, 7, '15/01/2021 12:05:38', 160000, 4, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Ba Rọi '),
(7, 3, 1, 4, '15/01/2021 12:05:52', 70000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Má Đùi Gà Phi Lê '),
(7, 3, 1, 1, '15/01/2021 12:05:52', 70000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Sườn'),
(7, 3, 1, 2, '15/01/2021 12:05:52', 60000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Bì Chả'),
(9, 3, 1, 17, '15/01/2021 12:06:10', 138000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza 4 loại phô mai'),
(9, 3, 1, 16, '15/01/2021 12:06:10', 49000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza phô mai thịt nguội'),
(11, 3, 1, 31, '15/01/2021 12:06:50', 30000, 1, 'them nuoc cham', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào xá xíu'),
(11, 3, 1, 37, '15/01/2021 12:06:50', 105000, 3, 'them nuoc cham', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Bạch tuộc nướng'),
(11, 3, 1, 38, '15/01/2021 12:06:50', 90000, 2, 'them nuoc cham', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Gà nướng mật ong'),
(11, 3, 1, 39, '15/01/2021 12:06:50', 195000, 3, 'them nuoc cham', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cá nướng'),
(13, 3, 1, 8, '15/01/2021 12:18:19', 200000, 5, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm trộn'),
(13, 3, 1, 12, '15/01/2021 12:18:19', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, ' Bánh hải sản Hàn Quốc'),
(13, 3, 1, 10, '15/01/2021 12:18:19', 45000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mỳ lạnh'),
(13, 3, 1, 9, '15/01/2021 12:18:19', 120000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm cuốn lá rong biển'),
(13, 3, 1, 6, '15/01/2021 12:18:19', 60000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Cơm Sườn Non '),
(13, 3, 1, 14, '15/01/2021 12:18:19', 117000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Tokbokki'),
(13, 3, 1, 18, '15/01/2021 12:18:19', 59000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza xúc xích cay '),
(13, 3, 1, 19, '15/01/2021 12:18:19', 177000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza Cá hồi xốt kem miso'),
(13, 3, 1, 20, '15/01/2021 12:18:19', 207000, 3, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza Hải sản và phô mai'),
(13, 3, 1, 21, '15/01/2021 12:18:19', 118000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza tôm sốt Mayonnaise'),
(13, 3, 1, 15, '15/01/2021 12:18:19', 50000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Pizza Margherita'),
(15, 3, 1, 24, '15/01/2021 12:19:56', 30000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Khoai tây lắc phô mai'),
(15, 3, 1, 23, '15/01/2021 12:19:56', 2500, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Khoai tây chiên'),
(15, 3, 1, 22, '15/01/2021 12:19:56', 58000, 2, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Hamburger Bò Nướng'),
(15, 3, 1, 26, '15/01/2021 12:19:56', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Gà viên (Sốt cay)'),
(15, 3, 1, 25, '15/01/2021 12:19:56', 29000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Sụn gà lắc phô mai'),
(15, 3, 1, 28, '15/01/2021 12:19:56', 100000, 4, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Phô mai viên ngũ sắc'),
(15, 3, 1, 29, '15/01/2021 12:19:56', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào trứng'),
(15, 3, 1, 27, '15/01/2021 12:19:56', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Sandwich cuộn xúc xích'),
(15, 3, 1, 32, '15/01/2021 12:19:56', 45000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào trứng lòng đào'),
(15, 3, 1, 35, '15/01/2021 12:19:56', 35000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào xúc xích'),
(15, 3, 1, 34, '15/01/2021 12:19:56', 49000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì trộn cay đặc biệt'),
(15, 3, 1, 30, '15/01/2021 12:19:56', 40000, 1, '', 'Ho Xuan Quang', '1234567890', '246/11/20 BD P24 QBT', 2, 'Mì xào bò');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`id`, `name`) VALUES
(1, 'abc'),
(2, 'sushi');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `iduser` int(11) NOT NULL,
  `idfood` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`iduser`, `idfood`, `rate`, `date`) VALUES
(1, 1, 5, '2020-12-31'),
(2, 2, 5, '2021-01-06'),
(1, 3, 4, '2021-01-06'),
(2, 4, 4, '2021-01-06'),
(1, 5, 4, '2021-01-07'),
(2, 6, 5, '2021-01-07'),
(2, 3, 5, '2020-12-31'),
(2, 5, 5, '2021-01-07'),
(1, 7, 4, '2021-01-06'),
(2, 7, 3, '2021-01-07'),
(1, 8, 4, '2021-01-07'),
(2, 8, 3, '2021-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `typefoods`
--

CREATE TABLE `typefoods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typefoods`
--

INSERT INTO `typefoods` (`id`, `name`, `img`) VALUES
(1, 'Cơm phần', '322868_1100-1100x628.jpg'),
(2, 'Món hàn', '322868_1100-1100x628.jpg'),
(3, 'Pizza', 'pizza-slice.png'),
(4, 'Thức ăn nhanh', 'french-fries.png'),
(5, 'Mì phở', '1471262.png'),
(6, 'Đồ nướng', '175-1750995_tailgate-icon-bbq-icon.jpg'),
(14, 'tuyen12345', '12341229_423959354468851_8205327797346762919_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `phone`, `address`, `img`) VALUES
(1, 'quangg@gmail.com', 'quangg', '1234567', '123456780', '246/11/20 BD P24', 'https://divui.com/blog/wp-content/uploads/2019/07/banh-trang-cuon-tit-heo-9095.jpg'),
(2, 'abcdef@gmail.com', 'abcdef', '1234567', '11', '246/11/20 BD P24', 'https://divui.com/blog/wp-content/uploads/2019/07/banh-trang-cuon-tit-heo-9095.jpg'),
(3, 'quanghx@gmail.com', 'Ho Xuan Quang', '1234567', '1234567890', '246/11/20 BD P24 QBT', 'https://divui.com/blog/wp-content/uploads/2019/07/banh-trang-cuon-tit-heo-9095.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` int(20) NOT NULL,
  `dateend` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typefoods`
--
ALTER TABLE `typefoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typefoods`
--
ALTER TABLE `typefoods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
