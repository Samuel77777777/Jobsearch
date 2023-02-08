-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 08:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odc_jobsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(90) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `skills` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `username`, `address`, `dob`, `email`, `phone`, `description`, `skills`, `specialization`, `filename`) VALUES
(1, 'John Kamara  ', '1 John Lane  ', '2002-01-01', 'john@gmail.com  ', '23276211311  ', 'John is a hardworking felllow  ', 'HTML, CSS  ', 'Frontend  ', 'pedest.jpeg'),
(2, 'Abu Koroma ', '1 Abu Drive ', '0000-00-00', 'abu@gmail.com', '23277665544', 'Abu loves coding as a hobby', 'React, Javascript', 'Frontend', 'pedestrian-7359030_1920.jpg'),
(3, 'Hawanatu Sesay', 'Congo Town', '2009-08-06', 'hawanatusesay@gmail.com', '23278990887', 'Very Eloquent lady', 'UI/UX, HTML, CSS', 'Frontend', 'pedestrian-7359030_1920.jpg'),
(4, 'Morris Abu', 'Congo Water', '2010-09-09', 'morrisabu@gmail.com', '23277665544', 'Chap man', 'React, Javascript', 'Frontend', 'pedestrian-7359030_1920.jpg'),
(5, 'Alhassan Z Bah', 'Kissy Road', '2004-10-11', 'alhassanzbah@gmail.com', '2327766554', 'Very intelligent individual', 'HTML,CSS,PHP, MySQL', 'Backend', 'pedestrian-7359030_1920.jpg'),
(6, 'Samuel B Koroma', 'Sheriff Drive, Lumley', '2003-12-12', 'samuelkoroma7@gmail.com', '23276545533', 'Hardworking Developer', 'HTML,CSS,React, Flutter', 'Frontend/Mobile App Developer', 'pedestrian-7359030_1920.jpg'),
(7, 'Bayoh Turay', 'Off Wilkinson Road', '1984-10-10', 'bayohturayalways@gmail.com', '23278654543', 'A sign of humility and hardwork', 'HMTL,CSS, PHP,Javascript', 'Fullstack', 'pedestrian-7359030_1920.jpg'),
(8, 'Priscilla', 'Okechukwu', '1983-01-01', 'priscilla@gmail.com', '232764576788', 'Smart and selfless woman', 'Python', 'Data Analyst', 'pedestrian-7359030_1920.jpg'),
(9, 'Musa Enoch Ngawuja', 'Treeplanting', '1990-01-02', 'men@gmail.com', '232768888999', 'Always smiling', 'React, Node, Javascript', 'Backend', 'pedestrian-7359030_1920.jpg'),
(10, 'Joshua Charley', 'Sheriff Drive Lumley', '1992-09-17', 'joshua@gmail.com', '23276889977', 'Smart and diligent individual', 'Javascript, React, React Native', 'Frontend', 'pedestrian-7359030_1920.jpg'),
(11, 'Saidu Konneh', '1 Saidu Lane', '2002-01-09', 'saidu@gmail.com', '23276454543', 'Smart and intelligent', 'Word, Excel, Access', 'Office Assistant', 'pedestrian-7359030_1920.jpg'),
(12, 'Brima Konneh', '1 Brima Lane', '2003-09-08', 'brima@gmail.com', '23288665544', 'Smart and strong', 'Python, Rust', 'Data Analyst', 'pedestrian-7359030_1920.jpg'),
(13, 'Hawanatu Sesay     ', '21c City Road     ', '2003-02-04', 'hawasee@gmail.com     ', '0999776325     ', 'She is amazing good web developer and speaker.     ', 'FIGMA, HTML, CSS, WEB DESIGN    ', 'UI/UX ', 'pedestrian-7359030_1920.jpg'),
(14, 'Amadu Kargbo  ', '14 Regent Village, Dadley street  ', '2003-02-04', 'Kojowest2012@gmail.com  ', '0999776325  ', 'He is amazingly good web developer and speaker.  ', 'Java, Python Algorithm  ', 'Mobile App  ', 'pedest.jpeg'),
(15, 'Morris Abou', '21c City Road', '2001-01-01', 'abou@gmail.com', '232764534', 'Wondry Buyer', 'Figma', 'UI/UX', 'pedestrian-7359030_1920.jpg'),
(16, 'Samuel Brima Koroma ', '21c City Road, Wellington ', '2003-02-04', 'samuel087@gmail.com ', '09827641467 ', 'He is amazingly good web developer and speaker. ', 'Flutter, Javascript Algorithm ', 'Mobile App  ', 'pedest.jpeg'),
(17, 'Valentine A Kingsolomon    ', '21c John Street    ', '1992-03-01', 'valentine21@gmail.com    ', '09013881213    ', 'High guy    ', 'Microsoft Suite    ', 'Office Assistant    ', 'pedest.jpeg'),
(18, 'Ojumarie Obedidum Cole  ', '21c City Road, Samura Drive  ', '1992-03-01', 'ObedOCole@gmail.com  ', '09827641467  ', 'Os holder  ', 'Java, Python Algorithm  ', 'Fullstack  ', 'pedest.jpeg'),
(19, 'Muctarr Rahman Abou', '21c City Road', '1950-11-15', 'Rahmanmuctarr@gmail.com', '23276808446', 'OFp', 'React Native, Java Algorithm, Flutter, Kubernetes', 'Mobile App ', 'pedest.jpeg'),
(20, 'Alhassan Z Bah', 'pyke street', '0000-00-00', 'balhassanzaria@gmail.com', '232445465754', 'Focus and think to be dull', 'Html, Css, Php, Python Data Science', 'Data Analyst', 'pedest.jpeg'),
(21, 'Tayyib Gbondo', '24b Kenema, Combema Road', '2005-04-02', 'Tayyibdev@gmail.com', '23299345526', 'Focus and think to be smart', 'FIGMA, HTML, CSS, WEB DESIGN', 'UI/UX', 'pedest.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'Kojowest', 'kojowest2012@gmail.com', '202cb962ac59075b964b07152d234b', 'user'),
(2, 'lol', 'lol@gmail.com', '202cb962ac59075b964b07152d234b', 'admin'),
(3, 'bal', 'bal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'user'),
(4, 'Morris Israel Abou', 'morrisisraelnabou@gmail.com', '2b95f5fb8ce3b213241e37f314c40d', 'user'),
(5, 'Morris Israel Abou', 'morrisisraelnabou@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
