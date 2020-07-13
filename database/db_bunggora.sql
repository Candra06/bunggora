-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2020 at 04:21 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bunggora`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_jurnal` int(11) DEFAULT NULL,
  `kehadiran` enum('sakit','ijin','alpha','hadir') DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_siswa`, `id_jurnal`, `kehadiran`, `keterangan`) VALUES
(1, 2, 6, 'hadir', 'hadir'),
(2, 2, 6, 'hadir', 'hadir'),
(3, 2, 6, 'hadir', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` enum('admin','siswa','guru','ortu') DEFAULT NULL,
  `status` enum('aktif','banned') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `level`, `status`) VALUES
(1, 'candrabiyu4@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(2, 'alfian@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 'aktif'),
(3, 'alfian_paint@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(4, 'putrasimdig59@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(32, 'candrabiyu4@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(33, 'fitria@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(34, 'rizalfa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 'aktif'),
(35, 'fitria1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 'aktif'),
(37, 'mark@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'ortu', 'aktif'),
(38, 'chenzwahyu@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(39, '182410101030@students.unej.ac.id', 'c4ca4238a0b923820dcc509a6f75849b', 'guru', 'aktif'),
(40, 'lut@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `detail_mengajar`
--

CREATE TABLE `detail_mengajar` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_mengajar`
--

INSERT INTO `detail_mengajar` (`id`, `id_mapel`, `id_guru`) VALUES
(1, 1, 4),
(2, 2, 1),
(3, 3, 33);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tugas`
--

CREATE TABLE `detail_tugas` (
  `id` int(11) NOT NULL,
  `id_tugas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL,
  `file_jawaban` varchar(45) DEFAULT NULL,
  `tanggal_submit` datetime DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` text,
  `status` enum('aktif','banned') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `id_akun`, `nip`, `nama`, `telepon`, `alamat`, `status`) VALUES
(1, 1, '182410101017', 'Abiyu Candra Adiansyah', '0087757630094', 'Blitar', 'aktif'),
(3, 3, '182410101019', 'Rizal Faqrul', '087757630094', 'Bondowoso', 'aktif'),
(4, 4, '182410101016', 'John Lennon', '08983368286', 'Banyuwangi', 'aktif'),
(33, 33, '182410101030', 'Fitria', '08983368286', 'Jember', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mengajar` int(11) NOT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_kelas`, `id_mengajar`, `hari`, `jam`) VALUES
(1, 2, 1, 'Senin', '09:00:00'),
(2, 2, 1, 'Selasa', '07:00:00'),
(3, 2, 3, 'Rabu', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `materi` varchar(70) NOT NULL,
  `absensi` enum('manual','otomatis') NOT NULL DEFAULT 'manual',
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `id_jadwal`, `tanggal`, `materi`, `absensi`, `keterangan`) VALUES
(6, 1, '2020-06-07 23:44:14', '182410101012_AbiyuCandra_OOP.pdf', 'manual', NULL),
(7, 1, '2020-06-07 23:45:33', 'db_komunitas.pdf', 'otomatis', 'Harap dibaca dan dikerjakan tugasnya');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(5) DEFAULT NULL,
  `tingkatan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `tingkatan`) VALUES
(1, 'Z', 7),
(2, 'B', 7),
(3, 'C', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `golongan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `golongan`) VALUES
(1, 'Matematika', 'muatan lokal'),
(2, 'Bahasa Indonesia', 'wajib'),
(3, 'Pendidikan Agama Islam', 'wajib'),
(4, 'Pendidikan Kewarga Negaraan', 'wajib'),
(5, 'Ilmu Pengetahuan Alam', 'wajib');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nama_ortu` varchar(20) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `status` enum('aktif','banned') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `id_akun`, `id_siswa`, `nama_ortu`, `telepon`, `status`) VALUES
(1, 1, 2, 'Rahmatillah', '089833686862', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `keterangan` text,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `id_siswa`, `keterangan`, `create_at`, `create_by`) VALUES
(1, 2, NULL, '2020-06-08 14:11:21', 3),
(2, 2, NULL, '2020-06-08 14:12:04', 3),
(3, 2, 'Testing', '2020-06-08 14:12:24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `alamat` text,
  `status` enum('aktif','banned') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `id_akun`, `nis`, `nama`, `id_kelas`, `telepon`, `alamat`, `status`) VALUES
(1, 34, '182410101015', 'Rizal Faqrul Febrianti', 2, '089833686862', 'Blitar', 'aktif'),
(2, 35, '182410101016', 'Fitria', 2, '085274298333', 'Jember', 'aktif'),
(3, 40, '1824101010156', 'Lutfi', 3, '085274298333', 'Bataan', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` longtext,
  `deadline` datetime DEFAULT NULL,
  `type_file` varchar(5) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `id_mapel`, `id_kelas`, `judul`, `deskripsi`, `deadline`, `type_file`, `create_at`, `create_by`) VALUES
(1, 1, 2, 'Testing judul', '<p>Kerjakan sesuai materi</p>', '2020-06-17 05:14:00', 'ppt', '2020-06-08 02:14:43', NULL),
(2, 1, 2, 'Tugas Limit dan Fungsi', '<p>Tugas limit Berfungsi nyman dan damai</p>', '2017-06-01 08:30:00', 'docx', '2020-06-08 10:40:36', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurnal` (`id_jurnal`,`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_mengajar`
--
ALTER TABLE `detail_mengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tugas` (`id_tugas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mengajar` (`id_mengajar`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `create_by` (`create_by`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `create_by` (`create_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `detail_mengajar`
--
ALTER TABLE `detail_mengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`id_jurnal`) REFERENCES `jurnal` (`id`);

--
-- Constraints for table `detail_mengajar`
--
ALTER TABLE `detail_mengajar`
  ADD CONSTRAINT `detail_mengajar_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`),
  ADD CONSTRAINT `detail_mengajar_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`);

--
-- Constraints for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD CONSTRAINT `detail_tugas_ibfk_1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id`),
  ADD CONSTRAINT `detail_tugas_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_mengajar`) REFERENCES `detail_mengajar` (`id`);

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`);

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `parents_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `tugas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `tugas_ibfk_3` FOREIGN KEY (`create_by`) REFERENCES `guru` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
