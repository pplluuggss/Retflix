-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2024 г., 20:14
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `retflix`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dorams`
--

CREATE TABLE `dorams` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dorams`
--

INSERT INTO `dorams` (`id`, `img`, `title`, `rating`, `description`) VALUES
(1, 'assets/img/20.png', 'Падающая звезда', 7.2, 'Сериал'),
(2, 'assets/img/21.png', 'Замкнутый босс', 7.7, 'Сериал'),
(3, 'assets/img/22.png', 'Ева', 5.9, 'Сериал'),
(4, 'assets/img/23.png', 'Клетки Ю-ми', 8.1, 'Сериал'),
(5, 'assets/img/24.png', 'Военный прокурор доберман', 7.5, 'Сериал'),
(6, 'assets/img/21.png', 'Замкнутый босс', 7.7, 'Сериал');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phonenumber`, `email`, `text`) VALUES
(1, 'Валера', '89192030173', '', '123'),
(2, 'Валера', '89192030173', 'asdasd@mail.ru', '123'),
(3, 'Валера', '89192030173', 'asdasd@mail.ru', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `img`, `title`, `rating`, `description`) VALUES
(1, 'assets/img/1.png', '1+1', 6.6, 'Фильм'),
(2, 'assets/img/2.png', 'Королевство зверей', 5.7, 'Фильм'),
(3, 'assets/img/3.png', 'Остров теней', 6.4, 'Фильм'),
(4, 'assets/img/4.png', 'Мгла', 4.6, 'Фильм'),
(5, 'assets/img/5.png', 'Спенсер', 5.4, 'Фильм'),
(6, 'assets/img/6.png', 'Треугольник печали', 7.6, 'Фильм');

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `rate` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liked` int(255) NOT NULL,
  `comments` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `forum`
--

INSERT INTO `forum` (`id`, `rate`, `title`, `text`, `liked`, `comments`, `img`) VALUES
(1, 22, 'Летучий корабль', 'Совсем не понравилось. Художники по костюмам на экстази что ли. Картинка настолько приторно-кислотная, невозможно смотреть. Скучно. Игра плохая. Бабки-ежки - пациенты Кащенко. Набор кадров, нет цельности истории. Марвел по-сберовски(', 65, 65, 'forum-1.png'),
(2, 0, 'Бордерлендс', 'Любите одноименную игру? Тогда вам будет интересно посмотреть фильм «Бордерлендс». Президент корпорации Атлас нанимает охотницу за головами Лилит, чтобы та нашла его похищенную дочь Тину, которую удерживают на планете Пандора. Лилит выросла на этой планете и хорошо ее знает. Но она не ожидала, что ей предстоит объединиться с группой искателей приключений, которые намерены раскрыть древнюю тайну Пандоры и не позволить технологиям древней цивилизации поспать не в те руки.', 0, 0, 'forum-2.png'),
(3, 9, 'Водитель олигарх', 'Фильм «Водитель-олигарх» режиссера Алексея Пиманова представляет собой комедийную историю о молодом бизнесмене Тимуре Бабурине, который получает в наследство контрольный пакет акций крупного банка. Главный герой, которого играет Павел Прилучный, известен своим авантюрным характером и любовью к острым ощущениям. Он заключает пари со своим бизнес партнером и становится личным водителем капризной актрисы, которую играет Ольга Погодина.', 43, 4, 'forum-3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `category`, `title`, `text`) VALUES
(1, 'news_1.png', 'Новости, новости сериалов, спорт', 'Сериал «Тед Лассо» продлили на 4 сезон: смотрим футбольные драмы в кино и в реальности', '«Тед Лассо» — это американский комедийно-драматический сериал, посвященный футболу. Главный герой по имени Тед Лассо, ранее тренировавший команду…'),
(2, 'news_2.png', 'Новости, новости кино, что посмотреть', '«Беляковы в отпуске»: фильм с Сергеем Светлаковым и другие роли звезды шоу «Наша Раша»', 'Пора готовиться к бархатному сезону! 26 сентября на большие экраны выходит фильм «Беляковы в отпуске» — комедия о том, как обычная семья из Таганрога отправляется в Турцию. В центре сюжета — Сергей...'),
(3, 'news_3.png', 'Интересно знать, статьи', 'Поколение 90-х: почему потерянное, особенности и влияние на современную культуру', 'Вспомните тамагочи, «Особенности национальной охоты» и песни группы «Иванушки International»… Если вам все это знакомо, значит, вы — дети 90-х! В статье с легкой ностальгией смотрим на особенности...'),
(4, 'news_4.png', 'Новости, новости сериалов', 'Отрывок из сериала «Дети перемен»: готовимся к выходу эксклюзива от Retflix', 'В интернете появился отрывок из грядущего сериала «Дети перемен». Из небольшого кусочка становится понятна атмосфера всего проекта, и мы уже немного знакомимся с главными героями. Наблюдая за...'),
(5, 'news_5.png', 'Новости, обзоры, что посмотреть', '15 лет вселенной игр Batman Arkham: празднуем юбилей и вспоминаем отечественных супергероев', '25 августа серия игр Batman Arkham отметила юбилейную дату — 15 лет с выхода первой игры в линейке. Напоминаем вам об играх серии и предлагаем смотреть фильмы про супергероев вместе с нами.'),
(6, 'news_6.png', 'Новости', 'Retflix Музыка: как работает новый музыкальный стриминг и почему его стоит установить', 'Встречайте Retflix Музыку: новую стриминговую платформу для прослушивания музыки, онлайн-радио и другого контента в аудиоформате. Присоединяйтесь к сервису…'),
(7, 'news_7.png', 'Новости, новости сериалов, рекомендации', 'Первая серия музыкального байопика «Комбинация» уже на Retflix', 'Сегодня в онлайн-кинотеатре Retflix вышла первая серия самого ожидаемого проекта осени — байопика «Комбинация» про легендарный герлз-бэнд 90-х с Елизаветой Базыкиной, Анастасией Уколовой...'),
(8, 'news_8.png', 'Детали и факты, обзоры, статьи', 'Идеальное guilty pleasure! Смотреть «Эмили в Париже» стоит всем, кто любит «Секс в большом городе»', '15 августа вышла первая часть 4 сезона «Эмили в Париже». Дата выхода новых серий — 12 сентября 2024. Этот ромком с Лили Коллинз захватил сердца миллионов девушек, особенно фанаток Кэрри...'),
(9, 'news_9.png', 'Интересно знать, статьи', 'Ностальгия по 90-м: культовые символы и возвращение трендов', '«У меня ностальгия по 90-м!», — обычно так никто не говорит, согласитесь? Но тем не менее мы готовы снова и снова смотреть любимые сериалы детства, по дороге на работу играть в современные аналоги тетриса...'),
(10, 'news-card1.png', 'Интересно знать, статьи', 'Субкультуры 90-х: брейк-данс, гранж и другие молодежные движения', 'Субкультуры 90-х в России стали неотъемлемой частью культурного ландшафта своего времени, отражая разнообразие и противоречивость эпохи. Это десятилетие,…'),
(11, 'news-card2.png', 'Новости, новости кино, подборки', 'Сериал «Гудбай» про Байдена и другие проекты Дмитрия Дюжева', 'Российские киноделы давно доказали, что умеют снимать комедии, особенно сатирические. «Особенности национальной охоты», «Горько!», «О чем говорят мужчины»,…'),
(12, 'news-card3.png', 'Новости, новости сериалов, что посмотреть', 'Демоны и обмен телами: какие новинки аниме от Amediateka смотрим осенью на Retflix', 'Азиатская анимация становится все более важным и значимым элементом массовой поп-культуры. Ежегодно в ее фан-клуб прибывают новые поклонники,…');

-- --------------------------------------------------------

--
-- Структура таблицы `recommend`
--

CREATE TABLE `recommend` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `recommend`
--

INSERT INTO `recommend` (`id`, `img`, `title`, `rating`, `description`) VALUES
(1, 'assets/img/13.png', 'Контейнер', 1.3, 'Сериал'),
(2, 'assets/img/14.png', 'Драйв', 8.8, 'Фильм'),
(3, 'assets/img/15.png', 'Чукур', 5.8, 'Сериал'),
(4, 'assets/img/16.png', 'Память', 4.9, 'Фильм'),
(5, 'assets/img/17.png', 'Ветреный холм', 6.2, 'Сериал'),
(6, 'assets/img/18.png', 'Дела человеческие', 8.2, 'Фильм'),
(7, 'assets/img/19.png', 'Счастье', 8.9, 'Сериал');

-- --------------------------------------------------------

--
-- Структура таблицы `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `series`
--

INSERT INTO `series` (`id`, `img`, `title`, `rating`, `description`) VALUES
(1, 'assets/img/7.png', 'Миссии', 4.5, 'Сериал'),
(2, 'assets/img/8.png', 'Игры имерий', 6.4, 'Сериал'),
(3, 'assets/img/9.png', 'Задача трёх тел', 5.4, 'Сериал'),
(4, 'assets/img/10.png', 'Моё маленькое счастье', 5.7, 'Сериал'),
(5, 'assets/img/11.png', 'Зомби детектив', 6.9, 'Сериал'),
(6, 'assets/img/12.png', 'Спрячь меня', 9.9, 'Сериал');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Илья', 'lom@mail.ru', '123', 'user'),
(2, 'admin', 'admin@mail.ru', '123456', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dorams`
--
ALTER TABLE `dorams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dorams`
--
ALTER TABLE `dorams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `recommend`
--
ALTER TABLE `recommend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
