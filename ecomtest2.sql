-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 08:15 AM
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
-- Database: `ecomtest2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userFeedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `userName`, `userEmail`, `orderId`, `userFeedback`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '1', 'test', '2022-07-05 10:42:42', '2022-07-05 10:42:42'),
(2, 'nnn', 'nayem2@gmail.com', 'qss', 'snnsd', '2023-08-23 09:24:01', '2023-08-23 09:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_code` int(11) NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_code` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salePrice` int(11) NOT NULL,
  `disPrice` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_code`, `name`, `des`, `salePrice`, `disPrice`, `pic`, `created_at`, `updated_at`) VALUES
(10, 1, 'Red Tomato', 'The tomato is consumed in diverse ways, including raw, as an ingredient in many dishes, sauces, salads, and drinks. While it is botanically a fruit, it is considered a vegetable for culinary purposes. The fruit is rich in lycopene, which may have beneficial health effects.', 5, 3, '1014553761.png', '2023-08-03 02:05:12', '2023-08-03 02:05:12'),
(11, 1, 'Banana', 'Very fresh and natural banana, collected from local farmers.', 3, 2, '84994323.png', '2023-08-03 02:09:58', '2023-08-03 02:09:58'),
(13, 2, 'Vim Dishwashing Bar', 'With the power of 100 lemons Vim Bar helps to clean tough grease the fastest. It gives you a pleasant cleaning experience with its refreshing lemon fragrance. It removes stains easily. It is tough on stains, gentle on your hands. Just take a little bit of Vim Bar on your scrubber and clean your cooking vessles. So go ahead and enjoy the Vim liquid experience. Buy Now!', 4, 3, '920286980.png', '2023-08-03 11:06:40', '2023-08-03 11:06:40'),
(14, 3, 'Broiler Chicken Skin Off', 'Broiler chickens are raised primarily for meat rather than to lay eggs. These poultry are often white and are bred to be large and very healthy, often with more breast meat for the consumer market. Broiler chicken breeds grow very fast and offer good value in terms of protein and calories.', 7, 5, '1953022447.png', '2023-08-03 11:09:47', '2023-08-03 11:09:47'),
(15, 3, 'Hilsha Fish', 'Hilsha (ilish) any of the members of the genus Tenualosa of the family Clupeidae, order Clupeiformes. Locally known as Ilish, the fish has been designated as the national fish of Bangladesh. The body is strongly compressed and moderately deep with dorsal and ventral profile equally convex.In Barishal & Vola,Chandpur area best quality Hilsha fish available.', 15, 10, '1222594252.png', '2023-08-03 11:14:58', '2023-08-03 11:14:58'),
(16, 4, 'Nivea Men Fresh Active Deodorant', 'Beat the heat with the NIVEA Men Fresh Active Roll On. With refreshing tones of ocean extracts, stay fresh, stay active this summer. The masculine fragrance keeps you fresh and confident all day while the care complex takes care of your underarm skin.', 4, 2, '1404111098.png', '2023-08-03 11:18:02', '2023-08-03 11:18:02'),
(17, 4, 'Sunsilk Shampoo Stunning Black Shine', 'Sunsilk Stunning Black Shine shampoo, for hair that shines like you do! Shiny hairgives you a boost of confidence! Sunsilk Stunning Black Shine shampoo is Co-created with Jamal Hammadi, Shine Expert from Hollywood.', 6, 4, '402703790.png', '2023-08-03 11:23:37', '2023-08-03 11:23:37'),
(18, 6, 'Radhuni Chilli Powder', 'Radhuni powdered Chilli is vivid in color, precious in flavor. Best variety of red chilli provides more hotness. Capsaicin, the main flavoring compound for hotness and Capsanthin, the main coloring compound is blended in proper proportion to maintain the real taste of chili.', 3, 2, '842912838.png', '2023-08-03 11:29:15', '2023-08-03 11:29:15'),
(19, 5, 'Pepsi (Free Pepsi 250 ml)', 'Pepsi 1 Ltr is a classic and delicious carbonated soft drink. The drink has a crisp and refreshing taste that is achieved through the perfect balance of sweet and tangy flavors. It\'s made with high-quality ingredients and contains no artificial preservatives or flavors.', 2, 1, '948744205.png', '2023-08-03 11:31:34', '2023-08-03 11:31:34'),
(20, 5, 'Nestle Nescafe Classic Instant Coffee Pouch Pack', 'Start your day right with the first sip of NESCAFÉ Classic.\r\nNESCAFÉ Classic soluble coffee is perfect for any time of the day.\r\nAdd a teaspoon (1.5g) of NESCAFÉ Classic and 5g Nestlé Coffeemate into 120ml hot (80°C) water. Add sugar as per your taste and stir up well to get a perfect cup of NESCAFÉ. Storage Instruction: Transfer the contents into an airtight container to ensure lasting freshness.', 5, 3, '2067839810.png', '2023-08-03 11:34:05', '2023-08-03 11:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_05_24_081530_create_subcategories_table', 1),
(16, '2022_05_25_082801_create_items_table', 1),
(17, '2022_05_25_082951_create_galleries_table', 1),
(18, '2022_06_26_053528_create_orders_table', 1),
(19, '2022_06_30_140903_create_feedback_table', 1),
(20, '2022_07_05_143552_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `totalPayable` int(11) NOT NULL,
  `payStatus` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `totalPayable`, `payStatus`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1840, 3, 2, '2022-07-05 10:40:02', '2023-06-24 01:41:44'),
(2, 5, 650, 1, 1, '2023-06-24 01:48:17', '2023-06-24 01:48:17'),
(3, 6, 340, 1, 1, '2023-07-27 00:46:58', '2023-07-27 00:46:58'),
(4, 6, 340, 1, 1, '2023-07-27 01:50:52', '2023-07-27 01:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcatName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for Active 2 for Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcatName`, `slug`, `des`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fruits & Vegetables', 'fruits-vegetables', 'all fruits and vegetables items will be under this category', '1691044771.png', 1, '2022-07-05 10:19:39', '2023-08-09 02:06:18'),
(2, 'Cleaning Items', 'cleaning-items', 'all cleaning items will be under this category', '1691045304.png', 1, '2022-07-05 10:20:26', '2023-08-03 00:48:24'),
(3, 'Meat & FIsh Items', 'meat-fish-items', 'All meat and fish items will be under this category', '1691045484.png', 1, '2022-07-05 10:21:51', '2023-08-03 00:51:24'),
(4, 'Beauty Products', 'beauty-products', 'All beauty products items will be under this category', '1691045594.png', 1, '2022-07-05 10:23:08', '2023-08-03 00:53:14'),
(5, 'Beverage items', 'beverage-items', 'All beverages items will be under this category', '1691045695.png', 1, '2022-07-05 10:26:49', '2023-08-03 00:54:55'),
(6, 'Cooking Items', 'cooking-items', 'All Cooking items will be under this category', '1691045802.png', 1, '2022-07-05 10:30:27', '2023-08-03 00:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test@test.com', NULL, '1', '$2y$10$FChLjaG4JR7CgBmGuZFemeUSaKNKZl.zklwWR44/CeZltw7sDbLLK', NULL, '2022-08-11 09:31:47', '2022-08-11 09:31:47'),
(3, 'test3', 'test3@test.com', NULL, '3', '$2y$10$dCk9whY1L5tsD9bGdyA7TullRSIQnvM41QWEfkBSRY5kKslOkfkAK', NULL, '2023-01-18 10:13:43', '2023-01-18 10:13:43'),
(4, 'nayem', 'nayem@email.com', NULL, '1', '$2y$10$bdzeaj62YNyXyTUw/lQeEu7BKk5jzOPMUs4dre4YlslT4Dqw4VR.a', NULL, '2023-06-16 23:15:11', '2023-06-16 23:15:11'),
(5, 'rahat', 'rahat@email.com', NULL, '3', '$2y$10$S2E9uWMWBrCEUsGi6/Wales9oUfhb/yk0KDBmONs./iDJwHUZ28.G', NULL, '2023-06-17 08:07:26', '2023-06-17 08:07:26'),
(7, 'Blackburn', 'blackburn8898@gmail.com', NULL, '3', '$2y$10$dDnFDD7mLfF0n4zU2Ex0guuOLjegZQg8D9AASpmrAuPOTMNnse5GW', NULL, '2023-08-01 00:18:34', '2023-08-01 00:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
