-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2017 a las 12:21:48
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer_text`
--

CREATE TABLE `footer_text` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `footer_text`
--

INSERT INTO `footer_text` (`id`, `title`, `description`) VALUES
(2, 'Dr.', 'Quo.'),
(3, 'Dr.', 'Ab.'),
(4, 'Dr.', 'Esse.'),
(5, 'Dr.', 'Ea.'),
(6, 'Ms.', 'At.'),
(7, 'Prof.', 'Sunt.'),
(8, 'Prof.', 'Quos.'),
(9, 'Mr.', 'Non.'),
(10, 'Prof.', 'Ut.'),
(11, 'asfsefsd', 'asdssssss'),
(12, 'asd', NULL),
(13, 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `description`) VALUES
(1, 'Dr. Kira Osinski I', 'https://lorempixel.com/300/300/?47101', 'Sunt.'),
(2, 'Laron Bergnaum', 'https://lorempixel.com/300/300/?78834', 'Non.'),
(3, 'Hassan Langworth', 'https://lorempixel.com/300/300/?22920', 'Eum.'),
(4, 'Lonzo Ernser V', 'https://lorempixel.com/300/300/?90073', 'Quia.'),
(5, 'Alana Sauer', 'https://lorempixel.com/300/300/?31481', 'Est.'),
(6, 'Mrs. Leonora Schoen PhD', 'https://lorempixel.com/300/300/?10436', 'Illo.'),
(7, 'Dr. Howard Davis PhD', 'https://lorempixel.com/300/300/?35962', 'At.'),
(8, 'Ida Volkman', 'https://lorempixel.com/300/300/?64849', 'Eius.'),
(9, 'Tierra Hilll', 'https://lorempixel.com/300/300/?44718', 'Et.'),
(10, 'Clint Kilback', 'https://lorempixel.com/300/300/?19077', 'Ad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2017_09_14_034432_products', 1),
(29, '2017_09_14_034440_services', 1),
(30, '2017_09_14_034459_gallery', 1),
(31, '2017_09_14_071843_titles', 1),
(32, '2017_09_14_073640_footer_text', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`) VALUES
(1, 'Jamel Wiegand', 'https://lorempixel.com/300/300/?70415', NULL),
(2, 'Jalon Nader', 'https://lorempixel.com/300/300/?94572', NULL),
(3, 'Prof. Zechariah Pollich', 'https://lorempixel.com/300/300/?88637', NULL),
(4, 'Hermann Bechtelar DVM', 'https://lorempixel.com/300/300/?50902', NULL),
(5, 'Mrs. Laurie Ullrich', 'https://lorempixel.com/300/300/?76912', NULL),
(6, 'Werner Wolf', 'https://lorempixel.com/300/300/?18857', NULL),
(7, 'Ms. Julianne Stanton', 'https://lorempixel.com/300/300/?44088', NULL),
(8, 'Diamond Koch Sr.', 'https://lorempixel.com/300/300/?20935', NULL),
(9, 'Dereck Fadel', 'https://lorempixel.com/300/300/?62886', NULL),
(10, 'Kirk Gulgowski', 'https://lorempixel.com/300/300/?59027', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `type` enum('home','service','gallery','contact','product') COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `titles`
--

INSERT INTO `titles` (`id`, `title`, `type`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Prof.', 'home', 'https://lorempixel.com/300/300/?14220', 'Sit.', NULL, NULL),
(2, 'Dr.', 'home', 'https://lorempixel.com/300/300/?89304', 'Quis.', NULL, NULL),
(3, 'Prof.', 'home', 'https://lorempixel.com/300/300/?67240', 'Quo.', NULL, NULL),
(4, 'Prof.', 'home', 'https://lorempixel.com/300/300/?64306', 'Enim.', NULL, NULL),
(5, 'Ms.', 'home', 'https://lorempixel.com/300/300/?75235', 'Ut.', NULL, NULL),
(6, 'Prof.', 'home', 'https://lorempixel.com/300/300/?24819', 'Non.', NULL, NULL),
(7, 'Mr.', 'home', 'https://lorempixel.com/300/300/?17713', 'Sunt.', NULL, NULL),
(8, 'Mr.', 'home', 'https://lorempixel.com/300/300/?58309', 'Sed.', NULL, NULL),
(9, 'Dr.', 'home', 'https://lorempixel.com/300/300/?10533', 'Enim.', NULL, NULL),
(10, 'Mr.', 'home', 'https://lorempixel.com/300/300/?57816', 'Eum.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', 'admin@test.com', '$2y$10$.33/Vse5q9ZTAWuqoHsApue9st77985YwMuiqeCxqGoCJfNlzwDEG', NULL, '2017-09-14 13:41:12', '2017-09-14 13:41:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `footer_text`
--
ALTER TABLE `footer_text`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `footer_text`
--
ALTER TABLE `footer_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
