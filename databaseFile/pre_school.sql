-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 08:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pre_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`id`, `blood_group`, `created_at`, `updated_at`) VALUES
(1, 'A+', NULL, NULL),
(2, 'B+', NULL, NULL),
(3, 'AB+', NULL, NULL),
(4, 'O+', NULL, NULL),
(5, 'O-', '2023-06-19 19:00:00', '2023-06-20 10:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `department_id`, `course_description`, `course_image`, `created_at`, `updated_at`) VALUES
(6, 'Artificial Intellegence', 1, 'jdbcdbbbd', 'http://127.0.0.1:8000/uploads/courses/648078770613b.jpg', NULL, NULL),
(8, 'BSBA', 2, 'bussienss adminstration', 'http://127.0.0.1:8000/uploads/courses/6481bb3d48315.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `hod` varchar(255) DEFAULT NULL,
  `started_year` varchar(255) DEFAULT NULL,
  `Num_students` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `hod`, `started_year`, `Num_students`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science', 'Saddam khan', '2023-01-01', '50032323', NULL, NULL),
(2, 'Managment science', 'Haider khan', '2022-11-05', '12000', NULL, NULL),
(6, 'Zoology', 'khan muhammad', '2023-06-07', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_05_29_103438_create_courses_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 2),
(20, '2023_06_03_191920_create_department_table', 2),
(22, '2023_06_08_205713_create_prsubjects_table', 3),
(23, '2023_06_20_061418_create_section_table', 4),
(26, '2023_06_14_091404_create_student_table', 5),
(27, '2023_06_20_103713_create_blood_group_table', 6),
(28, '2023_06_21_111229_add_columns_to_student_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prsubjects`
--

CREATE TABLE `prsubjects` (
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `subject_Name` varchar(255) NOT NULL,
  `CourseName` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prsubjects`
--

INSERT INTO `prsubjects` (`subject_id`, `subject_Name`, `CourseName`, `created_at`, `updated_at`) VALUES
(3, 'Data Analytics Here update2', 6, NULL, NULL),
(12, 'Python Basic', 6, NULL, NULL),
(13, 'Into to programming', 6, NULL, NULL),
(14, 'mgb new', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `rollnum` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `religion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` bigint(20) UNSIGNED NOT NULL,
  `class` bigint(20) UNSIGNED NOT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `gender`, `dateofbirth`, `rollnum`, `bloodgroup`, `religion`, `email`, `password`, `department`, `class`, `section`, `phone_number`, `student_image`, `created_at`, `updated_at`) VALUES
(1, 'xsx', 'sxsxs', 'female', '2023-06-21', '232', 'B+', 'Christian', 'dsds@gamil.com', '123456789', 1, 6, 1, '3443434434353', 'http://127.0.0.1:8000/uploads/students/6492dc3f27918.jpg', NULL, NULL),
(2, 'aa', 'sasas', 'female', '2023-06-21', '232', 'A+', 'Islam', 'ass@gmail.com', '123456789', 1, 6, 1, '123123123', 'http://127.0.0.1:8000/uploads/students/6492e04298f54.20180522_190036.jpg', NULL, NULL),
(3, '1', '21', 'female', '2023-06-22', '232', 'A+', 'Islam', '2@gmail.com', '234324324', 1, 6, 1, '234324324', '', NULL, NULL),
(5, '1', '21', 'female', '2023-06-22', '232', 'A+', 'Islam', '45@gmail.com', '234324324', 1, 6, 1, '234324324', 'http://127.0.0.1:8000/uploads/students/6492e11adb4f3.jpg', NULL, NULL),
(6, 'haider', 'sir g', 'male', '2023-06-21', '232', 'A+', 'Islam', 'yawar@gmail.com', '12345678', 1, 6, 1, '123123123', '', NULL, NULL),
(8, 'tesst55', 'yrr', 'female', '2023-06-09', '232', 'B+', 'Hindu', 'test22@gmail.com', '324324234', 2, 6, 1, '234324234234', 'http://127.0.0.1:8000/uploads/students/6492ea50519c6.jpg', NULL, NULL),
(9, 'hamad', 'khn', 'female', '2023-06-21', '239', 'A+', 'Islam', 'hamad@gmail.com', '1234', 1, 6, 1, '1234', 'http://127.0.0.1:8000/uploads/students/6492ee597ed2e.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yawar', 'y@g.com', NULL, '$2y$10$RNzOWYr0OiZiIotU0O.2m.xLqmJG4WQUwTYtC4CBmiFq/hLozuS7m', NULL, '2023-05-30 06:12:56', '2023-05-30 06:12:56'),
(2, 'yawar', 'roy@gmail.com', NULL, '$2y$10$Nm6k9unaB8TTO9Mi3ZJSA.Rm4T1AuXgSxxhClyM16SZNLW9MbARri', NULL, '2023-05-30 06:44:56', '2023-05-30 06:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prsubjects`
--
ALTER TABLE `prsubjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `prsubjects_coursename_foreign` (`CourseName`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_email_unique` (`email`),
  ADD KEY `student_department_foreign` (`department`),
  ADD KEY `student_class_foreign` (`class`),
  ADD KEY `student_section_foreign` (`section`);

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
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prsubjects`
--
ALTER TABLE `prsubjects`
  MODIFY `subject_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `prsubjects`
--
ALTER TABLE `prsubjects`
  ADD CONSTRAINT `prsubjects_coursename_foreign` FOREIGN KEY (`CourseName`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_class_foreign` FOREIGN KEY (`class`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `student_department_foreign` FOREIGN KEY (`department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `student_section_foreign` FOREIGN KEY (`section`) REFERENCES `section` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
