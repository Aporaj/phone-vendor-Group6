-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 01:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idCart`, `user_id`, `product_id`, `quantity`) VALUES
(42, '3', '22', 3),
(45, '3', '26', 1),
(46, '3', '5', 2),
(47, '4', '68', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`id`, `category`) VALUES
(1, 'Iphone'),
(2, 'Tecno'),
(3, 'Samsung'),
(4, 'Infinix'),
(5, 'Itel'),
(6, 'Redmie');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `memory` varchar(50) NOT NULL,
  `display` varchar(50) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `sensor` varchar(50) NOT NULL,
  `battery` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `network` varchar(50) NOT NULL,
  `pic1` varchar(500) NOT NULL,
  `pic2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `memory`, `display`, `camera`, `sensor`, `battery`, `os`, `description`, `network`, `pic1`, `pic2`) VALUES
(62, 'Samsung', 'Samsung Galaxy A02', '48990', '3 gb ram 64gb', '6.5-inch', 'Triple Rear Camera', 'Accelerometer, Light Sensor, Proximity Sensor', '5000Mah', 'Android 10', 'A lot less bezel, a lot more view\r\nExpand your view to the 6.5-inch Infinity-V Display of Galaxy A02 and see how less screen delivers more view. Thanks to HD+ technology, your everyday content looks its best—sharp, crisp and clear.\r\n\r\nLooks as good as it feels \r\nGalaxy A02 combines streamlined design aesthetics with classic colors. Refined curves make it comfortable to hold and provides easy screen navigation. A modern matte finish adds a gentle, shine-free surface texture and comes in Black, Re', '4G LTE', '2samsunga.jpg', '2samsungb.jpg'),
(63, 'Itel', 'Itel A16plus', '25500', '8GB ROM-1GB RAM', '16 inch', '5.0\"Screen', 'bluetooth', '2050mAh', 'Android 8.1', 'Itel A16plus - 5.0\"Screen 8GB ROM-1GB RAM, Android 8.1(GO Edition) 2050mAh Battery - Champagne Gold', '3g', 'itel1.jpg', 'itel1.jpg'),
(64, 'Itel', 'Itel A14 Plus', '29500', '16GB ROM + 512MB RAM', '16 inch', '4.0\" Screen', 'bluetooth', '2500mAh', 'Android 10', 'Itel A14 Plus, 4.0\" Screen, 16GB ROM + 512MB RAM, Android 10, 2500mAh Battery, 3G Smartphone - Deep Blue With FREE CASE', '3G', 'itel2.jpg', 'itel2(1).jpg'),
(65, 'Itel', 'Itel A35', '35000', '16GB ROM, 1GB RAM', '16 inch', 'Front 2.0MP', 'Bluetooth, face recon', '3020mAh', 'Android 10', 'Itel A35, 5.0\"HD Brighter Screen, Android 10, Rear 5 0MP, Front 2.0MP Camera, 16GB ROM, 1GB RAM, 3020mAh', '4G', 'itel3.jpg', 'itel3(1).jpg'),
(66, 'Tecno', 'Tecno Spark Go 2020', '45500', '32gb ram +2GB', '6.52\'\' HD', '13MP Rear Camera + 8MP Front Camera', 'Fingerprint Sensor', '5000mAh Battery', 'Android 10', 'AI Camera, Smarter Photography13MP AI Dual Camera13MP F/1.8 aperture lens + AI lens + newly upgraded AI algorithms. The AI dual camera comes with various shooting modes like Bokeh, AI Beauty, ASD, HDR etc. The whole picture details and quality have great improvement. Dual rear flash does fill light in dark environment to ensure better photo effect. Grab SPARK Go 2020, capture more memorable moments.\r\nAI Camera, Smarter Photography13MP AI Dual Camera13MP F/1.8 aperture lens + AI lens + newly upgr', '3G', '8BF205EB-E8C8-48BE-998A-68F283FDD09C.jpeg', '4022A1C3-DE90-40D6-99D6-F9960CC1E43A.jpeg'),
(67, 'Itel', 'Itel P36', '37000', '1GB RAM + 16GB ROM', '16 inch', 'Rear 5 0MP, Front 2.0MP', 'Fingerprint + Face ID', '5000mAh', 'Android 9 Pie', 'Itel P36 6.5\" HD+ Screen, 1GB RAM + 16GB ROM, Android 9 Pie, 5000mAh Battery, 8MP + 8MP Camera, Fingerprint + Face ID', '4G', 'itel4.jpg', 'itel4.jpg'),
(69, 'Samsung', 'Samsung Galaxy Tab A', '67380', '2gb ram, 32gb', '8.0 Inch TFT Display', '8MP Back Camera, 2MP Front Camera', 'Bluetooth', '5100Mah', 'Android 9.0', 'The tablet that goes where you go: Discover a practical companion in Galaxy Tab A (8.0\'\', 2019), a tablet that excels at the basics and adds a lot more. With a design that’s easy to carry with one hand, it\'s slim, compact, and portable, the ideal blend of performance, design and attainability. A design that won\'t get in the way. We removed the front home key and moved the logo to the back on Galaxy Tab A (8.0\", 2019) to give you a larger screen to view and explore. \r\nDual speakers fitted in on t', 'WiFi & 4G LT', '15samsunga.jpg', '15samsungb.jpg'),
(70, 'Tecno', 'Tecno Spark 5 Air', '52990', '2GB RAM, 32GB ROM', '6.52” Dot Notch Screen', 'AI Dual Camera13MP', 'Fingerprint, Face ID', '5000mAh big battery', 'Android 10', 'Spark 4 Air7 Inch Dot Notch ScreenExtraordinary 7 Inch Dot Notch Screen is here! High resolution, 88% comfortable screen ratio, 480 nits brightness, truly clearer, wider and brighter screen. Enjoy limitless fun with a broader view.32GB ROM + 2GB RAM32GB ROM offers enough space to store your favorite photos and important files.', '3G', '63D42292-AA4A-4596-8DE3-DBB36D7551DE.jpeg', '86138C8B-9A5C-4D35-BC0C-E4739C4B98C5.jpeg'),
(71, 'Iphone', 'iPhone 6', '32500', '1GB, 16GB ROM', '4.7-Inch', '12gb', 'Fingerprint Sensor', '200mA', 'IOS 1.2', 'Apple IPhone 6 4.7-Inch Fingerprint Sensor HD (1GB, 16GB ROM) IOS 1.2 8MP+7MP Smartphone–Black', '4G', '1.jpg', '2.jpg'),
(72, 'Tecno', 'Tecno Spark 5 PRO', '56400', '3GB RAM, 64GB ROM', '6.6\" HD', '8MP AI Selfie Camera', 'Fingerprint sensor', '5000 mAh', 'Android 10', 'SPARK 5 PRO5 Cameras, More Angle6.6 Inch Dot-in DisplayTruly immersive, wider and brighter visual experience. Optimized overall dimensions and 3D body radian provide comfortable hand hold. High resolution and 90.2% perfect screen ratio contribute to a more wonderful and much broader full view experience', '3G', '3A7107AA-17BD-4AF4-B24F-5664C79F3674.jpeg', '6B6FFE33-32B9-4A55-A753-29BF4D471B35.jpeg'),
(73, 'Iphone', 'Apple Iphone 6S', '125000', '2GB, 16GB ROM', '5.7-Inch', '12gb', 'Fingerprint Sensor', '5000mA', 'IOS 1.2', 'Apple Iphone 6S Plus 64gb Rose Gold, Pouch & Screen Protector', '4G', '1 (1).jpg', '1 (1).jpg'),
(74, 'Itel', 'Itel S16', '40000', '16GB ROM,1GB RAM', '16-6inch', '8MP Triple Rear Camera', 'Face ID & Fingerprint', ',4000mAh', 'Android 10', 'Itel S16 6.5\" HD FullScreen, 16GB ROM + 1GB RAM, Android 10, 4000mAh, 8MP Triple Rear Camera, Face ID & Fingerprint', '4G', 'itel5.jpg', 'itel5.jpg'),
(75, 'Itel', 'Itel S16', '40000', '16GB ROM,1GB RAM', '16-6inch', '8MP Triple Rear Camera', 'Face ID & Fingerprint', ',4000mAh', 'Android 10', 'Itel S16 6.5\" HD FullScreen, 16GB ROM + 1GB RAM, Android 10, 4000mAh, 8MP Triple Rear Camera, Face ID & Fingerprint', '4G', 'itel5.jpg', 'itel5.jpg'),
(76, 'Infinix', 'Infinix Smart 5 (X657)', '47499', '2 gb ram, 32gb', '6.6\" HD+ Waterdrop', 'Front 8MP with Dual Flashlight + Rear 8MP Dual Cam', 'Free Wireless Bluetooth', '5000mAh', 'Android 10 (Go Edition)', '5000mAh for long-lasting funWith the large 5000 mAh battery and intelligent power-saving technology, you can enjoy your entertainment all day long without power worries.\r\nBig battery\r\nLong-lasting battery\r\nSuper charge.\r\nWaterdrop sunlight display,more view for what you do.A wide 6.6”HD+ beautiful, vibrant screen provides a clear and broader view for a better mobile experience.\r\nWaterdrop sunlight display', '3G/2G', 'Infinix Smart 5 (X657).jpg', 'Infinix Smart 5 (X657.jpg'),
(77, 'Samsung', 'Samsung Galaxy A12', '76800', '4 gb ram 128gb', 'Size6.5 inches Resolution720 x 1560 pixels Display', 'Rear Camera48 MP (wide) + 5 MP (ultrawide) + 2 MP ', 'Fingerprint', '5000Mah', 'Android 10', 'Samsung Galaxy A12 is officially released on November 24, 2020.\r\nThe dimension of the smartphone is 164 x 75.8 x 8.9 mm and it weighs 205 grams. The smartphone is pack with 3 GB, 4 GB, and 6 GB RAM with 32 GB, 64 GB, and 128 GB internal storage options.\r\nThe device runs on the Android 10 operating system. It features GPS with A-GPS, GLONASS, GALILEO, BDS, USB Type-C 2.0, and FM radio. It is built with a Glass front, plastic back, and plastic frame.\r\nIt is fueled with a non-removable Li-Po 5000 m', '4G LTE', '14samsunga.jpg', '14samsunga.jpg'),
(78, 'Iphone', 'iPhone 7plus', '125000', '2GB, 16GB ROM', '5.5 Inch', '15mp', 'Fingerprint Sensor', '5000mh', 'IOS 10', 'Apple IPhone 7 Plus Mobile Phone - 128GB - 3D Touch Technology - 5.5 Inch IOS 10 - A10+M10 Quad Core - Smartphone - Red', '4G', '1 (2).jpg', '2 (1).jpg'),
(79, 'Tecno', 'Tecno Pop4 Pro', '41199', '16GB ROM, 1GB RAM', '6.52\"Dot -Notch Screen', '8MP front Camera with flash 8MP+ Al lens Dual Rear', 'G Sensor, Ambient light sensor, Proximity sensor, ', '5000mAh', 'Android 10', 'The new Tecno pop4pro is new in the market another version of Pop4, Tecno pop4 pro Operating system is Android 10(Go edition),the display is 6.52\" Dot Notch Screen,   Tecno Pop4 Pro processing Quad Core with network of GSM/GPRS/FULL Edge/WCDMA/FDD LTE/TDD LTE, Resolution of 1200*540, it came with 16GB ROM +1GB RAM inbuilt can be expandable micro SD.     Tecno Pop4 Pro, can connect with GPS, WiFi,BT,FM,OTG With camera of 8MP front Camera with flash 8MP+ Al lens Dual Rear Camera with dual flash, t', '3G', '354C7019-9D24-4056-B119-ED55E28A930E.jpeg', 'EE32B01B-4D70-41DA-B8D5-E34AC3FDD8A2.jpeg'),
(80, 'Samsung', 'Samsung Galaxy A02', '50990', '3 gb ram 64 gb', '6.5 inch', 'Rear Camera - 13.0 MP + 2.0 MP Front Camera – 5.0 ', 'Bluetooth , Fingerprint', '5000Mah', 'Android 10', 'Built for those who need a device that can keep up with their whole day, the Galaxy A02 packs all of Samsung’s essential features into a refined design.\r\nSee more on the Infinity-V Display\r\nWith its 6.5\" HD+ Infinity-V display, Galaxy A02 offers an immersive experience on the large, wide screen. So you can enjoy your content with a view pleasing to the eye.\r\nMeasured diagonally, the screen size is 6.5\" in the full rectangle and 6.4\" accounting for the rounded corners. Actual viewable area is les', '4G LTE', '12samsunga.jpg', '12samsungb.jpg'),
(81, 'Samsung', 'Samsung Galaxy A02', '50990', '3 gb ram 64 gb', '6.5 inch', 'Rear Camera - 13.0 MP + 2.0 MP Front Camera – 5.0 ', 'Bluetooth , Fingerprint', '5000Mah', 'Android 10', 'Built for those who need a device that can keep up with their whole day, the Galaxy A02 packs all of Samsung’s essential features into a refined design.\r\nSee more on the Infinity-V Display\r\nWith its 6.5\" HD+ Infinity-V display, Galaxy A02 offers an immersive experience on the large, wide screen. So you can enjoy your content with a view pleasing to the eye.\r\nMeasured diagonally, the screen size is 6.5\" in the full rectangle and 6.4\" accounting for the rounded corners. Actual viewable area is les', '4G LTE', '12samsunga.jpg', '12samsungb.jpg'),
(82, 'Itel', 'Itel 2173', '6500', '128kg', '5inch', 'no front camera', 'Wireless FM, Bluetooth', '200mA', 'Android 8.1', 'Itel 2173 Wireless FM, Opera Mini, Torch, Dual SIM Phone', '3G', 'itel6.jpg', 'itel6(1).jpg'),
(83, 'Iphone', 'iPhone XR', '185000', '3GB RAM, 64GB ROM', '5.5 Inch', '12.7mp', 'Fingerprint Sensor', '5000mh', 'IOS 11', 'Apple IPhone XR (3GB RAM, 64GB ROM) - Dual Sim- Black', '4G', '1 (3).jpg', '1 (3).jpg'),
(84, 'Tecno', 'Tecno POP4 Air', '35990', '16GB ROM, 1GB RAM', '6.52\" Dot Notch Screen', '5MP Front Camera with Flash 5MP Rear Camera with D', 'Face Unlock,  Fingerprint Sensor', '5000mAh', 'Android 10', '16GB ROM + 1GB RAM\r\n5000mAh Battery\r\n6.52\" Dot Notch Screen\r\nFace Unlock + Fingerprint Sensor\r\n5MP Front Camera with Flash\r\n5MP Rear Camera with Dual Flash\r\nAndroid™ 10 (Go edition)', '3G', 'C8B8ABBD-DD9C-409E-8FAE-1792B282E4DA.jpeg', '75D1C81B-D963-4EEC-8245-793CBFC34B42.jpeg'),
(85, 'Infinix', 'Infinix HOT 10(X682B)', '65000', '64GB ROM/3GB RAM', '6.78\" HD+ INFINITY-O DISPLAY', '16MP/2MP/2MP/AI LENS + 8MP CAMERA', 'Finger print', '5200MAH BATTERY', 'Android 10', 'The Infinix Hot 10(X682B) is listed with the Infinix-X682C model number on Google Play Console website. The smartphone is mentioned with an 6.78\" HD+ INFINITY-O display that will offer 720 x 1640 pixels resolution. It is expected to feature a hd+ infinity -o display design and come with a pixel 720*1640 resolution. According to the Google Play Console database, the Infinix Hot 10 will be powered by the helio G70 processor. This chipset is otherwise known as the Helio G70 processor. The device is', '4G LTE', '1.jpg', 'download.jpeg'),
(86, 'Samsung', 'Samsung Galaxy A32', '119490', '6gb ram 128gb', '6.4 inch', 'Quad Rear 64.0 MP + 8.0 MP + 5.0 MP + 5.0 MP', 'On-screen fingerprint', '5000Mah', 'Android 11', 'Express creativity through the best-in-segment quad-camera\r\nThe quad-camera setup of the Galaxy A32 opens up a diverse array of opportunities for users to express their creativity through photos.\r\nFor starters, the 64MP main camera enables users to capture crisp and clear photos throughout the day. The 8MP Ultra-Wide lens has a 123-degree field of view which adds more perspective to images – perfect for capturing lofty landscapes. Meanwhile, the 5MP Macro lens takes crystal clear close-up shots.', '4G LTE', '11samsunga.jpg', '11samsunga.jpg'),
(87, 'Iphone', 'Apple IPhone 11 Pro', '345000', '4GB RAM, 64GB ROM', '5.8-Inch', '12MP+12MP+12MP', 'Fingerprint Sensor', '5000mA', 'IOS 13', 'Apple IPhone 11 Pro 5.8-Inch Super Retina XDR OLED (4GB RAM, 64GB ROM),iOS 13, (12MP+12MP+12MP)+12MP 4G LTE Smartphone - Space Gray', '5G', '1 (4).jpg', '2 (2).jpg'),
(88, 'Itel', 'Itel A56', '36000', '16GB ROM + 1GB RAM', '16-6inch', '8MP Triple Rear Camera', 'Fingerprint + Face ID', '4000mAh', 'Android 9 Pie', 'Itel A56 5.99\" IPS Screen, Android 9 Pie, 16GB ROM + 1GB RAM, 8MP+5MP, 4000mAh Battery, Fingerprint', '4G', 'itel7.jpg', 'itel7.jpg'),
(89, 'Itel', 'Itel 2173', '6500', '128kg', '5inch', 'no front camera', 'Wireless FM, Bluetooth', '200mA', 'Android 8.1', 'Itel 2173 Wireless FM, Opera Mini, Torch, Dual SIM Phone', '3G', 'itel6.jpg', 'itel6(1).jpg'),
(90, 'Tecno', 'Tecno POVA', '85000', '128GB ROM/6GB RAM', '6.8\" HD+ DOT-IN DISPLAY', '8MP FRONT CAMERA WITH DUAL FLASH/13MP QUAD REAR CA', 'Fingerprint sensor', '6000MAH', 'ANDROID TM 10', 'Display: 6.8-inch HD+ DOT-IN screen display w/ HD+ 1640 x 720 resolution at 264 ppiCPU: 2.0GHz 12nm MediaTek Helio G80 octa-core processorGPU: Mali-G52 2EEMC2RAM: 6GBROM: 128GB expandable via microSD card slot up to 512GB (dedicated)Back Camera: 13MP f/1.8 + 2MP macro + 2MP depth + 2MP AI + Quad FlashSelfie Camera: 8MP f/2.0 + Dual FlashBattery: 6,000mAh w/ 18W Dual IC Flash ChargeOS: Android 10 w/ HiOS 7.0\r\nConnectivity: WiFi, 4G LTE, Bluetooth 5.0, FM Radio, GPS, A-GPS, GLONASS, BeiDou, Galile', '4G LTE', '48B5A449-42B9-4EA7-90CB-3F54D395AFD7.jpeg', 'C10C0F1E-3973-418A-A348-BEC211D30DA2.jpeg'),
(91, 'Samsung', 'Samsung Galaxy A02', '43490', '2 gb ram 32gb', '6.5 inch', 'Rear Camera - 13.0 MP + 2.0 MP  Front Camera – 5.0', 'Bluetooth', '5000Mah', 'Android 10', 'Built for those who need a device that can keep up with their whole day, the Galaxy A02 packs all of Samsung’s essential features into a refined design.\r\nSee more on the Infinity-V Display\r\nWith its 6.5\" HD+ Infinity-V display, Galaxy A02 offers an immersive experience on the large, wide screen. So you can enjoy your content with a view pleasing to the eye.\r\nMeasured diagonally, the screen size is 6.5\" in the full rectangle and 6.4\" accounting for the rounded corners. Actual viewable area is les', '4G LTE', '10samsunga.jpg', '10samsunga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `email`, `password`) VALUES
(1, 'tesleem olamilekan', 'testing', 'testing@gmail.com', 'testing'),
(3, 'Phone Vendors', 'Tescode', 'phonevendors@gmail.com', 'password'),
(4, 'Adebajo', 'Dammy', 'adebajoluwadamilola@gmail.com', 'password'),
(5, 'Lifestyle kola', 'lifestyle', 'Lifestylekola@gmail.com', 'kolawole'),
(6, 'Arvid Dietrich', 'Sallie66', 'your.email+fakedata74743@gmail.com', 'XqvNPDKro9N9BYv'),
(7, 'Fredy Lebsack', 'Edwardo_OKeefe', 'your.email+fakedata49980@gmail.com', 'TUx56Lp4KkqWHkh'),
(9, 'Kamryn Smith', 'Kenny15', 'kaykaydevdev@gmail.com', 'testing'),
(10, 'Eldridge Parisian', 'Jeffrey73', 'eidowu34@gmail.com', 'EQ5l8XO9SLf0t8z'),
(12, 'Arnold Prosacco', 'Alanna.Smith52', 'tescodepro@gmail.com', 'e7LbSjvt5BLrsE7'),
(13, 'Oyinloye ', 'roll', 'projectoyinloye@gmail.com', 'tesleem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
