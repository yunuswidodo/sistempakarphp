-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2020 pada 19.55
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakarphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_pekerjaan`
--

CREATE TABLE `bidang_pekerjaan` (
  `id` int(11) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang_pekerjaan`
--

INSERT INTO `bidang_pekerjaan` (`id`, `nama_bidang`) VALUES
(1, 'Pemograman'),
(2, 'design '),
(3, 'Editing Vidio'),
(4, 'Perkantoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pekerjaan`
--

CREATE TABLE `daftar_pekerjaan` (
  `id` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `nama_daftar` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_pekerjaan`
--

INSERT INTO `daftar_pekerjaan` (`id`, `id_bidang`, `nama_daftar`, `jenis`) VALUES
(1, 1, 'SIB WEB', 'rendah'),
(3, 2, '3D Desain', 'tinggi'),
(4, 1, 'IOT', 'sedang'),
(5, 1, 'Big Data / Data Science', 'tinggi'),
(6, 2, '2D Desain', 'sedang'),
(7, 3, 'Editing Vidio', 'tinggi'),
(8, 4, 'pengetikan', 'rendah'),
(9, 4, 'akuntansi', 'rendah'),
(11, 1, 'SIB Mobile', 'tinggi'),
(12, 4, 'Persuratan (mailing)', 'rendah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produck`
--

CREATE TABLE `produck` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `prosesor` varchar(100) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `ssd` varchar(10) NOT NULL,
  `hdd` varchar(10) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produck`
--

INSERT INTO `produck` (`id`, `branch`, `model`, `prosesor`, `ram`, `memory`, `ssd`, `hdd`, `harga`, `golongan`) VALUES
(1, 'hp', '250 g5-y1s88pa\r\n', 'Intel Celeron Dual Core\r\n', '4', '500\r\n', 'no', 'yes', 'Rp.3.955.515\r\n', 'rendah'),
(3, 'Hp\r\n', '250 g6\r\n', 'Intel Celeron Dual Core\r\n', '4', '500\r\n', 'no', 'yes', 'Rp.4.022.258\r\n', 'rendah'),
(5, 'Lenovo\r\n', '320-15isk \r\n', 'Intel Core i3\r\n', '4', '1TB\r\n', 'no', 'yes', 'Rp.5.003.775\r\n', 'rendah'),
(6, 'Acer\r\n', 'Aspire 3\r\n', 'Intel Pentium Quad Core\r\n', '4', '1 TB \r\n', 'no', 'yes', 'Rp.5.936.020\r\n', 'rendah'),
(7, 'Acer\r\n', 'Aspire 5 a515-51g\r\n', 'Intel Core i5\r\n', '8', '1 TB\r\n', 'no', 'yes', 'Rp.8.046.479\r\n', 'sedang'),
(8, 'Acer\r\n', 'Aspire a315-51\r\n', 'Intel Core i3 2.7 GHz\r\n', '4', '500\r\n', 'no', 'yes', 'Rp.6.085.211\r\n', 'rendah'),
(9, 'Acer\r\n', 'Aspire a515-51g\r\n', 'Intel Core i5 8250U 1.6 GHz\r\n', '8', '1 TB\r\n', 'no', 'yes', 'Rp.10.305.932\r\n', 'sedang'),
(10, 'Hp\r\n', '14q-Cs0005TU 14\r\n', 'Intel Core i3 2.3 GHz\r\n', '4', '1 TB\r\n', 'no', 'yes', 'Rp.5.592.686\r\n', 'rendah'),
(11, 'Acer\r\n', 'Aspire e5-575\r\n', 'Core  i3  2.0GHz\r\n', '4', '1TB \r\n', 'no', 'yes', 'Rp.5.298.230\r\n', 'rendah'),
(12, 'Acer\r\n', 'Aspire es1-531\r\n', 'Intel Pentium quad-core processor N3700 1.60 GHz\r\n', '4', '500\r\n', 'no', 'yes', 'Rp.4.318.480\r\n', 'rendah'),
(13, 'Acer\r\n', 'Aspire es1-533\r\n', 'Intel Pentium N4200 Quad Core 1.10\r\n', '4', '1 TB\r\n', 'no', 'yes', 'Rp.5.496.301\r\n', 'rendah'),
(14, 'Acer\r\n', 'Aspire es1-572\r\n', 'Intel Core i3-6006U 2.30GHz\r\n', '4', '1 TB\r\n', 'no', 'yes', 'Rp.5.103.694\r\n', 'rendah'),
(15, 'Hp\r\n', 'Elitebook 850\r\n', 'Intel Core i5-7200U\r\n', '8', '256\r\n', 'yes', 'no', 'Rp.36.268.442\r\n', 'tinggi'),
(16, 'Acer\r\n', 'FX553VD-DM1031\r\n', 'Intel Core i5 2.5 GHz\r\n', '8', '1TB \r\n', 'no', 'yes', 'Rp.14.328.190\r\n', 'sedang'),
(17, 'Msi\r\n\r\n', 'Ge73vr 7RF', 'Intel Core i7 2.8GHz\r\n', '16', '156 + 1 TB\r\n', 'yes', 'yes', 'Rp.36.316.143\r\n', 'tinggi'),
(18, 'Asus\r\n', 'Gl553ve-fy068t\r\n', 'Intel Core i7 7700HQ 3.8Ghz\r\n', '8', '1TB \r\n', 'no', 'yes', 'Rp.21.787.723\r\n', 'tinggi'),
(19, 'Msi\r\n', 'Gl62m 7rdx\r\n', 'Intel Core i7 7700HQ \r\n', '8', '1 TB\r\n', 'no ', 'yes', 'Rp.14.329.957\r\n', 'tinggi'),
(20, 'Acer\r\n', 'Gv62m 7rd\r\n', 'Intel Core i7 7700HQ\r\n', '8', '1 TB\r\n', 'no', 'yes', 'Rp.14.329.957\r\n', 'tinggi'),
(23, 'Acer\r\n', 'Legion y720-15ikb\r\n', 'Intel Core i5 7300HQ 2.5 GHz\r\n', '8', '1 TB +  128\r\n', 'yes', 'yes', 'Rp.14.771.836\r\n', 'tinggi'),
(24, 'baru', 'hp baru', 'core 3', '3', '2', 'yes', 'no', '5000', 'rendah'),
(25, 'tambah baru 2', 'yauan', 'core i5', '9', '100', 'yes', 'no', '50820202a', 'rendah'),
(26, 'baru edit', 'hp baru', 'core 3', '3', '2', ' yes', 'no', '5000', 'rendah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_pekerjaan`
--
ALTER TABLE `bidang_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bidag` (`id_bidang`),
  ADD KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `produck`
--
ALTER TABLE `produck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `golongan` (`golongan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_pekerjaan`
--
ALTER TABLE `bidang_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produck`
--
ALTER TABLE `produck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  ADD CONSTRAINT `daftar_pekerjaan_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produck`
--
ALTER TABLE `produck`
  ADD CONSTRAINT `produck_ibfk_1` FOREIGN KEY (`golongan`) REFERENCES `daftar_pekerjaan` (`jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
