-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 08:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cicek`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `super_user` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `super_user`) VALUES
(4, 'Justin', '$2y$10$V.qcGRf8Y3lg4ddnE/bRsOokvpLMBTofgy5OkvLhZuOHj6hM3FI3u', 1),
(6, 'admin', '$2y$10$1rU.8AeFWcQGTkvG1G2hZekO3a0m6Cwwe5tgU1L7n6hFra9eMWGym', 0),
(8, 'rickie', '$2y$10$oV0gLFiplZlWnkiDooGIj.u8WgPVR3/vN03.1Hh036Y3R25bf6IMW', 0),
(9, 'randy', '$2y$10$enFGW4mVFq6v3oRTDiASzOFNwsMhBZieSJ1X4UnZWvEWkUhKnwDQm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `titel` varchar(22) NOT NULL,
  `image_link` varchar(300) NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `titel`, `image_link`, `prijs`, `categorie`) VALUES
(1, 'Shoarma Friet', 'https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg', '7.50', 'Vleesgerechten'),
(2, 'Shoarma Schotel', 'https://jaffadh.nl/wp-content/uploads/2021/02/24-e1613744380584.jpg', '10.00', 'Vleesgerechten'),
(3, 'Lamsshoarma Schotel', 'https://damascinofood.nl/wp-content/uploads/2020/03/IMG_2208-scaled.jpg', '10.00', 'Vleesgerechten'),
(4, 'Pizza Margherita', 'https://www.restaurant-noya.nl/wp-content/uploads/2020/11/pizza-margherita-recipe.jpg', '7.00', 'Pizza\'s'),
(9, 'Doner Schotel', 'https://www.mekan.nl/uitgeest/wp-content/uploads/sites/2/2020/03/doner-schotel5-1-1-324x324.jpg', '10.00', 'Vleesgerechten'),
(10, 'Kipfilet Schotel', 'https://restaurantfes.nl/wp-content/uploads/2021/02/kipfilet-schotel.jpg', '11.00', 'Vleesgerechten'),
(11, 'Fantasie shoarma schot', 'https://eetcafedeparel.nl/wp-content/uploads/2021/05/familie-schotels-1.jpg', '10.50', 'Vleesgerechten'),
(12, 'Schnitzel schotel', 'http://www.eetcafeprinsalexander.nl/wp-content/uploads/2018/02/schnitzelschotel.jpg', '9.00', 'Vleesgerechten'),
(13, 'Hamburger schotel', 'https://www.andrees.nl/media/cache/4b6fdb8971d94452effaeeb9abd834d5/hamburger_schotel2.jpg', '9.00', 'Vleesgerechten'),
(14, 'Mix schotel', 'https://eethuis-rosario.nl/wp-content/uploads/2021/07/7-1.jpg', '15.00', 'Vleesgerechten'),
(15, 'doner schotel fantasie', 'https://eetcafedeparel.nl/wp-content/uploads/2021/05/familie-schotels-1.jpg', '11.00', 'Vleesgerechten'),
(16, 'Pizza napolitana', 'https://miljuschka.nl/wp-content/uploads/2021/02/Pizza-met-ansjovis.jpg', '7.00', 'Pizza\'s'),
(17, 'Pizza borromea', 'https://dekleineitaliaan.nl/wp-content/uploads/2020/11/Pizza-Borromea.jpg', '7.00', 'Pizza\'s'),
(18, 'Pizza fantastica', 'https://media-cdn.tripadvisor.com/media/photo-s/17/0c/ba/71/photo1jpg.jpg', '8.50', 'Pizza\'s'),
(19, 'Pizza romagna', 'https://www.restaurantromagna.nl/images/background/bg01_pizza_stagioni.jpg', '8.50', 'Pizza\'s'),
(20, 'Pizza siciliana', 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2015/03/s1.jpg', '9.00', 'Pizza\'s'),
(21, 'Pizza vegetariana', 'https://cdn.tasteatlas.com/images/dishes/b44b470fae3648d0bffd06aa9e7b782c.jpg', '8.50', 'Pizza\'s'),
(22, 'Pizza stagioni', 'https://www.24kitchen.nl/files/styles/social_media_share/public/2021-06/pizza-hor.jpg?itok=ijE4B85u', '9.00', 'Pizza\'s'),
(23, 'Pizza pollo', 'https://mealsandsnacks.nl/wp-content/uploads/2020/10/Pizza-Pollo.jpg', '9.50', 'Pizza\'s'),
(24, 'Pizza shoarma', 'https://ohmydish.nl/wp-content/uploads/2017/07/Pizza-shoarma-met-knoflooksaus.jpg', '9.50', 'Pizza\'s'),
(25, 'Pizza Salami', 'https://www.restaurant-noya.nl/wp-content/uploads/2020/11/image.jpeg', '7.00', 'Pizza\'s'),
(26, 'Pizza doner', 'https://images.newyorkpizza.nl/Products/Original/Doner_Pizza-6924.png', '9.50', 'Pizza\'s'),
(31, 'Kapsalon groot', 'https://restaurantfes.nl/wp-content/uploads/2019/05/kapsalon.jpg', '10.00', 'Kapsalon\'s'),
(32, 'Kapsalon middel', 'https://restaurantfes.nl/wp-content/uploads/2019/05/kapsalon.jpg', '8.00', 'Kapsalon\'s'),
(33, 'Kapsalon klein', 'https://restaurantfes.nl/wp-content/uploads/2019/05/kapsalon.jpg', '6.00', 'Kapsalon\'s'),
(34, 'Lahmacun', 'https://www.24kitchen.nl/files/styles/300h_300w/public/2021-05/lahmahcun-hor.jpg?itok=aIqDcDag', '3.50', 'Turkse Pizza\'s'),
(35, 'Lahmacun doner', 'https://media-cdn.tripadvisor.com/media/photo-s/19/ed/a6/67/doner-lahmacun.jpg', '6.00', 'Turkse Pizza\'s'),
(36, 'Lahmacun shoarma', 'https://lawadessazuidbroek.nl/wp-content/uploads/2019/09/Lahm23-1024x848.jpg', '6.00', 'Turkse Pizza\'s'),
(37, 'Broodje shoarma', 'https://www.leukerecepten.nl/wp-content/uploads/2021/10/paddenstoelen-shoarma-864x413.jpg', '5.50', 'Broodjes'),
(38, 'Broodje lamsshoarma', 'https://eviekookt.nl/wp-content/uploads/2020/11/PSX_20201112_182411-scaled.jpg', '6.50', 'Broodjes'),
(39, 'Broodje doner', 'https://images0.persgroep.net/rcs/bFOkP85fC4HEboeTjd7aFeJyFrI/diocontent/116315491/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8', '5.50', 'Broodjes'),
(40, 'Broodje kipshoarma', 'https://ohmyfoodness.nl/wp-content/uploads/2012/10/kipshoarma.jpg', '6.50', 'Broodjes'),
(41, 'Broodje fantasie shoar', 'https://www.24kitchen.nl/files/styles/social_media_share/public/2020-08/broodje-shoarma.jpg?itok=wsfC-XKc', '7.50', 'Broodjes'),
(42, 'visburger', 'https://cdn.nomadfoodscdn.com/-/media/project/bluesteel/iglo-nl/assortments/fishburger-classic-min.png', '3.50', 'Broodjes'),
(43, 'Rauwkost salade', 'https://www.voedzaamensnel.nl/wp-content/uploads/2015/12/rauwkostsalade.jpg', '2.50', 'Bijgerechten'),
(44, 'Coban salade', 'https://supersnelgezond.nl/wp-content/uploads/2012/09/turkse-herdersalade-coban-salatasi.jpg', '5.00', 'Bijgerechten'),
(45, 'Salade tonijn', 'https://www.diabetesfonds.nl/media/recipepage/image/salade-met-tonijn-en-olijven.jpg', '5.50', 'Bijgerechten'),
(46, 'Friet zonder', 'https://frietopia.nl/media/wiki/images/99/8c5e68e5a1319aa75f814519fc0d0084/106-20080826-frietzonderklein.jpg', '1.90', 'Friet'),
(47, 'Friet met', 'https://cateringbroere.nl/wp-content/uploads/2020/04/Friet-met.jpg', '2.40', 'Friet'),
(48, 'Friet speciaal', 'https://www.cafetariacentrumgroesbeek.nl/wp-content/uploads/2020/04/frites-speciaal.png', '2.80', 'Friet'),
(49, 'Friet super', 'https://www.cafetariacentrumgroesbeek.nl/wp-content/uploads/2020/04/Friet-super.jpg', '4.50', 'Friet'),
(50, 'Friet pinda', 'https://www.cafetariadesnacknees.nl/images/pinda.jpg', '3.00', 'Friet'),
(51, 'Friet waterfiets', 'https://www.nederlands-dis.nl/wp-content/uploads/2014/06/Friet-waterfiets.jpg', '5.50', 'Friet'),
(52, 'Friet oorlog', 'https://www.cafetariahoegewaeg.nl/wp-content/uploads/2021/01/oorlog-1.jpg', '3.50', 'Friet'),
(53, 'Friet stoofvlees', 'https://images.vrt.be/dako2017_1600s_j75/2018/03/27/1b2e6e00-31b1-11e8-abcc-02b7b76bf47f.jpg', '4.00', 'Friet'),
(54, 'Aardappelschijfjes', 'http://www.temptingflavours.nl/wp-content/uploads/2018/02/PC301872.jpg', '2.80', 'Friet'),
(55, 'super oorlog', 'http://www.snackweetjes.nl/wp-content/uploads/2016/06/3.-friet-oorlog2.jpg', '5.00', 'Friet'),
(56, 'Friet joppiesaus', 'https://cateringbroere.nl/wp-content/uploads/2020/05/2020-05-29-08.28.27-1200x1200.jpg', '2.50', 'Friet'),
(57, 'waterfiets oorlog', 'https://cdn.sitedish.nl/www.cafetariazwijndrecht.nl/img/gerechten/5f04490cb7e29_waterfiets.png', '5.50', 'Friet'),
(58, 'Frikandel', 'https://www.24kitchen.nl/files/styles/social_media_share/public/2020-02/shutterstock_78115558.jpg?itok=sHAKBodX', '1.60', 'Snacks'),
(59, 'Frikandel met', 'https://diepvriesman.nl/storage/app/uploads/public/5c6/421/a96/thumb_773_400_300_0_0_crop.jpeg', '1.90', 'Snacks'),
(60, 'Frikandel speciaal', 'http://eetcafewooldrik.nl/v2/39-large_default/frikandel-speciaal.jpg', '2.10', 'Snacks'),
(62, 'Bamihap', 'https://www.horescasmulders.nl/media/products/5424055_02.jpg', '2.00', 'Snacks'),
(63, 'Nasischijf', 'http://eetcafewooldrik.nl/v2/46-large_default/nasischijf.jpg', '2.00', 'Snacks'),
(64, 'Kroket', 'https://www.landleven.nl/getmedia/d9a86236-156a-4b4a-b6a6-634df2bf2b37/kroketten.png?width=816&height=544&ext=.png', '1.60', 'Snacks'),
(65, 'Goulashkroket', 'https://static.ah.nl/static/recepten/img_029524_1224x900_JPG.jpg', '2.00', 'Snacks'),
(66, 'Satekroket', 'https://www.hollandsnackexpress.com/image/cache/catalog/snacks/laan-snacks-satekroket-550x550w.JPG', '2.00', 'Snacks'),
(67, 'Rundvleeskroket', 'https://static.hanos.com/sys-master/productimages/hcf/h8e/9729432289310/41425314_los.jpg_914Wx914H', '2.00', 'Snacks'),
(68, 'Viandel', 'https://www.feestsnacks.be/wp-content/uploads/2019/03/Viandel.png', '2.00', 'Snacks'),
(69, 'Vissticks', 'https://www.ahealthylife.nl/wp-content/uploads/2021/06/Vissticks_fish_fingers_voedingswaarde_IGLO.jpg', '2.50', 'Snacks'),
(70, 'Kipkorn', 'https://www.frituurwereld.nl/wp-content/uploads/2020/10/Frituurwereld-Kipkorn-genomineerd.jpg', '2.00', 'Snacks'),
(71, 'Gehaktbal', 'https://www.laurasbakery.nl/wp-content/uploads/2021/06/Gehaktballen-UITGELICHT.jpg', '2.50', 'Snacks'),
(72, 'Hotwings', 'https://www.kekk-kip.nl/wp-content/uploads/2016/02/assortiment-hotwings.jpg', '6.50', 'Snacks'),
(73, 'Loempia', 'https://rutgerbakt.nl/wp-content/uploads/2021/07/loempia_recept-scaled-1200x0-c-default-1024x0-c-default.jpg', '3.00', 'Snacks'),
(74, 'Mayonaise', 'https://www.culy.nl/wp-content/uploads/2013/03/Mayonaise-stock.jpg', '1.00', 'Sauzen'),
(75, 'Chilisaus', 'https://bbqproof.nl/wp-content/uploads/2019/01/chilisaus-bbq.jpg', '1.00', 'Sauzen'),
(76, 'Satesaus', 'https://www.leukerecepten.nl/wp-content/uploads/2019/05/recept-sate-saus.jpg', '1.50', 'Sauzen'),
(77, 'Cola', 'https://beheer.kippie.nl/thumbnail/b0/52/eb/1633951629/Cola(blik)_1920x1920.jpg', '2.00', 'Dranken'),
(78, 'Cassis', 'https://shop.noordhuis.nl/static/quantore/large/897064p1.jpg', '2.00', 'Dranken'),
(79, 'Chocomel', 'https://welovedrinks.nl/wp-content/uploads/2021/01/071220191101_35015BLK-1_720x720.png', '2.00', 'Dranken'),
(80, 'Fristi', 'https://static.ah.nl/dam/product/AHI_43545239373335393033?revLabel=9&rendition=800x800_JPG_Q90&fileType=binary', '2.00', 'Dranken'),
(81, 'Lipton Ice Tea', 'https://www.kantinewinkel.nl/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/7/8/78587.x_1__1.png', '2.25', 'Dranken'),
(82, 'Red Bull', 'https://www.xenos.nl/pub/cdn/833685/400/833685.jpg', '2.50', 'Dranken'),
(83, 'Blik Heineken bier', 'https://media.spar.nl/productdetail/heineken-bier-pils-blik-33cl-330-Milliliter-3510824-20803.jpg', '2.50', 'Dranken'),
(84, 'RandyAnus', 'https://assets-www.npo3.nl/uploads/media_item/media_item/233/72/gingerafro_carousel_medium-1515763247.jpg', '69.00', 'Dranken'),
(86, 'Richardus Rietbergen', 'https://www.esca-zwemmen.nl/wp-content/uploads/2015/02/foto2.jpg', '69.00', 'Dranken'),
(87, 'Justanus', 'https://www.2020mag.com/CMSImagesContent/2014/9/Guy-Nerd-glasses_w.png', '69.00', 'Dranken'),
(88, '124', '124', '10.00', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sollicitaties`
--

CREATE TABLE `sollicitaties` (
  `ID` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `geboorte_datum` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefoonnummer` int(15) NOT NULL,
  `toelichting` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sollicitaties`
--

INSERT INTO `sollicitaties` (`ID`, `naam`, `geboorte_datum`, `email`, `telefoonnummer`, `toelichting`) VALUES
(6, 'rickie', '0000-00-00', 'randy@anus.com', 2147483647, 'mijn naam is randy, ik hou van sem\n\n\n\n\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sollicitaties`
--
ALTER TABLE `sollicitaties`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `sollicitaties`
--
ALTER TABLE `sollicitaties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
