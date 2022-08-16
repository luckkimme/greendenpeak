-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 10:26 AM
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
-- Database: `greendenpeak-opc`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'rainbow'),
(2, 'thermostar'),
(3, 'no brand');

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
  `company_core_values` varchar(2000) NOT NULL,
  `company_founder` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `email`, `phone_no`, `tel_no`, `address`, `company_name`, `company_logo`, `company_vision`, `company_mission`, `company_slogan`, `company_history`, `company_core_values`, `company_founder`) VALUES
(1, 'info@greendenpeak.com', '09175451254', '(02)7502-1405', 'Rm 1. Naguilian Rd, Rainbow Bldg.\r\nBrgy. MRR Queen of Peace,\r\nBaguio City, Benguet', 'Greendenpeak, OPC', '/greendenpeak/asset/img/logo/logo-brand.png', 'We envisioned our company to become\r\nthe leading cleaning service provider and\r\nsupplier of high-quality cleaning\r\nequipment.', 'We aim to provide our clients with\r\nthe highest level of quality service in\r\nthe cleaning industry and to provide\r\ntop-of-the-line products and\r\nunequaled customer service in the\r\ncleaning equipment industry.', 'Built to last. Clean and convenient\r\nat the same time', 'Founded by Dennis Tupas Salamanca in 2019, Greendenpeak,\r\nOPC is committed to delivering top-of-the-line cleaning\r\nequipment and quality cleaning services. While focusing on\r\nonly two products, Rainbow Cleaning System and Thermostar\r\nDry Steam System, the founder added cleaning services using\r\nthese two cleaning equipment to attain the quality cleaning\r\nservice the customers deserve.\r\n\r\nDennis Tupas Salamanca joined Rainbow Pacific Philippines in\r\n2006 as a dealer. Eventually, he became a senior dealer, then\r\nan executive dealer. Being one of the best in the sales\r\ndepartment, he became a team leader, afterward, a group\r\nmanager. In 2019, he became an official branch distributor,\r\nand he founded a company under Greendenpeak, OPC.\r\nGreendenpeak, OPC is an official branch distributor under\r\nRainbow Pacific Philippines. Its office is in Baguio City,\r\nBenguet, and it caters to all customers nationwide.', 'We uphold our core values of honesty,\r\nintegrity, professionalism, hard work,\r\ndedication, and achievement.', 'Dennis Tupas Salamanca');

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_phoneNo` int(20) NOT NULL,
  `user_message` varchar(500) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact_date` datetime NOT NULL,
  `user_date_appointment` datetime NOT NULL,
  `user_date_served` datetime NOT NULL,
  `isServed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(500) NOT NULL,
  `faq_answer` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, 'What is Greendenpeak?', 'Greendenpeak, OPC is an authorized distributor of Rainbow and Thermostar products. We also offer free in-home demo anywhere in the Philippines.'),
(2, 'What is Rainbow Vacuum Cleaner?', 'The Earth uses water to cleanse itself of surface dirt, airborne particulates, allergen, dust and man‐made contaminants. It washes the air and cleanses the environment in which we live and breathe. It’s only natural. This works great for outside, but what about inside your home? The Rainbow Cleaning System cleans your home the most natural way possible, using The Power of Water®. It not only cleans your home… it creates a healthier living space.'),
(3, 'What is Thermostar Dry Steam Cleaner?', 'Thermostar dry steam technology are available in three versions:\r\n\r\nThermostar Avantgarde S4, Thermostar Professional S4 and the brand new Thermostar Professional Plus S4.');

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
(1, 'Greendenpeak, OPC', '/greendenpeak/asset/img/index/carousel/carousel-1.png', 1),
(2, 'Rainbow Vacuum Cleaner', '/greendenpeak/asset/img/index/carousel/carousel-2.jpg', 1),
(3, 'Thermostar Dry Cleaner', '/greendenpeak/asset/img/index/carousel/carousel-3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_desc` varchar(10000) DEFAULT NULL,
  `product_img` varchar(200) DEFAULT NULL,
  `product_purchase_btn_name` varchar(30) DEFAULT NULL,
  `product_feature_carousel_title` varchar(50) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_img`, `product_purchase_btn_name`, `product_feature_carousel_title`, `isShown`, `fk_brand_id`) VALUES
(1, 'Rainbow Vacuum', 'Great technology for dust-free cleaning for all surfaces with the power of water.', '/greendenpeak/asset/img/products/rainbow/rainbow-vacuum-no-bg.png', 'Get Yours Now!', 'The Power of Water', 1, 1),
(2, 'Thermostar', 'At least 180°C micro dry steam perfect for DIY heat sterilization and disinfection on surfaces.', '/greendenpeak/asset/img/products/thermostar/thermostar.png', 'Get Yours Now!', NULL, 1, 2),
(3, 'testing', 'my test', 'testing.jpg', 'Get Yours Now!', 'Product Features', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory`
--

CREATE TABLE `product_accessory` (
  `product_accessory_id` int(11) NOT NULL,
  `product_accessory_title` varchar(50) NOT NULL,
  `product_accessory_subtitle` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory`
--

INSERT INTO `product_accessory` (`product_accessory_id`, `product_accessory_title`, `product_accessory_subtitle`, `fk_product_id`) VALUES
(1, 'A SOLUTION FOR EVERY SURFACE', 'Make the most of your Rainbow® Cleaning System with our extensive line of accessories. For your convenience, many of our accessories are available in combination packs. Contact a nearby Authorized Rai', 1),
(2, 'YOUR THERMOSTAR PRODUCT ACCESSORIES!', 'These are the available accessories for your Thermostar needs', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory_item`
--

CREATE TABLE `product_accessory_item` (
  `product_accessory_item_id` int(11) NOT NULL,
  `product_accessory_item_title` varchar(50) NOT NULL,
  `product_accessory_item_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_accessory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory_item`
--

INSERT INTO `product_accessory_item` (`product_accessory_item_id`, `product_accessory_item_title`, `product_accessory_item_img`, `isShown`, `fk_product_accessory_id`) VALUES
(1, 'Power Nozzle', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-power-nozzle-carpet-cleaner-2.jpg', 1, 1),
(2, 'Aquamate', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-aquamate-carpet-cleaner-1.jpg', 1, 1),
(3, 'RainJet', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-rainjet-hardwood-floor-cleaner-1.jpg', 1, 1),
(4, 'RainbowMate', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-rainbowmate-furniture-cleaner-accessory.jpg', 1, 1),
(5, 'MiniJet', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-minijet-carpet-cleaner.jpg', 1, 1),
(6, 'JetPad', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-jetpad-hardwood-tile-floor-cleaner-1.jpg', 1, 1),
(7, 'Bayonet Lance', '/greendenpeak/asset/img/products/thermostar/Bayonet Lance.png', 1, 2),
(8, 'Brass Brushes', '/greendenpeak/asset/img/products/thermostar/Brass Brushes.png', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory_item_desc`
--

CREATE TABLE `product_accessory_item_desc` (
  `product_accessory_item_desc_id` int(11) NOT NULL,
  `product_accessory_item_desc` varchar(1000) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_accessory_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory_item_desc`
--

INSERT INTO `product_accessory_item_desc` (`product_accessory_item_desc_id`, `product_accessory_item_desc`, `isShown`, `fk_product_accessory_item_id`) VALUES
(1, 'Wall-to-Wall Cleaning', 1, 1),
(2, 'Maximize your Rainbow’s cleaning capability with the AquaMate. Using the natural cleaning power of water and our specially formulated', 1, 2),
(3, 'AquaMate Carpet Cleaner solution, the AquaMate’s wide-angle revolving brushroll massages deep into carpet fibers for a thorough cleaning and rinsing. ', 1, 2),
(4, 'The RainJet uses the natural cleaning power of water to remove ground-in dirt and grime from tile, linoleum and other hard surface floors. It features:', 1, 3),
(5, 'Extend the reach of your Rainbow Cleaning System with the RainbowMate, the accessory designed to clean limited-access areas. With its sleek, lightweight design and powerful, motor-driven brush, the Ra', 1, 4),
(6, 'Easy to set up and use at a moment’s notice, this harnesses the cleaning power of the Rainbow to shampoo, scrub and remove dirt and stains from smaller carpeted areas and upholstery.Long, ten-foot hos', 1, 5),
(7, 'The JetPad is designed to clean tile, linoleum and other hard surface floors. Its extra-wide size covers a lot of ground, helping to clean even the largest room in minutes. It comes with two reusable ', 1, 6),
(10, 'You can access those pesky hard to reach places easier than ever with the bayonet lance. For example, you can now reach behind heaters or even the interiors of an engine. The soft insulation on the outside protects you from heat and the cleaned items from damage.', 1, 7),
(11, 'The small and larger brass brushes (28mm and 60mm diameter) are suitable for the kitchen and the bathroom, and have been specially designed to shift lime-scale deposits on taps and sinks. For ceramics always use the nylon brushes!', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product_accessory_item_desc_list`
--

CREATE TABLE `product_accessory_item_desc_list` (
  `product_accessory_item_desc_list_id` int(11) NOT NULL,
  `product_accessory_item_desc_list_name` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_accessory_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_accessory_item_desc_list`
--

INSERT INTO `product_accessory_item_desc_list` (`product_accessory_item_desc_list_id`, `product_accessory_item_desc_list_name`, `isShown`, `fk_product_accessory_item_id`) VALUES
(1, 'The Rainbow Power Nozzle does a fabulous job cleaning carpeting, tile, linoleum and other hard surface flooring.', 1, 1),
(2, 'Dirt, pet hair and crumbs vanish with the Power Nozzle’s powerful revolving brush.', 1, 1),
(3, 'Super bright LED headlights illuminate the path ahead, ensuring you’ll never miss a spot.', 1, 1),
(4, 'A self-contained solution tank with the capacity to clean large rooms.', 1, 3),
(5, 'Interchangeable sponge and brush attachments to scrub away embedded dirt and debris.', 1, 3),
(6, 'A squeegee pickup blade for a fast, clean and streak-free finish.', 1, 3),
(7, 'Precise trigger control over the spray application of liquid cleaning solution.', 1, 3),
(8, 'Carpeted stairways', 1, 4),
(9, 'Upholstered furniture', 1, 4),
(10, 'Mattresses', 1, 4),
(11, 'Car interiors *The Rainbow is not intended for outdoor use', 1, 4),
(12, 'Carpeted stairways and closets', 1, 5),
(13, 'Small area rugs', 1, 5),
(14, 'Sofas, chairs and upholstered furniture', 1, 5),
(15, 'Pet stains', 1, 5),
(16, 'Vehicle interiors and floor mats', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_advantage`
--

CREATE TABLE `product_advantage` (
  `product_advantage_id` int(11) NOT NULL,
  `product_advantage_title` varchar(50) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_advantage`
--

INSERT INTO `product_advantage` (`product_advantage_id`, `product_advantage_title`, `fk_product_id`) VALUES
(4, 'DRY STEAM ADVANTAGES', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_advantage_desc`
--

CREATE TABLE `product_advantage_desc` (
  `product_advantage_desc_id` int(11) NOT NULL,
  `product_advantage_desc` varchar(1000) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_advantage_subtitle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_advantage_desc`
--

INSERT INTO `product_advantage_desc` (`product_advantage_desc_id`, `product_advantage_desc`, `isShown`, `fk_product_advantage_subtitle_id`) VALUES
(1, 'Introducing the Thermostar Dry Steam system! Thanks to its unique Thermostar technology, the steam is heated up in the boiler up to 174°C before you start cleaning. One of the biggest advantages compared with a customary steam cleaner is that the steam produced via the high temperature is very dry and suited perfectly for the cleaning of textiles; like beds, carpets and upholstered furniture. The textiles do not become wet, cannot burn and no moisture stains are left behind, leaving an incredibly deep clean with none of the normal issues with a steam cleaner. Thermostar also greatly reduces the number of mites, which is very practical, above all for allergy sufferers and their health. \r\n\r\n\r\n\r\nThe Thermostar heating elements with 28W/cm2, in contrast to the standard heating elements of approximately 7W/cm2, exhibiting a much better productivity. The heating element itself is not in direct contact with the water. It is sheathed with a special alloy and therefore has a fantastic heat perf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_advantage_list_item`
--

CREATE TABLE `product_advantage_list_item` (
  `product_advantage_list_item_id` int(11) NOT NULL,
  `product_advantage_list_item` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_advantage_subtitle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_advantage_list_item`
--

INSERT INTO `product_advantage_list_item` (`product_advantage_list_item_id`, `product_advantage_list_item`, `isShown`, `fk_product_advantage_subtitle_id`) VALUES
(1, 'Germs and bacteria are killed', 1, 2),
(2, 'Grease stains are removed', 1, 2),
(3, 'Fabrics, rough surfaces and smooth surfaces are pore-deep cleaned', 1, 2),
(4, 'Hygienic', 1, 2),
(5, 'Less humidity on fabrics or wooden surfaces', 1, 2),
(6, 'No burning and no humidity stains', 1, 2),
(7, 'Waterproofing is maintained', 1, 2),
(8, 'Self-decalcifying heating element', 1, 2),
(9, 'Long lifetime of use', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_advantage_subtitle`
--

CREATE TABLE `product_advantage_subtitle` (
  `product_advantage_subtitle_id` int(11) NOT NULL,
  `product_advantage_subtitle` varchar(50) NOT NULL,
  `product_advantage_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_advantage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_advantage_subtitle`
--

INSERT INTO `product_advantage_subtitle` (`product_advantage_subtitle_id`, `product_advantage_subtitle`, `product_advantage_img`, `isShown`, `fk_product_advantage_id`) VALUES
(1, 'DRY STEAM: HYGIENIC CLEANLINESS AND MAXIMUM PROTEC', '/greendenpeak/asset/img/products/thermostar/thermostar.png', 1, 4),
(2, 'LET US LOOK AGAIN AT THE ADVANTAGES:', '/greendenpeak/asset/img/products/thermostar/thermostar-standard.png', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_desc_list`
--

CREATE TABLE `product_desc_list` (
  `product_desc_list_id` int(11) NOT NULL,
  `product_desc_list_item_name` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_desc_list`
--

INSERT INTO `product_desc_list` (`product_desc_list_id`, `product_desc_list_item_name`, `isShown`, `fk_product_id`) VALUES
(1, 'NO Vacuum Bags', 1, 1),
(2, 'Water-Based Filtration', 1, 1),
(3, 'With HEPA Filter', 1, 1),
(4, 'Eco-friendly', 1, 1),
(5, 'Certified Air Cleaner', 1, 1),
(6, 'Odor Elimination', 1, 1),
(7, 'Allergen Reduction', 1, 1),
(8, 'Beds, upholstery, mattresses, carpets and sofas', 1, 2),
(9, 'Flat surfaces in the living room, children’s rooms and offices', 1, 2),
(10, 'Bathrooms and toilets', 1, 2),
(11, 'Kitchen', 1, 2),
(12, 'Glass doors, windows and blinds', 1, 2),
(13, 'Gardens', 1, 2),
(14, 'Cars and bicycles', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_feature`
--

CREATE TABLE `product_feature` (
  `product_feature_id` int(11) NOT NULL,
  `product_feature_main_title` varchar(50) NOT NULL,
  `product_feature_main_img` varchar(200) NOT NULL,
  `product_feature_carousel_title` varchar(50) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_feature`
--

INSERT INTO `product_feature` (`product_feature_id`, `product_feature_main_title`, `product_feature_main_img`, `product_feature_carousel_title`, `isShown`, `fk_product_id`) VALUES
(1, 'The Power of Water', '/greendenpeak/asset/img/products/rainbow/Rainbow_SRX-animation.gif', 'The Power of Water', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_feature_carousel`
--

CREATE TABLE `product_feature_carousel` (
  `product_feature_carousel_item_id` int(11) NOT NULL,
  `product_feature_carousel_subtitle` varchar(50) DEFAULT NULL,
  `product_feature_carousel_desc` varchar(200) NOT NULL,
  `product_feature_carousel_img` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_feature_carousel`
--

INSERT INTO `product_feature_carousel` (`product_feature_carousel_item_id`, `product_feature_carousel_subtitle`, `product_feature_carousel_desc`, `product_feature_carousel_img`, `fk_product_id`, `isShown`) VALUES
(1, '1. Wet Dust Can\'t Fly', 'The Rainbow uses Mother Nature’s most powerful element, water, to trap dirt and odors, returning only naturally clean, water-washed air to your home environment.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(2, '2. TWICE AS CLEAN', 'This unique water filtration system captures typical household dirt, while remaining microscopic particles are caught by our HEPA Neutralizer Filtration System. This two-stage filtration combination r', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(3, '3. HURRICANE® MOTOR', 'Powered by switched-reluctance technology, our powerful Hurricane® motor has the force to tackle your toughest cleaning jobs and offers indefinite motor life.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(4, '4. POWER AND CONTROL AT YOUR FINGERTIPS', 'We’ve thoughtfully placed the controls in an ergonomic handle grip, allowing precise control over powered accessories.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(5, '5. QUICK CONNECT', 'Changing wands and tools for different jobs is a snap.', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(6, '6. TRAVEL LIGHTLY', 'The Rainbow follows you from room-to-room on its easy-maneuvering dolly. A rubberized bumper protects your walls and furniture. ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(7, '7. ON-BOARD LED HEADLIGHTS', 'Illuminates the path ahead, ensuring you’ll never miss a spot.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1),
(8, '8. WALL-TO-WALL CLEANING', 'Dirt, pet hair and crumbs vanish in the Power Nozzle’s powerful revolving brush.  ', '\\greendenpeak\\asset\\img\\products\\rainbow\\rainbow-srx-churn.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_feature_subtitle`
--

CREATE TABLE `product_feature_subtitle` (
  `product_feature_subtitle_id` int(11) NOT NULL,
  `product_feature_subtitle` varchar(50) DEFAULT NULL,
  `product_feature_subtitle_desc` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_feature_subtitle`
--

INSERT INTO `product_feature_subtitle` (`product_feature_subtitle_id`, `product_feature_subtitle`, `product_feature_subtitle_desc`, `isShown`, `fk_product_feature_id`) VALUES
(1, NULL, 'The Rainbow Cleaning System cleans your home the most natural way possible, using The Power of Water', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_kit`
--

CREATE TABLE `product_kit` (
  `product_kit_id` int(11) NOT NULL,
  `product_kit_title` varchar(150) NOT NULL,
  `product_kit_subtitle` varchar(200) DEFAULT NULL,
  `product_kit_standard_title` varchar(150) NOT NULL,
  `product_kit_optional_title` varchar(150) DEFAULT NULL,
  `product_kit_img` varchar(200) NOT NULL,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_kit`
--

INSERT INTO `product_kit` (`product_kit_id`, `product_kit_title`, `product_kit_subtitle`, `product_kit_standard_title`, `product_kit_optional_title`, `product_kit_img`, `fk_product_id`) VALUES
(1, 'ONE (1) SET RAINBOW HYDROMACHINE “SRX” SERIES', NULL, 'Harness the power of your Rainbow to clean every inch of your home with our specially designed tools', NULL, '/greendenpeak/asset/img/products/rainbow/rainbow-vacuum-no-bg.png', 1),
(2, 'Thermostar Dry Cleaner Avantgarde or Professional', NULL, 'The standard kit for the dry cleaner are the following:', 'The optional kit for the dry cleaner are the following:', '/greendenpeak/asset/img/products/thermostar/thermostar-standard.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_kit_optional`
--

CREATE TABLE `product_kit_optional` (
  `product_kit_optional_id` int(11) NOT NULL,
  `product_kit_optional_item_name` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_kit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_kit_optional`
--

INSERT INTO `product_kit_optional` (`product_kit_optional_id`, `product_kit_optional_item_name`, `isShown`, `fk_product_kit_id`) VALUES
(1, 'Thermostar Steam Mop System', 1, 2),
(2, 'Steam iron', 1, 2),
(3, 'Steam ironing station', 1, 2),
(4, 'Cleaning cart', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_kit_standard`
--

CREATE TABLE `product_kit_standard` (
  `product_kit_standard_id` int(11) NOT NULL,
  `product_kit_standard_item_name` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_kit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_kit_standard`
--

INSERT INTO `product_kit_standard` (`product_kit_standard_id`, `product_kit_standard_item_name`, `isShown`, `fk_product_kit_id`) VALUES
(1, 'One (1) Pc Crevice Tool ', 1, 1),
(2, 'One (1) Pc Dusting Brush Assembly ', 1, 1),
(3, 'One (1) Pc Electrified Hose ', 1, 1),
(4, 'One (1) Pc Attachment Caddy ', 1, 1),
(5, 'One (1) Pc Ref Coil Cleaner ', 1, 1),
(6, 'Two (2) Pcs Straight Wand ‘Stainless’ ', 1, 1),
(7, 'One (1) Pc Upholstery Tool ', 1, 1),
(8, 'One (1) Pc Floor Tool Assembly ', 1, 1),
(9, 'One (1) Pc Exhaust Cap ', 1, 1),
(10, 'One (1) Pc Dolly Assembly ', 1, 1),
(11, 'One (1) Pc HEPA Neutralizer ', 1, 1),
(12, 'Thermostar Dry Steam Cleaner: Avantgarde or Professional', 1, 2),
(13, 'A flexible steam hose with extension tube', 1, 2),
(14, 'Two extensions', 1, 2),
(15, 'Two standard brushes with steam puffers', 1, 2),
(16, 'A set with standard brushes', 1, 2),
(17, 'Two steam lances', 1, 2),
(18, 'A drain dome head', 1, 2),
(19, 'A steam scraper', 1, 2);

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
  `product_info_item_img` varchar(200) DEFAULT NULL,
  `product_info_item_subtitle` varchar(50) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `keyword` varchar(50) NOT NULL,
  `fk_other_info_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_other_info_item`
--

INSERT INTO `product_other_info_item` (`product_info_item_id`, `product_info_item_title`, `product_info_item_img`, `product_info_item_subtitle`, `isShown`, `keyword`, `fk_other_info_item_id`) VALUES
(1, 'AHAM VERIFIDE', '/greendenpeak/asset/img/products/rainbow/other-info/aham-certification-1.png', NULL, 1, 'certification', 1),
(2, 'CERTIFIED ASTHMA & ALLERGY FRIENDLY', '/greendenpeak/asset/img/products/rainbow/other-info/certified-asthma-allergy-friendly-1.png', NULL, 1, 'certification', 1),
(3, 'THE CARPET AND RUG INSTITUTE', '/greendenpeak/asset/img/products/rainbow/other-info/certified-asthma-allergy-friendly-1.png', NULL, 1, 'certification', 1),
(4, 'ANIMAL CAGES, METAL GRATES AND OTHER', '/greendenpeak/asset/img/products/thermostar/application/1animals.png', NULL, 1, 'applications', 2),
(5, 'BATHROOMS AND TOILETS', '/greendenpeak/asset/img/products/thermostar/application/2bathrooms.png', NULL, 1, 'applications', 2),
(6, 'BICYCLES AND MOTORCYCLES', '/greendenpeak/asset/img/products/thermostar/application/3motorcycle.png', NULL, 1, 'applications', 2),
(7, 'CAR EXTERIOR CLEANING', '/greendenpeak/asset/img/products/thermostar/application/4car.png', NULL, 1, 'applications', 2),
(8, 'CAR INTERIOR CLEANING', '/greendenpeak/asset/img/products/thermostar/application/5interior.png', NULL, 1, 'applications', 2),
(9, 'CARPET CLEANING', '/greendenpeak/asset/img/products/thermostar/application/6carpet.png', NULL, 1, 'applications', 2),
(10, 'CARPET AND FABRIC STAINS', '/greendenpeak/asset/img/products/thermostar/application/7fabric.png', NULL, 1, 'applications', 2),
(11, 'CLEANING BATHROOM FIXTURES AND REMOVING CALCIUM', '/greendenpeak/asset/img/products/thermostar/application/8calcium.png', NULL, 1, 'applications', 2),
(12, 'DRAIN CLEANING', '/greendenpeak/asset/img/products/thermostar/application/9drain.png', NULL, 1, 'applications', 2),
(13, 'CLEAN WINDOW FRAMES', '/greendenpeak/asset/img/products/thermostar/application/10window.png', NULL, 1, 'applications', 2),
(14, 'CLEANING YOUR OVEN', '/greendenpeak/asset/img/products/thermostar/application/11oven.png', NULL, 1, 'applications', 2),
(15, 'DEFROST AND REMOVE THE ICE FROM THE FREEZER', '/greendenpeak/asset/img/products/thermostar/application/12freezer.png', NULL, 1, 'applications', 2),
(16, 'JOINTS/GROOVES', '/greendenpeak/asset/img/products/thermostar/application/13joints.png', NULL, 1, 'applications', 2),
(17, 'KITCHEN GREASE', '/greendenpeak/asset/img/products/thermostar/application/14kitchen.png', NULL, 1, 'applications', 2),
(18, 'LEATHER', '/greendenpeak/asset/img/products/thermostar/application/15leather.png', NULL, 1, 'applications', 2),
(19, 'MATTRESSES AND UPHOLSTERY', '/greendenpeak/asset/img/products/thermostar/application/16mattress.png', NULL, 1, 'applications', 2),
(20, 'PVC AND FLOOR TILES', '/greendenpeak/asset/img/products/thermostar/application/17tiles.png', NULL, 1, 'applications', 2),
(21, 'PARQUET AND LAMINATE FLOORING', '/greendenpeak/asset/img/products/thermostar/application/18flooring.png', NULL, 1, 'applications', 2),
(22, 'POLISHED WOOD SURFACES', '/greendenpeak/asset/img/products/thermostar/application/19wood.png', NULL, 1, 'applications', 2),
(23, 'RADIATORS', '/greendenpeak/asset/img/products/thermostar/application/20radiator.png', NULL, 1, 'applications', 2),
(24, 'VENETIAN BLINDS', '/greendenpeak/asset/img/products/thermostar/application/21blinds.png', NULL, 1, 'applications', 2),
(25, 'WALL TILES AND SHOWER STALLS', '/greendenpeak/asset/img/products/thermostar/application/22stalls.png', NULL, 1, 'applications', 2),
(26, 'JEWELLERY', '/greendenpeak/asset/img/products/thermostar/application/23jewelry.png', NULL, 1, 'applications', 2),
(27, 'WATCH BANDS', '/greendenpeak/asset/img/products/thermostar/application/24watch.png', NULL, 1, 'applications', 2),
(34, 'SAFE DISINFECTION – THE NATURAL WAY', '/greendenpeak/asset/img/products/thermostar/MD Solutions/1disenfection.jpg', NULL, 1, 'solution', 3),
(35, 'HB SOLUTION MEANS SAFE AND SUSTAINABLE DISINFECTIO', '/greendenpeak/asset/img/products/thermostar/MD Solutions/2environment.jpg', NULL, 1, 'solution', 3),
(36, 'SYSTEMIC DISINFECTION', '/greendenpeak/asset/img/products/thermostar/MD Solutions/3hbsolution.jpg', NULL, 1, 'solution', 3),
(37, 'YOU\'LL NEVER NEED ANOTHER DRY STEAM CLEANER AGAIN!', '/greendenpeak/asset/img/products/thermostar/warranty/babygirl.jpg', NULL, 1, 'warranty', 4),
(38, 'GENERATE EXCITEMENT', '/greendenpeak/asset/img/products/thermostar/warranty/garantie.jpg', NULL, 1, 'warranty', 4),
(39, 'For the sake of the environment:', NULL, NULL, 1, 'warranty', 4),
(40, 'What to expect:', NULL, NULL, 1, 'warranty', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_other_info_item_desc`
--

CREATE TABLE `product_other_info_item_desc` (
  `product_info_desc_id` int(11) NOT NULL,
  `product_info_desc` varchar(1000) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_info_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_other_info_item_desc`
--

INSERT INTO `product_other_info_item_desc` (`product_info_desc_id`, `product_info_desc`, `isShown`, `fk_product_info_item_id`) VALUES
(1, 'The Association of Home Appliance Manufacturers(AHAM) certifies that the Rainbow is a proven air cleaner designed to reduce air pollutants that contribute to poor indoor air quality', 1, 1),
(2, 'The Rainbow is certified asthma & allergy friendly™ by the Asthma and Allergy Foundation of America.', 1, 2),
(3, 'The Rainbow has met the Carpet Industry Standard for all three elements: soil removal, dust containment and carpet appearance. ', 1, 3),
(4, 'The spread of bacteria and viruses is increasing rapidly worldwide due to global networking and hygiene has become more than just removing dust and dirt! Toxic chemical substances not only kill off pathogens, but they also put a strain on our body‘s immune system, skin and lungs.\r\n\r\n\r\n\r\nSo, how can you clean and disinfect hygienically without harming the environment and your own health? We have made it our mission to find an answer.\r\n \r\n\r\nThe HB Solution is our answer for perfect hygiene at home and in business. Thorough cleaning with dry steam ensures that surfaces are optimally cleaned and prepared, and the specially developed HS Blaster turns your heat cleaner into a disinfectant nebuliser in one easy step, making optimum use of the high steam pressure. ', 1, 34),
(5, 'We have used nature as our inspiration! If required, a highly oxidative cocktail of oxygen, hydrogen and chlorine-based chemicals is produced in our immune cells in a fraction of a second, which our body uses to eliminate pathogenic microbes. HB Solution was developed via this method: 100% free of toxic signs - with maximum effect! ', 1, 35),
(6, 'With our products you acquire all the building blocks for successful and efficient disinfection. First of all, clean deep into the pores with dry steam; the morethoroughly a surface is cleaned, the more eff ective the disinfection. Simply connect the HS Blaster to your steam hose and spray the HB Solution from a distance of approx. 20 cm with Steam Level 1. The unique composition of HB Solution and the special hot atomisation system in the HS Blaster means that the mixture is dosed exactly so that the full disinfection effect is preserved, but the steam is atomised and sprayed optimally. The resulting reproduction of antimicrobial processes in human cells ensures that HB Solution is completely safe for humans and animals, and so that bacteria and viruses will not be able to develop a resistance.', 1, 36),
(7, 'Buy smart – buy the Thermostar Dry Steam Systems! You will never need to purchase another steam cleaner ever again, so save your wallet and spare the environment! The system is available in two different versions, therefore you can select the version suitable for you according to your requirements.\r\n\r\nBecause – no matter whether it is the Avantgarde Plus, Professional, Medicleantec or Medicleantec Plus, the Thermostar Dry Steam System is a product for life.', 1, 37),
(8, 'The Thermostar is a dry steam cleaner, which has the technology of a professional commercial appliance. So, you\'ll get the cleanliness of a commercial appliance in the comfort of your own home because of its compact size and easily mobility! The cleaning is done exclusively with hot water steam so you can save on expensive cleaning agents as well\r\n\r\nWith your steam cleaner, you can clean all areas of the household to a complete finish and deep clean them for years, and even more, quickly and easily! How about if you have already owned the cleaner for a few years and suddenly need a repair? No problem! Thanks to the Restoration Warranty, No matter after how many years, this protects you against the costs of a new purchase, and this is a lifelong guarantee!', 1, 38),
(9, 'However, with the purchase of a Thermostar Dry Steam System, you also make a valuable contribution to the protection of the environment. Quite simply, Thermostar means: Buy only once, dispose only once; and of course, hygienic cleanliness without the need for cleaning products and/or chemicals! The use of the Thermostar represents a healthy and environmentally-friendly alternative to traditional steam cleaners.\r\n\r\nDue to the special technology within it, the Thermostar not only has an especially long service life, but it means that you can clean without the need for chemicals and/or cleaning products making it particularly environmentally friendly. It\'s simple: you can clean exclusively with hot water steam, thereby making a valuable contribution to preserving our environment.', 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `product_other_info_item_desc_list`
--

CREATE TABLE `product_other_info_item_desc_list` (
  `product_info_desc_list_item_id` int(11) NOT NULL,
  `product_info_desc_list_item` varchar(1000) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_info_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_other_info_item_desc_list`
--

INSERT INTO `product_other_info_item_desc_list` (`product_info_desc_list_item_id`, `product_info_desc_list_item`, `isShown`, `fk_product_info_item_id`) VALUES
(855, 'Instructions: Simply clean with the steam lance and wipe with a microfibre cloth.', 1, 4),
(856, 'Level: Minimum to maximum steam', 1, 4),
(857, 'Accessory: Steam Lance', 1, 4),
(858, 'Instructions: Large areas can be cleaned with the triangular or square brush and a clamped microfibre cloth; corners, slits and other inaccessible areas with the steam nozzle, with or without brushes. For the inner edges of the toilet, use the hot water function.', 1, 5),
(859, 'Level: Minimum to maximum steam', 1, 5),
(860, 'Accessory: Steam Lance, Triangular Brush and Rectangular Brush', 1, 5),
(861, 'Instructions: Clean with the steam lance and wipe with a microfibre cloth when complete.', 1, 6),
(862, 'Level: Minimum to maximum steam', 1, 6),
(863, 'Accessory: Steam Lance', 1, 6),
(864, 'Instructions: If you decide to use a car wash, this does not mean that the car is completely clean afterwards. This often leaves a lot of stubborn dirt on the car, such as insects on the windscreen, bodywork or brake dirt on the rims. This is of course very unpleasant, and a waste of money when you can use the deep clean of Thermostar. So,we offer you the perfect alternative! Reach for our modern dry steam cleaners. They clean with very hot, dry steam and your car will shine in splendour again with little time expenditure. With this system you don\'t have to worry about your paintwork as it is very gentle, and the stubborn stains will be no match for the steam, as you only need to use the steam nozzle from close radius for that aforementioned deep clean. After this, just wipe with a microfibre cloth and your car is clean again.', 1, 7),
(865, 'Level: Hot water, minimum to maximum steam', 1, 7),
(866, 'Accessory: Steam Lance or Bayonet Lance', 1, 7),
(867, 'Instructions: A proper car cleaning means the complete cleaning of the car. This includes not only the external washing of the car body but also the thorough cleaning of the interior surfaces. This is one of the cleaning procedures that takes a lot of time when washing the car. Especially car seats, whether upholstered with fabric or leather, need a thorough cleaning between again and again, because dust and dirt accumulates over time. Vacuuming with a vacuum cleaner would be preferred, but this is only a superficial cleaning. The dirt that discolours the seat cushions is still stuck there. Also the trunk should not be forgotten when cleaning, however, this is also usually only vacuumed. You can quickly and easily clean your car inside with our dry steam cleaners. The result is deep cleanliness with little effort. With the steam cleaner you can clean upholstery, carpets, door linings, plastic parts, dashboard, safety belts, headliners, glass, heating and ventilation outlets and everyth', 1, 8),
(868, 'Level: Maximum steam for cloth seats, minimum steam for leather and Alcantara.', 1, 8),
(869, 'Accessory: Steam Lance and Triangular Brush', 1, 8),
(870, 'Instruction: You can clean your carpet easily with triangular or square brushes and a clamped microfibre cloth. We recommend you to do a trial cleaning first. Look for a hidden place and clean it to check the surface for colour resistance. If the carpet is fine and you don’t see any negative effects on it, you can start cleaning. You can also clean sensitive fabrics without any problem. To do this, just apply steam through the steam nozzle by holding it at a distance of 10 cm and then wipe off the surface with a microfibre cloth.', 1, 9),
(871, 'Level:  Maximum steam', 1, 9),
(872, 'Accessory:  Rectangular Brush and Extensions ', 1, 9),
(876, 'Instructions: Place the steam lance directly over the stain and move it quickly back and forth. Then wipe with a microfibre cloth. ATTENTION: First make sure that the material is suitable for steam cleaning. The structure of carpets, especially those made of wool, may be damaged during this type of treatment.', 1, 10),
(877, 'Level:  Minimum steam', 1, 10),
(878, 'Accessory:   Steam Lance ', 1, 10),
(879, 'Instructions: You should use the steam lance and the round nylon brush with stainless steel wool. For larger calcium deposits, you should add a small amount of decalcifier (for example, vinegar or citric acid).', 1, 11),
(880, 'Level: Minimum to maximum steam.', 1, 11),
(881, 'Accessory: Steam Lance, Nylon Brush and Stainless Steel Wool', 1, 11),
(883, 'Level: Hot water', 1, 12),
(884, 'Accessory: Drain Dome Head', 1, 12),
(885, 'Instructions: The window frame should also not be neglected when cleaning the window. Because just like the pane, they are completely exposed to different environmental influences. Stubborn dirt can form, particularly in the frame. In addition, rust can easily develop because the nutritive substances provide the ideal conditions for this. Chemical cleaners or bleaches containing chlorine can attack the sensitive seals on the windows and make the surfaces porous. With the Thermostar dry steam cleaner, you can remove heavy contaminants quickly and easily without special cleaners.', 1, 13),
(886, 'Not every frame is the same.  Window frames made of different materials have different properties: treated wood is dirt-repellent. Plastic windows, on the other hand, are relatively easy to care for, but turn yellow over time. And although aluminum is robust, it can easily get unwanted scratches if it is cleaned incorrectly. Regular care and the right accessory permanently remove stubborn stains. The Thermostar device offers the right application for every material and only through the power of water. White plastic window frames in particular are more dirty than wooden windows and therefore have to be cleaned more often. They magically attract dust and become statically charged. This allows stubborn dirt to stick to the window frame. After the treatment, the yellowed window frames are white and clean again.', 1, 14),
(887, 'Clean window frames with the Thermostar dry steam cleaner. The steam lance is the ideal tool to ensure cleanliness even in the smallest corners and angles in the window frame with the hot dry steam. If you have loosened the somewhat resistant dirt in the frame, you can simply wipe it off. Simply use a dry microfiber cloth. Even the dirt that has settled in the grooves can be cleaned with the hot steam almost effortlessly and without rubbing. Be careful with wooden frames! Use only a little steam (moisture) and keep the tip of the steam lance at a greater distance from the wood so as not to damage the material. Let your windows shine again! Here you will find the best tips and tricks.', 1, 14),
(888, 'Clean your oven without chemicals and scrubbing!  As much fun as it is cooking, baking and roasting in your oven, the more annoying it is to remove the baked-on food residues. This often means tedious scrubbing, which can cause permanent scratches in the interior and on the baking tray. In addition, even light stains burn themselves into the surfaces of the oven due to the heat and leaves unsightly stains that are difficult to remove. In many cases, stubborn dirt remains in the material despite intensive cleaning. ', 1, 14),
(889, 'Numerous guides on the Internet offer tips for cleaning an oven with various household products and chemical cleaners. Some use good old dishwashing soap, others prefer to use an extra paste with the brush attachment. Followers of the Zero Waste movement prefer to use vinegar and baking soda to clean ovens. But the oven never really gets clean. Very stubborn stains mostly persist despite a lot of effort. Removing the remains of chemical oven cleaners without leaving any residue is also tedious. You will finally notice this when you use the oven again for the first time after cleaning. Chemical cleaning agents often leave residues, which for one thing result in unpleasant smells and sometimes toxic fumes! ', 1, 14),
(890, 'Clean your oven with the dry steam cleaner.  The Thermostar dry steam cleaner can also help with this. The hot water steam dissolves every baked-on stain in your oven. Use the round nylon brush with the stainless steel wool for this. Even baked-on grease and crust on the bottom, side and rear wall can be easily removed with water alone. To do this, move the brush up and down slowly, but with only a little pressure on the target area, until the stain has dissolved from the high temperatures of the dry steam cleaner. Then wipe off the loosened dirt with a dry microfiber cloth. Advantage: In addition to saving time, your heavily soiled oven is quickly and efficiently cleared of dirt – without any chemicals. ', 1, 14),
(891, 'Older refrigerators, freezers or fridge-freezer combos in particular suffer from the formation of a thick layer of ice on the side walls, which can also spread to the food (freezer burn). This is primarily due to the moisture that forms inside the devices due to the cold air. This can result in doors or drawers no longer opening or closing properly. Even modern devices with an automatic defrost function or no-frost technology will develop a thin layer of ice over time. Another disadvantage is that power consumption is significantly increased as a result. Regular defrosting and ice removal will extend the life of your freezer, chest freezer, or refrigerator.  With the dry steam cleaner, you can steam the ice away in no time, and that means perfectly cleaning and disinfecting at the same time.', 1, 15),
(892, 'Store frozen food in a cool place.  While the freezer is defrosting, the frozen food must be stored in a cool place to prevent it from spoiling. The best time to do this is in winter or early spring when it is cold outside. You can temporarily store the food on the balcony or patio. Another option is to temporarily store the perishable food with ice packs in a cooler or in a basket.  ', 1, 15),
(893, 'Quickly defrost the freezer with a dry steam cleaner.  Cooling appliances such as freezers, chest freezers or the ice compartment in the refrigerator should be thoroughly cleaned and defrosted regularly – at least once a year.  ', 1, 15),
(894, 'Instructions: Use the round brass or nylon brushes as well as the extension tubes to relieve your back during work. Move slowly with the brush and with little pressure over the joints. This allows you to clean with more heat and less effort - and your brushes will last longer. Of course, you can also use the special joint brushes as well.', 1, 16),
(895, 'Level: Minimum steam', 1, 16),
(896, 'Accessory: Nylon, Brass and Joint Brushes', 1, 16),
(897, 'Instructions: Depending on the sensitivity of the surface to be treated, cleaning with a steam lance, a small round brass brush or a large nylon brush with stainless steel wool is recommended.', 1, 17),
(898, 'Level: Maximum steam', 1, 17),
(899, 'Accessory: Steam Lance, Brass Brush, Nylon Brush and Stainless Steel Wool', 1, 17),
(900, 'Instructions: Leather cleaning is a delicate subject for many people. You shouldn\'t use sharp cleaning agents here! Leather needs gentle cleaning and care. With the Thermostar Dry Steam Cleaner, gentle cleaning is possible even with leather. Simply clean with the triangular or square brush and clamped microfibre cloth. Only operate the steam switch occasionally (do not hold it continuously). Old or brittle leather should not be cleaned, and after cleaning it is recommended to apply a leather protective agent.', 1, 18),
(901, 'Level: Minimum steam', 1, 18),
(902, 'Accessory: Triangular Brush or Rectangular Brush', 1, 18),
(903, 'Instructions: Clean with a triangular or square brush and a clamped microfibre cloth. Always carry out a test clean on a concealed spot first to check the colour resistance of the surfaces. For sensitive fabrics, steam with the steam nozzle from a distance of 10cm and then wipe the surfaces with a microfibre cloth.', 1, 19),
(904, 'Level: Maximum steam', 1, 19),
(905, 'Accessory: Triangular Brush or Rectangular Brush', 1, 19),
(906, 'Instructions: Tiles are usually laid on the grounds that they are easy to clean and require less effort than parquet, laminate or carpet flooring. But tiles are not always really easier to clean. Simply clean your tiles with our steam cleaner and use the triangular or square brush with a clamped microfibre cloth. This will make your tiles shine and shine again quickly and easily. The intelligent technology of our steam cleaners kills bacteria and germs, dissolves fats and lime and all this gently and with very dry steam and completely without chemicals. You can also clean your grooves without any problems, so that they shine again in their original splendour. The time you spent with a sponge or toothbrush on the floor are now over!', 1, 20),
(907, 'Level: Minimum steam', 1, 20),
(908, 'Accessory: Triangular Brush or Rectangular Brush', 1, 20),
(909, 'Instructions: Laminate and parquet are among the most popular floors, which is probably due to the fact that they are extremely easy to clean. Time and time again it is warned that laminate and parquet should not be cleaned with steam cleaner, since the floors are damaged thereby and thus one tries to remove the stains with little water, gentle cleaning agents and much expenditure from the floors. If properly used with steam, parquet and laminates will not be damaged. Due to the intelligent technology and the multitude of accessories of Thermostar, our steam cleaners are ideally equipped for cleaning laminate and parquet. With the square brush and the clamped microfibre cloth you can clean your parquet and laminate easily, quickly and effortlessly. The cleaning is done with little humidity, therefore you only need to press the steam switch from time to time and you can start cleaning. The result is shiny cleanliness and even surfaces to be cleaned are treated better and more gently wit', 1, 21),
(910, 'Level: Minimum steam', 1, 21),
(911, 'Accessory: Rectangular Brush and Extensions', 1, 21),
(912, 'Instructions: Firstly, you should fill the drain with a little water, followed by placing the drain dome head over the drain. Close all overflow openings and flush the drain with hot water using short intervals.', 1, 12),
(913, 'Instructions: Treat waxed wood very carefully, without pressure. It is best to use towels to clean after using the Thermostar as the microfibre cloths can clean very thoroughly and remove the wax layer, so therefore are not suitable.', 1, 22),
(914, 'Level: Minimum steam', 1, 22),
(915, 'Accessory: Steam Lance', 1, 22),
(916, 'Instructions: Clean the radiators from above with the steam lance. The dust is collected and can be wiped off at the bottom.', 1, 23),
(917, 'Level: Maximum steam', 1, 23),
(918, 'Accessory: Steam Lance', 1, 23),
(919, ' Instructions: Venetian blinds are sensitive. Therefore, steam on individually with little pressure and then wipe off with a microfibre cloth.', 1, 24),
(920, 'Level: Minimum steam', 1, 24),
(921, 'Accessory: Steam Lance', 1, 24),
(922, ' Instructions: In case of heavy calcium deposits on glass doors and wall tiles, we recommend an initial application of vinegar or citric acid, then allow these chemicals to settle for around 20 minutes. Continue to clean surfaces with steam nozzle and micro-fibre cloth or triangular brush with inserted micro-fibre cloth. You can clean any joints and grooves using the round nylon or brass brush. To remove stubborn stains you can also use the round nylon brush with stainless steel wool immediately on the glass.', 1, 25),
(923, 'Level: Minimum to maximum steam', 1, 25),
(924, 'Accessory: Steam Lance, Triangular Brush and Joint Brushes', 1, 25),
(925, 'Instructions: Place jewellery or watch straps on a microfibre cloth and clean and polish at close range using the steam nozzle. ATTENTION: Please steam only onto the watch strap and not directly onto the watch case!', 1, 26),
(926, 'Level: Minimum steam', 1, 26),
(927, 'Accessory: Steam Lance', 1, 26),
(928, 'Instructions: Steam from a slightly greater distance with the steam lance and wipe immediately with a microfibre cloth. The cleaning takes a little more time, but is all the more gentle.', 1, 27),
(929, 'Level: Minimum steam, with an even steam clean', 1, 27),
(930, 'Accessory: Steam Lance', 1, 27),
(931, 'SOLVENT FREE', 1, 35),
(932, 'FRAGRANCE FREE', 1, 35),
(933, 'DYE FREE', 1, 35),
(934, 'ALDEHYDE FREE', 1, 35),
(935, 'ALCOHOL FREE', 1, 35),
(936, 'PHENOL FREE', 1, 35),
(937, 'Stainless steel boiler (8 year Warranty!)', 1, 37),
(938, 'Integrated fan for cooling the electronics', 1, 37),
(939, 'Self-decalcifying heating rod (expansion with temperature increase leads to the lime deposits dropping off)', 1, 37),
(940, 'Self-decalcifying electro-mechanical float (with True Temp technology for continuously high steam temperature)', 1, 37),
(941, 'The best European standard product quality with a long service life', 1, 40),
(942, 'Environmentally friendly: cleaning without cleaning products and/or chemicals', 1, 40);

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
(1, 'rainbow srx - Manual', '\\greendenpeak\\asset\\download\\Rainbow-SRX-Manual.pdf', 1),
(2, 'Rainbow e2 (Black) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Black)-Manual.pdf', 1),
(3, 'Rainbow e2 (Silver) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Silver)-Manual.pdf', 1),
(4, 'Rainbow e2 (Gold) Manual', '\\greendenpeak\\asset\\download\\Rainbow-e2-(Gold).pdf', 1),
(5, 'Thermostar User Guide (pdf)', '/greendenpeak/asset/download/thermostar-users-guide.pdf', 2),
(6, 'Steam Iron User Manual (pdf)', '/greendenpeak/asset/download/Steamiron_usermanual_englisch.pdf', 2),
(7, 'Steam Iron Station User Manual (pdf)', '/greendenpeak/asset/download/Steamironstation_usermanual_englisch.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_version`
--

CREATE TABLE `product_version` (
  `product_version_id` int(11) NOT NULL,
  `product_version_name` varchar(150) NOT NULL,
  `product_version_desc` varchar(1000) NOT NULL,
  `product_version_img` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_version`
--

INSERT INTO `product_version` (`product_version_id`, `product_version_name`, `product_version_desc`, `product_version_img`, `isShown`, `fk_product_id`) VALUES
(1, 'THERMOSTAR AVANTGARDE S4', 'Coming with a dual chamber system and a longer operating time without having to refill with water.\r\n\r\n*Temperature measured on the heating elements\r\n\r\n', '/greendenpeak/asset/img/products/thermostar/avantgardeS4.png', 1, 2),
(2, 'THERMOSTAR PROFESSIONAL S4', 'The professional steam cleaner for the home: With water pressure of up to 8 bar and a temperature of more than 170°C*, the Thermostar Professional ensures highly hygienic cleanliness.*Temperature measured on the heating elements', '/greendenpeak/asset/img/products/thermostar/professionalS4.png', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_version_desc_list`
--

CREATE TABLE `product_version_desc_list` (
  `product_version_desc_list_id` int(11) NOT NULL,
  `product_version_desc_list_item_name` varchar(150) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_version_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_version_desc_list`
--

INSERT INTO `product_version_desc_list` (`product_version_desc_list_id`, `product_version_desc_list_item_name`, `isShown`, `fk_product_version_id`) VALUES
(1, 'Stainless Steel Boiler - AISI 304', 1, 1),
(2, 'Boiler Volume - 1.5L', 1, 1),
(3, 'Water Tank - 2L', 1, 1),
(4, 'Pressure - 6 bar', 1, 1),
(5, 'Steam Production - 58g/min', 1, 1),
(6, 'Steam Production - 3.5kg/h', 1, 1),
(7, 'Temperature - *160°C', 1, 1),
(8, 'Voltage - 230V – 50/60 Hz', 1, 1),
(9, 'Maximum Power - 2.85 KW', 1, 1),
(10, 'Boiler Power - 2.0 KW', 1, 1),
(11, 'Weight - ca. 9.5kg', 1, 1),
(12, 'Stainless Steel Boiler - AISI 304', 1, 2),
(13, 'Boiler Volume - 1.5L', 1, 2),
(14, 'Water Tank - 2L', 1, 2),
(15, 'Pressure - 8 bar', 1, 2),
(16, 'Steam Production - 69g/min', 1, 2),
(17, 'Steam Production - 4.1kg/h', 1, 2),
(18, 'Temperature* - 174°C', 1, 2),
(19, 'Voltage - 230V – 50/60 Hz', 1, 2),
(20, 'Maximum Power - 2.45 KW', 1, 2),
(21, 'Boiler Power - 2.4 KW', 1, 2),
(22, 'Weight - ca. 9.5kg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_video`
--

CREATE TABLE `product_video` (
  `product_vid_id` int(11) NOT NULL,
  `product_vid_name` varchar(100) NOT NULL,
  `product_vid_src` varchar(200) NOT NULL,
  `isShown` tinyint(1) NOT NULL DEFAULT 1,
  `fk_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `company_link`
--
ALTER TABLE `company_link`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `fk_company_link` (`fk_company_link`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

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
-- Indexes for table `product_accessory_item_desc`
--
ALTER TABLE `product_accessory_item_desc`
  ADD PRIMARY KEY (`product_accessory_item_desc_id`),
  ADD KEY `fk_product_accessory_desc` (`fk_product_accessory_item_id`);

--
-- Indexes for table `product_accessory_item_desc_list`
--
ALTER TABLE `product_accessory_item_desc_list`
  ADD PRIMARY KEY (`product_accessory_item_desc_list_id`),
  ADD KEY `fk_product_accessory_desc_list` (`fk_product_accessory_item_id`);

--
-- Indexes for table `product_advantage`
--
ALTER TABLE `product_advantage`
  ADD PRIMARY KEY (`product_advantage_id`),
  ADD KEY `fk_product_advantage` (`fk_product_id`);

--
-- Indexes for table `product_advantage_desc`
--
ALTER TABLE `product_advantage_desc`
  ADD PRIMARY KEY (`product_advantage_desc_id`),
  ADD KEY `fk_product_advantage_desc` (`fk_product_advantage_subtitle_id`);

--
-- Indexes for table `product_advantage_list_item`
--
ALTER TABLE `product_advantage_list_item`
  ADD PRIMARY KEY (`product_advantage_list_item_id`),
  ADD KEY `fk_product_advantage_subtitle_list` (`fk_product_advantage_subtitle_id`);

--
-- Indexes for table `product_advantage_subtitle`
--
ALTER TABLE `product_advantage_subtitle`
  ADD PRIMARY KEY (`product_advantage_subtitle_id`),
  ADD KEY `fk_product_advantages` (`fk_product_advantage_id`);

--
-- Indexes for table `product_desc_list`
--
ALTER TABLE `product_desc_list`
  ADD PRIMARY KEY (`product_desc_list_id`),
  ADD KEY `fk_product_desc_list` (`fk_product_id`);

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
-- Indexes for table `product_feature_subtitle`
--
ALTER TABLE `product_feature_subtitle`
  ADD PRIMARY KEY (`product_feature_subtitle_id`),
  ADD KEY `fk_product_feature_desc` (`fk_product_feature_id`);

--
-- Indexes for table `product_kit`
--
ALTER TABLE `product_kit`
  ADD PRIMARY KEY (`product_kit_id`),
  ADD KEY `fk_product_kit` (`fk_product_id`);

--
-- Indexes for table `product_kit_optional`
--
ALTER TABLE `product_kit_optional`
  ADD PRIMARY KEY (`product_kit_optional_id`),
  ADD KEY `fk_product_kit_optional` (`fk_product_kit_id`);

--
-- Indexes for table `product_kit_standard`
--
ALTER TABLE `product_kit_standard`
  ADD PRIMARY KEY (`product_kit_standard_id`),
  ADD KEY `fk_product_kit_standard` (`fk_product_kit_id`);

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
-- Indexes for table `product_other_info_item_desc`
--
ALTER TABLE `product_other_info_item_desc`
  ADD PRIMARY KEY (`product_info_desc_id`),
  ADD KEY `fk_product_other_info_desc` (`fk_product_info_item_id`);

--
-- Indexes for table `product_other_info_item_desc_list`
--
ALTER TABLE `product_other_info_item_desc_list`
  ADD PRIMARY KEY (`product_info_desc_list_item_id`),
  ADD KEY `fk_product_other_info_desc_list` (`fk_product_info_item_id`);

--
-- Indexes for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  ADD PRIMARY KEY (`product_manual_id`),
  ADD KEY `fk_product_manual` (`fk_product_id`);

--
-- Indexes for table `product_version`
--
ALTER TABLE `product_version`
  ADD PRIMARY KEY (`product_version_id`),
  ADD KEY `fk_product_version` (`fk_product_id`);

--
-- Indexes for table `product_version_desc_list`
--
ALTER TABLE `product_version_desc_list`
  ADD PRIMARY KEY (`product_version_desc_list_id`),
  ADD KEY `fk_product_version_list` (`fk_product_version_id`);

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
-- AUTO_INCREMENT for table `company_link`
--
ALTER TABLE `company_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index_carousel`
--
ALTER TABLE `index_carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `product_accessory_item_desc`
--
ALTER TABLE `product_accessory_item_desc`
  MODIFY `product_accessory_item_desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_accessory_item_desc_list`
--
ALTER TABLE `product_accessory_item_desc_list`
  MODIFY `product_accessory_item_desc_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_advantage`
--
ALTER TABLE `product_advantage`
  MODIFY `product_advantage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_advantage_desc`
--
ALTER TABLE `product_advantage_desc`
  MODIFY `product_advantage_desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_advantage_list_item`
--
ALTER TABLE `product_advantage_list_item`
  MODIFY `product_advantage_list_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_advantage_subtitle`
--
ALTER TABLE `product_advantage_subtitle`
  MODIFY `product_advantage_subtitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_desc_list`
--
ALTER TABLE `product_desc_list`
  MODIFY `product_desc_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `product_feature_subtitle`
--
ALTER TABLE `product_feature_subtitle`
  MODIFY `product_feature_subtitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_kit`
--
ALTER TABLE `product_kit`
  MODIFY `product_kit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_kit_optional`
--
ALTER TABLE `product_kit_optional`
  MODIFY `product_kit_optional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_kit_standard`
--
ALTER TABLE `product_kit_standard`
  MODIFY `product_kit_standard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_other_info`
--
ALTER TABLE `product_other_info`
  MODIFY `product_other_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_other_info_item`
--
ALTER TABLE `product_other_info_item`
  MODIFY `product_info_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_other_info_item_desc`
--
ALTER TABLE `product_other_info_item_desc`
  MODIFY `product_info_desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_other_info_item_desc_list`
--
ALTER TABLE `product_other_info_item_desc_list`
  MODIFY `product_info_desc_list_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=943;

--
-- AUTO_INCREMENT for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  MODIFY `product_manual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_version`
--
ALTER TABLE `product_version`
  MODIFY `product_version_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_version_desc_list`
--
ALTER TABLE `product_version_desc_list`
  MODIFY `product_version_desc_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_video`
--
ALTER TABLE `product_video`
  MODIFY `product_vid_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `product_accessory_item_desc`
--
ALTER TABLE `product_accessory_item_desc`
  ADD CONSTRAINT `fk_product_accessory_desc` FOREIGN KEY (`fk_product_accessory_item_id`) REFERENCES `product_accessory_item` (`product_accessory_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_accessory_item_desc_list`
--
ALTER TABLE `product_accessory_item_desc_list`
  ADD CONSTRAINT `fk_product_accessory_desc_list` FOREIGN KEY (`fk_product_accessory_item_id`) REFERENCES `product_accessory_item` (`product_accessory_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_advantage`
--
ALTER TABLE `product_advantage`
  ADD CONSTRAINT `fk_product_advantage` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_advantage_desc`
--
ALTER TABLE `product_advantage_desc`
  ADD CONSTRAINT `fk_product_advantage_desc` FOREIGN KEY (`fk_product_advantage_subtitle_id`) REFERENCES `product_advantage_subtitle` (`product_advantage_subtitle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_advantage_list_item`
--
ALTER TABLE `product_advantage_list_item`
  ADD CONSTRAINT `fk_product_advantage_subtitle_list` FOREIGN KEY (`fk_product_advantage_subtitle_id`) REFERENCES `product_advantage_subtitle` (`product_advantage_subtitle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_advantage_subtitle`
--
ALTER TABLE `product_advantage_subtitle`
  ADD CONSTRAINT `fk_product_advantages` FOREIGN KEY (`fk_product_advantage_id`) REFERENCES `product_advantage` (`product_advantage_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_desc_list`
--
ALTER TABLE `product_desc_list`
  ADD CONSTRAINT `fk_product_desc_list` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `product_feature_subtitle`
--
ALTER TABLE `product_feature_subtitle`
  ADD CONSTRAINT `fk_product_feature_desc` FOREIGN KEY (`fk_product_feature_id`) REFERENCES `product_feature` (`product_feature_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_kit`
--
ALTER TABLE `product_kit`
  ADD CONSTRAINT `fk_product_kit` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_kit_optional`
--
ALTER TABLE `product_kit_optional`
  ADD CONSTRAINT `fk_product_kit_optional` FOREIGN KEY (`fk_product_kit_id`) REFERENCES `product_kit` (`product_kit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_kit_standard`
--
ALTER TABLE `product_kit_standard`
  ADD CONSTRAINT `fk_product_kit_standard` FOREIGN KEY (`fk_product_kit_id`) REFERENCES `product_kit` (`product_kit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `product_other_info_item_desc`
--
ALTER TABLE `product_other_info_item_desc`
  ADD CONSTRAINT `fk_product_other_info_desc` FOREIGN KEY (`fk_product_info_item_id`) REFERENCES `product_other_info_item` (`product_info_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_other_info_item_desc_list`
--
ALTER TABLE `product_other_info_item_desc_list`
  ADD CONSTRAINT `fk_product_other_info_desc_list` FOREIGN KEY (`fk_product_info_item_id`) REFERENCES `product_other_info_item` (`product_info_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_user_manual`
--
ALTER TABLE `product_user_manual`
  ADD CONSTRAINT `fk_product_manual` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_version`
--
ALTER TABLE `product_version`
  ADD CONSTRAINT `fk_product_version` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_version_desc_list`
--
ALTER TABLE `product_version_desc_list`
  ADD CONSTRAINT `fk_product_version_list` FOREIGN KEY (`fk_product_version_id`) REFERENCES `product_version` (`product_version_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_video`
--
ALTER TABLE `product_video`
  ADD CONSTRAINT `fk_product_video` FOREIGN KEY (`fk_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
