-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2024 at 03:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_djipay`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_log`
--

CREATE TABLE `absensi_log` (
  `id` int NOT NULL,
  `id_absensi_type` int DEFAULT NULL,
  `id_absensi_status` int DEFAULT NULL,
  `tanggal_absensi` date DEFAULT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `waktu_absensi` time DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bukti_hadir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi_log`
--

INSERT INTO `absensi_log` (`id`, `id_absensi_type`, `id_absensi_status`, `tanggal_absensi`, `day`, `waktu_absensi`, `latitude`, `longitude`, `keterangan`, `bukti_hadir`, `created_at`, `updated_at`, `created_by`) VALUES
(5, 2, 2, '2024-08-07', '5', NULL, NULL, NULL, 'Capek', 'tes1.pdf', '2024-08-07 14:51:19', '2024-08-07 14:51:33', 1),
(6, 1, 2, NULL, NULL, '07:52:00', NULL, NULL, 'Hadir', NULL, NULL, '2024-08-09 10:07:46', 1),
(7, 1, 1, NULL, NULL, '08:55:00', NULL, NULL, 'Hadir', NULL, NULL, NULL, 1),
(8, 2, 2, '2024-08-07', '3', NULL, NULL, NULL, 'Healing', 'tes1.pdf', '2024-08-07 19:03:49', '2024-08-07 19:04:50', 1),
(9, 2, 3, '2024-08-08', '5', NULL, NULL, NULL, 'Nikahan', 'tes1.pdf', '2024-08-07 19:04:11', '2024-08-07 19:04:48', 1),
(10, 2, 2, '2024-08-15', '7', NULL, NULL, NULL, 'Bulan Madu', 'tes2.pdf', '2024-08-07 19:04:31', '2024-08-07 19:04:47', 1),
(11, 2, 1, '2024-08-13', '4', NULL, NULL, NULL, 'Hadir', 'tes1.pdf', '2024-08-07 19:13:30', '2024-08-07 19:13:30', 1),
(12, 2, 1, '2024-08-06', '4', NULL, NULL, NULL, 'Jualan', 'tes2.pdf', '2024-08-07 19:13:49', '2024-08-07 19:13:49', 1),
(13, 2, 1, '2024-08-22', '5', NULL, NULL, NULL, 'Enak', 'tes2.pdf', '2024-08-07 19:14:09', '2024-08-07 19:14:09', 1),
(14, 2, 1, '2024-08-14', '3', NULL, NULL, NULL, 'itulah', 'tes2.pdf', '2024-08-07 19:16:03', '2024-08-07 19:16:03', 1),
(15, 1, 1, NULL, NULL, '08:49:00', NULL, NULL, 'Hadir', NULL, NULL, NULL, 1),
(16, 2, 2, '2024-08-08', '3', NULL, NULL, NULL, 'DBD', 'tes1.pdf', '2024-08-07 19:54:24', '2024-08-07 19:54:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_overtime`
--

CREATE TABLE `absensi_overtime` (
  `id` int NOT NULL,
  `employee_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `employee_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `overtime_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `total_hours` decimal(5,2) DEFAULT NULL,
  `overtime_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `employee_signature` tinyint(1) DEFAULT NULL,
  `supervisor_signature` tinyint(1) DEFAULT NULL,
  `manager_signature` tinyint(1) DEFAULT NULL,
  `hrd_signature` tinyint(1) DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `overtime_tasks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `overtime_rate` decimal(10,2) DEFAULT NULL,
  `total_compensation` decimal(10,2) DEFAULT NULL,
  `additional_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi_overtime`
--

INSERT INTO `absensi_overtime` (`id`, `employee_name`, `employee_id`, `department`, `position`, `overtime_date`, `start_time`, `end_time`, `total_hours`, `overtime_reason`, `employee_signature`, `supervisor_signature`, `manager_signature`, `hrd_signature`, `approval_date`, `overtime_tasks`, `overtime_rate`, `total_compensation`, `additional_notes`) VALUES
(1, NULL, '1', NULL, NULL, NULL, NULL, '18:53:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, '1', NULL, NULL, NULL, NULL, '19:55:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, '1', NULL, NULL, NULL, NULL, '20:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_status`
--

CREATE TABLE `absensi_status` (
  `id` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi_status`
--

INSERT INTO `absensi_status` (`id`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Waiting', NULL, NULL, NULL),
(2, 'Approve', NULL, NULL, NULL),
(3, 'Reject', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_type`
--

CREATE TABLE `absensi_type` (
  `id` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi_type`
--

INSERT INTO `absensi_type` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Attend', NULL, NULL, NULL),
(2, 'Leave', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `position_id` int NOT NULL,
  `type_karyawan` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nama_depan`, `nama_belakang`, `email`, `tanggal_lahir`, `jenis_kelamin`, `no_telepon`, `position_id`, `type_karyawan`, `created_at`, `updated_at`) VALUES
(2, 'Jeremy', 'Neigh', 'jeremy@gmail', '2014-07-02', 'Laki-laki', '081234567890', 1, 'seasonal', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees_allowance`
--

CREATE TABLE `employees_allowance` (
  `id` int NOT NULL,
  `tunjangan_makan` decimal(15,2) NOT NULL,
  `tunjangan_jabatan` decimal(15,2) NOT NULL,
  `tunjangan_keluarga` decimal(15,2) NOT NULL,
  `tunjangan_transport` decimal(15,2) NOT NULL,
  `tunjangan_kehadiran` decimal(15,2) NOT NULL,
  `bpjs_kesehatan` decimal(15,2) NOT NULL,
  `bpjs_ketenagakerjaan` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees_position`
--

CREATE TABLE `employees_position` (
  `id` int NOT NULL,
  `position_salary_id` int NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees_position`
--

INSERT INTO `employees_position` (`id`, `position_salary_id`, `position_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tax Officer', 'pencatatan, pembayaran, pelaporan, hingga pengawasan proses administrasi', '', ''),
(2, 2, 'Branch Manager', 'bertanggungjawab atas semua hal pada kantor cabang', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees_position_salaries`
--

CREATE TABLE `employees_position_salaries` (
  `id` int NOT NULL,
  `gaji_pokok` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees_position_salaries`
--

INSERT INTO `employees_position_salaries` (`id`, `gaji_pokok`, `created_at`, `updated_at`) VALUES
(1, '1000000.00', '2024-07-10 07:39:59', NULL),
(2, '2000000.00', '2024-07-10 07:40:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees_tax`
--

CREATE TABLE `employees_tax` (
  `id` int NOT NULL,
  `percentage` decimal(10,3) NOT NULL,
  `masa_berlaku` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int NOT NULL,
  `employee_id` int NOT NULL,
  `tanggal_penggajian` date NOT NULL,
  `total_gaji_pokok` decimal(15,2) NOT NULL,
  `total_tunjangan_jabatan` decimal(15,2) NOT NULL,
  `total_tunjangan_keluarga` decimal(15,2) NOT NULL,
  `total_tunjangan_makan` decimal(15,2) NOT NULL,
  `total_tunjangan_transport` decimal(15,2) NOT NULL,
  `total_tunjangan_kehadiran` decimal(15,2) NOT NULL,
  `total_bpjs_kesehatan` decimal(15,2) NOT NULL,
  `total_bpjs_ketenagakerjaan` decimal(15,2) NOT NULL,
  `total_pajak_pph_21` decimal(15,2) NOT NULL,
  `total_gaji` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `persentase_pajak_pph_21` decimal(15,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `access_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `employee_id` int DEFAULT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `access_token`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `employee_id`, `verification_token`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_log`
--
ALTER TABLE `absensi_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_absensi_type_absensi_type_id` (`id_absensi_type`),
  ADD KEY `fk_id_absensi_status_absensi_status_id` (`id_absensi_status`),
  ADD KEY `fk_created_by_user_id` (`created_by`);

--
-- Indexes for table `absensi_overtime`
--
ALTER TABLE `absensi_overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absensi_status`
--
ALTER TABLE `absensi_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absensi_type`
--
ALTER TABLE `absensi_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_position_id_employees_position_id` (`position_id`);

--
-- Indexes for table `employees_allowance`
--
ALTER TABLE `employees_allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_position`
--
ALTER TABLE `employees_position`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_position_salary_id_employees_position_salaries_id` (`position_salary_id`);

--
-- Indexes for table `employees_position_salaries`
--
ALTER TABLE `employees_position_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_tax`
--
ALTER TABLE `employees_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employee_id_employees_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_log`
--
ALTER TABLE `absensi_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `absensi_overtime`
--
ALTER TABLE `absensi_overtime`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `absensi_status`
--
ALTER TABLE `absensi_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `absensi_type`
--
ALTER TABLE `absensi_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_allowance`
--
ALTER TABLE `employees_allowance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees_position`
--
ALTER TABLE `employees_position`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_position_salaries`
--
ALTER TABLE `employees_position_salaries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_tax`
--
ALTER TABLE `employees_tax`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_log`
--
ALTER TABLE `absensi_log`
  ADD CONSTRAINT `fk_created_by_user_id` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id_absensi_status_absensi_status_id` FOREIGN KEY (`id_absensi_status`) REFERENCES `absensi_status` (`id`),
  ADD CONSTRAINT `fk_id_absensi_type_absensi_type_id` FOREIGN KEY (`id_absensi_type`) REFERENCES `absensi_type` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_position_id_employees_position_id` FOREIGN KEY (`position_id`) REFERENCES `employees_position` (`id`);

--
-- Constraints for table `employees_position`
--
ALTER TABLE `employees_position`
  ADD CONSTRAINT `fk_position_salary_id_employees_position_salaries_id` FOREIGN KEY (`position_salary_id`) REFERENCES `employees_position_salaries` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_employee_id_employees_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
