-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 06:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(2, 'root', 'root', '1');

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `burger_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`burger_id`, `name`, `image`, `info`) VALUES
(57, 'Bareback Burger', 'Jalapeno_Double.png', 'Yee-Haw!!! A Cowboy’s Favorite! Our perfectly seared ½ Lb. beef patty stacked high with 3 onion rings, American cheese, 2 thick slices of bacon & BBQ sauce on a grilled bun'),
(58, 'BBQ Ranch', 'bbq_ranch.png', 'The burger to brighten Your day & take those blues away! Our seared ½ Lb. beef patty topped with crumbled blue cheese, 2 thick slices of bacon, sauteed ‘shrooms, grilled onions, lettuce & tomato on a grilled bun'),
(59, 'Bacon Lovers', 'baconmcdouble.png', 'A tasty burger for Bacon Lovers! A special ½ Lb. bacon & beef infused patty with 3 crisp onion rings, BBQ sauce, 2 thick slices of bacon & topped with White Tillamook Cheddar on a grilled bun'),
(60, 'Turkey''s Gobbler', 'baconandcheese.png', 'Turkey burger with 2 thick slices of bacon, avocado, onion, lettuce & Frack sauce on a grilled bun'),
(61, 'Trippy Lights', 'quarterpounderwithcheese.png', 'A delicious hemp veggie patty with grilled onions, sauteed mushrooms, lettuce, tomato & swiss cheese on a grilled bun'),
(62, 'Big Mac', 'baconclubhouseburger2.png', 'The burger to brighten Your day & take those blues away! Our seared ½ Lb. beef patty topped with crumbled blue cheese, 2 thick slices of bacon, sauteed ‘shrooms, grilled onions, lettuce & tomato on a grilled bun'),
(63, 'Jalapeno Double', 'Jalapeno_Double1.png', 'Turkey burger with 2 thick slices of bacon, avocado, onion, lettuce & Frack sauce on a grilled bun');

-- --------------------------------------------------------

--
-- Table structure for table `burger_calories`
--

CREATE TABLE `burger_calories` (
  `calories_id` int(11) NOT NULL,
  `burger_id` int(11) DEFAULT NULL,
  `total_fat` varchar(100) DEFAULT NULL,
  `proteins` varchar(100) DEFAULT NULL,
  `total_carbs` varchar(100) DEFAULT NULL,
  `calcium` varchar(100) DEFAULT NULL,
  `sodium` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger_calories`
--

INSERT INTO `burger_calories` (`calories_id`, `burger_id`, `total_fat`, `proteins`, `total_carbs`, `calcium`, `sodium`) VALUES
(1, 62, '100g', '0', '500mg', '100mg', '2.9mg'),
(2, 63, '40gm', '0', '500gm', '50mg', '60mg'),
(3, 57, '100g', '101g', '500mg', '100mg', '2.9mg'),
(4, 58, '50gm', '450g', '400gm', '150mg', '60mg'),
(5, 59, '50g', '56g', '500mg', '100mg', '7.9mg'),
(6, 60, '600g', '76g', '600mg', '700mg', '8.9mg');

-- --------------------------------------------------------

--
-- Table structure for table `burger_size`
--

CREATE TABLE `burger_size` (
  `size_id` int(11) NOT NULL,
  `burger_id` int(11) DEFAULT NULL,
  `kids` int(11) DEFAULT NULL,
  `single` int(11) DEFAULT NULL,
  `doubles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burger_size`
--

INSERT INTO `burger_size` (`size_id`, `burger_id`, `kids`, `single`, `doubles`) VALUES
(48, 57, 200, 400, 600),
(49, 58, 120, 300, 500),
(50, 59, 120, 300, 400),
(51, 60, 130, 300, 600),
(52, 61, 100, 200, 400),
(53, 62, 120, 300, 500),
(54, 63, 200, 300, 500);

-- --------------------------------------------------------

--
-- Table structure for table `chef_table`
--

CREATE TABLE `chef_table` (
  `id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef_table`
--

INSERT INTO `chef_table` (`id`, `table_id`, `order_id`, `name`, `size`, `qty`, `total_price`) VALUES
(42, 3, NULL, 'Grilled McWrap', 120, 3, NULL),
(43, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(44, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(45, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(46, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(47, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(48, 0, NULL, 'Grilled McWrap', 120, 3, NULL),
(49, 12, NULL, 'All Day Pizza', 230, 12, NULL),
(50, 12, NULL, 'Frappe Mocha', 400, 2, NULL),
(51, 12, NULL, 'BBQ Ranch', 500, 23, NULL),
(52, 2, NULL, 'BBQ Ranch', 120, 5, NULL),
(53, 2, NULL, 'Grilled Chicken Salad', 100, 2, NULL),
(54, 4, NULL, 'BBQ Ranch', 120, 5, NULL),
(55, 4, NULL, 'Grilled Chicken Salad', 100, 2, NULL),
(56, 0, NULL, 'BBQ Ranch', 120, 5, NULL),
(57, 0, NULL, 'Grilled Chicken Salad', 100, 2, NULL),
(58, 0, NULL, 'BBQ Ranch', 120, 5, NULL),
(59, 0, NULL, 'Grilled Chicken Salad', 100, 2, NULL),
(60, 3, NULL, 'Mr Wedge', 300, 34, NULL),
(61, 0, NULL, 'Bareback Burger', 200, 3, NULL),
(62, 0, NULL, 'Bareback Burger', 200, 3, NULL),
(63, 0, NULL, 'Bareback Burger', 200, 3, NULL),
(64, 0, NULL, 'Bareback Burger', 200, 3, NULL),
(65, 3, NULL, 'Bareback Burger', 200, 2, NULL),
(66, 0, NULL, 'Bareback Burger', 200, 2, NULL),
(67, 0, NULL, 'Bareback Burger', 200, 2, NULL),
(68, 0, NULL, 'Bareback Burger', 200, 2, NULL),
(69, 0, NULL, 'Bareback Burger', 200, 2, NULL),
(70, 0, NULL, 'Bareback Burger', 200, 2, NULL),
(71, 2, NULL, 'Bareback Burger', 200, 2, NULL),
(72, 2, NULL, 'All Day Pizza', 230, 3, NULL),
(73, 3, NULL, 'Bareback Burger', 200, 3, NULL),
(74, 4, NULL, 'Bareback Burger', 200, 4, NULL),
(75, 4, NULL, 'Frappe Mocha', 300, 4, NULL),
(76, 4, NULL, 'Bareback Burger', 200, 3, NULL),
(77, 3, NULL, 'Big Mac', 120, 1, NULL),
(78, 4, NULL, 'Bareback Burger', 200, 5, NULL),
(79, 4, NULL, 'Bareback Burger', 200, 4, NULL),
(80, 5, NULL, 'BBQ Ranch', 120, 6, NULL),
(81, 5, NULL, 'BBQ Ranch', 120, 5, NULL),
(82, 4, NULL, 'Bareback Burger', 200, 4, NULL),
(83, 1, NULL, 'Bareback Burger', 200, 4, NULL),
(84, 4, NULL, 'Frappe Mocha', 300, 4, NULL),
(85, 4, NULL, 'Frappe Mocha', 300, 4, NULL),
(86, 1, NULL, 'White Hot Chocolate', 125, 3, NULL),
(87, 0, NULL, 'White Hot Chocolate', 125, 3, NULL),
(88, 4, NULL, 'White Hot Chocolate', 125, 4, NULL),
(89, 5, NULL, 'White Hot Chocolate', 125, 2, NULL),
(90, 6, NULL, 'Bareback Burger', 200, 7, NULL),
(91, 0, NULL, 'Bareback Burger', 200, 1, NULL),
(92, 1, NULL, 'Bareback Burger', 200, 1, NULL),
(93, 1, NULL, 'Bareback Burger', 200, 5, NULL),
(94, 1, NULL, 'Bareback Burger', 200, 3, NULL),
(95, 4, NULL, 'Bareback Burger', 200, 1, NULL),
(96, 7, NULL, 'Frappe Mocha', 300, 87, NULL),
(97, 9, NULL, 'BBQ Ranch', 120, 7, NULL),
(98, 4, NULL, 'Bareback Burger', 200, 3, NULL),
(99, 5, NULL, 'Grilled McWrap', 120, 3, NULL),
(100, 5, NULL, 'Bareback Burger', 200, 2, NULL),
(101, 5, NULL, 'White Hot Chocolate', 125, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

CREATE TABLE `chicken` (
  `chicken_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`chicken_id`, `name`, `image`, `info`) VALUES
(21, 'Grilled McWrap', 'Grilled_Mcwrap.png', 'Best shawrma with grilled chicken.'),
(22, 'Grilled Chicken Salad', 'Grilled_Chicken_Salad.png', ''),
(23, '1', '12.png', '5');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_calories`
--

CREATE TABLE `chicken_calories` (
  `calories_id` int(11) NOT NULL,
  `chicken_id` int(11) DEFAULT NULL,
  `total_fat` int(11) DEFAULT NULL,
  `proteins` int(11) DEFAULT NULL,
  `total_carbs` int(11) DEFAULT NULL,
  `calcium` int(11) DEFAULT NULL,
  `sodium` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_calories`
--

INSERT INTO `chicken_calories` (`calories_id`, `chicken_id`, `total_fat`, `proteins`, `total_carbs`, `calcium`, `sodium`) VALUES
(1, 21, 100, 70, 560, 200, 6),
(2, 22, 40, 90, 540, 50, 70),
(3, 23, 6, 0, 8, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `chicken_size`
--

CREATE TABLE `chicken_size` (
  `size_id` int(11) NOT NULL,
  `chicken_id` int(11) DEFAULT NULL,
  `kids` int(11) DEFAULT NULL,
  `combo` int(11) DEFAULT NULL,
  `party` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_size`
--

INSERT INTO `chicken_size` (`size_id`, `chicken_id`, `kids`, `combo`, `party`) VALUES
(21, 21, 120, 500, 200),
(22, 22, 100, 400, 500);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinks_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinks_id`, `name`, `image`, `info`) VALUES
(24, 'Iced Coffee with Milk', 'iced_coffee.png', 'Our signature iced coffee blend was created intentionally to be served cold. It is smooth and balanced with rich caramel flavors and refreshing citrus notes, making it easy to enjoy whether you want a pick-me-up or moment to relax.  Also delicious with Vanilla or Caramel, or make it yours by adding your favorite flavor.'),
(25, 'Frappe Mocha', 'Frappe_Mocha.png', 'Equal parts rich-brewed coffee and frothy steamed milk, this beverage is well-loved in many parts of the world and goes by many names. While Italians call it caffè misto, in France, it’s known as café au lait, and in Spain, café con leche. Whatever you call it, it’s delightfully smooth and perfect for sitting, sipping and contemplating the day.'),
(26, 'White Hot Chocolate', 'White_Hot_Chocolate.png', 'Let’s be frank – there are a lot of smoothies out there. But if we had to nominate one for all-around best smoothie, it would be this one. Like our other smoothies, it’s an energizing boost made with real fruit and whey protein and fiber powder. But the not-so-secret-ingredient that gives this one the edge in deliciousness: the flavor of chocolate. And that flavor always wins. End of story. (What could possibly make it better? Well, you could always add a shot of espresso to it.)'),
(27, 'ads', 's.PNG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `drinks_calories`
--

CREATE TABLE `drinks_calories` (
  `calories_id` int(11) NOT NULL,
  `drinks_id` int(11) DEFAULT NULL,
  `total_fat` int(11) DEFAULT NULL,
  `proteins` int(11) DEFAULT NULL,
  `total_carbs` int(11) DEFAULT NULL,
  `calcium` int(11) DEFAULT NULL,
  `sodium` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks_calories`
--

INSERT INTO `drinks_calories` (`calories_id`, `drinks_id`, `total_fat`, `proteins`, `total_carbs`, `calcium`, `sodium`) VALUES
(1, 24, 0, 100, 500, 100, 3),
(2, 26, 0, 500, 500, 520, 60),
(3, 25, 0, 100, 50, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `drinks_size`
--

CREATE TABLE `drinks_size` (
  `size_id` int(11) NOT NULL,
  `drinks_id` int(11) DEFAULT NULL,
  `regular` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks_size`
--

INSERT INTO `drinks_size` (`size_id`, `drinks_id`, `regular`, `large`) VALUES
(24, 24, 300, 400),
(25, 25, 300, 400),
(26, 26, 125, 300);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `table_id` int(100) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `pizza_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`pizza_id`, `name`, `image`, `info`) VALUES
(11, 'All Day Pizza', 'kiwiallday.png', 'Rasher bacon, seasoned scrambled egg , fresh tomato & red onion with a BBQ sauce swirl '),
(12, 'Mr Wedge', 'mrwedge.png', 'Potato wedges, champagne ham, red onion, mozzarella & oregano on a BBQ base topped with garlic sauce & mayonnaise'),
(13, 'Vegorama', 'vegorama.png', 'Capsicum, mushroom, baby spinach, red onion, fresh tomato, oregano & mozzarella with garlic sauce'),
(15, 'GodFather', 'Godfather.png', 'Pepperoni, fresh tomato, capsicum, Italian sausage, olives, oregano & mozzarella with garlic sauce'),
(16, 'Chicken Special', 'chickennham.png', 'Flame roast ground chicken, red onion, mozzarella with a BBQ sauce swirl');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_calories`
--

CREATE TABLE `pizza_calories` (
  `calories_id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `total_fat` int(11) DEFAULT NULL,
  `proteins` int(11) DEFAULT NULL,
  `total_carbs` int(11) DEFAULT NULL,
  `calcium` int(11) DEFAULT NULL,
  `sodium` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_size`
--

CREATE TABLE `pizza_size` (
  `size_id` int(11) NOT NULL,
  `pizza_id` int(11) DEFAULT NULL,
  `small` int(11) DEFAULT NULL,
  `medium` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza_size`
--

INSERT INTO `pizza_size` (`size_id`, `pizza_id`, `small`, `medium`, `large`) VALUES
(10, 11, 230, 400, 500),
(11, 12, 300, 500, 750),
(12, 13, 230, 400, 670),
(14, 15, 200, 400, 600),
(15, 16, 300, 500, 700);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `burger_id` int(11) NOT NULL,
  `chicken_id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `drinks_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `burger_id`, `chicken_id`, `pizza_id`, `drinks_id`, `name`, `customer_name`, `review`) VALUES
(1, 62, 62, 0, 0, 'Big Mac', 'Saad', 'Hands down the best breakfast sandwich I have ever eaten.'),
(4, 57, 57, 0, 0, 'Bareback Burger', 'Tauqir', 'Good, can be better. :)'),
(11, 26, 26, 0, 0, 'White Hot Chocolate', 'Menata', 'The idea is perfect, comfort food. '),
(12, 0, 0, 0, 0, 'White Hot Chocolate', 'Menata', 'The idea is perfect, comfort food. '),
(13, 26, 26, 26, 26, 'White Hot Chocolate', 'Menata', 'The idea is perfect, comfort food. ');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `burger_id` int(11) NOT NULL,
  `chicken_id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `drinks_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `burger_id`, `chicken_id`, `pizza_id`, `drinks_id`, `size`, `qty`) VALUES
(2, 'BBQ Ranch', 58, 58, 58, 58, 120, 6),
(3, 'BBQ Ranch', 58, 58, 58, 58, 120, 5),
(4, 'Bareback Burger', 57, 57, 57, 57, 200, 4),
(5, 'Bareback Burger', 57, 57, 57, 57, 200, 4),
(9, 'White Hot Chocolate', 26, 26, 26, 26, 125, 3),
(10, 'White Hot Chocolate', 26, 26, 26, 26, 125, 4),
(11, 'White Hot Chocolate', 26, 26, 26, 26, 125, 2),
(12, 'Bareback Burger', 57, 57, 57, 57, 200, 7),
(13, 'Iced Coffee with Milk', 24, 24, 24, 24, 300, 9),
(14, 'Bareback Burger', 57, 57, 57, 57, 200, 1),
(15, 'Bareback Burger', 57, 57, 57, 57, 200, 1),
(16, 'Bareback Burger', 57, 57, 57, 57, 200, 5),
(17, 'Bareback Burger', 57, 57, 57, 57, 200, 3),
(18, 'Bareback Burger', 57, 57, 57, 57, 200, 1),
(19, 'Frappe Mocha', 25, 25, 25, 25, 300, 87),
(20, 'BBQ Ranch', 58, 58, 58, 58, 120, 7),
(21, 'Bareback Burger', 57, 57, 57, 57, 200, 3),
(22, 'Grilled McWrap', 21, 21, 21, 21, 120, 3),
(23, 'Bareback Burger', 57, 57, 57, 57, 200, 2),
(24, 'White Hot Chocolate', 26, 26, 26, 26, 125, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `mobile`, `address`) VALUES
(10, 'saadbinamjad', '123', 'Saad Bin Amjad', 'saadbinamjad', 1321231, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`burger_id`);

--
-- Indexes for table `burger_calories`
--
ALTER TABLE `burger_calories`
  ADD PRIMARY KEY (`calories_id`),
  ADD KEY `burger_id` (`burger_id`);

--
-- Indexes for table `burger_size`
--
ALTER TABLE `burger_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `burger_id` (`burger_id`);

--
-- Indexes for table `chef_table`
--
ALTER TABLE `chef_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chicken`
--
ALTER TABLE `chicken`
  ADD PRIMARY KEY (`chicken_id`);

--
-- Indexes for table `chicken_calories`
--
ALTER TABLE `chicken_calories`
  ADD PRIMARY KEY (`calories_id`),
  ADD KEY `chicken_id` (`chicken_id`);

--
-- Indexes for table `chicken_size`
--
ALTER TABLE `chicken_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `chicken_id` (`chicken_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinks_id`);

--
-- Indexes for table `drinks_calories`
--
ALTER TABLE `drinks_calories`
  ADD PRIMARY KEY (`calories_id`),
  ADD KEY `drinks_id` (`drinks_id`);

--
-- Indexes for table `drinks_size`
--
ALTER TABLE `drinks_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `drinks_id` (`drinks_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pizza_id`);

--
-- Indexes for table `pizza_calories`
--
ALTER TABLE `pizza_calories`
  ADD PRIMARY KEY (`calories_id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indexes for table `pizza_size`
--
ALTER TABLE `pizza_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `burger_id` (`burger_id`),
  ADD KEY `chicken_id` (`chicken_id`),
  ADD KEY `pizza_id` (`pizza_id`),
  ADD KEY `drinks_id` (`drinks_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `burger_id` (`burger_id`),
  ADD KEY `pizza_id` (`pizza_id`),
  ADD KEY `drinks_id` (`drinks_id`),
  ADD KEY `chicken_id` (`chicken_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `burger`
--
ALTER TABLE `burger`
  MODIFY `burger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `burger_calories`
--
ALTER TABLE `burger_calories`
  MODIFY `calories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `burger_size`
--
ALTER TABLE `burger_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `chef_table`
--
ALTER TABLE `chef_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `chicken`
--
ALTER TABLE `chicken`
  MODIFY `chicken_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `chicken_calories`
--
ALTER TABLE `chicken_calories`
  MODIFY `calories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chicken_size`
--
ALTER TABLE `chicken_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drinks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `drinks_calories`
--
ALTER TABLE `drinks_calories`
  MODIFY `calories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drinks_size`
--
ALTER TABLE `drinks_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `pizza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pizza_calories`
--
ALTER TABLE `pizza_calories`
  MODIFY `calories_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pizza_size`
--
ALTER TABLE `pizza_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `burger_calories`
--
ALTER TABLE `burger_calories`
  ADD CONSTRAINT `burger_calories_ibfk_1` FOREIGN KEY (`burger_id`) REFERENCES `burger` (`burger_id`);

--
-- Constraints for table `burger_size`
--
ALTER TABLE `burger_size`
  ADD CONSTRAINT `burger_size_ibfk_1` FOREIGN KEY (`burger_id`) REFERENCES `burger` (`burger_id`);

--
-- Constraints for table `chicken_calories`
--
ALTER TABLE `chicken_calories`
  ADD CONSTRAINT `chicken_calories_ibfk_1` FOREIGN KEY (`chicken_id`) REFERENCES `chicken` (`chicken_id`);

--
-- Constraints for table `chicken_size`
--
ALTER TABLE `chicken_size`
  ADD CONSTRAINT `chicken_size_ibfk_1` FOREIGN KEY (`chicken_id`) REFERENCES `chicken` (`chicken_id`);

--
-- Constraints for table `drinks_calories`
--
ALTER TABLE `drinks_calories`
  ADD CONSTRAINT `drinks_calories_ibfk_1` FOREIGN KEY (`drinks_id`) REFERENCES `drinks` (`drinks_id`);

--
-- Constraints for table `drinks_size`
--
ALTER TABLE `drinks_size`
  ADD CONSTRAINT `drinks_size_ibfk_1` FOREIGN KEY (`drinks_id`) REFERENCES `drinks` (`drinks_id`);

--
-- Constraints for table `pizza_calories`
--
ALTER TABLE `pizza_calories`
  ADD CONSTRAINT `pizza_calories_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizza` (`pizza_id`);

--
-- Constraints for table `pizza_size`
--
ALTER TABLE `pizza_size`
  ADD CONSTRAINT `pizza_size_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizza` (`pizza_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
