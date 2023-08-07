-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 10:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shf`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `abt_cat` varchar(255) NOT NULL,
  `abt_writeup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `abt_cat`, `abt_writeup`) VALUES
(5, 'about', 'The Seraphic Homes Foundation aims to support non-profits, NGOs or other charitable, religious or educational organizations that provide life and vocational sustaining resources to vulnerable communities in Nigeria and to people of Nigerians descent that live around the world.The Seraphic Homes Foundation aims to support non-profits, NGOs or other charitable, religious or educational organizations that provide life and vocational sustaining resources to vulnerable communities in Nigeria and to people of Nigerians descent that live around the world. The Seraphic Homes Foundation aims to support non-profits, NGOs or other charitable, religious or educational organizations that provide life and vocational sustaining resources to vulnerable communities in Nigeria and to people of Nigerians descent that live around the world.\r\n\r\na non-profit charitable organization inspired by the Holy Spirit through God&#39;s servant EVANG. EBUKA ANOZIE OBI aimed at touching and impacting lives positively. Over the years, God has used his Servant Evang Ebuka obi through Seraphic Homes Foundation to implement these divine agendas. SHF provides Books, Cloths, Diapers and Food for infants and toddlers from less privileged communities. SHF provides vocational training to assist with job placement for lower income Nigeria who have left a life of negative vices by assisting them to get back to their feet. SHFprovides funding for non-perishable foods to widows, orphanages and for other less privileged communities SHF runs a whole range of program and support disadvantaged and impoverished families through providing scholarship from kindergarten, primary, secondary and university level. SHF provides assistance to patients who can&#39;t afford life sustaining treatment and hospitals'),
(6, 'value', 'The Seraphic Homes Foundation aims to support non-profits, NGOs or other charitable, religious or educational organizations that provide life and vocational sustaining resources to vulnerable communities in Nigeria and to people of Nigerians descent that live around the world.'),
(7, 'motto', 'Matthew 25;40, Truly i tell you, whatever\r\nyou did for one of the least of these\r\nbrothers and sisters of mine, you did forme.');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `acct_name` varchar(255) NOT NULL,
  `acct_number` varchar(255) NOT NULL,
  `acct_type` varchar(255) NOT NULL,
  `acct_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `bank_name`, `acct_name`, `acct_number`, `acct_type`, `acct_date`) VALUES
(1, 'zenith bank', 'Ebuka moses', '2345678901', 'naira_savings', '2023-07-14 11:16:22'),
(2, 'access bank', 'seraphic', '1234567898765', 'pounds', '2023-07-14 11:35:05'),
(6, 'zell', 'sdfghj', '1234567890', 'naira_current', '2023-08-05 02:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `super_code` int(11) NOT NULL,
  `super_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `super_code`, `super_date`) VALUES
(1, 1234, '2023-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `cont_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cont_address`) VALUES
(1, ''),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_msg`
--

CREATE TABLE `contactus_msg` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `msg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactus_msg`
--

INSERT INTO `contactus_msg` (`id`, `fullname`, `email`, `phone`, `msg`, `status`, `msg_date`) VALUES
(1, 'okoye moses', 'okoye@gmail.com', '09038689968', 'hkjkwwklejfjwpekjfkdkleel;dklfjgbggkflkfljgkbklkflg', 'read', '2023-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `con_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `con_email`) VALUES
(4, 'seraphichomesfoundation01@gmail.com'),
(5, 'info@seraphicoundation.com');

-- --------------------------------------------------------

--
-- Table structure for table `founder`
--

CREATE TABLE `founder` (
  `id` int(11) NOT NULL,
  `found_name` varchar(255) NOT NULL,
  `found_title` varchar(255) NOT NULL,
  `found_pic` varchar(255) NOT NULL,
  `found_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `founder`
--

INSERT INTO `founder` (`id`, `found_name`, `found_title`, `found_pic`, `found_about`) VALUES
(3, 'Evang. Chukwuebuka Obi', 'FOUNDER & MISSION BEARER', 'evang.chukwuebukaobi.jpg', 'All Human beings are born equal, but our gifts, callings, divine elections and predestinations vary. Born a twin to the staunch Roman Catholic family of Mr and Mrs Vincent Obi of Ubulu-Ihejifor in Oru-West L.G.A Imo State, Nigeria. Evangelist Chukwuebuka Anozie Obi is a powerful man of God who with grace, commitment and passion serves as the founder and spiritual director of Zion Prayer Movement Outreach (ZPMO), located in Ago-okota, Lagos, Nigeria.\r\n\r\nHe is a strong reflection of Luke 4:18, whose life is dedicated to living by example and encouraging men and women to live up to their full potentials in Christ. At the tender age of 8, young Chukwuebuka\'s spiritual gifts began to manifest. He would give prophecies to people known and unknown to him and it would come to pass just as he had prophesied. This caused many from different places to troop into his father\'s compound in search of this gifted lad. After his education, he went off to Lagos for greener pastures which he hoped would be more favorable and beneficial to him as a young man. But this didn\'t extinguish the fire of the Holy Spirit burning in him as the fire was unquenchable and so, it kept on burning. Although he got fully established in a thriving cable business, he was still unsatisfied and unfulfilled. He kept on living his normal life until one momentous morning, he heard a strong voice echoing into his ears that he had the anointing of the Holy Spirit running down his head (with the bible verse Isaiah 61:1) instructing him to shut down his business and go into full time evangelism. Complying with this instruction was quite arduous and backbreaking as his family was antagonistic. Alas, it came to pass and ZPMO was born. From inception till date, thousands of people from far and wide pour in to worship and different miracles and testimonies are recorded on a daily basis. Denominational discrimination has no bearing on his mandate or anointing. He cherishes his call in bringing forth the uncompromising word of God and the gift upon his life has blessed so many immeasurably.');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `posted_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `title`, `sub_title`, `img`, `status`, `posted_date`) VALUES
(1, 'qwertyhujkftdfsa', 'adrtfytuioioiuytrewe', 'qwertyhujkftdfsa.jpg', 'inactive', '2023-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg_cat` varchar(255) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` varchar(255) NOT NULL,
  `msg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `msg_cat`, `msg_content`, `msg_status`, `msg_date`) VALUES
(1, 'ebuka moses', 'Volunteer', 'You have one new Volunteer', 'unread', '2023-07-13 00:00:00'),
(2, 'Ebuka Moses Okoye', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-13 00:00:00'),
(3, 'ebuka', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-13 00:00:00'),
(4, 'Rachel Okoye', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-13 00:00:00'),
(5, 'david', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-13 00:00:00'),
(6, '', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-13 00:00:00'),
(7, 'victor', 'Volunteer', 'You have one new Volunteer', 'unread', '2023-07-14 15:22:59'),
(8, 'sdfgyghujklkds', 'Volunteer', 'You have one new Volunteer', 'unread', '2023-07-21 23:13:15'),
(9, 'ebuka', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-24 10:00:12'),
(10, 'Moses Ebuka', 'PARNTER', 'You have one new Partner', 'unread', '2023-07-24 10:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `res_street` varchar(255) NOT NULL,
  `res_town` varchar(255) NOT NULL,
  `res_state` varchar(255) NOT NULL,
  `res_country` varchar(255) NOT NULL,
  `orig_street` varchar(255) NOT NULL,
  `orig_town` varchar(255) NOT NULL,
  `orig_state` varchar(255) NOT NULL,
  `orig_country` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `pay` varchar(11) NOT NULL,
  `code` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img`, `fullname`, `email`, `phone1`, `phone2`, `gender`, `res_street`, `res_town`, `res_state`, `res_country`, `orig_street`, `orig_town`, `orig_state`, `orig_country`, `occupation`, `pay`, `code`, `status`, `date_created`) VALUES
(1, 'okoyemoses83@gmail.come.jpg', 'Ebuka Moses', 'okoyemoses83@gmail.come', '09000000000', '07038689968', 'male', 'Anjorin', 'Surulere', 'Lagos', 'Nigeria', 'Apku village', 'Abagana', 'Anambra', 'Nigeria', 'Software Developer', '200000', '8', 'inactive', '2023-07-08 00:00:00'),
(5, 'okoye222@gmail.com.png', 'dfghjkjhgtfrfedsdfg', 'okoye222@gmail.com', '456765454', '0987654323456789', 'male', 'qwertyuiyutytrerweqw', 'sdfghjkhgfddsasdfghjghgf', 'ghgjkhggfdfdghjgg', '34565432345654', 'dfdghggfgdfdsdsadsfdghg', 'fgfhgjhghgffddsdsaddfghj', 'sasdfdgfhgjhghgffdfsdadsdfdgfh', 'dfghjghfgdfdsaSADSDFG', 'hgfdsdasdfgfhghfgdfs', '45678765', '2', 'active', '2023-07-12 11:58:36'),
(6, 'ebukamoses060@gmail.com.jpg', 'ebuka', 'ebukamoses060@gmail.com', '09038689968', '09059324932', 'male', '18 Anjorin', 'Lawanson', 'lagos', 'Nigeria', 'Alaba', 'Ejecha', 'Lagos', 'Nigeria', 'Software Developer', '200000', '002', 'active', '2023-07-24 10:00:12'),
(7, 'okoyem@gmail.com.jpg', 'Moses Ebuka', 'okoyem@gmail.com', '07044444444', '08038383838', 'male', 'tytuiopjhjgfhj', 'iuyfyghhjjkkl;kjhgfhjk', 'lkjhgfhjkl;kjhgfhjkl', 'jhggvhbjnjkjmklmjmjnbvbn', 'mm,nbvnm,m,.,mnbvnm,', ',mnbvnm,m,.mnbvbnm', 'nbvnm,mnbvn', 'mnbvnm,nbvnm,', 'nbvnm,nbvnm,', '66666', '2', 'active', '2023-07-24 10:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `partner_form_activation`
--

CREATE TABLE `partner_form_activation` (
  `id` int(11) NOT NULL,
  `activate` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partner_form_activation`
--

INSERT INTO `partner_form_activation` (`id`, `activate`) VALUES
(1, 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `con_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `con_phone`) VALUES
(4, ' +2347044412156');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_pic` varchar(255) NOT NULL,
  `pro_writeup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `pro_title`, `pro_pic`, `pro_writeup`) VALUES
(12, 'Provide Rehabilitation Home and Hospital', 'providerehabilitationhomeandhospital.jpg', 'In many majory cities in Nigeria, homeless people with mental illness suffer a severe form of poverty, often being without shelter, food, care and clothing most times causing nuisance or chaos as they roam the streets.\r\n\r\nwe will build rehabilitation homes/hospital for the mentally deranged amongst us where they will be taking care of them till they recovers and reunited with their families.\r\n\r\nThis will also provide sanity in our societies.\r\n\r\nThe rehabilitation homes/hospitals will be in every state of the federation starting from the five(5) eastern states; Anambra, Enugu, imo, Abia and Ebonyi State.'),
(13, 'Feed and Cloth the Poor', 'feedandcloththepoor.jpg', 'Due to the severe economic haedship that birthed the high cost of living in our country, many families find it diffcult to feed once a day not to talk more of cloths to wear.\r\n\r\nStarvation makes them vulnerable to diseases and illness that might lead to deaths.\r\n\r\nWe provide time to time distribution of food materials and clothing to support the deserving amongst us.\r\n\r\nMatthew 25:35 &#34;I was hungry and you gave me food, thirsty and you gave me water to drink; I was a stranger you received me in your home&#34;.'),
(14, 'Vocational training & Empowerment', 'vocationaltraining&empowerment.jpg', 'Nigeria has a pathetic rate of unemployment saddled with economic hardship, many are jobless/hopeless and in turn this situation breeds criminals in our society.\r\n\r\nWe aim at providing relevant vocational and skillful trainings in arts and crafts, farming, sowing etc to individuals to be self supporting and independent through ones own labour.\r\n\r\nWe also provide financial support to small businesses of perishable and non-perishable goods that will al least give succor ot less privileged families.'),
(15, 'Good Medical Care', 'goodmedicalcare.jpg', 'Healthcare management is among the basics needs of man. Alot of people have gone down their gaves early as a result of poverty which is being financially incapacitated to take good care of their health leading to poor health management which results to death.\r\n\r\nOur goal is to alleviate such medical problems by providing a world class hospital and financial supports towards healthcare to the deserving amongst us.'),
(16, 'Scholarship Program', 'scholarshipprogram.jpg', 'Due to the high rise in poverty and high cost of living in the country: education is now meant for the rich; leading to alarming increase in number of out of school children.\r\n\r\nThe poor can no longer afford quality education, many children are out of school and this portrays a big risk to the society.\r\n\r\nWe offer educational scholarships to the children of the less privileged to ensure they have quality education and a well fulfilling future ahead.'),
(17, 'Improve Housing to the Indigent', 'improvehousingtotheindigent.jpg', 'Housing is the basis of stability and security for any individual or family. It also provides psychological stability to an individual by affording them personal space and privacy, regrettably a huge population of nigerians is not privy to this. The millions of her population are forced to live in abject poverty.\r\n\r\nMost of them are homeless or living in an ill environment because they can&#39;t afford the money to build or rent a good habitable space/house.\r\n\r\nThis provision will help to reduce the level of homeless people by providing a conductive housing or a housing support program for them.');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `social_name` varchar(111) NOT NULL,
  `social_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_name`, `social_url`) VALUES
(1, 'facebook', 'http://localhost/sf/admin/social_account.php'),
(6, 'youtube', 'asdfghjkjhygtertyu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passkey` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passkey`, `created_date`) VALUES
(1, 'gentlebukan@gmail.com', '1234', '2023-08-04'),
(2, 'bukan', '81dc9bdb52d04dc20036dbd8313ed055', '2023-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `country_name` varchar(225) NOT NULL,
  `country_code` varchar(225) NOT NULL,
  `city_name` varchar(225) NOT NULL,
  `continent_name` varchar(225) NOT NULL,
  `continent_code` varchar(225) NOT NULL,
  `latitude` varchar(225) NOT NULL,
  `longitude` varchar(225) NOT NULL,
  `currency_code` varchar(225) NOT NULL,
  `timezone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `country_name`, `country_code`, `city_name`, `continent_name`, `continent_code`, `latitude`, `longitude`, `currency_code`, `timezone`) VALUES
(1, '102.221.238.82', 'USA', 'US', 'Washington DC', 'North America', 'NA', '6.4474', '3.3903', 'USD', 'America/Washington DC'),
(4, '154.118.53.234', 'Canada', 'CA', 'ONTARIO', 'North America', 'NA', '6.4474', '3.3903', 'CAD', 'North America/Ontario'),
(5, '154.118.53.234', 'Nigeria', 'NG', 'Lagos', 'Africa', 'AF', '6.4474', '3.3903', 'NGN', 'Africa/Lagos'),
(7, '197.211.58.50', 'Nigeria', 'NG', 'Lagos', 'Africa', 'AF', '6.4474', '3.3903', 'NGN', 'Africa/Lagos'),
(8, '', '', '', '', '', '', '', '', '', ''),
(9, '197.211.61.106', 'Nigeria', 'NG', 'Lagos', 'Africa', 'AF', '6.4474', '3.3903', 'NGN', 'Africa/Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `vol_name` varchar(255) NOT NULL,
  `vol_email` varchar(255) NOT NULL,
  `vol_phone` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `vol_address` varchar(255) NOT NULL,
  `vol_msg` text NOT NULL,
  `vol_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `vol_name`, `vol_email`, `vol_phone`, `gender`, `vol_address`, `vol_msg`, `vol_date`) VALUES
(1, 'ebuka moses', 'okoye@gmail.com', '07038689968', 'male', 'Anjorin', 'irirkkfjfjjfjfjfjf', '2023-07-12 12:28:52'),
(4, 'victor', 'victor@gmail.com', '67890987655678', 'male', 'dfgghjklkjhgffghjkljhgfghj', 'jhgfhgjkhgfghjkljhgfghjk', '2023-07-14 15:22:59'),
(5, 'sdfgyghujklkds', 'okoyemoseskk@gmail.com', '098765434567890', 'male', 'tyghjkkjhgfdghjkjhgfghj', 'jhgfghjkljhgfghjkljhgfghj', '2023-07-21 23:13:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_msg`
--
ALTER TABLE `contactus_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founder`
--
ALTER TABLE `founder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_form_activation`
--
ALTER TABLE `partner_form_activation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus_msg`
--
ALTER TABLE `contactus_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partner_form_activation`
--
ALTER TABLE `partner_form_activation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
