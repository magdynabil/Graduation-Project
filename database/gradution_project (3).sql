-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 10:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradution_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_number` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `car_discribtion` text NOT NULL,
  `When_to_move` date NOT NULL,
  `move_time` time NOT NULL,
  `start_station` text NOT NULL,
  `Arrival_station` text NOT NULL,
  `Available_places` text NOT NULL,
  `car_image` text NOT NULL,
  `trip_add_date` text NOT NULL,
  `auther` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_number`, `phone_number`, `car_discribtion`, `When_to_move`, `move_time`, `start_station`, `Arrival_station`, `Available_places`, `car_image`, `trip_add_date`, `auther`) VALUES
(5, 2951, 1123316615, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-10-23', '01:00:00', 'الحي المتميز', 'مدينة بدر', '5', 'img/car/post5f1dd25432aa2.jpg', '2020-Jul-26', 16),
(6, 123, 1123316615, 'سياره هيونداي (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-10-16', '23:02:00', 'الحي المتميز', 'مدينة نصر', '4', 'img/car/post5f1dd2c4dafce.png', '2020-Jul-26', 16),
(7, 2951, 1123316615, 'سياره متسوبيشر(افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-12-11', '13:02:00', 'الجهاز', 'مدينة نصر', '4', 'img/car/post5f1dd3558e54b.jpg', '2020-Jul-26', 16),
(8, 12333, 1226538598, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-07-29', '21:07:00', 'موقف السوبر', 'رمسيس', '3', 'img/car/post5f1dd3922e725.png', '2020-Jul-26', 16),
(9, 2951, 1123316615, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-10-23', '21:04:00', 'الحي المتميز', 'مدينة بدر', '3', 'img/car/post5f1dd3ca5f03a.jpg', '2020-Jul-26', 16),
(10, 12333, 1226538598, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-09-30', '21:08:00', 'الحي المتميز', 'مدينة بدر', '5', 'img/car/post5f1dd4168975f.jpg', '2020-Jul-26', 16),
(11, 1233, 1123316615, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-11-11', '21:11:00', 'شارع البحر الاعظم ', 'دوران شبرا ', '5', 'img/car/post5f1dd4b587b8c.png', '2020-Jul-26', 16),
(12, 121150, 1123316615, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-11-21', '21:14:00', 'اكادمية الشروق ', 'الكيلوا 4ونص', '4', 'img/car/post5f1dd59e10611.jpg', '2020-Jul-26', 16),
(13, 123345, 1123316615, 'سياره النترا (افانتي (اوروبي (عداد 132 الف كيلو) كامله أوتوماتيك بحالة ممتازة فابريكا دواخل بالكامل وسقف وشنطه وكبوت موديل 2004،الموتور والفتيس والعفشه والتكييف بحاله فوق الممتازه، كماليات', '2020-11-27', '21:17:00', 'جنه مول', 'موقف العاشر السلام', '1', 'img/car/post5f1dd6566f279.jpg', '2020-Jul-26', 16);

-- --------------------------------------------------------

--
-- Table structure for table `loss`
--

CREATE TABLE `loss` (
  `loss_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `loss_des` text NOT NULL,
  `loss_img` text NOT NULL,
  `comment` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loss`
--

INSERT INTO `loss` (`loss_id`, `name`, `loss_des`, `loss_img`, `comment`, `date`) VALUES
(26, ' محمد عبد العاطي حامد مرسي عفيفي', 'لطفل اللى فى الصورة ده تايه من أهله وموجود دالوقتى عند سوبر ماركت هاشم فى تفتيش كفر سعد - دمياط واسمه ( محمد عبد العاطي حامد مرسي عفيفي ) من قرية كفر يوسف - مركز مشتول السوق - محافظة الشرقية ، رجاء مشاركة البوست من الجميع حتى يصل المنشور لأهله أو معارفهم ، ورقم تليفون هاشم\r\n( ‭0100 5587348‬ ) ، وجزاكم الله خيراً دا ثواب عظيم الله أعلم بحال أهله دالوقتى .', 'img/loss/post5f1ddcf16b415.jpg', '', '2020-Jul-26'),
(27, 'سيلا احمد', 'لو سمحتوا البنت دى تايهه وانا لقيتها فى اخر الممشي بتعدى الشارع لوحدها\r\nالبنت بتقول اسمها سيلا ومامتها اسمها عبير\r\nوباباها اسمه محمد مصطفى\r\nاب كتير يا جماعه بليز انا واقفة عند وهيب فى الممشى وهى معايا\r\nاللى يعرفها يرن على رقمى 01288225926\r\n', 'img/loss/post5f1ddd5fb8223.jpg', '', '2020-Jul-26'),
(28, ' حسام محمد', 'الولد ده موجود في #المنيل بيببع مناديل بيقول ان اسمه حسام وعنده 6 سنين بيقول انه كان بيروح المدرسه والحضانه وعنده تيته اسمها امال في الطالبيه #فيصل و قال انه قاعد دلوقتي في #المطريه و جت ست معاه قالت كلام ثاني', 'img/loss/post5f1ddddf8d5ac.jpg', '', '2020-Jul-26'),
(29, 'مينا عاطف كمال', 'الاسم/مينا عاطف كمال\r\nالسن/١٦ سنه متغيب من يوم الاحد ٧ يوليو\r\nمن يجده اويعرف اي معلومات برجاء الاتصال\r\n٠١٢٧١٤٠٢١٠٢', 'img/loss/post5f1dde4735e53.jpg', '', '2020-Jul-26'),
(30, 'محمد عبد التواب', 'لوسمحتو كلو ينزل صوره الولد ده ضروري هو تايهه والراجل ده لقاه انهارده الصبح ماشي وعمال يعيط ومش عارف اي حاجه وسالو عليه كتير محدش عرفه خالص وهو قاعد عند الراجل ده الي معاه في الصوره في دار السلام ياريت ا\r\n01123316615', 'img/loss/post5f1ddf18097bd.jpg', '', '2020-Jul-26'),
(34, ' محمد', 'ياجماعة الولد ده مع واحدة ع شط فى العجمى فى حتة أسمها الهانوفيل شارع الجمعية مسرحة الولد بمناديل و هو عنده تقريبا 3 سنين بتسيبه يمشى ع الشط لوحده و الولد مش شبها لو تايه من حد أو حد مخطوف منه طفل من فترة فى العمر ده يشوفه ساعدوه يرجع لأهله الله يخليكم أعملوا شير كتير\r\nالولد بيقول أسمى محمد بس معرفش ده اسمه ولا هى اللى مسمياه كدة\r\n01224495345', 'img/loss/post5f1de0f6714b7.jpg', '', '2020-Jul-26');

-- --------------------------------------------------------

--
-- Table structure for table `loss_comm`
--

CREATE TABLE `loss_comm` (
  `id` int(11) NOT NULL,
  `loss_comm_id` int(11) NOT NULL,
  `loss_com` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loss_comm`
--

INSERT INTO `loss_comm` (`id`, `loss_comm_id`, `loss_com`) VALUES
(41, 34, 'انا عندي معلومات ممكن تفيدك');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `servise_id` int(11) NOT NULL,
  `titile` text NOT NULL,
  `servise` text NOT NULL,
  `start` text NOT NULL,
  `close` text NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL,
  `author` int(11) NOT NULL,
  `servise_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`servise_id`, `titile`, `servise`, `start`, `close`, `location`, `image`, `author`, `servise_date`) VALUES
(31, 'سوبر ماركت ', 'سوبر ماركت اسواق المصطفي \r\n01123316615', '10:00AM', '01:00PM', 'مدينة الشروق الحي التاسع جنه مول ', 'img/post/post5f1eccfff384c.jpg', 16, '2020-Jul-27'),
(32, 'سوبر ماركت ', 'اسواق الاتحاد 01226538598', '10:00AM', '01:00PM', 'مدينة الشروق الحي التاسع جنه مول ', 'img/post/post5f1ecd5dd2bc8.jpg', 16, '2020-Jul-27'),
(33, 'مول ', 'كارفور الشروق', '09:00ِِِِِِAM', '01:00PM', 'مدخل مدينة الشروق الحي الاول', 'img/post/post5f1ecdd426ec0.jpg', 16, '2020-Jul-27'),
(34, 'بنزينه ', 'بنزينة وطنية الشروق', '10:00AM', '01:00PM', 'طريق مصر الاسماعليه الصحراوي بوابة الشروق الاولي ', 'img/post/post5f1ecea0cfbae.png', 16, '2020-Jul-27'),
(35, 'مول', 'مول سبينس مدينة الشروق', '09:00ِِِِِِAM', '01:00PM', 'مدينة الشروق بجوار اكاديمية الشروق', 'img/post/post5f1eceeab17b7.jpg', 16, '2020-Jul-27'),
(36, 'مكتبة', 'مكتبة السفير \r\n01226538598', '09:00ِِِِِِAM', '01:00PM', 'مدينة الشروق شارع البحر الاعظم', 'img/post/post5f1ecf703e434.jpg', 16, '2020-Jul-27'),
(37, 'نجار', 'استاز اسامه النجار \r\n01123316615', '10:00AM', '05:00PM', 'يخدم جميع الاماكن داخل مدينة الشروق', 'img/post/post5f1ecfc13911d.jpg', 16, '2020-Jul-27'),
(38, 'سباك', 'استاز ايمن السباك \r\n01123316615', '10:00AM', '05:00PM', 'يخدم جميع الاماكن داخل مدينة الشروق', 'img/post/post5f1ed0528bc71.png', 16, '2020-Jul-27'),
(39, 'كهربائي', 'استاز احمد الكهربائي \r\n01123316615', '10:00AM', '05:00PM', 'يخدم جميع الاماكن داخل مدينة الشروق', 'img/post/post5f1ed0b837631.jpg', 16, '2020-Jul-27'),
(40, 'مطعم', 'مطعم اسماك ماكريل', '10:00AM', '01:00PM', 'مدينة الشروق السوق التجاري', 'img/post/post5f1ed4b83b38d.jpg', 16, '2020-Jul-27'),
(41, 'مطعم', 'كشري الدكتور \r\n01205808070', '10:00AM', '01:00PM', 'المنطقة الخامسة المتميذ خلف مكتب بريد الشروق', 'img/post/post5f1ed58236a52.jpg', 16, '2020-Jul-27'),
(42, 'صيدلية', 'صيدلية 19011 مدينة الشروق', '10:00AM', '01:00PM', 'كارفور فرع مدينة الشروق', 'img/post/post5f1ed62828a3b.jpg', 16, '2020-Jul-27');

-- --------------------------------------------------------

--
-- Table structure for table `sin_up`
--

CREATE TABLE `sin_up` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `Password` text NOT NULL,
  `gender` text NOT NULL,
  `picture` text NOT NULL,
  `about` text NOT NULL,
  `facebook` text NOT NULL,
  `instgeram` text NOT NULL,
  `twitter` text NOT NULL,
  `security_question_1` text NOT NULL,
  `answer_1` text NOT NULL,
  `security_question_2` text NOT NULL,
  `answer_2` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sin_up`
--

INSERT INTO `sin_up` (`user_id`, `user_name`, `email`, `Password`, `gender`, `picture`, `about`, `facebook`, `instgeram`, `twitter`, `security_question_1`, `answer_1`, `security_question_2`, `answer_2`, `date`) VALUES
(16, 'magdy nabil', 'magdynabil1997@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'male', 'img/picture/user5f1ec43b1f5ca.jpg', 'web develober', '#', '#', '#', ' What was the name of your first stuffed animal?', 'm', 'What was your childhood nickname?', 'n', '20-07-27'),
(17, 'mina nabil', 'magdynabil1993@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'male', 'img/picture/user5f1ee79e8f104.jpg', 'طبيب بيطري', '', '', '', ' What was the name of your first stuffed animal?', 'm', 'What was your childhood nickname?', 'n', '20-07-27'),
(18, 'magdy nabil11', 'magdynabil121150@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'male', 'img/picture/user5f21a62fd8698.jpg', '123', '', '', '', ' What was the name of your first stuffed animal?', 'm', 'What was your childhood nickname?', 'n', '20-07-29'),
(19, 'magdy ', 'magdynabil1211850@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'male', 'img/picture/user5f23343727b47.jpg', '123', '', '', '', ' What was the name of your first stuffed animal?', 'm', 'What was your childhood nickname?', 'n', '20-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `star`
--

INSERT INTO `star` (`id`, `id_post`, `ip`, `rate`, `dt_rated`) VALUES
(2, 8, 0, 1, '2020-03-02 22:59:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `loss`
--
ALTER TABLE `loss`
  ADD PRIMARY KEY (`loss_id`);

--
-- Indexes for table `loss_comm`
--
ALTER TABLE `loss_comm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`servise_id`);

--
-- Indexes for table `sin_up`
--
ALTER TABLE `sin_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loss`
--
ALTER TABLE `loss`
  MODIFY `loss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `loss_comm`
--
ALTER TABLE `loss_comm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `servise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sin_up`
--
ALTER TABLE `sin_up`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
