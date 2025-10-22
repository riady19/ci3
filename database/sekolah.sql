-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Okt 2025 pada 15.36
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nis` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` text NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `waktu_kehadiran` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nis`, `nama`, `kelas`, `keterangan`, `waktu_kehadiran`) VALUES
(101, '123455', 'RUDI', 'X', 'hadir', '2024-12-23 16:56:27'),
(102, '34566', 'SINTA', 'XI', 'hadir', '2024-12-23 16:56:41'),
(103, '34566', 'RUDI', 'XI', 'sakit', '2024-12-23 16:57:01'),
(104, '12345', 'SUDIRO', 'XI', 'hadir', '2025-01-02 13:41:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bid_study` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `bid_study`, `foto`) VALUES
(21, 'Sundari', 'BATAM', '1967-10-01', 'MTK', 'avatar2.jpeg'),
(22, 'RIADI', 'KARIMUN', '1983-04-19', 'FISIKA', 'avatar5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `id` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `bid_study` varchar(50) NOT NULL,
  `kode_study` text NOT NULL,
  `kelas` text NOT NULL,
  `semester` varchar(100) NOT NULL,
  `nama_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`id`, `hari`, `date`, `bid_study`, `kode_study`, `kelas`, `semester`, `nama_guru`) VALUES
(24, 'SABTU', '2024-12-21', 'KESENIAN', 'KS12', 'XII', 'Ganjil', 'SUPIAN'),
(25, 'SENIN', '2024-12-23', 'MTK', 'MT13', 'XI', 'Ganjil', 'IDAIR'),
(47, 'JUMAT', '2025-01-03', 'FISIKA', 'F12', 'X', 'Ganjil', 'RIADI'),
(54, 'JUMAT', '2025-01-03', 'Penjas', 'B12', 'X', 'Ganjil', 'SUPIAN'),
(55, 'SABTU', '2025-01-04', 'KESNIAN', 'KES13', 'XI', 'GANJIL', 'RIADI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Yadi', 'yadi@gmail.com', 'Testing Pesan di CI3'),
(2, 'Doni', 'doni@yahoo.com', 'TESTING MOBLOREKAJKA'),
(3, 'SUNDARI', 'sun@gmail.com', 'karimun aja yang adil mah'),
(4, 'SATRIA', 'sat@gmail.com', 'TESTING AMBASADOR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pasword` varchar(100) NOT NULL,
  `level` enum('Guru','Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `pasword`, `level`) VALUES
(27, 'admin', 'admin@gmail.com', 'admin', 'Guru'),
(34, 'riadi', 'riadi@gmail.com', '123', 'Siswa'),
(35, 'Dita ', 'dita@gmail.com', '1234', 'Siswa'),
(37, 'aisyah', 'aisyah@gmail.com', '123', 'Guru'),
(42, 'Zasmi', 'zasmi@gmail.com', '1234', 'Guru'),
(43, 'Zasmi', 'zasmi@gmail.com', '1234', 'Guru'),
(44, 'dui', 'dui@gmail.com', '1234', 'Guru'),
(45, 'dui', 'dui@gmail.com', '123', 'Siswa'),
(46, 'rusdiansah', 'rusdi12@gmail.com', '1234', 'Siswa'),
(47, 'dudi', 'wongcuilk@gmail.com', '1234', 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `hobi` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `alamat`, `kelas`, `hobi`, `telepon`, `agama`, `foto`) VALUES
(259, '9798989', 'SUARDI', 'BATAM', 'IX', 'OLAH RAGA', '98988', 'ISlam', 'avatar3.jpeg'),
(262, '9798989', 'RABU', 'PINANG', 'IX', 'MAKAN', '98988', 'ISlam', 'avatar2.jpeg'),
(267, '9798989', 'JUMAT', 'PINANG', 'IX', 'MAKAN', '98988', 'ISlam', 'avatar5.png'),
(269, '7989787', 'CINTA PUTRI', 'NATUNA', 'IV', 'TRAVEL', '98090909', 'KRISTEN', 'avatar4.jpeg'),
(270, '9797989', 'SIDIA', 'LINGGA', 'IX', 'TRAVEL', '7978909', 'ISLAM', 'default-user-icon-8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `aktif`) VALUES
(1, 'siapa nama presiden indonesia pertama?', 'soekarno', 'soeharto', 'jokowi', 'prabowo', 'a', 'Y'),
(2, 'NKRI adalah singkatan dari?', 'NEGARA KEDUAAN REPUBLIK INDONESIA', 'NEGARA KEDAULATAN REPUBLIK INDONESIA', 'NEGARA KESATUAN REPUBLIK INDONESIA', 'NEGARA KEDUTAAN REPUBLIK INDONESIA', 'c', 'Y'),
(4, 'siapa presiden RI', 'jokoqi', 'prabowo', 'mega', 'sby', 'b', 'Y'),
(5, 'KKDJAKHFAHk', 'HK', 'HJ', 'HGA', 'HJH', 'b', 'Y'),
(11, ' KAPAN INDONESIA MERDEKA ?', '18 AGUSTUS 1945', '17 AGUSTUS 1944', '17 AGUSTUS 1945', '16 AGUSTUS 1945', 'c', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'RIADI', 'yadi@gmail.com', 'avatar3.jpeg', '$2y$10$nyjHOfQbkiSii2EuXHJKhuJoF.xQPw8ODDIl30nDZLdZzi9aj6G7G', 2, 1, 1738399128),
(11, 'YUDIA', 'yudia@gmail.com', 'default.jpg', '$2y$10$lLr7fRzwbg6WaZU6FBz8kuiHs/LKoAmvnY1YNh9xr1DBAp81xXAZC', 2, 1, 1746153962),
(13, 'diadi', 'dia@gmail.com', 'avarta13.jpeg', '$2y$10$HxDZBZ2a8gjaw3s3RMgEieDUV5IoOSqlVBQ1mCB58mwMC830whGzy', 1, 1, 1746875297),
(14, 'riadi', 'riadi@gmail.com', 'default.jpg', '$2y$10$/b86Ef3PPxoYfrjO2acklu7SnXkZ5jB1q.WVpn8PXS3lH0CzTFpty', 2, 1, 1760541044),
(15, 'dodi', 'dodi12@gmail.com', 'avatar22.jpeg', '$2y$10$jO3VrBk2pLicMMWR0uUoU.vQxQeEn74eeeocifXnMp39K.4V335tS', 2, 1, 1760582447),
(16, 'paol', 'paol@gmail.com', 'default.jpg', '$2y$10$nfW8GLAkICTfOlTtqqxuFedGInWOz6MXYRt2SuqTOLny38bR.STRS', 2, 1, 1760871872);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(4, 2, 'Data Siswa', 'adm_siswa', 'fas fa-fw fa-folder', 1),
(5, 1, 'Adm_siswa', 'siswa', 'fas fa-fw fa-folder', 1),
(6, 2, 'Edit Profile', 'edit_profile', 'fas fa-fw fa-edit', 1),
(7, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'pesan', 'pesan', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid_study` (`bid_study`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_mapel` (`bid_study`),
  ADD KEY `nama_guru` (`kelas`(768));

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
