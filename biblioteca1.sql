-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2022 a las 20:49:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codLibro` bigint(20) UNSIGNED NOT NULL,
  `codUsuario` bigint(20) UNSIGNED NOT NULL,
  `fechaPrestamo` date NOT NULL,
  `fechaDevolucion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`id`, `codLibro`, `codUsuario`, `fechaPrestamo`, `fechaDevolucion`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2022-05-21', '2022-06-21', '2022-05-21 15:30:50', '2022-05-21 15:30:50'),
(3, 16, 3, '2022-05-21', '2022-06-21', '2022-05-21 15:31:26', '2022-05-21 15:31:26'),
(4, 20, 2, '2022-05-21', '2022-06-21', '2022-05-21 15:31:49', '2022-05-21 15:31:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `nombre`, `apellidos`, `nacionalidad`, `sexo`, `edad`, `created_at`, `updated_at`) VALUES
(1, 'Arno', 'Ludie Kutch', 'Ireland', 'Hombre', '22', '2022-05-21 14:49:53', '2022-05-21 14:52:16'),
(2, 'Haskell', 'Raphaelle Bechtelar', 'Guinea-Bissau', 'odio', '76', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(3, 'Laila', 'Ms. Kitty Dibbert', 'China', 'ducimus', '58', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(4, 'Brittany', 'Ms. Hosea Heidenreich', 'United States Minor Outlying Islands', 'cumque', '29', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(5, 'Billy', 'Miss Charlene Mayer', 'Palestinian Territories', 'aut', '41', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(6, 'Prince', 'Verla Schulist I', 'United Arab Emirates', 'id', '36', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(7, 'Joaquin', 'Kathryn Schoen', 'Dominica', 'perspiciatis', '50', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(8, 'Keven', 'Yazmin Spencer Sr.', 'Iran', 'alias', '64', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(9, 'Destiny', 'Shirley Fisher', 'Belize', 'sequi', '44', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(10, 'Johnny', 'Prof. Bradly Mayer', 'Sri Lanka', 'corrupti', '73', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(11, 'Eusebio', 'Claudia Zboncak', 'Colombia', 'vel', '31', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(12, 'Ramona', 'Brooks Beatty', 'Tanzania', 'officiis', '20', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(13, 'Tyrese', 'Leann Borer Sr.', 'Spain', 'sed', '41', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(14, 'Cruz', 'Kathleen Jaskolski II', 'Kiribati', 'inventore', '24', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(15, 'Abdiel', 'Maiya Parker', 'Uzbekistan', 'in', '52', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(16, 'Cyrus', 'Mr. Tyree Hudson', 'Seychelles', 'vel', '76', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(17, 'Mattie', 'Joe Bartoletti III', 'Zambia', 'rem', '63', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(18, 'Elsie', 'Mallie Hayes', 'Falkland Islands (Malvinas)', 'aut', '40', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(19, 'Deshaun', 'Ms. Lilla Conroy', 'Angola', 'laborum', '56', '2022-05-21 14:49:53', '2022-05-21 14:49:53'),
(20, 'Tristian', 'Effie Walter', 'Jordan', 'qui', '82', '2022-05-21 14:49:53', '2022-05-21 14:49:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `categoria`, `autor_id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'inventore', 'Novela', 1, 'Omnis qui cupiditate dolorem nemo omnis sit eos. Quasi architecto cupiditate labore ea enim necessitatibus neque. Sit quae exercitationem at consequuntur. Repudiandae iste id illo voluptas eum quas.', '2022-05-21 14:50:28', '2022-05-21 14:53:03'),
(2, 'similique', 'fugit', 9, 'Delectus itaque sit et vero qui. Ut autem deserunt similique corporis adipisci. Facilis omnis dolor aliquid aut provident rerum qui.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(3, 'rerum', 'dolor', 16, 'Aut vel sed repudiandae recusandae aperiam. Et ad sed dolore iusto quasi dolor mollitia. Similique voluptates repudiandae possimus. Et commodi sint architecto consectetur rem ipsum enim.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(4, 'voluptatem', 'et', 2, 'Ea omnis sit fugiat rerum nam. Deserunt voluptate ducimus ea sint et quis et. Voluptas dignissimos aut est aut provident similique.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(5, 'temporibus', 'sunt', 12, 'Ducimus non sequi possimus harum. Ut fugit mollitia minima vitae ea est quae. Impedit dolorem laborum ea qui.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(6, 'dicta', 'ut', 5, 'Repudiandae in aspernatur iusto minima id ab est amet. Et qui dolor debitis quod repellat. Harum eius eveniet vel similique iure. Eum ex aut et veniam nemo cupiditate.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(7, 'deleniti', 'nobis', 19, 'Recusandae ullam corrupti amet non doloremque sit. In magnam error et. Et sed totam velit ut.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(8, 'sint', 'quia', 4, 'Et neque commodi qui ut blanditiis ut possimus. Voluptas qui voluptate fugiat. Nihil sint cum sit. Rerum et cumque libero iusto exercitationem. Distinctio fugiat eos deleniti dicta sint.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(9, 'accusantium', 'quos', 16, 'Aut perspiciatis voluptas dignissimos odit praesentium. Et at eum impedit maxime et reprehenderit architecto. Et quaerat eius laborum laboriosam.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(10, 'sapiente', 'labore', 10, 'Unde quis adipisci iste animi aut. Harum deserunt nulla rerum magnam facilis.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(11, 'voluptatibus', 'et', 11, 'Illo doloremque eligendi voluptates officia. Et dicta in nam perferendis enim. Numquam quasi dolorem at adipisci quia officia cupiditate. Fuga ducimus et sit dolores eveniet.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(12, 'expedita', 'consequatur', 9, 'Voluptatem dolorum in occaecati aut aut maxime. Odio fugiat saepe incidunt sunt incidunt accusamus.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(13, 'sapiente', 'unde', 11, 'Eum enim natus est voluptatum adipisci eos libero. Mollitia quam qui consectetur quibusdam accusantium itaque.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(14, 'incidunt', 'cumque', 19, 'Sit consequuntur pariatur et eligendi eveniet ab et. Est harum nemo officiis sint est quidem quia qui. Quo nemo maxime id natus natus ea. Ipsum sapiente nostrum porro qui.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(15, 'vero', 'consectetur', 9, 'Odio reiciendis aut dolores perferendis ex. Maxime omnis dolorem deserunt consequuntur libero aut.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(16, 'tempora', 'voluptatem', 17, 'Harum ducimus unde eligendi quos quia voluptates. Odit dolorem aut a error animi aut. Quis labore earum adipisci dolore assumenda rerum.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(17, 'doloremque', 'eveniet', 12, 'Voluptatem enim est qui blanditiis sit saepe. Aut ipsa ea perferendis eius voluptatem est. Ducimus voluptas reprehenderit facere voluptas hic et. Excepturi id dicta eveniet quia quis rerum.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(18, 'odit', 'velit', 20, 'Similique ipsa iure ea aliquam nisi modi. Aliquid mollitia esse et delectus. Beatae dolore velit iusto voluptas incidunt doloremque. Vel in delectus dignissimos debitis omnis eos voluptatem.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(19, 'commodi', 'iure', 18, 'Cupiditate odit sed repellendus et in ipsa harum. Vel tempore quia expedita rerum omnis porro possimus.', '2022-05-21 14:50:28', '2022-05-21 14:50:28'),
(20, 'dolores', 'sint', 17, 'Eos ut eum quia impedit animi sequi harum sit. Error quasi reiciendis cum rerum iure. Aut unde sit iste est sed iste. Officia nemo consequatur velit.', '2022-05-21 14:50:28', '2022-05-21 14:50:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_08_072603_create_autores_table', 1),
(6, '2022_05_08_072933_create_libros_table', 1),
(7, '2022_05_08_073623_create_alquileres_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telefono`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'dwes', 'dwes@dwes.local', '958111111', NULL, '$2y$10$2jmTUvfZl.S13de9GvVprO8DNPraKYt0fkjJUv/ZdX.I9NlleQINS', 'r1wO4zJVb3ySlK6rLSphX21kLaWQMswkco6TuuO9u5JlZPYBc60UtCSuD8se', '2022-05-21 14:39:47', '2022-05-21 14:39:47'),
(3, 'Miguel Ferre', 'miguel@dwes.local', '999999999', NULL, '$2y$10$o/UsMXJA.cw4bqK1Qmc3S.J2DgdXUefslP49ZWp05K0G/.tDzRyVq', NULL, '2022-05-21 14:42:43', '2022-05-21 14:42:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alquileres_codlibro_foreign` (`codLibro`),
  ADD KEY `alquileres_codusuario_foreign` (`codUsuario`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_autor_id_foreign` (`autor_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `alquileres_codlibro_foreign` FOREIGN KEY (`codLibro`) REFERENCES `libros` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alquileres_codusuario_foreign` FOREIGN KEY (`codUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
