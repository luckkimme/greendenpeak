-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greendenpeak`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `isShown` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `description`, `isShown`) VALUES
(1, 'Rainbow', 'Rainbow Cleaning System with standard attachments and other miscellaneous items', 1),
(2, 'Thermostar', 'Thermostar Dry Steam System. This comes with standard attachments and other related items', 1),
(3, 'Doulos Cleaning Services', 'Full use of services from Doulos Cleaning Services, which is also owned by founder, Dennis Salamanca since 2014', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `tel_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `company_vision` varchar(5000) NOT NULL,
  `company_mission` varchar(5000) NOT NULL,
  `company_slogan` varchar(500) NOT NULL,
  `company_history` varchar(2000) NOT NULL,
  `company_history_img` varchar(150) NOT NULL,
  `company_core_values` varchar(2000) NOT NULL,
  `company_founder` varchar(1000) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `email`, `phone_no`, `tel_no`, `address`, `company_name`, `company_logo`, `company_vision`, `company_mission`, `company_slogan`, `company_history`, `company_history_img`, `company_core_values`, `company_founder`, `username`, `password`) VALUES
(1, 'info@greendenpeak.com', '09175451254', '(02)7502-1405', 'Rm 1. Naguilian Rd, Rainbow Bldg.Brgy. MRR Queen of Peace,Baguio City, Benguet', 'Greendenpeak, OPC', '/greendenpeak/asset/img/logo/logo-brand.png', 'We envisioned our company to become\r\nthe leading cleaning service provider and\r\nsupplier of high-quality cleaning\r\nequipment.', 'We aim to provide our clients with\r\nthe highest level of quality service in\r\nthe cleaning industry and to provide\r\ntop-of-the-line products and\r\nunequaled customer service in the\r\ncleaning equipment industry.', 'Built to last. Clean and convenient\r\nat the same time', 'Founded by Dennis Tupas Salamanca in 2019, Greendenpeak,\r\nOPC is committed to delivering top-of-the-line cleaning\r\nequipment and quality cleaning services. While focusing on\r\nonly two products, Rainbow Cleaning System and Thermostar\r\nDry Steam System, the founder added cleaning services using\r\nthese two cleaning equipment to attain the quality cleaning\r\nservice the customers deserve.\r\n\r\nDennis Tupas Salamanca joined Rainbow Pacific Philippines in\r\n2006 as a dealer. Eventually, he became a senior dealer, then\r\nan executive dealer. Being one of the best in the sales\r\ndepartment, he became a team leader, afterward, a group\r\nmanager. In 2019, he became an official branch distributor,\r\nand he founded a company under Greendenpeak, OPC.\r\nGreendenpeak, OPC is an official branch distributor under\r\nRainbow Pacific Philippines. Its office is in Baguio City,\r\nBenguet, and it caters to all customers nationwide.', '/greendenpeak/asset/img/about-us/6329648852070history.jpg', 'We uphold our core values of honesty,\r\nintegrity, professionalism, hard work,\r\ndedication, and achievement.', 'Dennis Tupas Salamanca', 'admin', '$2y$10$fpKp1HxY88uaaqO5kb7l3..S6ZvHAI7Hb3z9MnWzH6V');

-- --------------------------------------------------------

--
-- Table structure for table `company_img`
--

CREATE TABLE `company_img` (
  `id` int(11) NOT NULL,
  `img_name` varchar(150) DEFAULT NULL,
  `img_src` varchar(200) NOT NULL,
  `isShown` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_img`
--

INSERT INTO `company_img` (`id`, `img_name`, `img_src`, `isShown`) VALUES
(1, NULL, '/greendenpeak/asset/img/about-us/history.jpg', 1),
(2, NULL, '/greendenpeak/asset/img/about-us/rainbow-cleaning-systems-logo-1.png', 1),
(3, NULL, '/greendenpeak/asset/img/about-us/thermostar-logo.png', 1),
(4, NULL, '/greendenpeak/asset/img/about-us/DCS LOGO - No Background.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_link`
--

CREATE TABLE `company_link` (
  `link_id` int(11) NOT NULL,
  `link_name` varchar(50) NOT NULL,
  `link` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_company_link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_link`
--

INSERT INTO `company_link` (`link_id`, `link_name`, `link`, `isShown`, `fk_company_link`) VALUES
(1, 'facebook', 'https://www.facebook.com/greendenpeak', 1, 1),
(2, 'youtube', 'https://www.youtube.com/channel/UC68HGEpj8YENuCbjicb9frA', 1, 1),
(3, 'instagram', 'https://www.instagram.com/greendenpeak/', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `index_carousel`
--

CREATE TABLE `index_carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_title` varchar(50) NOT NULL,
  `carousel_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_carousel`
--

INSERT INTO `index_carousel` (`carousel_id`, `carousel_title`, `carousel_img`, `isShown`) VALUES
(1, 'Greendenpeak, OPC', '/greendenpeak/asset/img/index/63292b99caa7dcarousel-1.png', 1),
(2, 'Rainbow Cleaning System', '/greendenpeak/asset/img/index/63292ba2c9910carousel-2.jpg', 1),
(3, 'Thermostar Dry Cleaner', '/greendenpeak/asset/img/index/63292ba8abbddcarousel-3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_desc` varchar(10000) DEFAULT NULL,
  `product_desc_list` varchar(1000) DEFAULT NULL,
  `product_img` varchar(200) DEFAULT NULL,
  `product_purchase_btn_name` varchar(30) DEFAULT NULL,
  `product_feature_carousel_title` varchar(50) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_desc_list`, `product_img`, `product_purchase_btn_name`, `product_feature_carousel_title`, `isShown`, `fk_brand_id`) VALUES
(1, 'Rainbow Cleaning System', 'Great technology for dust-free cleaning for all surfaces with the power of water.', '• NO Vacuum Bags\r\n• With HEPA Filter\r\n• Water-Based Filtration\r\n• Eco-friendly\r\n• Certified Air Cleaner\r\n• Odor Elimination\r\n• Allergen Reduction', '/greendenpeak/asset/img/products/rainbow/rainbow-vacuum-no-bg.png', 'Get Yours Now!', 'The Power of Water', 1, 1),
(2, 'Thermostar Dry Steam System', 'At least 180°C micro dry steam perfect for DIY heat sterilization and disinfection on surfaces.', 'Beds, upholstery, mattresses, carpets and sofas\r\nFlat surfaces in the living room, children’s rooms and offices\r\nBathrooms and toilets\r\nKitchen\r\nGlass doors, windows and blinds\r\nGardens\r\nCars and bicycles', '/greendenpeak/asset/img/products/thermostar/thermostar.png', 'Get Yours Now!', NULL, 1, 2),
(3, 'testing', 'my test', NULL, 'testing.jpg', 'Get Yours Now!', 'Product Features', 0, 1),
(4, 'test', 'some description           ', NULL, '/greendenpeak/asset/img/products/6304c71ee1f88Cover-Photo.png', 'test', NULL, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory`
--

CREATE TABLE `product_accessory` (
  `product_accessory_id` int(11) NOT NULL,
  `product_accessory_title` varchar(50) NOT NULL,
  `product_accessory_subtitle` varchar(500) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory`
--

INSERT INTO `product_accessory` (`product_accessory_id`, `product_accessory_title`, `product_accessory_subtitle`, `fk_product_id`) VALUES
(1, 'A SOLUTION FOR EVERY SURFACE', 'Make the most of your Rainbow® Cleaning System with our extensive line of accessories. For your convenience, many of our accessories are available in combination packs. Contact a nearby Authorized Rainbow Distributor for more information.', 1),
(2, 'YOUR THERMOSTAR PRODUCT ACCESSORIES!', 'These are the available accessories for your Thermostar needs', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory_item`
--

CREATE TABLE `product_accessory_item` (
  `product_accessory_item_id` int(11) NOT NULL,
  `product_accessory_item_title` varchar(50) NOT NULL,
  `product_acc_desc` varchar(1000) DEFAULT NULL,
  `product_acc_desc_list` varchar(1000) DEFAULT NULL,
  `product_accessory_item_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_accessory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory_item`
--

INSERT INTO `product_accessory_item` (`product_accessory_item_id`, `product_accessory_item_title`, `product_acc_desc`, `product_acc_desc_list`, `product_accessory_item_img`, `isShown`, `fk_product_accessory_id`) VALUES
(1, 'Power Nozzle', 'Wall-to-Wall Cleaning', 'The Rainbow Power Nozzle does a fabulous job cleaning carpeting, tile, linoleum and other hard surface flooring.\r\nDirt, pet hair and crumbs vanish with the Power Nozzle’s powerful revolving brush.\r\nSuper bright LED headlights illuminate the path ahead, ensuring you’ll never miss a spot.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-power-nozzle-carpet-cleaner-2.jpg', 1, 1),
(2, 'Aquamate', 'Maximize your Rainbow’s cleaning capability with the AquaMate. Using the natural cleaning power of water and our specially formulated\r\n\r\nAquaMate Carpet Cleaner solution, the AquaMate’s wide-angle revolving brushroll massages deep into carpet fibers for a thorough cleaning and rinsing. ', NULL, '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-aquamate-carpet-cleaner-1.jpg', 1, 1),
(3, 'RainJet', 'The RainJet uses the natural cleaning power of water to remove ground-in dirt and grime from tile, linoleum and other hard surface floors. It features:', 'A self-contained solution tank with the capacity to clean large rooms.\nInterchangeable sponge and brush attachments to scrub away embedded dirt and debris.\nA squeegee pickup blade for a fast, clean and streak-free finish.\nPrecise trigger control over the spray application of liquid cleaning solution.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-rainjet-hardwood-floor-cleaner-1.jpg', 1, 1),
(4, 'RainbowMate', 'Extend the reach of your Rainbow Cleaning System with the RainbowMate, the accessory designed to clean limited-access areas. With its sleek, lightweight design and powerful, motor-driven brush, the Ra', 'Carpeted stairways\r\nUpholstered furniture\r\nMattresses\r\nCar interiors *The Rainbow is not intended for outdoor use', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-rainbowmate-furniture-cleaner-accessory.jpg', 1, 1),
(5, 'MiniJet', 'Easy to set up and use at a moment’s notice, this harnesses the cleaning power of the Rainbow to shampoo, scrub and remove dirt and stains from smaller carpeted areas and upholstery.Long, ten-foot hos', 'Carpeted stairways and closets\r\nSmall area rugs\r\nSofas, chairs and upholstered furniture\r\nPet stains\r\nVehicle interiors and floor mats', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-minijet-carpet-cleaner.jpg', 1, 1),
(6, 'JetPad', 'The JetPad is designed to clean tile, linoleum and other hard surface floors. Its extra-wide size covers a lot of ground, helping to clean even the largest room in minutes. It comes with two reusable ', NULL, '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-jetpad-hardwood-tile-floor-cleaner-1.jpg', 1, 1),
(7, 'Bayonet Lance', 'You can access those pesky hard to reach places easier than ever with the bayonet lance. For example, you can now reach behind heaters or even the interiors of an engine. The soft insulation on the outside protects you from heat and the cleaned items from damage.', NULL, '/greendenpeak/asset/img/products/thermostar/Bayonet Lance.png', 1, 2),
(8, 'Brass Brushes', 'The small and larger brass brushes (28mm and 60mm diameter) are suitable for the kitchen and the bathroom, and have been specially designed to shift lime-scale deposits on taps and sinks. For ceramics always use the nylon brushes!', NULL, '/greendenpeak/asset/img/products/thermostar/Brass Brushes.png', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_feature`
--

CREATE TABLE `product_feature` (
  `product_feature_id` int(11) NOT NULL,
  `product_feature_main_title` varchar(50) NOT NULL,
  `product_feature_description` varchar(1000) DEFAULT NULL,
  `product_feature_main_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_feature`
--

INSERT INTO `product_feature` (`product_feature_id`, `product_feature_main_title`, `product_feature_description`, `product_feature_main_img`, `isShown`, `fk_product_id`) VALUES
(1, 'The Power of Water', 'The Rainbow Cleaning System cleans your home the most natural way possible, using The Power of Water', '/greendenpeak/asset/img/products/rainbow/Rainbow_SRX-animation.gif', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_feature_carousel`
--

CREATE TABLE `product_feature_carousel` (
  `product_feature_carousel_item_id` int(11) NOT NULL,
  `product_feature_carousel_subtitle` varchar(50) DEFAULT NULL,
  `product_feature_carousel_desc` varchar(500) NOT NULL,
  `product_feature_carousel_img` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_feature_carousel`
--

INSERT INTO `product_feature_carousel` (`product_feature_carousel_item_id`, `product_feature_carousel_subtitle`, `product_feature_carousel_desc`, `product_feature_carousel_img`, `fk_product_id`, `isShown`) VALUES
(1, '1. Wet Dust Can\'t Fly', 'The Rainbow uses Mother Nature’s most powerful element, water, to trap dirt and odors, returning only naturally clean, water-washed air to your home environment.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(2, '2. TWICE AS CLEAN', 'This unique water filtration system captures typical household dirt, while remaining microscopic particles are caught by our HEPA Neutralizer Filtration System. This two-stage filtration combination removes nearly 100% of dirt and contaminants from your home.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(3, '3. HURRICANE® MOTOR', 'Powered by switched-reluctance technology, our powerful Hurricane® motor has the force to tackle your toughest cleaning jobs and offers indefinite motor life.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(4, '4. POWER AND CONTROL AT YOUR FINGERTIPS', 'We’ve thoughtfully placed the controls in an ergonomic handle grip, allowing precise control over powered accessories.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(5, '5. QUICK CONNECT', 'Changing wands and tools for different jobs is a snap.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(6, '6. TRAVEL LIGHTLY', 'The Rainbow follows you from room-to-room on its easy-maneuvering dolly. A rubberized bumper protects your walls and furniture. ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(7, '7. ON-BOARD LED HEADLIGHTS', 'Illuminates the path ahead, ensuring you’ll never miss a spot.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(8, '8. WALL-TO-WALL CLEANING', 'Dirt, pet hair and crumbs vanish in the Power Nozzle’s powerful revolving brush.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `img_name` varchar(150) DEFAULT NULL,
  `img_desc` varchar(500) DEFAULT NULL,
  `img_src` varchar(200) NOT NULL,
  `isShown` tinyint(4) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `img_name`, `img_desc`, `img_src`, `isShown`, `fk_product_id`) VALUES
(1, 'sample', NULL, '/greendenpeak/asset/img/products/rainbow/rainbow-srx-churn.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_kit`
--

CREATE TABLE `product_kit` (
  `product_kit_id` int(11) NOT NULL,
  `product_kit_title` varchar(150) NOT NULL,
  `product_kit_subtitle` varchar(200) DEFAULT NULL,
  `product_kit_standard_title` varchar(150) NOT NULL,
  `product_kit_standard_desc` varchar(1000) DEFAULT NULL,
  `product_kit_optional_title` varchar(150) DEFAULT NULL,
  `product_kit_optional_desc` varchar(1000) DEFAULT NULL,
  `product_kit_img` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_kit`
--

INSERT INTO `product_kit` (`product_kit_id`, `product_kit_title`, `product_kit_subtitle`, `product_kit_standard_title`, `product_kit_standard_desc`, `product_kit_optional_title`, `product_kit_optional_desc`, `product_kit_img`, `fk_product_id`) VALUES
(1, 'ONE (1) SET RAINBOW HYDROMACHINE “SRX” SERIES', NULL, 'Harness the power of your Rainbow to clean every inch of your home with our specially designed tools', '• One (1) Pc Crevice Tool\n• One (1) Pc Dusting Brush Assembly \n• One (1) Pc Electrified Hose \n• One (1) Pc Attachment Caddy \n• One (1) Pc Ref Coil Cleaner \n• Two (2) Pcs Straight Wand ‘Stainless’ \n• One (1) Pc Upholstery Tool \n• One (1) Pc Floor Tool Assembly \n• One (1) Pc Exhaust Cap \n• One (1) Pc Dolly Assembly \n• One (1) Pc HEPA Neutralizer \n', '                                                ', '                                                                                                        ', '/greendenpeak/asset/img/products/rainbow/rainbow-vacuum-no-bg.png', 1),
(2, 'Thermostar Dry Cleaner Avantgarde or Professional', '', 'The standard kit for the dry cleaner are the following:', 'Thermostar Dry Steam Cleaner: Avantgarde or Professional\r\nA flexible steam hose with extension tube\r\nTwo extensions\r\nTwo standard brushes with steam puffers\r\nA set with standard brushes\r\nTwo steam lances\r\nA drain dome head\r\nA steam scraper', 'The optional kit for the dry cleaner are the following:', 'Thermostar Steam Mop System\nSteam iron\nSteam ironing station\nCleaning cart', '/greendenpeak/asset/img/products/thermostar/thermostar-standard.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_other_info`
--

CREATE TABLE `product_other_info` (
  `product_other_info_id` int(11) NOT NULL,
  `product_other_info_title` varchar(50) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_other_info`
--

INSERT INTO `product_other_info` (`product_other_info_id`, `product_other_info_title`, `isShown`, `fk_product_id`) VALUES
(1, 'Certification', 1, 1),
(2, 'Applications', 1, 2),
(3, 'Solution', 1, 2),
(4, 'Warranty', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_other_info_item`
--

CREATE TABLE `product_other_info_item` (
  `product_info_item_id` int(11) NOT NULL,
  `product_info_item_title` varchar(50) NOT NULL,
  `product_other_info_desc` varchar(10000) DEFAULT NULL,
  `product_other_info_desc_list` varchar(1000) DEFAULT NULL,
  `product_info_item_img` varchar(200) DEFAULT NULL,
  `product_info_item_subtitle` varchar(50) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_other_info_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_other_info_item`
--

INSERT INTO `product_other_info_item` (`product_info_item_id`, `product_info_item_title`, `product_other_info_desc`, `product_other_info_desc_list`, `product_info_item_img`, `product_info_item_subtitle`, `isShown`, `fk_other_info_item_id`) VALUES
(1, 'AHAM VERIFIDE', 'The Association of Home Appliance Manufacturers(AHAM) certifies that the Rainbow is a proven air cleaner designed to reduce air pollutants that contribute to poor indoor air quality', NULL, '/greendenpeak/asset/img/products/rainbow/other-info/aham-certification-1.png', NULL, 1, 1),
(2, 'CERTIFIED ASTHMA & ALLERGY FRIENDLY', 'The Rainbow is certified asthma & allergy friendly™ by the Asthma and Allergy Foundation of America.', NULL, '/greendenpeak/asset/img/products/rainbow/other-info/certified-asthma-allergy-friendly-1.png', NULL, 1, 1),
(3, 'THE CARPET AND RUG INSTITUTE', 'The Rainbow has met the Carpet Industry Standard for all three elements: soil removal, dust containment and carpet appearance. ', NULL, '/greendenpeak/asset/img/products/rainbow/other-info/', NULL, 1, 1),
(4, 'ANIMAL CAGES, METAL GRATES AND OTHER', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/1animals.png', NULL, 1, 2),
(5, 'BATHROOMS AND TOILETS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/2bathrooms.png', NULL, 1, 2),
(6, 'BICYCLES AND MOTORCYCLES', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/3motorcycle.png', NULL, 1, 2),
(7, 'CAR EXTERIOR CLEANING', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/4car.png', NULL, 1, 2),
(8, 'CAR INTERIOR CLEANING', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/5interior.png', NULL, 1, 2),
(9, 'CARPET CLEANING', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/6carpet.png', NULL, 1, 2),
(10, 'CARPET AND FABRIC STAINS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/7fabric.png', NULL, 1, 2),
(11, 'CLEANING BATHROOM FIXTURES AND REMOVING CALCIUM', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/8calcium.png', NULL, 1, 2),
(12, 'DRAIN CLEANING', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/9drain.png', NULL, 1, 2),
(13, 'CLEAN WINDOW FRAMES', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/10window.png', NULL, 1, 2),
(14, 'CLEANING YOUR OVEN', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/11oven.png', NULL, 1, 2),
(15, 'DEFROST AND REMOVE THE ICE FROM THE FREEZER', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/12freezer.png', NULL, 1, 2),
(16, 'JOINTS/GROOVES', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/13joints.png', NULL, 1, 2),
(17, 'KITCHEN GREASE', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/14kitchen.png', NULL, 1, 2),
(18, 'LEATHER', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/15leather.png', NULL, 1, 2),
(19, 'MATTRESSES AND UPHOLSTERY', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/16mattress.png', NULL, 1, 2),
(20, 'PVC AND FLOOR TILES', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/17tiles.png', NULL, 1, 2),
(21, 'PARQUET AND LAMINATE FLOORING', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/18flooring.png', NULL, 1, 2),
(22, 'POLISHED WOOD SURFACES', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/19wood.png', NULL, 1, 2),
(23, 'RADIATORS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/20radiator.png', NULL, 1, 2),
(24, 'VENETIAN BLINDS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/21blinds.png', NULL, 1, 2),
(25, 'WALL TILES AND SHOWER STALLS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/22stalls.png', NULL, 1, 2),
(26, 'JEWELLERY', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/23jewelry.png', NULL, 1, 2),
(27, 'WATCH BANDS', NULL, NULL, '/greendenpeak/asset/img/products/thermostar/application/24watch.png', NULL, 1, 2),
(34, 'SAFE DISINFECTION – THE NATURAL WAY', 'The spread of bacteria and viruses is increasing rapidly worldwide due to global networking and hygiene has become more than just removing dust and dirt! Toxic chemical substances not only kill off pathogens, but they also put a strain on our body‘s immune system, skin and lungs.\n\n\n\nSo, how can you clean and disinfect hygienically without harming the environment and your own health? We have made it our mission to find an answer.\n \n\nThe HB Solution is our answer for perfect hygiene at home and in business. Thorough cleaning with dry steam ensures that surfaces are optimally cleaned and prepared, and the specially developed HS Blaster turns your heat cleaner into a disinfectant nebuliser in one easy step, making optimum use of the high steam pressure. ', NULL, '/greendenpeak/asset/img/products/thermostar/MD Solutions/1disenfection.jpg', NULL, 1, 3),
(35, 'HB SOLUTION MEANS SAFE AND SUSTAINABLE DISINFECTIO', 'We have used nature as our inspiration! If required, a highly oxidative cocktail of oxygen, hydrogen and chlorine-based chemicals is produced in our immune cells in a fraction of a second, which our body uses to eliminate pathogenic microbes. HB Solution was developed via this method: 100% free of toxic signs - with maximum effect! ', NULL, '/greendenpeak/asset/img/products/thermostar/MD Solutions/2environment.jpg', NULL, 1, 3),
(36, 'SYSTEMIC DISINFECTION', 'With our products you acquire all the building blocks for successful and efficient disinfection. First of all, clean deep into the pores with dry steam; the morethoroughly a surface is cleaned, the more eff ective the disinfection. Simply connect the HS Blaster to your steam hose and spray the HB Solution from a distance of approx. 20 cm with Steam Level 1. The unique composition of HB Solution and the special hot atomisation system in the HS Blaster means that the mixture is dosed exactly so that the full disinfection effect is preserved, but the steam is atomised and sprayed optimally. The resulting reproduction of antimicrobial processes in human cells ensures that HB Solution is completely safe for humans and animals, and so that bacteria and viruses will not be able to develop a resistance.', NULL, '/greendenpeak/asset/img/products/thermostar/MD Solutions/3hbsolution.jpg', NULL, 1, 3),
(37, 'YOU\'LL NEVER NEED ANOTHER DRY STEAM CLEANER AGAIN!', 'Buy smart – buy the Thermostar Dry Steam Systems! You will never need to purchase another steam cleaner ever again, so save your wallet and spare the environment! The system is available in two different versions, therefore you can select the version suitable for you according to your requirements.\n\nBecause – no matter whether it is the Avantgarde Plus, Professional, Medicleantec or Medicleantec Plus, the Thermostar Dry Steam System is a product for life.', NULL, '/greendenpeak/asset/img/products/thermostar/warranty/babygirl.jpg', NULL, 1, 4),
(38, 'GENERATE EXCITEMENT', 'The Thermostar is a dry steam cleaner, which has the technology of a professional commercial appliance. So, you\'ll get the cleanliness of a commercial appliance in the comfort of your own home because of its compact size and easily mobility! The cleaning is done exclusively with hot water steam so you can save on expensive cleaning agents as well\n\nWith your steam cleaner, you can clean all areas of the household to a complete finish and deep clean them for years, and even more, quickly and easily! How about if you have already owned the cleaner for a few years and suddenly need a repair? No problem! Thanks to the Restoration Warranty, No matter after how many years, this protects you against the costs of a new purchase, and this is a lifelong guarantee!', NULL, '/greendenpeak/asset/img/products/thermostar/warranty/garantie.jpg', NULL, 1, 4),
(39, 'For the sake of the environment:', 'However, with the purchase of a Thermostar Dry Steam System, you also make a valuable contribution to the protection of the environment. Quite simply, Thermostar means: Buy only once, dispose only once; and of course, hygienic cleanliness without the need for cleaning products and/or chemicals! The use of the Thermostar represents a healthy and environmentally-friendly alternative to traditional steam cleaners.\n\nDue to the special technology within it, the Thermostar not only has an especially long service life, but it means that you can clean without the need for chemicals and/or cleaning products making it particularly environmentally friendly. It\'s simple: you can clean exclusively with hot water steam, thereby making a valuable contribution to preserving our environment.', NULL, NULL, NULL, 1, 4),
(40, 'What to expect:', NULL, NULL, NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_user_manual`
--

CREATE TABLE `product_user_manual` (
  `product_manual_id` int(11) NOT NULL,
  `product_manual_name` varchar(50) NOT NULL,
  `product_manual_src` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_user_manual`
--

INSERT INTO `product_user_manual` (`product_manual_id`, `product_manual_name`, `product_manual_src`, `fk_product_id`) VALUES
(1, 'Rainbow SRX - Manual', '\\greendenpeak\\asset\\download\\Rainbow-SRX-Manual.pdf', 1),
(2, 'Rainbow e2 (Black) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Black)-Manual.pdf', 1),
(3, 'Rainbow e2 (Silver) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Silver)-Manual.pdf', 1),
(4, 'Rainbow e2 (Gold) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Gold).pdf', 1),
(5, 'Thermostar User Guide (pdf)', '/greendenpeak/asset/download/thermostar-users-guide.pdf', 2),
(6, 'Steam Iron User Manual (pdf)', '/greendenpeak/asset/download/Steamiron_usermanual_englisch.pdf', 2),
(7, 'Steam Iron Station User Manual (pdf)', '/greendenpeak/asset/download/Steamironstation_usermanual_englisch.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_video`
--

CREATE TABLE `product_video` (
  `product_vid_id` int(11) NOT NULL,
  `product_vid_name` varchar(100) DEFAULT NULL,
  `product_vid_desc` varchar(500) DEFAULT NULL,
  `product_vid_src` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_video`
--

INSERT INTO `product_video` (`product_vid_id`, `product_vid_name`, `product_vid_desc`, `product_vid_src`, `isShown`, `fk_product_id`) VALUES
(1, 'Thermostar Dry Steam System', NULL, 'https://www.youtube.com/embed/bK-MbkKhGyw', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_img`
--
ALTER TABLE `company_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_link`
--
ALTER TABLE `company_link`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `fk_company_link` (`fk_company_link`);

--
-- Indexes for table `index_carousel`
--
ALTER TABLE `index_carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_brand_id` (`fk_brand_id`);

--
-- Indexes for table `product_accessory`
--
ALTER TABLE `product_accessory`
  ADD PRIMARY KEY (`product_accessory_id`),
  ADD KEY `fk_product_accessory` (`fk_product_id`);

--
-- Indexes for table `product_accessory_item`
--
ALTER TABLE `product_accessory_item`
  ADD PRIMARY KEY (`product_accessory_item_id`),
  ADD KEY `fk_product_accessory_item` (`fk_product_accessory_id`);

--
-- Indexes for table `product_feature`
--
ALTER TABLE `product_feature`
  ADD PRIMARY KEY (`product_feature_id`),
  ADD KEY `fk_product_feature` (`fk_product_id`);

--
-- Indexes for table `product_feature_carousel`
--
ALTER TABLE `product_feature_carousel`
  ADD PRIMARY KEY (`product_feature_carousel_item_id`),
  ADD KEY `fk_product_feature_carousel` (`fk_product_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_id` (`fk_product_id`);

--
-- Indexes for table `product_kit`
--
ALTER TABLE `product_kit`
  ADD PRIMARY KEY (`product_kit_id`),
  ADD KEY `fk_product_kit` (`fk_product_id`);

--
-- Indexes for table `product_other_info`
--
ALTER TABLE `product_other_info`
  ADD PRIMARY KEY (`product_other_info_id`),
  ADD KEY `fk_product_id` (`fk_product_id`);

--
-- Indexes for table `product_other_info_item`
--
ALTER TABLE `product_other_info_item`
  ADD PRIMARY KEY (`product_info_item_id`),
  ADD KEY `fk_other_info` (`fk_other_info_item_id`);

--
-- Indexes for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  ADD PRIMARY KEY (`product_manual_id`),
  ADD KEY `fk_product_manual` (`fk_product_id`);

--
-- Indexes for table `product_video`
--
ALTER TABLE `product_video`
  ADD PRIMARY KEY (`product_vid_id`),
  ADD KEY `fk_product_video` (`fk_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_img`
--
ALTER TABLE `company_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_link`
--
ALTER TABLE `company_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index_carousel`
--
ALTER TABLE `index_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_accessory`
--
ALTER TABLE `product_accessory`
  MODIFY `product_accessory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_accessory_item`
--
ALTER TABLE `product_accessory_item`
  MODIFY `product_accessory_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_feature`
--
ALTER TABLE `product_feature`
  MODIFY `product_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_feature_carousel`
--
ALTER TABLE `product_feature_carousel`
  MODIFY `product_feature_carousel_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_kit`
--
ALTER TABLE `product_kit`
  MODIFY `product_kit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_other_info`
--
ALTER TABLE `product_other_info`
  MODIFY `product_other_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_other_info_item`
--
ALTER TABLE `product_other_info_item`
  MODIFY `product_info_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  MODIFY `product_manual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_video`
--
ALTER TABLE `product_video`
  MODIFY `product_vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_link`
--
ALTER TABLE `company_link`
  ADD CONSTRAINT `fk_company_link` FOREIGN KEY (`fk_company_link`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_brand_id` FOREIGN KEY (`fk_brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_accessory`
--
ALTER TABLE `product_accessory`
  ADD CONSTRAINT `fk_product_accessory` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_accessory_item`
--
ALTER TABLE `product_accessory_item`
  ADD CONSTRAINT `fk_product_accessory_item` FOREIGN KEY (`fk_product_accessory_id`) REFERENCES `product_accessory` (`product_accessory_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_feature`
--
ALTER TABLE `product_feature`
  ADD CONSTRAINT `fk_product_feature` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_feature_carousel`
--
ALTER TABLE `product_feature_carousel`
  ADD CONSTRAINT `fk_product_feature_carousel` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product_kit`
--
ALTER TABLE `product_kit`
  ADD CONSTRAINT `fk_product_kit` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_other_info`
--
ALTER TABLE `product_other_info`
  ADD CONSTRAINT `product_other_info_ibfk_1` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_other_info_item`
--
ALTER TABLE `product_other_info_item`
  ADD CONSTRAINT `product_other_info_item_ibfk_1` FOREIGN KEY (`fk_other_info_item_id`) REFERENCES `product_other_info` (`product_other_info_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  ADD CONSTRAINT `fk_product_manual` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_video`
--
ALTER TABLE `product_video`
  ADD CONSTRAINT `fk_product_video` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
