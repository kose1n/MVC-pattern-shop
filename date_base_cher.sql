-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 16 2022 г., 15:54
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `date_base_cher`
--

-- --------------------------------------------------------

--
-- Структура таблицы `order_users`
--

CREATE TABLE `order_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_adress` text NOT NULL,
  `user_city` text NOT NULL,
  `user_zip` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_users`
--

INSERT INTO `order_users` (`id`, `user_name`, `user_phone`, `user_comment`, `user_adress`, `user_city`, `user_zip`, `user_id`, `date`, `products`, `status`) VALUES
(38, 'Косенков Виталий Влад', '89535207823', 'ПРивет как дела', 'Череповец', 'Череповец', '162600', 25, '2021-04-10 15:07:57', '{\"18\":[\"45\",\"43\",\"42\",\"40\"]}', 1),
(39, 'Косенков Виталий Влад', '89535207823', 'ПРивет как дела787', 'Череповец', 'Череповец', '162600', 25, '2021-04-10 15:09:06', '{\"8\":[\"40\",\"41\",\"42\"],\"19\":[\"40\",\"41\",\"42\"]}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `avallabillty` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `price`, `avallabillty`, `brand`, `description`, `is_new`, `status`) VALUES
(3, 'New Balance 754', 11123, 4000, 1, 'NB', '● Культовая модель  <br>\r\n● Технология амортизации Air <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина \r\n ', 1, 1),
(4, 'Nike Air Force 1 Low', 1231223, 5000, 1, 'Nike', '● Материал верха: текстиль, экокожа <br>\r\n● Материал подошвы: резина  <br>\r\n● Футуристичное строение системы шнуровки <br>\r\n● Подошва со вставкой Ai <br>', 1, 1),
(5, 'New Balance RC2', 213123, 5000, 1, 'NB', '● Верх из эко-кожи  <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель <br>\r\n', 0, 1),
(6, 'Nike Air Force 1 LV8 Utility', 45422, 4500, 1, 'Nike', '● Верх из эко-кожи  <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель  <br>', 1, 1),
(7, 'Adidas Ozweego', 1555, 5000, 1, 'Adidas', '● Верх из эко-кожи <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель <br>\r\n', 0, 1),
(8, 'New Balance 754', 55222, 5000, 1, 'NB', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>\r\n\r\n', 1, 1),
(9, 'Nike Air Force 1 LV8 1', 2666, 4777, 1, 'Nike', '● Сочетание замши, кожи и нейлона  <br>\r\n● Дополнительный ремешок для фиксации  <br>\r\n● Массивная подошва  <br>\r\n● Фирменный брендинг  <br>\r\n', 0, 1),
(10, 'Nike Air Barrage Mid', 73431, 5000, 1, 'Nike', '● Верх из замши, текстиля  <br>\r\n● Литая подошва  <br>\r\n● Технология GEL в носке и пятке  <br>\r\n● Колодка ORTHOLITE, стелька EVA  <br>\r\n', 0, 1),
(11, 'NIKE AIR FORCE 1 LV8 1', 6236, 4700, 1, 'Nike', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>', 0, 1),
(12, 'NIKE AIR FORCE 1 LV8 1', 24173, 5000, 1, 'Nike', '● Культовая модель <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина <br>', 1, 1),
(13, 'NIKE SB DUNK LOW', 2561, 4777, 1, 'Nike', '● Материал верха: текстиль, экокожа  <br>\r\n● Материал подошвы: резина  <br>\r\n● Футуристичное строение системы шнуровки  <br>\r\n● Подошва со вставкой Air  <br>', 1, 1),
(14, 'NB 997 SPORT', 62833, 5000, 1, 'NB', '● Сочетание премиальной фактурной замши и текстиля  <br>\r\n● Mesh-сетка сверху пропускает воздух и сохраняет ногу в сухости  <br>\r\n● Материал подошвы: Резина  <br>\r\n● Мягкий задник и боковые части  <br>\r\n● Технология Encap создает необходимую амортизацию  <br>\r\n● Анатомическая стелька  <br>', 0, 1),
(15, 'Nike Air Barrage Mid', 8604, 5000, 1, 'Nike', '● Верх из замши, текстиля  <br>\r\n● Литая подошва  <br>\r\n● Технология GEL в носке и пятке  <br>\r\n● Колодка ORTHOLITE, стелька EVA  <br>\r\n', 1, 1),
(16, 'TIMBERLAND', 8563, 4700, 1, 'TIMB', '● Водонепроницаемая мембрана сохраняет ноги сухими  <br>\r\n● Верх из водонепроницаемого премиального нубука  <br>\r\n● Подкладка из искусственной шерсти  <br>\r\n● Удобная и прочная шнуровка  <br>\r\n● Резиновая подошва  <br>', 0, 1),
(17, 'WMNS ADIDAS TERREX SWIFT R2 GTX', 9536, 5000, 1, 'Adidas', '● Износостойкий текстильный верх с защитными вставками  <br>\r\n● Полностью водонепроницаемый износостойкий верх хорошо пропускает воздух  <br>\r\n● Резиновая подошва для надежного сцепления со скользкими или сухими поверхностями  <br>', 0, 1),
(18, 'WMNS REEBOK CLASSIC LEATHER MID RIPPLE', 9638, 4800, 1, 'Reebok', '● Вверх из экокожи  <br>\r\n● Кроссовки с мехом  <br>\r\n● Материал подошвы: Резина  <br>\r\n● Стелька из пеноматериала  <br>\r\n● Формованная промежуточная подошва из ЭВА  <br>\r\n● Средняя высота для лучшей устойчивости и поддержки  <br>', 1, 1),
(19, 'WMNS NIKE AIR FORCE 1 LOW', 7354, 4500, 1, 'Nike', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_girls_keds`
--

CREATE TABLE `product_girls_keds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `avallabillty` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Даамп данных таблицы `product_girls_keds`
--

INSERT INTO `product_girls_keds` (`id`, `name`, `code`, `price`, `avallabillty`, `brand`, `description`, `is_new`, `status`) VALUES
(4, 'Nike Air Force 1 Low', 12779, 5000, 1, 'Nike', '● Материал верха: текстиль, экокожа <br>\r\n● Материал подошвы: резина  <br>\r\n● Футуристичное строение системы шнуровки <br>\r\n● Подошва со вставкой Ai <br>', 0, 1),
(14, 'NB 997 SPORT', 19906, 4500, 1, 'NB', '● Сочетание премиальной фактурной замши и текстиля  <br>\r\n● Mesh-сетка сверху пропускает воздух и сохраняет ногу в сухости  <br>\r\n● Материал подошвы: Резина  <br>\r\n● Мягкий задник и боковые части  <br>\r\n● Технология Encap создает необходимую амортизацию  <br>\r\n● Анатомическая стелька  <br>', 0, 1),
(15, 'Nike Air Barrage Mid', 6333, 3500, 1, 'Nike', '● Верх из замши, текстиля  <br>\r\n● Литая подошва  <br>\r\n● Технология GEL в носке и пятке  <br>\r\n● Колодка ORTHOLITE, стелька EVA  <br>\r\n', 0, 1),
(17, 'WMNS ADIDAS TERREX SWIFT R2 GTX', 73463, 5999, 1, 'Adidas', '● Износостойкий текстильный верх с защитными вставками  <br>\r\n● Полностью водонепроницаемый износостойкий верх хорошо пропускает воздух  <br>\r\n● Резиновая подошва для надежного сцепления со скользкими или сухими поверхностями  <br>', 0, 1),
(19, 'WMNS NIKE AIR FORCE 1 LOW', 7342, 4999, 1, 'Nike', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_girls_kross`
--

CREATE TABLE `product_girls_kross` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `avallabillty` int(11) NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `is_new` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_girls_kross`
--

INSERT INTO `product_girls_kross` (`id`, `name`, `code`, `price`, `avallabillty`, `brand`, `description`, `is_new`, `status`) VALUES
(10, 'Nike Air Barrage Mid', 73431, 4999, 1, 'Nike', '● Верх из замши, текстиля  <br>\r\n● Литая подошва  <br>\r\n● Технология GEL в носке и пятке  <br>\r\n● Колодка ORTHOLITE, стелька EVA  <br>\r\n', 0, 1),
(11, 'NIKE AIR FORCE 1 LV8 1', 74543, 6500, 1, 'Nike', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>', 0, 1),
(12, 'NIKE AIR GRAD 2 SEC', 5353, 3600, 1, 'Nike', '● Культовая модель <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина <br>', 0, 1),
(13, 'NIKE SB DUNK LOW', 34566, 4500, 1, 'Nike', '● Материал верха: текстиль, экокожа  <br>\r\n● Материал подошвы: резина  <br>\r\n● Футуристичное строение системы шнуровки  <br>\r\n● Подошва со вставкой Air  <br>', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_man_keds`
--

CREATE TABLE `product_man_keds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `avallabillty` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_man_keds`
--

INSERT INTO `product_man_keds` (`id`, `name`, `code`, `price`, `avallabillty`, `brand`, `description`, `is_new`, `status`) VALUES
(3, 'New Balance 754', 7345, 5888, 1, 'NB', '● Культовая модель  <br>\r\n● Технология амортизации Air <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина \r\n ', 0, 1),
(4, 'Nike Air Force 1 Low', 73477, 3000, 1, 'Nike', '● Материал верха: текстиль, экокожа <br>\r\n● Материал подошвы: резина  <br>\r\n● Футуристичное строение системы шнуровки <br>\r\n● Подошва со вставкой Ai <br>', 0, 1),
(5, 'New Balance RC2', 6436, 5000, 1, 'NB', '● Верх из эко-кожи  <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель <br>\r\n', 0, 1),
(16, 'TIMBERLAND', 83886, 5999, 1, 'Tim', '● Водонепроницаемая мембрана сохраняет ноги сухими  <br>\r\n● Верх из водонепроницаемого премиального нубука  <br>\r\n● Подкладка из искусственной шерсти  <br>\r\n● Удобная и прочная шнуровка  <br>\r\n● Резиновая подошва  <br>', 0, 1),
(18, 'WMNS REEBOK CLASSIC LEATHER MID RIPPLE', 62358, 3999, 1, 'Reebok', '● Вверх из экокожи  <br>\r\n● Кроссовки с мехом  <br>\r\n● Материал подошвы: Резина  <br>\r\n● Стелька из пеноматериала  <br>\r\n● Формованная промежуточная подошва из ЭВА  <br>\r\n● Средняя высота для лучшей устойчивости и поддержки  <br>', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_man_kross`
--

CREATE TABLE `product_man_kross` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `avallabillty` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_man_kross`
--

INSERT INTO `product_man_kross` (`id`, `name`, `code`, `price`, `avallabillty`, `brand`, `description`, `is_new`, `status`) VALUES
(6, 'Nike Air Force 1 LV8 Utility', 6343, 5999, 1, 'Nike', '● Верх из эко-кожи  <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель  <br>', 0, 1),
(7, 'Adidas Ozweego', 6333, 4500, 1, 'Adidas', '● Верх из эко-кожи <br>\r\n● Резиновая подметка; текстильная подкладка  <br>\r\n● Амортизация Adiprene+ в передней части стопы и в зоне пятки  <br>\r\n● Мягкая и легкая модель <br>\r\n', 0, 1),
(8, 'New Balance 754', 4723, 3500, 1, 'NB', '● Культовая модель  <br>\r\n● Технология амортизации Air  <br>\r\n● Материал верха: кожа  <br>\r\n● Скрытая вставка Air для амортизации  <br>\r\n● Материал подошвы: резина  <br>\r\n\r\n', 0, 1),
(9, 'Nike Air Force 1 LV8 1', 67235, 5999, 1, 'Nike', '● Сочетание замши, кожи и нейлона  <br>\r\n● Дополнительный ремешок для фиксации  <br>\r\n● Массивная подошва  <br>\r\n● Фирменный брендинг  <br>\r\n', 0, 1),
(10, 'Nike Air Barrage Mid', 7245, 3600, 1, 'Nike', '● Верх из замши, текстиля  <br>\r\n● Литая подошва  <br>\r\n● Технология GEL в носке и пятке  <br>\r\n● Колодка ORTHOLITE, стелька EVA  <br>\r\n', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `size_order`
--

CREATE TABLE `size_order` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ava` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `ava`) VALUES
(25, 'Виталий', 'kocccs@mail.ru', '123123', 'EBdy7H7W4AUQGPe.jpg'),
(26, 'Виталий', 'koc@mail.ru', '12345678', 'кот.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user_photo`
--

CREATE TABLE `user_photo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `order_users`
--
ALTER TABLE `order_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_girls_keds`
--
ALTER TABLE `product_girls_keds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_girls_kross`
--
ALTER TABLE `product_girls_kross`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_man_keds`
--
ALTER TABLE `product_man_keds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_man_kross`
--
ALTER TABLE `product_man_kross`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `size_order`
--
ALTER TABLE `size_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_photo`
--
ALTER TABLE `user_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `order_users`
--
ALTER TABLE `order_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `product_girls_keds`
--
ALTER TABLE `product_girls_keds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `product_girls_kross`
--
ALTER TABLE `product_girls_kross`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product_man_keds`
--
ALTER TABLE `product_man_keds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `product_man_kross`
--
ALTER TABLE `product_man_kross`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `size_order`
--
ALTER TABLE `size_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `user_photo`
--
ALTER TABLE `user_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
