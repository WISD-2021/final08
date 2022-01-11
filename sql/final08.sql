-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cart_items` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(12,	1,	4,	1,	'2022-01-11 00:58:41',	'2022-01-11 00:58:41');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_12_15_012339_create_sessions_table',	1),
(8,	'2021_12_15_021733_create_employees_table',	2),
(10,	'2021_12_15_024912_create_orders_table',	3),
(23,	'2021_12_15_024317_create_products_table',	4),
(24,	'2021_12_15_024405_create_cart_items_table',	4),
(25,	'2021_12_15_025051_create_customers_table',	4),
(26,	'2021_12_15_025559_create_records_table',	4),
(27,	'2022_01_08_071230_add_photo_to_products_table',	5),
(33,	'2022_01_09_073206_delete_customers_table',	6),
(34,	'2022_01_09_073811_delete_employees_table',	6),
(40,	'2022_01_09_074914_add_type_to_users_table',	7),
(41,	'2022_01_09_082507_change_type_to_users_table',	8),
(45,	'2022_01_09_100304_change_customerid_to_userid_in_cartitem_table',	9),
(46,	'2022_01_09_102723_change_userid_to_orderid_in_cartitem_table',	10),
(47,	'2022_01_09_103219_change_employeeid_to_userid_in_orders_table',	11),
(50,	'2022_01_09_103459_delete_records_table',	12),
(51,	'2022_01_09_104807_recreate_orders_table',	13),
(52,	'2022_01_09_105943_change_orderid_to_userid_in_cart_items_table',	14),
(53,	'2022_01_09_112805_change_cart_item_id_to_product_id_in_orders_table',	15),
(54,	'2022_01_09_114312_chagne_status_add_default_to_orders_table',	16),
(55,	'2022_01_09_171529_add_quantity_to_orders_table',	17);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1,	2,	2,	1,	0,	'2022-01-09 09:25:08',	'2022-01-09 09:25:08'),
(2,	2,	1,	1,	0,	'2022-01-09 09:25:09',	'2022-01-09 09:25:09'),
(3,	2,	2,	1,	0,	'2022-01-09 09:54:45',	'2022-01-09 09:54:45'),
(4,	2,	1,	1,	0,	'2022-01-09 09:56:43',	'2022-01-09 09:56:43'),
(5,	2,	1,	1,	0,	'2022-01-09 10:00:29',	'2022-01-09 10:00:29'),
(6,	2,	2,	1,	0,	'2022-01-09 10:00:29',	'2022-01-09 10:00:29'),
(7,	2,	2,	1,	0,	'2022-01-09 10:01:35',	'2022-01-09 10:01:35'),
(8,	2,	1,	1,	0,	'2022-01-09 10:01:35',	'2022-01-09 10:01:35'),
(9,	2,	1,	1,	0,	'2022-01-09 10:19:28',	'2022-01-09 10:19:28');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('123@gmail.com',	'$2y$10$RSJiGgYFb/WxnA7HjL7AZ.icFb5xd3al2omATmj5JE3bj9HXqWftS',	'2022-01-10 08:37:55');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invent` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `invent`, `price`, `detail`, `created_at`, `updated_at`, `photo`) VALUES
(1,	'GeForce GTX 1650 SUPER GAMING X',	45,	5690,	'◆ 顯示晶片 ：NVIDIA GeForce GTX 1650 SUPER ◆ 記憶體 ：4GB GDDR6 ◆ 核心時脈：Boost 1755 Mhz ◆ 電源接口：1*6pin ◆ 輸出端子 ： 3x DP / HDMI ◆ 顯卡長度：24.8 x 12.7 x 4.4cm',	NULL,	'2022-01-09 10:19:28',	'img/products/GTX-1650.jpg'),
(2,	'GeForce RTX 2060 OC 6G',	29,	10090,	'◆ 顯示晶片 ：NVIDIA® GeForce® RTX 2060 ◆ 記憶體 ：6GB GDDR6 ◆ 記憶體介面：192-bit ◆ 輸出端子 ：3x DP / HDMI ◆ 尺寸(長x寬x高) ：22.6 x 12.2 x 4.05公分',	NULL,	'2022-01-09 10:01:35',	'img/products/RTX-2060.jpg'),
(3,	'CRAS XR RGB DDR4 4000 16GB(8Gx2)',	80,	2749,	'▼韓國職業電競團體首選▼ ▶ Hynix原廠顆粒 ▶ 1.4V電壓 ▶ CL值 19-25-25-45 ▶ 終身有限保固 ▶ 保內非人損一對一換新  科賦不為人知秘辛揭露！  ▶ 與韓國記憶體原廠SK Hynix(SK海力士)同樣隸屬SK集團 ▶ Hynix為全球第二大DRAM製造商，僅次於三星 ▶ KLEVV(科賦) DRAM 100%韓國設計研發，品質保證',	NULL,	NULL,	'img/products/16GB-memory.jpg'),
(4,	'DOMINATOR PLATINUM RGB DDR5 5200 32GB(16Gx2)',	43,	9790,	'✓ 專為超頻穩定打造高品質PCB ✓ 版載電壓調節功能 ✓ 訂製INTEL XMP 3.0配置文件 ✓ 自訂燈光配置 ✓ 專利DHX冷卻技術 ✓ 終身有限保固 ✓ 1.1V 低電壓',	NULL,	NULL,	'img/products/32GB-memory.jpg'),
(5,	'TOSHIBA Canvio Advance V10 1TB',	157,	1590,	'★高速USB3.2傳輸 ★纖紋時尚質感 ★輕鬆隨插即用 ★相容於Windows、Mac作業系統 ★專屬安全軟體 Security Software ★獨家備份軟體 Backup Software ★富基電通代理，三年保固 ==同系列其他容量、顏色： ★V10 1TB 米白 ★V10 1TB 黑 ★V10 1TB 紅 ================== ★V10 2TB 米白 ★V10 2TB 黑 ★V10 2TB 紅 ================== ★V10 4TB 米白 ★V10 4TB 黑 ★',	NULL,	NULL,	'img/products/1TB-HDD.jpg'),
(6,	'WD My Passport for Mac 5TB USB-C ',	23,	3890,	'★全新超薄設計 ★專為Mac量身打造 ★支援Time Machine ★附USB-A/USB-C傳輸線 ★WD Discovery功能，連接社群平台，備份檔案 ★256位元AES硬體加密 ★原廠全機3年保固',	NULL,	NULL,	'img/products/5TB-HDD.jpg');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NxPEra9TTSKgPF7uz4ncDgsY166FZSL9htc2K6QJ',	NULL,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36',	'YTo1OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJUeFVMMEtZYkVObGVxTTJpeE1yZnY3eEZ3UVFoQjZ3QWlCTU9xT2ZxIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHlpNFNGM3lBeDUxaDUzSEF4YjM4N09NcDNhOVhnZHZrL1dFWGUvWXNyNEI1TGxTV3U3Qm1XIjt9',	1641894772);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `type`) VALUES
(1,	'林冠宇',	'kib7410@gmail.com',	NULL,	'$2y$10$pB9z/kOD7lU6fkgMkSQf8.87YMe8sHjCTv7714wwK0Cnf6EsK5ZKa',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-05 23:14:15',	'2022-01-05 23:14:15',	0),
(2,	'12345678',	'123@gmail.com',	NULL,	'$2y$10$TPJK/2NuK/DU/wRl8JL1IuN6kLhZh6w4OhMpHnFS/pYZ0Z0Y5bN/e',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-06 00:34:07',	'2022-01-10 08:35:20',	0),
(3,	'股鄭玉',	'a123456@yahoo.com.tw',	NULL,	'$2y$10$hkh7yfq4hdVGGfSeFoF8tuFWLNhyifm4yuG2s0a.gC5j0WjQtEKFC',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-09 00:34:10',	'2022-01-09 00:34:10',	1),
(6,	'毛場經驗',	'c8763@gmail.com',	NULL,	'$2y$10$U0jCitK.m/Cc8Y9XC1vu/exXv.iq6v8lClVpeB3SLDP6aHgtinp9W',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-10 06:35:25',	'2022-01-10 06:35:25',	1),
(7,	'100',	'100@gmail.com',	NULL,	'$2y$10$HgVLBsBc6rA7ZsXaFcz3yeX89SkghoviAed/CC0zdzpK4TFQhctf6',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-10 06:53:31',	'2022-01-10 06:53:31',	1),
(8,	'1234',	'1234@gmail.com',	NULL,	'$2y$10$PSik5MhgaQolI9ui7POfeebZQL0TLnCBwdagGRTJa4CkQwQRXO4/y',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-10 08:38:42',	'2022-01-10 08:42:07',	0),
(9,	'555555',	'55555@gmail.com',	NULL,	'$2y$10$yi4SF3yAx51h53HAxb387OMp3a9Xgdvk/WEXe/Ysr4B5LlSWu7BmW',	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-01-11 01:52:10',	'2022-01-11 01:52:10',	0);

-- 2022-01-11 09:57:25
