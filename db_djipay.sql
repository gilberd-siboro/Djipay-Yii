-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230604.23c536099d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 07:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

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
  `id` int(11) NOT NULL,
  `id_absensi_type` int(11) NOT NULL,
  `id_absensi_status` int(11) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `day` varchar(255) NOT NULL,
  `waktu_absensi` time NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `bukti_hadir` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_overtime`
--

CREATE TABLE `absensi_overtime` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `overtime_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `total_hours` decimal(5,2) NOT NULL,
  `overtime_reason` text NOT NULL,
  `employee_signature` tinyint(1) NOT NULL,
  `supervisor_signature` tinyint(1) NOT NULL,
  `manager_signature` tinyint(1) NOT NULL,
  `hrd_signature` tinyint(1) NOT NULL,
  `approval_date` date NOT NULL,
  `overtime_tasks` text NOT NULL,
  `overtime_rate` decimal(10,2) NOT NULL,
  `total_compensation` decimal(10,2) NOT NULL,
  `additional_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_status`
--

CREATE TABLE `absensi_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_type`
--

CREATE TABLE `absensi_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `position_id` int(11) NOT NULL,
  `type_karyawan` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `tunjangan_makan` decimal(15,2) NOT NULL,
  `tunjangan_jabatan` decimal(15,2) NOT NULL,
  `tunjangan_keluarga` decimal(15,2) NOT NULL,
  `tunjangan_transport` decimal(15,2) NOT NULL,
  `tunjangan_kehadiran` decimal(15,2) NOT NULL,
  `bpjs_kesehatan` decimal(15,2) NOT NULL,
  `bpjs_ketenagakerjaan` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees_position`
--

CREATE TABLE `employees_position` (
  `id` int(11) NOT NULL,
  `position_salary_id` int(11) NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `gaji_pokok` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_position_salaries`
--

INSERT INTO `employees_position_salaries` (`id`, `gaji_pokok`, `created_at`, `updated_at`) VALUES
(1, 1000000.00, '2024-07-10 07:39:59', NULL),
(2, 2000000.00, '2024-07-10 07:40:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees_tax`
--

CREATE TABLE `employees_tax` (
  `id` int(11) NOT NULL,
  `percentage` decimal(10,3) NOT NULL,
  `masa_berlaku` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `persentase_pajak_pph_21` decimal(15,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `verification_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_overtime`
--
ALTER TABLE `absensi_overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_status`
--
ALTER TABLE `absensi_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_type`
--
ALTER TABLE `absensi_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_allowance`
--
ALTER TABLE `employees_allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees_position`
--
ALTER TABLE `employees_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_position_salaries`
--
ALTER TABLE `employees_position_salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees_tax`
--
ALTER TABLE `employees_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
