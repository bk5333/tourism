-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 09:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Is it currently dangerous to travel in Pakistan?', 'No, it is not dangerous to travel or tour within Pakistan.'),
(2, 'How to Book a Tour?', 'Just click on the package you want to book, click the \"Book Now\" button and provide all the details.'),
(3, 'packages details', 'We are providing several tours national and international packages which include Hajj and Umrah packages for Muslims. You can check it by exploring the Packages page.'),
(4, 'I need help!', 'Yes, I\'m here to help you.'),
(5, 'tour ki booking kis trha krtyn ha?', 'Just click on the package you want to book, click the \"Book Now\" button and provide all the details.'),
(6, 'Hello', 'Welcome to Tour Hub. Is there anything I can help you with? '),
(7, 'Hi', 'Welcome to Tour Hub! Great to see you.'),
(8, 'Suggest me some good packages', 'Yeah sure!\r\nHere are some of the packages:\r\n1. Swat\r\n2. Naran\r\n3. Chitral\r\n4. Kumrat\r\n5. Fairy Meadows '),
(9, 'give me product information', 'Sure! Here is the product information you want. We provide tour-related products. The price is from $5 to $100. You can see the products by pressing the \"Buy Now\" button.'),
(10, 'product information', 'Sure! Here is the product information you want. We provide tour-related products. The price is from $5 to $100. You can see the products by pressing the \"BUY NOW\" button on the \"HOME\" page.'),
(11, 'guide me on the products required to visit Swat?', 'Sure! Here are the products you can buy for the swat tour.\r\n1. Camping Tent\r\n2. First Aid Kit\r\n3. Water Bottles\r\n4. Umbrellas\r\n5. Bugs Zapper Outdoor\r\n6. Bag Pack\r\n'),
(12, 'what types of packages are available?', 'We provide National and international tours including Hajj and Umarah packages. You can visit the \"Packages\" page to see more details.'),
(13, 'types of packages available.', 'We provide National and international tours including Hajj and Umarah packages. You can visit the \"Packages\" page to see more details.'),
(14, 'what is the price of a hajj package?', '630,000 PKR'),
(15, 'hajj package price', '630,000 PKR'),
(16, 'what is the price of an Umrah package?', '250,000 PKR'),
(17, 'Umrah package price', '250,000 PKR'),
(18, 'how can contact the admin?', 'You can contact the admin by using the \"Contact Us\" form.'),
(19, 'contact the admin', 'You can contact the admin by using the \"Contact Us\" form.'),
(20, 'Can I comment on the forum without registering myself?', 'No, You must have to register yourself before commenting in the forum.'),
(21, 'comment without registering myself', 'No, You must have to register yourself before using the forum.'),
(22, 'comment on forum', 'No, You must have to register yourself before commenting on the forum.'),
(23, 'Can I use the chatbot without registering myself on its website?', 'Yes, you already using it.'),
(24, 'the chatbot without registering', 'Yes, you already using it.'),
(25, 'what transportation services are you providing?', 'We are providing car and bus services.'),
(26, 'Back', 'Welcome to Tour Hub!\r\nPlease choose the related options:\r\n1. Want to know about the packages detail\r\n2. Want to know about the products detail\r\n3. How does the forum work?\r\n4. Back'),
(27, 'national tours', 'We provide several national tours such as: <br>1. Fairy Meadows and Nanga Parbat Base Camp<br>2. Kalash & Chitral Valley<br>3. Kumrat Valley and Katora Lake<br>4. Hunza Valley & Khunjrab Pass<br>5. Naran Shogran<br>6. Murree Patriata<br>7. Fairy Meadows Skardu<br>8. Swat<br>9. Hunza<br>'),
(28, 'international tours', 'We provide international tours such as:<br>1. Hajj<br>2. Umrah<br>3. Nepal<br>4. Canada<br>5. Malaysia<br>6. Egypt<br>7. Switzerland.<br>For more details please visit the packages page.'),
(29, 'working of forum', 'After going to the forum page you have to register or login yourself before posting comments/queries there.'),
(30, 'forum categories', 'There are 14 categories in the forum:<br>\r\n1.  Hajj<br>\r\n2.  Umrah<br>\r\n3.  Canada<br>\r\n4.  Egypt<br>\r\n5.  Malaysia<br>\r\n6.  Switzerland<br>\r\n7.  Nepal<br>\r\n8.  Hunza<br>\r\n9.  Murree<br>\r\n10. Naran<br>\r\n11. Skardu<br>\r\n12. Swat<br>\r\n13. Travel-Related Products<br>\r\n14. Uncategorized'),
(31, 'chatbot working', 'You can write the options/keywords according to your required information.'),
(32, 'nepal price', '386750 PKR'),
(33, 'canada price', '297500 PKR'),
(34, 'malaysia price', '595000 PKR'),
(35, 'egypt price', '773500 PKR'),
(36, 'switzerland price', '843800 PKR'),
(38, 'nanga parbat price', '23000 PKR'),
(39, 'chitral price', '14000 PKR'),
(40, 'kumrat price', '21000 PKR'),
(41, 'khunjrab price', '18000 PKR'),
(42, 'naran price', '76000 PKR'),
(43, 'murree price', '45000 PKR'),
(44, 'skardu price', '135000 PKR'),
(45, 'swat price', '48000 PKR'),
(46, 'hunza price', '120000 PKR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
