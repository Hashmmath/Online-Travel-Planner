-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `ratings` varchar(50) NOT NULL,
  `reviews` varchar(250) NOT NULL,
  `latitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reviews`
--

CREATE TABLE `hotel_reviews` (
  `ratings` text NOT NULL,
  `reviews` text NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE `hotel_room` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_details` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `restaurants_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `reviews` text NOT NULL,
  `latitude` text NOT NULL,
  `photo_id` int(11) NOT NULL,
  `Google_Map` text NOT NULL,
  `cust_reviews` text NOT NULL,
  `cust_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `longitude`, `reviews`, `latitude`, `photo_id`, `Google_Map`, `cust_reviews`, `cust_name`) VALUES
(1, 'Chennai', '13.0827° N', 'Chennai, on the Bay of Bengal in eastern India, is the capital of the state of Tamil Nadu. The city is home to Fort St. George, built in 1644 and now a museum showcasing the city’s roots as a British military garrison and East India Company trading outpost, when it was called Madras. Religious sites include Kapaleeshwarar Temple, adorned with carved and painted gods, and St. Mary’s, a 17th-century Anglican church.', '80.2707° E', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.1146338473!2d79.92880733354345!3d13.048043802054748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1677857908478!5m2!1sen!2sin', 'A city very close to my heart. it has got everything but somehow i feel that it has not got the share it deserves. very intellectual city producing excellent indiviuals in diverse fields ranging from academia, music, films, industry etc. i think the city has changed quite a lot leaving its conservatism behind. it is equivalent to any great city but probably lacks marketing which the other cities do (some cases excess and wrong marketing)', 'John Doe'),
(2, 'Goa', '15.2993° N', 'Goa is a state on the southwestern coast of India within the Konkan region, geographically separated from the Deccan highlands by the Western Ghats. It is located between the Indian states of Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its western coast.', '74.1240° E', 2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984955.4262814799!2d73.44617766864785!3d15.35035336739437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfba106336b741%3A0xeaf887ff62f34092!2sGoa!5e0!3m2!1sen!2sin!4v1677859228656!5m2!1sen!2sin', 'We have just returned from our first holiday to Goa and want to write an honest review. We read a lot about Goa on this forum before we went and have to say that we found there to be some exaggerations (even when we got there people we met who went regularly completely exaggerated) mostly about how little some things cost.', 'Patrick Bateman'),
(3, 'Jaipur', '26.9124° N', 'Jaipur is the capital of India’s Rajasthan state. It evokes the royal family that once ruled the region and that, in 1727, founded what is now called the Old City, or “Pink City” for its trademark building color. At the center of its stately street grid (notable in India) stands the opulent, colonnaded City Palace complex. With gardens, courtyards and museums, part of it is still a royal residence.', '75.7873° E', 3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.38256311693!2d75.65046998301246!3d26.885447917635382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1677859504841!5m2!1sen!2sin', 'We went to Jaipur (Pink city and capital of Rajasthan, India) in Dec-2009. The climate was pleasant. Min temp 16C. 3 nights stay in the city is enough to enjoy the place. We stayed at one of the palace hotel, Jai Mahal which is managed by Taj.', 'Travis Bickle'),
(4, 'Ooty', '11.4102° N', 'Ooty (short for Udhagamandalam) is a resort town in the Western Ghats mountains, in southern India\'s Tamil Nadu state. Founded as a British Raj summer resort, it retains a working steam railway line. Other reminders of its colonial past include Stone House, a 19th-century residence, and the circa-1829 St. Stephen’s Church. Its 55-acre Government Botanical Garden lies on the slopes of Doddabetta Peak.', '76.6950° E', 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62575.0326138542!2d76.65840185981682!3d11.411934660101833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8bd84b5f3d78d%3A0x179bdb14c93e3f42!2sOoty%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1677859585991!5m2!1sen!2sin', 'Perhaps I should have not allowed my romanticized version of Ooty, as created from watching Moondraam Pirrai, to be squashed, crushed and quelled by a real trip to this place. It was dirty, crowded with people not thinking twice before spitting and discarding their rubbish indiscriminately. The busy traffic and diesel-fueled vehicles made the cold air offensive to inhale. This continued into Conoor and Kodaikanal. I don\'t understand why this total disregard for hygiene. Isn\'t cleanliness next to Godliness? What more in a country that promotes spirituality.\r\n\r\n', 'Dexter Morgan'),
(5, 'Delhi', '28.7041° N', 'Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.', '77.1025° E', 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.0532283304!2d76.81302850484656!3d28.64379535315217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1677869244032!5m2!1sen!2sin', 'New Delhi is India\'s capital city with the population of almost 12 million people. Here you will see the heavy traffic jam & a lot traders on the road side selling flowers, toys, fruits, dolls & many more.', 'Rocky Balboa'),
(6, 'Kerala', '10.1632° N', 'Kerala is a state on the Malabar Coast of India. It was formed on 1 November 1956, following the passage of the States Reorganisation Act, by combining Malayalam-speaking regions of the erstwhile regions of Cochin, Malabar, South Canara, and Thiruvithamkoor.', '76.6413° E', 6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016616.762777987!2d73.8932735494472!3d10.541772377556793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1678516082511!5m2!1sen!2sin', 'Kerala has tolerable weather. The backwaters and the hills of Munnar, Wyanad are all good. But be careful not to be cheated. Generally people tell you a lot of lies. People without ethics. Ask the rate of taxis and goods and seservices beforehand to avoid being cheated.', 'Jack'),
(7, 'Kashmir', '33.2778° N', 'Jammu and Kashmir is a region administered by India as a union territory and consists of the southern portion of the larger Kashmir region, which has been the subject of a dispute between India and Pakistan since 1947, and between India and China since 1962.', '75.3412° E', 7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702929.2655929527!2d74.14357225050006!3d33.52650886499551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1092499ffa89d%3A0x6567a6d4697e7f1!2sJammu%20and%20Kashmir!5e0!3m2!1sen!2sin!4v1678516653199!5m2!1sen!2sin', 'I have visited Kashmir with my family in the month of March, 2015 alongwith a Local Tour Operator. The package cost around Rs. 16, 500/- per person inclusive of food. On reaching Jammu Railway station we found the temperature is around minus 2. We then bought some pullovers from the local market and thereafter we got into a Travellor bus and reached Kashmir at around 7:00 PM at night.', 'Christopher'),
(8, 'Shimla', '31.1048° N', 'Shimla also known as Simla, the official capital and the largest city of the northern Indian state of Himachal Pradesh. In 1864, Shimla was declared as the summer capital of British India. After independence, the city became the capital of East Punjab and was later made the capital city of Himachal Pradesh. It is the principal commercial, cultural and educational centre of the state.', '77.1734° E', 8, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109348.28678388816!2d77.08898029300295!3d31.078200472864243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390578e3e35d6e67%3A0x1f7e7ff6ff9f54b7!2sShimla%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1678524473136!5m2!1sen!2sin', 'Shimla, additionally acknowledged as the \"Queen of Hill Stations, \" is a famous traveller vacation spot positioned in the northern Indian kingdom of Himachal Pradesh. I had the possibility to go to Shimla, and I need to say that it was once an outstanding experience.', 'Kavya'),
(9, 'Kashmir', '33.2779° N', 'Jammu and Kashmir is a region administered by India as a union territory and consists of the southern portion of the larger Kashmir region, which has been the subject of a dispute between India and Pakistan since 1947, and between India and China since 1962.', '75.3412° E', 9, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702929.2655929527!2d74.14357225050006!3d33.52650886499551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1092499ffa89d%3A0x6567a6d4697e7f1!2sJammu%20and%20Kashmir!5e0!3m2!1sen!2sin!4v1678516653199!5m2!1sen!2sin', 'I have visited Kashmir with my family in the month of March, 2015 alongwith a Local Tour Operator. The package cost around Rs. 16, 500/- per person inclusive of food. On reaching Jammu Railway station we found the temperature is around minus 2. We then bought some pullovers from the local market and thereafter we got into a Travellor bus and reached Kashmir at around 7:00 PM at night.', 'Jack');

-- --------------------------------------------------------

--
-- Table structure for table `places_reviews`
--

CREATE TABLE `places_reviews` (
  `ratings` text NOT NULL,
  `reviews` text NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `dateposted` date NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `menu` text NOT NULL,
  `rating` varchar(50) NOT NULL,
  `review` varchar(250) NOT NULL,
  `latitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants_reviews`
--

CREATE TABLE `restaurants_reviews` (
  `ratings` text NOT NULL,
  `reviews` text NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spots`
--

CREATE TABLE `tourist_spots` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spot_reviews`
--

CREATE TABLE `tourist_spot_reviews` (
  `id` int(11) NOT NULL,
  `ratings` text NOT NULL,
  `reviews` text NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travelagency`
--

CREATE TABLE `travelagency` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `plans` varchar(100) NOT NULL,
  `reviews` varchar(250) NOT NULL,
  `latitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travel_agency_review`
--

CREATE TABLE `travel_agency_review` (
  `id` int(11) NOT NULL,
  `ratings` text NOT NULL,
  `reviews` text NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travel_plan`
--

CREATE TABLE `travel_plan` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `id`) VALUES
('1', 'hashmmath123@gmail.com', 'hashmmath123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location` (`longitude`),
  ADD KEY `reviews` (`reviews`);

--
-- Indexes for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurants_id` (`restaurants_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_2` (`longitude`),
  ADD UNIQUE KEY `photo_id` (`photo_id`),
  ADD KEY `reviews` (`reviews`(768)),
  ADD KEY `location` (`longitude`);

--
-- Indexes for table `places_reviews`
--
ALTER TABLE `places_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_3` (`longitude`),
  ADD KEY `review` (`review`),
  ADD KEY `location` (`longitude`),
  ADD KEY `location_2` (`longitude`);

--
-- Indexes for table `restaurants_reviews`
--
ALTER TABLE `restaurants_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `longitude` (`longitude`);

--
-- Indexes for table `tourist_spot_reviews`
--
ALTER TABLE `tourist_spot_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `travelagency`
--
ALTER TABLE `travelagency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location` (`longitude`),
  ADD KEY `reviews` (`reviews`);

--
-- Indexes for table `travel_agency_review`
--
ALTER TABLE `travel_agency_review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `travel_plan`
--
ALTER TABLE `travel_plan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `travel_id` (`travel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `places_reviews`
--
ALTER TABLE `places_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants_reviews`
--
ALTER TABLE `restaurants_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourist_spot_reviews`
--
ALTER TABLE `tourist_spot_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travelagency`
--
ALTER TABLE `travelagency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_agency_review`
--
ALTER TABLE `travel_agency_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_plan`
--
ALTER TABLE `travel_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`reviews`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotels_ibfk_2` FOREIGN KEY (`longitude`) REFERENCES `places` (`longitude`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  ADD CONSTRAINT `hotel_reviews_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD CONSTRAINT `hotel_room_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`restaurants_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `test_db`.`images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places_reviews`
--
ALTER TABLE `places_reviews`
  ADD CONSTRAINT `places_reviews_ibfk_1` FOREIGN KEY (`id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`name`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`location`) REFERENCES `places` (`longitude`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`review`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `restaurants_ibfk_2` FOREIGN KEY (`longitude`) REFERENCES `places` (`longitude`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurants_reviews`
--
ALTER TABLE `restaurants_reviews`
  ADD CONSTRAINT `restaurants_reviews_ibfk_1` FOREIGN KEY (`id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `restaurants_reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tourist_spots`
--
ALTER TABLE `tourist_spots`
  ADD CONSTRAINT `tourist_spots_ibfk_1` FOREIGN KEY (`longitude`) REFERENCES `places` (`longitude`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tourist_spot_reviews`
--
ALTER TABLE `tourist_spot_reviews`
  ADD CONSTRAINT `tourist_spot_reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tourist_spot_reviews_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tourist_spots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `travelagency`
--
ALTER TABLE `travelagency`
  ADD CONSTRAINT `travelagency_ibfk_1` FOREIGN KEY (`reviews`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `travelagency_ibfk_2` FOREIGN KEY (`longitude`) REFERENCES `places` (`longitude`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `travelagency_ibfk_3` FOREIGN KEY (`id`) REFERENCES `travel_agency_review` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `travel_agency_review`
--
ALTER TABLE `travel_agency_review`
  ADD CONSTRAINT `travel_agency_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `travel_plan`
--
ALTER TABLE `travel_plan`
  ADD CONSTRAINT `travel_plan_ibfk_1` FOREIGN KEY (`travel_id`) REFERENCES `travelagency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
