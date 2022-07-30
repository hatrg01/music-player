-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e)(o`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `alb_id` int(11) NOT NULL,
  `alb_img` text NOT NULL,
  `alb_banner` text NOT NULL,
  `alb_name` varchar(100) NOT NULL,
  `alb_artist` varchar(100) NOT NULL,
  `alb_info` text NOT NULL,
  `alb_type` varchar(10) NOT NULL,
  `created_alb` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`alb_id`, `alb_img`, `alb_banner`, `alb_name`, `alb_artist`, `alb_info`, `alb_type`, `created_alb`) VALUES
(1, 'xoxo-img.jpg', 'xoxo-banner.jpg', 'XOXO', 'EXO', '“XOXO” is the debut album by South Korean-Chinese K-pop group, EXO. Like all of the group’s music, the album was released in two versions – a Korean “Kiss” edition and a Chinese “Hug” edition.\r\n\r\nThe album spawned two Top 10 hits, “Wolf” and “Growl”. The album was commercial mega-success. The album won Album of the Year at the 2013 Mnet Asian Music Awards and sold over 1 million copies and entered the list of the best-selling albums in South Korea in 2013. By selling over a million copies, “XOXO” also became Korea’s best-selling album in 12 years.', 'regular', '2022-05-03 22:27:55'),
(2, 'dftf.jpg', 'dftf-banner.jpg', 'Don\'t Fight The Feeling', 'EXO', 'DON’T FIGHT THE FEELING is the seventh mini-album (considered as a special album) by South Korean boygroup, SM Entertainment’s EXO, which makes a gap between their previous release, 2019’s Obsession and it is the first project to feature vocals from members Lay, D.O and Xiumin since November 2018’s Don’t Mess Up My Tempo. However, the group’s leader Suho and Chen didn’t participate in the record due to their mandatory military service, starting May and October 2020, respectively.', 'new', '2022-05-02 08:45:33'),
(4, 'obsession.jpg', 'obsession-banner.jpg', 'OBSESSION', 'EXO', '“Obsession” is the 6th studio album by South Korean boy group, EXO. The album marks the group’s first Korean release a 6 member group. Members D.O. and Xiumin didn’t take part in the record due to their mandatory military services. Member Lay also didn’t take part in the album due to his prior solo commitments.\r\n\r\nThe album draws heavy influences from hip-hop and dance-pop with production by long-time collaborators, Yoo Young Jin and LDN Noise. Lyrically, the album revolves around the themes of obsessive and addictive love.\r\n\r\nThematically, the album fits into EXO’s larger fictitious storyline linking all their Korean projects. The album introduces the concept of EXO’s Clones i.e X-EXO. The concept was heavily marketed and promoted on social media.', 'new', '2022-05-02 08:45:41'),
(5, 'tempo.jpg', 'tempo-banner.jpg', 'Don\'t Mess Up My Tempo', 'EXO', 'Don’t Mess Up My Tempo is the fifth studio album by Korean boy group, EXO. The album features Korean and Chinese versions of the title song “Tempo”, as well as nine genres of melodies, incorporating the fictional powers of the group’s members which are fire, space movement, power, light, ice, wind, lightning, and healing.\r\n\r\nThe album is produced by series of hit producers such as British producers London Noise (LDN Noise), world-famous producers and first time collaborators, The Underdogs, US-made production team MARZ Music and South Korean lyricist, Kenzie. Group member songwriter Chanyeol also participated in this album.\r\n\r\nWith this album, EXO has won the title of “Quintuple Million Sellers” by surpassing 1 million copies sales of five albums.\r\n\r\nEXO held a special showcase for the album on November 2, at the Paradise City’s Plaza on Yeongjongdo Island, which was aired live for fans all around the world. EXO held their first music program return by performing on KBS Music Bank.', 'new', '2022-05-02 08:45:48'),
(6, 'growl.jpg', 'growl-banner.jpg', 'GROWL', 'EXO', '“Growl” acts is the repackaged version of “XOXO”, the debut album by South Korean-Chinese K-pop group, EXO. This version was released 2 months after the original record featuring three new songs including the second single by the same name.\r\n\r\nThe repackaged version was released in both Korean and Chinese language much like other EXO releases. The lead single from this version peaked at #3 on Billboard Korea K-pop Hot 100 Chart.', 'regular', '2022-05-02 08:40:41'),
(7, 'mama.jpg', 'mama-banner.jpg', 'MAMA', 'EXO', '“Mama” is the debut studio EP by South Korean-Chinese group, EXO. The EP was an instant success hitting #1 in South Korea and China upon release.\r\n\r\nThe album was propelled by singles, “What Is Love”, “History” and “Mama” all which were modestly successful. The album was accompanied by 23 teaser videos featuring the members of the group.', 'regular', '2022-05-02 08:45:05'),
(12, 'loveshot-img.jpg', 'loveshot-banner.jpg', 'LOVE SHOT', 'EXO', 'Love Shot is the 5th repackaged album by Korean boy group, EXO. The repack is accompanied by title track by the same name performed in Korean and Chinese languages.\r\n\r\nThe album is a repack of EXO’s 5th studio album, Don’t Mess Up Tempo and features all 11 tracks from the original album.\r\n\r\nThe repack also includes 2 new songs besides the title track, “Trauma” and R&B ballad, “Wait”.', 'new', '2022-05-06 02:54:44'),
(13, 'miracle.jpg', 'miracle-banner.jpg', 'Miracles in December', 'EXO', '“Miracles In December” is the first Winter special EP by South Korean-Chinese K-pop group, EXO. The EP was met with positive reviews and commercial success becoming the best selling album in the fourth quarter of 2013.\r\n\r\nThe tracks on the EP were not sung by the whole group instead featured vocals by different combinations of members. The EP spawned three singles, “Miracles In December”, “Christmas Day” and “First Snow”.\r\n\r\nJust like all other EXO releases, the EP was released in Korean and Chinese languages.', 'regular', '2022-05-06 08:56:43'),
(14, 'callmebaby.jpg', 'callmebaby-banner.jpg', 'EXODUS', 'EXO', 'This album, EXODUS was perfected with tracks made by top songwriters such as The Underdogs, Teddy Riley, Stereotypes and Kenzie, who participated in the SM Songwriting Camp, a songwriting camp where global producing teams and multinational songwriters collaborate to write songs for SM artists. Furthermore, JONGHYUN of SHINee also joined as a composer to bring out the colourful charms of EXO in a total of ten tracks of various genres.\r\n\r\nEXO continuously pumped out hit songs such as “Wolf”, “Growl” and “Overdose” sweeping numerous music charts both in Korea and abroad. Furthermore, they achieved over 1 million albums sold with their first full-length album, while sweeping year-end awards in both Korea and China for two straight years, proving that they are truly global superstars. They created a world-wide EXO syndrome and it is thus expected that there will be an explosive amount of interest from the music world for this album as well.', 'regular', '2022-05-06 09:51:06'),
(15, 'lovemeright.jpg', 'lovemeright-banner.jpg', 'Love Me Right', 'EXO', 'This repackage was prepared to express EXO’s gratitude to their fans who have continuously showed their love and support, and 4 new songs including the title song, “LOVE ME RIGHT”, “TENDER LOVE”, “FIRST LOVE”, and “EXO 2014” were added to the 10 songs from the existing second regular album, EXODUS, and all 14 songs in diversity will capture eyes and ears of the fans at home and abroad.\r\n\r\nEXO has displayed the scope of global superstar’s influence by sweeping top ranks on various domestic and foreign track, album, and M/V charts and taking the 95th rank on Billboard 200, the main album chart of the famous US media, Billboard, to set the record of the highest rank in the history of Korean male singers on the chart.\r\n\r\nAlso EXO won as many as 18 trophies from various television music programs of terrestrial and cable channels through their promotion of “CALL ME BABY”, the title song of the second regular album, “EXODUS”, this repackaged album is also expected to win great attention of the fans.', 'regular', '2022-05-06 09:54:49'),
(16, 'exact.jpg', 'exact-banner.jpg', 'EX\'ACT', 'EXO', 'EX\'ACT is EXO\'s third studio album and was released on the 09th of June 2016.\n\nThe lead singles are Monster and were then followed by Lucky One.\n\nThere are two versions (“Lucky One” Version with bright images and “Monster Version” with dark images) both in a Korean and Chinese edition. That makes a total of four versions. “Lucky One”&“Monster” version has the same tracklist, but different booklets and packaging.\n\nView the gallery with pictures from “Lucky One” and “Monster”', 'regular', '2022-05-06 10:07:59'),
(17, 'lotto.jpg', 'lotto-banner.jpg', 'Lotto', 'EXO', 'EXO\'s 3rd Album Repackage “LOTTO” was released on 18th of August, 2016. The repackage album contains 9 songs from their 3rd album “EX\'ACT” along with additional 4 songs, \"Lotto\", \"Can\'t Bring Me Down\", \"꿈 (She\'s Dreaming)\" and \"Monster (LDN Noise Creeper Bass Remix)\".\n\nEXO became triple million seller according to SM Entertainment and has sold 1.17 million copies (EX\'ACT: 796,085 copies as of August 17 and LOTTO (since it\'s release) has already sold 374,280 less in 24 hours.)', 'regular', '2022-05-06 10:13:25'),
(18, 'thewar.jpg', 'thewar-banner.jpg', 'The War', 'EXO', '“The War” is the 4th Album By EXO. This Album has 9 tracks including The title track “Ko Ko Bop” . The album was released digitally on July 18, 2017 and physically on July 18, 2017 by S.M. Entertainment under Genie Music’s distribution. The album was released in Korean And Chinese.\n\nThe album received the highest number of pre-orders of all time for a K-pop album breaking EXO’s own record held by their third studio album “Ex\'Act”.\n\nThe album earned EXO the 5th consecutive win for Album of the Year award at the 19th Mnet Asian Music Awards. This win made EXO the artist with most Daesang awarded with a grand total of 6 daesangs.', 'new', '2022-05-06 10:17:42'),
(19, 'power.jpg', 'power-banner.jpg', 'The War: The Power of Music', 'EXO', 'This album, The War: The Power of Music, consists of a total of 12 songs, in which 9 of the songs are from the previous 4th album, The War, and 3 new songs, including title song, “Power”, “Sweet Lies”, and “Boomerang”. Through the repackaged album, EXO’s diverse music style can be fully experienced.\r\n\r\nEXO has especially been building their world view through unique storytelling and promotion. They have announced to fully expose their world view through this repackaged album, which has been stimulating and increasing fans’ curiosity of the story they will be unfolding.\r\n\r\nIn addition, over 1 million copies of EXO’s album, ‘THE WAR’, have been sold, and EXO has become a quadruple million-seller in only 24 days. They not only set the record for placing No.1 the most on Gaon’s Digital Chart for four weeks, but also ranked No. 1 on iTunes Album Chart in 42 regions around the world, on Billboard World Chart for two consecutive weeks, on Apple Music Album Chart in 18 regions, on United World Chart, and on China’s Xiami Music Korean Music Chart. By sweeping Korean and international music charts, EXO has proven their global popularity and impact with their album. And their newly repackaged album is expected to win immense responses as well.', 'new', '2022-05-06 10:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(50) NOT NULL,
  `alb_id` int(11) NOT NULL,
  `song_mp3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `alb_id`, `song_mp3`) VALUES
(1, 'Baby Don\'t Cry', 6, 'BabyDonTCry-EXO-2578286.mp3'),
(3, 'MAMA', 7, 'MAMA-EXO-K.mp3'),
(4, 'What Is Love', 7, 'What-Is-Love-EXO-K.mp3'),
(6, 'History', 7, 'HistoryKoreanVersion-EXO-K_3sqrd_hq.mp3'),
(7, '3.6.5', 1, '3.6.5.mp3'),
(8, 'Don\'t Go', 6, 'Dont Go.mp3'),
(9, 'Angel', 7, 'AngelKoreanVersion-EXO-K_3v3vw.mp3'),
(10, 'Black Pearl', 1, 'BlackPearl-EXO-2578287.mp3'),
(11, 'Let Out The Beast', 1, 'LetOutTheBeast-EXO-2578292.mp3'),
(12, 'Heart Attack', 1, 'HeartAttack-EXO-2578295.mp3'),
(13, 'Wolf', 1, 'Wolf - EXO (NhacPro.net).mp3'),
(14, 'Baby', 6, 'Baby-EXO-2578302.mp3'),
(15, 'Growl', 6, 'Growl-EXO-2691443.mp3'),
(16, 'Miracles In December', 13, 'Miracles In December - EXO (NhacPro.net).mp3'),
(17, 'Christmas Day', 13, 'ChristmasDay-EXO-2875023_hq.mp3'),
(18, 'The Star', 13, 'The Star - EXO (NhacPro.net).mp3'),
(19, 'My Turn To Cry', 13, 'My Turn To Cry - EXO (NhacPro.net).mp3'),
(20, 'The First Snow', 13, 'The First Snow - EXO (NhacPro.net).mp3'),
(21, 'Call Me Baby', 14, '1.CALL_ME_BABY.mp3'),
(22, 'Love Me Right', 15, '1.LOVE_ME_RIGHT.mp3'),
(23, 'Tender Love', 15, '2.TENDER_LOVE.mp3'),
(24, 'Transformer', 14, '2.TRANSFORMER.mp3'),
(25, 'First Love', 15, '3.FIRST_LOVE.mp3'),
(26, 'What if...', 14, '3.What_If...mp3'),
(27, 'My Answer', 14, '4.MY_ANSWER.mp3'),
(28, 'EXODUS', 14, '5.EXODUS.mp3'),
(29, 'El Dorado', 14, '6.EL_DORADO.mp3'),
(30, 'Playboy', 14, '7.PLAYBOY.mp3'),
(31, 'Hurt', 14, '8.HURT.mp3'),
(32, 'Lady Luck', 14, '9.Lady_Luck.mp3'),
(33, 'Beautiful', 14, '10.BEAUTIFUL.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created`) VALUES
(19, 'admin', 'admin@gmail.com', 'admin', 'admin', '2022-04-23 07:36:56'),
(20, 'Ha', 'ha123@gmail.com', '12345', 'user', '2022-04-23 07:40:41'),
(21, 'Ha', 'h123@gmail.com', '12345', 'user', '2022-05-17 08:45:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`alb_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `alb_id` (`alb_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`alb_id`) REFERENCES `albums` (`alb_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
